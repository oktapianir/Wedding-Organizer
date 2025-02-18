<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung; // Pastikan ini diimpor
use App\Models\Dekorasi; // Pastikan ini diimpor
use App\Models\Hiburan; // Pastikan ini diimpor
use Session; // Pastikan ini di-import

class CartController extends Controller
{
        protected $cart = [];

        public function index(Request $request)
    {
        // Ambil data keranjang dari cookies
        $cart = json_decode($request->cookie('cart', '[]'), true);

        // Mengirim data keranjang ke view 'home.keranjang'
        return view('home.keranjang', ['cart' => $cart]);
    }


    public function addToCart(Request $request)
{
    // Ambil keranjang dari cookies atau buat array baru jika belum ada
    $cart = json_decode($request->cookie('cart', '[]'), true);

    // Periksa apakah data yang dikirim adalah untuk dekorasi, undangan, hiburan, dokumentasi, atau katering
    if ($request->has('id_dekorasi')) {
        $request->validate([
            'id_dekorasi' => 'required',
            'nama_dekorasi' => 'required',
            'harga_dekorasi' => 'required|numeric',
        ]);

        $cart[] = [
            'id_dekorasi' => $request->id_dekorasi,
            'nama_dekorasi' => $request->nama_dekorasi,
            'harga_dekorasi' => $request->harga_dekorasi,
        ];

    } elseif ($request->has('id_undangan')) {
        $request->validate([
            'id_undangan' => 'required',
            'bahan_undangan' => 'required',
            'harga_undangan' => 'required|numeric',
        ]);

        $cart[] = [
            'id_undangan' => $request->id_undangan,
            'bahan_undangan' => $request->bahan_undangan,
            'harga_undangan' => $request->harga_undangan,
        ];
    
    } elseif ($request->has('id_gedung')) {
        $request->validate([
            'id_gedung' => 'required',
            'nama_gedung' => 'required',
            'harga_gedung' => 'required|numeric',
        ]);

        $cart[] = [
            'id_gedung' => $request->id_gedung,
            'nama_gedung' => $request->nama_gedung,
            'harga_gedung' => $request->harga_gedung,
        ];

    } elseif ($request->has('id_hiburan')) {
        $request->validate([
            'id_hiburan' => 'required',
            'nama_hiburan' => 'required',
            'deskripsi_hiburan' => 'required',
            'harga_hiburan' => 'required|numeric',
        ]);

        $cart[] = [
            'id_hiburan' => $request->id_hiburan,
            'nama_hiburan' => $request->nama_hiburan,
            'deskripsi_hiburan' => $request->deskripsi_hiburan,
            'harga_hiburan' => $request->harga_hiburan,
        ];

    } elseif ($request->has('id_dokumentasi')) {
        $request->validate([
            'id_dokumentasi' => 'required',
            'nama_paket_dokumentasi' => 'required',
            'deskripsi_dokumentasi' => 'required',
            'harga_dokumentasi' => 'required|numeric',
        ]);

        $cart[] = [
            'id_dokumentasi' => $request->id_dokumentasi,
            'nama_paket_dokumentasi' => $request->nama_paket_dokumentasi,
            'deskripsi_dokumentasi' => $request->deskripsi_dokumentasi,
            'harga_dokumentasi' => $request->harga_dokumentasi,
        ];

    } elseif ($request->has('id_mainC')) {  
        $request->validate([
            'id_mainC' => 'required',
            'nama_paket_mainC' => 'required',
            'deskripsi_mainC' => 'required',
            'harga_paket_mainC' => 'required|numeric',
            'kuantitas' => 'required|integer|min:1',
        ]);

        $cart[] = [
            'id_mainC' => $request->id_mainC,
            'nama_paket_mainC' => $request->nama_paket_mainC,
            'deskripsi_mainC' => $request->deskripsi_mainC,
            'harga_paket_mainC' => $request->harga_paket_mainC,
            'kuantitas' => $request->kuantitas, // Simpan kuantitas
        ];
    }
    

    // Simpan keranjang ke dalam cookies
    return redirect()->route('home.keranjang')->withCookie(cookie('cart', json_encode($cart), 60 * 24));
}


    public function removeFromCart($index, Request $request)
{
    // Ambil keranjang dari cookies
    $cart = json_decode($request->cookie('cart', '[]'), true);

    // Hapus item dari keranjang berdasarkan index
    if (isset($cart[$index])) {
        unset($cart[$index]);
        // Reindex array agar index tetap berurutan
        $cart = array_values($cart);
    }

    // Simpan keranjang yang sudah diperbarui ke dalam cookies
    return redirect()->back()->withCookie(cookie('cart', json_encode($cart), 60 * 24));
}


}


