<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan');
    }
    public function laporanOmzet(Request $request)
    {
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');
    
        // Validasi input
        if (!$start_date || !$end_date) {
            return view('admin.laporan_omzet', [
                'pemesanan' => [],
                'total_omzet' => 0,
                'start_date' => null,
                'end_date' => null,
            ]);
        }
    
        // Ambil data pemesanan berdasarkan periode
        $pemesanan = Pemesanan::whereBetween('tanggal_pemesanan', [$start_date, $end_date])->get();
    
        // Hitung total omzet
        $total_omzet = $pemesanan->sum('harga_pemesanan');
    
        return view('admin.laporan_omzet', compact('pemesanan', 'total_omzet', 'start_date', 'end_date'));
    }
    

}

