<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Pemesanan;
use App\Models\Invoice;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Hiburan;
use App\Models\Undangan;
use App\Models\Gedung;
use App\Models\MainCourse;

class InvoiceController extends Controller
{
    public function invoice()
    {
        return view('home.invoice');
    }
    
    public function index()
    {
        $invoices = Invoice::paginate(10); // Mengambil semua data dari tabel invoices
        return view('admin.invoice', compact('invoices'));
    }

    // public function showInvoice($id)
    // {
    //     $pemesanan = Pemesanan::findOrFail($id); // Mengambil data pemesanan berdasarkan ID
    //     return view('home.invoice', compact('pemesanan')); // Mengirim data pemesanan ke view
    // }
    public function show($id)
    {
        // Ambil data pemesanan berdasarkan ID
        $pemesanan = Pemesanan::findOrFail($id);
        
        // Kirim data pemesanan ke view
        return view('home.invoice', compact('pemesanan'));
    }

    public function generateInvoice($id_pemesanan)
    {
        try {
            // Cari data pemesanan
            $pemesanan = Pemesanan::findOrFail($id_pemesanan);
    
            // Generate id_inv unik
            $id_inv = $this->generateUniqueIdInv();
    
            // Cek apakah invoice sudah pernah dibuat sebelumnya
            $existingInvoice = Invoice::where('id_pemesanan', $id_pemesanan)->first();
    
            // Jika belum ada invoice, buat baru
            if (!$existingInvoice) {
                $invoice = Invoice::create([
                    'id_inv' => $id_inv,
                    'id_pemesanan' => $pemesanan->id_pemesanan,
                    'id_customer' => $pemesanan->id_customer
                ]);
    
                // Debug: Tambahkan logging atau dd untuk memastikan invoice dibuat
                \Log::info('Invoice Created', [
                    'id_inv' => $id_inv,
                    'id_pemesanan' => $pemesanan->id_pemesanan,
                    'id_customer' => $pemesanan->id_customer
                ]);
            } else {
                // Jika invoice sudah ada, gunakan id_inv yang sudah ada
                $id_inv = $existingInvoice->id_inv;
            }
    
            // Ambil data tambahan
            $dekorasi = $pemesanan->id_dekorasi ? Dekorasi::find($pemesanan->id_dekorasi) : null;
            $dokumentasi = $pemesanan->id_dokumentasi ? Dokumentasi::find($pemesanan->id_dokumentasi) : null;
            $hiburan = $pemesanan->id_hiburan ? Hiburan::find($pemesanan->id_hiburan) : null;
            $undangan = $pemesanan->id_undangan ? Undangan::find($pemesanan->id_undangan) : null;
            $mainCourse = $pemesanan->id_main_course ? MainCourse::find($pemesanan->id_main_course) : null;
    
            // Debug: Tambahkan dd() untuk memeriksa semua variabel
            // dd([
            //     'pemesanan' => $pemesanan,
            //     'id_inv' => $id_inv,
            //     'dekorasi' => $dekorasi,
            //     'dokumentasi' => $dokumentasi,
            //     'hiburan' => $hiburan,
            //     'undangan' => $undangan,
            //     'mainCourse' => $mainCourse
            // ]);
    
            // Tampilkan view invoice dengan data yang diperlukan
            return view('home.invoice', [
                'pemesanan' => $pemesanan,
                'id_inv' => $id_inv,
                'dekorasi' => $dekorasi,
                'dokumentasi' => $dokumentasi,
                'hiburan' => $hiburan,
                'undangan' => $undangan,
                'mainCourse' => $mainCourse,
                'gedung' => $gedung
            ]);
        } catch (\Exception $e) {
            // Log error untuk debugging
            \Log::error('Invoice Generation Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
    
            // Redirect atau tampilkan pesan error
            return redirect()->back()->with('error', 'Gagal membuat invoice: ' . $e->getMessage());
        }
    }
        

    private function generateUniqueIdInv()
    {
        do {
            // Generate id_inv dengan format INV-RANDOMSTRING-TIMESTAMP
            $prefix = 'INV-';
            $randomString = Str::random(6);
            $timestamp = now()->format('YmdHis');
            $id_inv = $prefix . $randomString . '-' . $timestamp;
        } while (Invoice::where('id_inv', $id_inv)->exists());
    
        return $id_inv;
    }


    public function destroy($id)
    {
        // Cari data invoice berdasarkan ID
        $invoice = Invoice::where('id_inv', $id)->first();
    
        if ($invoice) {
            \Log::info('Invoice ditemukan: ' . $invoice->id_inv);
            $invoice->delete();
            return redirect()->route('invoices.index')->with('success', 'Data invoice berhasil dihapus.');
        }
    
        \Log::error('Invoice tidak ditemukan dengan ID: ' . $id);
        return redirect()->route('invoices.index')->with('error', 'Data invoice tidak ditemukan.');
    }


    public function showInvoice($id_pemesanan)
    {
        // Cari data pemesanan berdasarkan ID
        $pemesanan = Pemesanan::findOrFail($id_pemesanan);

        // Ambil data terkait
        $dekorasi = Dekorasi::find($pemesanan->id_dekorasi);
        $dokumentasi = Dokumentasi::find($pemesanan->id_dokumentasi);
        $hiburan = Hiburan::find($pemesanan->id_hiburan);   
        $undangan = Undangan::find($pemesanan->id_undangan);
        $gedung = Gedung::find($pemesanan->id_gedung);

        // Generate atau temukan ID invoice
        $invoice = Invoice::firstOrCreate(
            ['id_pemesanan' => $id_pemesanan],
            ['id_customer' => $pemesanan->id_customer] // Tambahkan data terkait lainnya
        );

        // Ambil ID invoice yang sudah di-generate
        $id_inv = $invoice->id_inv;

        // Return ke view dengan data yang dibutuhkan
        return view('home.invoice', compact(
            'pemesanan', 
            'dekorasi', 
            'dokumentasi', 
            'hiburan', 
            'undangan', 
            'gedung',
            'id_inv'
        ));
    }

    public function download($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);

        $invoice = Invoice::where('id_pemesanan', $pemesanan->id_pemesanan)->first();
        $id_inv = $invoice ? $invoice->id_inv : null;  
        // $id_inv = $pemesanan->id_inv;

        // Pastikan data terkait tersedia
        $dekorasi = $pemesanan->dekorasi;
        $dokumentasi = $pemesanan->dokumentasi;
        $hiburan = $pemesanan->hiburan;
        $gedung = $pemesanan->gedung;
        // $undangan = $pemesanan->undangan;
        $mainCourse = $pemesanan->mainCourse;

        $pdf = Pdf::loadView('home.invoice_pdf', compact('id_inv','pemesanan', 'dekorasi', 'dokumentasi', 'hiburan', 'mainCourse', 'gedung'));

        return $pdf->download('invoice_'.$pemesanan->id_pemesanan.'.pdf');
    }


}
