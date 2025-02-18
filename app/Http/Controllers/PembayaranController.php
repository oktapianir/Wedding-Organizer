<?php

namespace App\Http\Controllers;
use App\Models\Histori;
use App\Models\Dokumentasi;
use App\Models\Dekorasi;
use App\Models\Hiburan;

use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB; // Import DB facade

class PembayaranController extends Controller
{
    public function index()
    {
        return view('home.invoice');
    }
    
    // public function indexAdmin()
    // {
    //     $pembayarans = Pembayaran::with('pemesanan')->paginate(10);
        
    //     return view('admin.pembayaran');
    // }
    public function indexAdmin()
    {
        $pembayarans = Pembayaran::with('pemesanan')->paginate(10);
        
        // Log the value of $pembayarans
        \Log::info($pembayarans); // Check storage/logs/laravel.log
        
        return view('admin.pembayaran', compact('pembayarans'));
    }

    //     public function show($id_pemesanan)
    // {
    //     $pemesanan = Pemesanan::find($id_pemesanan);
    //     dd($pemesanan);
    //     return view('home.pembayaran', compact('pemesanan'));
    // }
    public function show($pemesanan_id)
    {
        $pemesanan = Pemesanan::find($pemesanan_id);
        
        // Pastikan Pemesanan ditemukan
        if (!$pemesanan) {
            return redirect()->route('home')->with('error_message', 'Pemesanan tidak ditemukan!');
        }

        return view('home.pembayaran', compact('pemesanan'));
    }



// public function store(Request $request)
// {
//     // Debugging untuk cek request
//     dd($request->all());

//     // Validasi input
//     $validated = $request->validate([
//         'jumlah_pembayaran' => 'required|numeric',
//         'bukti_pembayaran' => 'required|file|mimes:jpg,png,pdf|max:2048',
//         'pemesanan_id' => 'required|exists:pemesanans,id_pemesanan',
//     ]);
    
//     // Simpan file bukti pembayaran
//     $buktiPembayaranPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
    
//     // Buat entri baru pada model Pembayaran
//     $pembayaran = Pembayaran::create([
//         'jumlah_pembayaran' => $validated['jumlah_pembayaran'],
//         'bukti_pembayaran' => $buktiPembayaranPath,
//         'pemesanan_id' => $validated['pemesanan_id'],
//     ]);

//     // Jika penyimpanan berhasil, redirect dengan pesan sukses
//     return redirect()->route('home.invoice')->with('success_message', 'Pembayaran berhasil disimpan.');
// }

    public function create($pemesanan_id)
    {
        $pemesanan = Pemesanan::find($pemesanan_id);
        if (!$pemesanan) {
            return redirect()->back()
                ->with('error', 'Pemesanan dengan ID ' . $pemesanan_id . ' tidak ditemukan');
        }
        return view('pembayaran.create', compact('pemesanan_id'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validasi tanpa status_pemesanan karena kita set status ini di controller
            $validatedData = $request->validate([
                'pemesanan_id' => 'required|exists:pemesanans,id_pemesanan',
                'jumlah_pembayaran' => 'required|numeric|min:0',
                'bukti_pembayaran' => 'required|image|max:2048',
            ]);

            // Proses upload file bukti pembayaran
            if ($request->hasFile('bukti_pembayaran')) {
                $file = $request->file('bukti_pembayaran');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('bukti_pembayaran', $filename, 'public');
                $validatedData['bukti_pembayaran'] = $path;
            }
              // Tambahkan status pembayaran default 'belum lunas'
            $validatedData['status_pembayaran'] = 'belum lunas';

            // Simpan pembayaran
            $pembayaran = Pembayaran::create($validatedData);

            // Tetapkan status_pemesanan secara otomatis di controller
            $pemesanan = Pemesanan::find($validatedData['pemesanan_id']);
            $pemesanan->status_pemesanan = 'confirmed'; // Tetapkan status 'confirmed'
            $pemesanan->save();

            // Simpan histori
            Histori::create([
                'id_pemesanan' => $pemesanan->id_pemesanan,
                'id_customer' => $pemesanan->id_customer,
                'tanggal_pemesanan' => now(),
                'status_pemesanan' => 'confirmed', // Status yang sama
            ]);

            DB::commit();

            return redirect()->route('home.testimoni');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error in payment processing: ' . $e->getMessage(), [
                'exception' => $e,
                'request_data' => $request->all(),
            ]);
            return back()->with('error', 'Terjadi kesalahan saat memproses pembayaran: ' . $e->getMessage());
        }
    }

    public function pembayaran($id_pemesanan)
    {
        $pemesanan = Pemesanan::where('id_pemesanan', $id_pemesanan)->firstOrFail();
        
        $dekorasi = $pemesanan->id_dekorasi ? Dekorasi::find($pemesanan->id_dekorasi) : null;
        $dokumentasi = $pemesanan->id_dokumentasi ? Dokumentasi::find($pemesanan->id_dokumentasi) : null;
        $hiburan = $pemesanan->id_hiburan ? Hiburan::find($pemesanan->id_hiburan) : null;
        $undangan = $pemesanan->id_undangan ? Undangan::find($pemesanan->id_undangan) : null;
        $mainCourse = $pemesanan->id_main_course ? MainCourse::find($pemesanan->id_main_course) : null;

        return view('home.invoice', compact('pemesanan', 'dekorasi', 'dokumentasi', 'hiburan', 'undangan', 'mainCourse'));
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'jumlah_pembayaran' => 'required|numeric|min:1',
    //         'bukti_pembayaran' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    //         'pemesanan_id' => 'required|exists:pemesanans,id_pemesanan',
    //     ]);
    
    //     $buktiPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
    
    //     Pembayaran::create([
    //         'jumlah_pembayaran' => $validated['jumlah_pembayaran'],
    //         'bukti_pembayaran' => $buktiPath,
    //         'pemesanan_id' => $validated['pemesanan_id'],
    //         'id_pembayaran' => $this->generatePembayaranId(),
    //     ]);
    
    //     return redirect()->route('home.invoice')->with('success_message', 'Pembayaran berhasil diunggah!');
    // }

    private function generatePembayaranId()
    {
        $lastPayment = Pembayaran::orderBy('created_at', 'desc')->first();
        if (!$lastPayment) {
            return 'PYM0001';
        }

        $lastIdNumber = (int) substr($lastPayment->id_pembayaran, 3);
        return 'PYM' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
    }

    // public function ringkasanPemesanan($id) {
    //     // Ambil data pemesanan berdasarkan ID
    //     $pemesanans = Pemesanan::findOrFail($id);

    //     // Kirim data ke view
    //     return view('home.pembayaran', compact('pemesanans'));
    // }

//     public function uploadBuktiPembayaran(Request $request)
// {
//     // Validasi hanya kolom yang berkaitan dengan file bukti pembayaran
//     $request->validate([
//         'pemesanan_id' => 'required|string',
//         'bukti_pembayaran' => 'required|file|image|max:2048',
//     ]);

//     // Proses upload file
//     if ($request->hasFile('bukti_pembayaran')) {
//         // Simpan file dan ambil path untuk dimasukkan ke database
//         $filePath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
//     } else {
//         return back()->withErrors(['bukti_pembayaran' => 'Bukti pembayaran tidak ditemukan.']);
//     }

//     // Debugging untuk memastikan path file tersimpan
//     dd($filePath); // Setelah dicek, ini bisa dihapus

//     // Menyimpan data pembayaran ke database (sementara hanya pemesanan_id dan bukti_pembayaran)
//     Pembayaran::create([
//         'id_pembayaran' => 'PYM' . str_pad(Pembayaran::count() + 1, 4, '0', STR_PAD_LEFT),
//         'pemesanan_id' => $request->input('pemesanan_id'),
//         'bukti_pembayaran' => $filePath,
//     ]);

//     return redirect()->back()->with('success', 'Bukti pembayaran berhasil diunggah.');
// }

    public function uploadBuktiPembayaran(Request $request, $id_pemesanan)
    {
        // Validasi file yang diunggah
        $validatedData = $request->validate([
            'bukti_pembayaran' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        // Temukan pemesanan berdasarkan ID
        $pemesanan = Pemesanan::findOrFail($id_pemesanan);

        // Periksa jika status pemesanan sudah confirmed
        if ($pemesanan->status_pemesanan !== 'confirmed') {
            return redirect()->route('home')->with('error', 'Pemesanan belum dikonfirmasi.');
        }

        // Simpan file bukti pembayaran
        $path = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

        // Simpan data pembayaran ke tabel pembayaran
        Pembayaran::create([
            'id_pembayaran' => 'PAY' . strtoupper(uniqid()), // ID pembayaran unik
            'pemesanan_id' => $pemesanan->id_pemesanan,
            'jumlah_pembayaran' => $request->input('jumlah_pembayaran'), // Misalnya ada input jumlah pembayaran
            'bukti_pembayaran' => $path, // Menyimpan path file
        ]);

        // Redirect setelah berhasil upload
        return redirect()->route('show.pembayaran', ['id_pemesanan' => $id_pemesanan])
            ->with('success', 'Bukti pembayaran berhasil diunggah!');
    }

    public function filterPembayaran(Request $request)
    {
        // Menangani filter berdasarkan status pembayaran
        $status = $request->get('status');
        
        // Query untuk mengambil data pembayaran
        $query = Pembayaran::query();
    
        // Jika ada status yang dipilih, tambahkan kondisi filter ke query
        if ($status) {
            $query->where('status_pembayaran', $status);
        }
    
        // Ambil data pembayaran sesuai dengan filter
        $pembayarans = $query->paginate(10);  // Misalnya 10 data per halaman
        
        return view('admin.pembayaran', compact('pembayarans'));
    }

    public function updateStatus(Request $request, $id_pembayaran)
    {
        try {
            // Validasi input
            $request->validate([
                'status_pembayaran' => 'required|in:lunas,belum lunas', // Validasi status
            ]);

            // Temukan pembayaran berdasarkan ID
            $pembayaran = Pembayaran::findOrFail($id_pembayaran);

            // Update status pembayaran
            $pembayaran->status_pembayaran = $request->status_pembayaran;
            $pembayaran->save();

            // Redirect kembali dengan pesan sukses
            return redirect()->route('admin.pembayaran')->with('success', 'Status pembayaran berhasil diperbarui!');
        } catch (\Exception $e) {
            // Tangani kesalahan
            return back()->with('error', 'Terjadi kesalahan saat memperbarui status pembayaran.');
        }
    }

    
    



}
