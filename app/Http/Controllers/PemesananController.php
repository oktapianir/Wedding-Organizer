<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Dekorasi;
use App\Models\Histori;
use App\Models\PemesananDekorasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class PemesananController extends Controller
{
    public function index()
    {
        // Kirim data ke view
        $id_customer = Auth::user()->id;

        // Ambil semua pemesanan milik customer ini
        $pemesanans = Pemesanan::where('id_customer', $id_customer)
            ->with(['dekorasi']) // Menyertakan relasi dekorasi
            ->get();

        // Kirim data ke view
        return view('home.pemesanan', compact('pemesanans'));
    }  
    // public function index(Request $request)
    // {
    //     // Ambil input pencarian dari request
    //     $search = $request->input('search');
        
    //     // Ambil data pemesanan milik customer yang sedang login dengan pencarian (jika ada) dan paginate
    //     $id_customer = Auth::user()->id;

    //     $pemesanans = Pemesanan::where('id_customer', $id_customer)
    //         ->when($search, function ($query, $search) {
    //             // Pencarian berdasarkan ID Pemesanan atau ID Customer
    //             $query->where('id_pemesanan', 'like', '%' . $search . '%')
    //                 ->orWhere('id_customer', 'like', '%' . $search . '%');
    //         })
    //         ->with(['dekorasi']) // Menyertakan relasi dekorasi
    //         ->paginate(5); // Pagination dengan 5 data per halaman

    //     // Kirim data ke view
    //     return view('home.pemesanan', compact('pemesanans', 'search'));
    // }
    

    // public function bookingIndex()
    // {
    //     $pemesanans = Pemesanan::with('dekorasi')->get(); // Dapatkan semua pemesanan
        
    //     return view('admin.booking', compact('pemesanans'));
    // }

    public function bookingIndex()
{
    $pemesanans = Pemesanan::with('dekorasi')->paginate(10); // Dapatkan semua pemesanan dengan paginasi 10 per halaman
    
    return view('admin.booking', compact('pemesanans'));
}



    public function create(Request $request)
    {
        // Ambil semua pemesanan yang ada beserta relasi dengan dekorasi
        $pemesanans = Pemesanan::with('dekorasi')->get();
        
        // Generate ID pemesanan baru
        $id_pemesanan = $this->generateIdPemesanan();

        // Ambil semua data dekorasi
        $dekorasis = Dekorasi::all(); 

        // Ambil dekorasi yang dipilih berdasarkan ID dari request (jika ada)
        $id_dekorasi = $request->query('id_dekorasi'); // Menggunakan query parameter untuk mendapatkan ID dekorasi
        $dekorasi = Dekorasi::find($id_dekorasi); // Cari dekorasi berdasarkan ID

        // Cek apakah dekorasi ditemukan, jika tidak arahkan kembali dengan pesan error
        if ($id_dekorasi && !$dekorasi) {
            return redirect()->back()->withErrors(['message' => 'Dekorasi tidak ditemukan!']);
        }

        // Kirimkan data ke view
        return view('home.pemesanan', compact('id_pemesanan', 'pemesanans', 'dekorasi', 'dekorasis')); 
    }




//yang betul
// public function store(Request $request)
// {
//     try {
//         // Mulai transaksi
//         DB::beginTransaction();

//         // Validasi data yang diterima
//         $validatedData = $request->validate([
//             'id_pemesanan' => 'required|unique:pemesanans,id_pemesanan',
//             'id_customer' => 'required',
//             'tanggal_pemesanan' => 'required|date',
//             'status_pemesanan' => 'required',
//         ]);

//         // Simpan data pemesanan ke tabel pemesanans
//         $pemesanan = Pemesanan::create($validatedData);

//         // Jika status pemesanan adalah confirmed, arahkan ke halaman pembayaran
//         if ($pemesanan->status_pemesanan === 'confirmed') {
//             return redirect()->route('home.pembayaran', ['id_pemesanan' => $pemesanan->id_pemesanan])
//                 ->with('success', 'Pemesanan berhasil dibuat dan siap untuk upload bukti pembayaran!');
//         }

//         // Log pemesanan berhasil disimpan
//         Log::info('Pemesanan berhasil dibuat:', $pemesanan->toArray());

//         // Simpan data histori ke tabel historis
//         $histori = Histori::create([
//             'id_pemesanan' => $pemesanan->id_pemesanan,
//             'id_customer' => $validatedData['id_customer'],
//             'tanggal_pemesanan' => $validatedData['tanggal_pemesanan'],
//             'status_pemesanan' => $validatedData['status_pemesanan'],
//         ]);

//         // Komit transaksi jika semua berhasil
//         DB::commit();

//         // Redirect setelah sukses
//         return redirect()->route('home.pembayaran')->with('success', 'Pemesanan berhasil dibuat!');
//     } catch (\Exception $e) {
//         // Rollback transaksi jika terjadi error
//         DB::rollBack();

//         // Log error ke file log
//         Log::error('Error dalam proses store pemesanan: ' . $e->getMessage());

//         // Simpan error ke tabel error_logs
//         ErrorLog::create([
//             'message' => $e->getMessage(),
//             'file' => $e->getFile(),
//             'line' => $e->getLine(),
//         ]);

//         // Tampilkan pesan error ke pengguna
//         return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
//     }
// }

//ini juga benar
public function store(Request $request)
{
    try {
        // Mulai transaksi
        DB::beginTransaction();

        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_pemesanan' => 'required|unique:pemesanans,id_pemesanan',
            'id_customer' => 'required',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required',
            'dekorasi' => 'required|array', 
            'dekorasi.*' => 'exists:dekorasis,id_dekorasi' 
        ]);

        // Simpan data pemesanan ke tabel pemesanans
        $pemesanan = Pemesanan::create($validatedData);

        // Menyimpan data ke tabel pivot pemesanan_dekorasi (misalnya harga dekorasi dari item yang dipesan)
        foreach ($validatedData['dekorasi'] as $id_dekorasi) {
            $dekorasi = Dekorasi::find($id_dekorasi);
            $pemesanan->dekorasi()->attach($dekorasi->id_dekorasi, ['harga_dekorasi' => $dekorasi->harga_dekorasi]);
        }

        // Jika status pemesanan adalah confirmed, arahkan ke halaman pembayaran
        if ($pemesanan->status_pemesanan === 'confirmed') {
            return redirect()->route('home.pembayaran', ['id_pemesanan' => $pemesanan->id_pemesanan])
                ->with('success', 'Pemesanan berhasil dibuat dan siap untuk upload bukti pembayaran!');
        }

        // Log pemesanan berhasil disimpan
        Log::info('Pemesanan berhasil dibuat:', $pemesanan->toArray());

        // Simpan data histori ke tabel historis
        $histori = Histori::create([
            'id_pemesanan' => $pemesanan->id_pemesanan,
            'id_customer' => $validatedData['id_customer'],
            'tanggal_pemesanan' => $validatedData['tanggal_pemesanan'],
            'status_pemesanan' => $validatedData['status_pemesanan'],
        ]);

        // Komit transaksi jika semua berhasil
        DB::commit();

        // Redirect setelah sukses
        return redirect()->route('home.pembayaran')->with('success', 'Pemesanan berhasil dibuat!');
    } catch (\Exception $e) {
        // Rollback transaksi jika terjadi error
        DB::rollBack();

        // Log error ke file log
        Log::error('Error dalam proses store pemesanan: ' . $e->getMessage());

        // Simpan error ke tabel error_logs
        ErrorLog::create([
            'message' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ]);

        // Tampilkan pesan error ke pengguna
        return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}


// public function store(Request $request)
// {
//     try {
//         // Debug log untuk melihat data yang diterima
//         \Log::info('Request Data:', $request->all());
        
//         // Enable Query Log
//         \DB::enableQueryLog();

//         // Mulai transaksi
//         DB::beginTransaction();

//         // Validasi data input
//         $validatedData = $request->validate([
//             'id_pemesanan' => 'required|unique:pemesanans,id_pemesanan',
//             'id_customer' => 'required',
//             'tanggal_pemesanan' => 'required|date',
//             'status_pemesanan' => 'required',
//             'dekorasi' => 'nullable|array',
//             'dekorasi.*' => 'exists:dekorasis,id_dekorasi',
//             'hiburan' => 'nullable|array',
//             'hiburan.*' => 'exists:hiburans,id_hiburan',
//             'dokumentasi' => 'nullable|array',
//             'dokumentasi.*' => 'exists:dokumentasis,id_dokumentasi',
//             'undangan' => 'nullable|array',
//             'undangan.*' => 'exists:undangans,id_undangan',
//         ]);

//         \Log::info('Validated Data:', $validatedData);

//         // Simpan data utama ke tabel 'pemesanans'
//         $pemesanan = Pemesanan::create([
//             'id_pemesanan' => $validatedData['id_pemesanan'],
//             'id_customer' => $validatedData['id_customer'],
//             'tanggal_pemesanan' => $validatedData['tanggal_pemesanan'],
//             'status_pemesanan' => $validatedData['status_pemesanan'],
//         ]);

//         // Simpan dekorasi ke tabel pivot
//         if (isset($validatedData['dekorasi']) && is_array($validatedData['dekorasi'])) {
//             foreach ($validatedData['dekorasi'] as $id_dekorasi) {
//                 try {
//                     $dekorasi = Dekorasi::findOrFail($id_dekorasi);
                    
//                     // Pastikan id_pemesanan disesuaikan dengan ID yang baru dibuat
//                     $result = DB::table('pemesanan_dekorasis')->insert([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_dekorasi' => $id_dekorasi,
//                         'harga_dekorasi' => 500000, // Ganti dengan harga dari tabel Dekorasi jika diperlukan
//                         'created_at' => now(),
//                         'updated_at' => now(),
//                     ]);
                    
//                     \Log::info('Insert Dekorasi Result:', [
//                         'success' => $result,
//                         'id_dekorasi' => $id_dekorasi,
//                         'id_pemesanan' => $pemesanan->id_pemesanan
//                     ]);
//                 } catch (\Exception $e) {
//                     \Log::error('Error saving dekorasi:', [
//                         'id_dekorasi' => $id_dekorasi,
//                         'error' => $e->getMessage()
//                     ]);
//                 }
//             }
//         }

//         // Simpan hiburan ke tabel pivot
//         if (isset($validatedData['hiburan']) && is_array($validatedData['hiburan'])) {
//             foreach ($validatedData['hiburan'] as $id_hiburan) {
//                 try {
//                     $hiburan = Hiburan::findOrFail($id_hiburan);
                    
//                     $result = DB::table('pemesanan_hiburans')->insert([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_hiburan' => $id_hiburan,
//                         'harga_hiburan' => $hiburan->harga_hiburan,
//                         'created_at' => now(),
//                         'updated_at' => now(),
//                     ]);
                    
//                     \Log::info('Insert Hiburan Result:', [
//                         'success' => $result,
//                         'id_hiburan' => $id_hiburan,
//                         'id_pemesanan' => $pemesanan->id_pemesanan
//                     ]);
//                 } catch (\Exception $e) {
//                     \Log::error('Error saving hiburan:', [
//                         'id_hiburan' => $id_hiburan,
//                         'error' => $e->getMessage()
//                     ]);
//                 }
//             }
//         }

//         // Simpan dokumentasi ke tabel pivot
//         if (isset($validatedData['dokumentasi']) && is_array($validatedData['dokumentasi'])) {
//             foreach ($validatedData['dokumentasi'] as $id_dokumentasi) {
//                 try {
//                     $dokumentasi = Dokumentasi::findOrFail($id_dokumentasi);
                    
//                     $result = DB::table('pemesanan_dokumentasis')->insert([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_dokumentasi' => $id_dokumentasi,
//                         'harga_dokumentasi' => $dokumentasi->harga_dokumentasi,
//                         'created_at' => now(),
//                         'updated_at' => now(),
//                     ]);
                    
//                     \Log::info('Insert Dokumentasi Result:', [
//                         'success' => $result,
//                         'id_dokumentasi' => $id_dokumentasi,
//                         'id_pemesanan' => $pemesanan->id_pemesanan
//                     ]);
//                 } catch (\Exception $e) {
//                     \Log::error('Error saving dokumentasi:', [
//                         'id_dokumentasi' => $id_dokumentasi,
//                         'error' => $e->getMessage()
//                     ]);
//                 }
//             }
//         }

//         // Simpan undangan ke tabel pivot
//         if (isset($validatedData['undangan']) && is_array($validatedData['undangan'])) {
//             foreach ($validatedData['undangan'] as $id_undangan) {
//                 try {
//                     $undangan = Undangan::findOrFail($id_undangan);
                    
//                     $result = DB::table('pemesanan_undangans')->insert([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_undangan' => $id_undangan,
//                         'harga_undangan' => $undangan->harga_undangan,
//                         'created_at' => now(),
//                         'updated_at' => now(),
//                     ]);
                    
//                     \Log::info('Insert Undangan Result:', [
//                         'success' => $result,
//                         'id_undangan' => $id_undangan,
//                         'id_pemesanan' => $pemesanan->id_pemesanan
//                     ]);
//                 } catch (\Exception $e) {
//                     \Log::error('Error saving undangan:', [
//                         'id_undangan' => $id_undangan,
//                         'error' => $e->getMessage()
//                     ]);
//                 }
//             }
//         }

//         // Log query yang dijalankan
//         \Log::info('Executed Queries:', \DB::getQueryLog());

//         // Simpan data ke histori
//         Histori::create([
//             'id_pemesanan' => $pemesanan->id_pemesanan,
//             'id_customer' => $validatedData['id_customer'],
//             'tanggal_pemesanan' => $validatedData['tanggal_pemesanan'],
//             'status_pemesanan' => $validatedData['status_pemesanan'],
//         ]);

//         // Komit transaksi
//         DB::commit();

//         return redirect()->route('home.pembayaran', ['id_pemesanan' => $pemesanan->id_pemesanan])
//             ->with('success', 'Pemesanan berhasil dibuat dan siap untuk upload bukti pembayaran!');

//     } catch (\Exception $e) {
//         // Rollback transaksi jika terjadi kesalahan
//         DB::rollBack();

//         // Catat error ke log dengan detail lebih lengkap
//         \Log::error('Error in store pemesanan:', [
//             'message' => $e->getMessage(),
//             'file' => $e->getFile(),
//             'line' => $e->getLine(),
//             'trace' => $e->getTraceAsString()
//         ]);

//         return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
//     }
// }




     // Method untuk menguji penyimpanan histori
     public function testStoreHistori()
     {
         // Menyimpan data histori secara manual
         Histori::create([
             'id_histori' => 'HIS001', // Test ID manual
             'id_customer' => 2, // Gunakan ID customer yang ada
             'id_pemesanan' => 'PSN0138', // Gunakan ID pemesanan yang ada
             'tanggal_pemesanan' => now(), // Waktu saat ini
             'status_pemesanan' => 'pending', // Status pemesanan
         ]);
 
         return 'Data histori berhasil disimpan!';
     }
    
        
     public function ubahStatus(Request $request, $id)
     {
         $pesanan = Pemesanan::find($id);
         if ($pesanan && in_array($request->status, ['Confirmed', 'Completed'])) {
             $pesanan->status = $request->status;
             $pesanan->save();
     
             return response()->json([
                 'success' => true,
                 'newStatus' => $pesanan->status
             ]);
         }
     
         return response()->json(['success' => false]);
     }

    //  public function filterPemesanan(Request $request)
    // {
    //     // Ambil status yang dipilih dari query parameter
    //     $status = $request->get('status');

    //     // Query pemesanan berdasarkan status jika ada, jika tidak tampilkan semua data
    //     $pemesanans = Pemesanan::when($status, function ($query, $status) {
    //         return $query->where('status_pemesanan', $status);
    //     })->paginate(10); 

    //     return view('admin.booking', compact('pemesanans'));
    // }

    public function filterPemesanan(Request $request)
{
    // Start with a base query
    $query = Pemesanan::query();

    // Filter by status if provided
    $status = $request->get('status');
    if ($status) {
        $query->where('status_pemesanan', $status);
    }

    // Filter by date range if provided
    if ($request->has('start_date') && !empty($request->start_date)) {
        $query->whereDate('tanggal_pemesanan', '>=', $request->start_date);
    }

    if ($request->has('end_date') && !empty($request->end_date)) {
        $query->whereDate('tanggal_pemesanan', '<=', $request->end_date);
    }

    // Execute the query with pagination
    $pemesanans = $query->paginate(10);

    return view('admin.booking', compact('pemesanans'));
}

    protected function generateIdPemesanan()
    {
        // Ambil id_pemesanan terakhir dari database
        $lastPemesanan = Pemesanan::orderBy('id_pemesanan', 'desc')->first();

        // Cek apakah sudah ada pemesanan, jika tidak, mulai dari PM0001
        if (!$lastPemesanan) {
            return 'PM0001';
        }

        // Ambil nomor terakhir, lalu increment
        $lastNumber = (int) substr($lastPemesanan->id_pemesanan, 2); // Ambil angka setelah 'PM'
        $newNumber = $lastNumber + 1;

        // Format id_pemesanan baru
        return 'PM' . str_pad($newNumber, 4, '0', STR_PAD_LEFT); // Menjadi PM0001, PM0002, dst.
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status_pemesanan' => 'required|in:pending,confirmed,cancelled,completed',
        ]);

        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->status_pemesanan = $request->status_pemesanan;
        $pemesanan->save();

        return redirect()->route('admin.booking')->with('success', 'Status pemesanan berhasil diperbarui!');
    }







    


}
