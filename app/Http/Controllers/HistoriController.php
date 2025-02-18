<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Histori;
use App\Models\Pemesanan;

class HistoriController extends Controller
{
    // public function index()
    // {
    //     $historis = Histori::all(); // Fetch all histori records, or you can filter as needed
    //     return view('admin.histori', compact('historis'));
    // }
    // public function index()
    // {
    //     // Mengambil semua data pemesanan beserta histori yang terkait
    //     $pemesanans = Pemesanan::with('histori')->get();

    //     // Mengambil semua data dari tabel historis
    //     $historis = Histori::all();

    //     return view('admin.histori', compact('pemesanans', 'historis'));
    // }
    // public function index()
    // {
    //     // Mengambil pemesanan dan relasi histori secara bersamaan
    //     $pemesanans = Pemesanan::with('histori')->where('id_customer', auth()->id())->get();

    //     return view('admin.histori', compact('pemesanans'));
    // }
    public function index()
    {
        // Mengambil pemesanan dan relasi histori secara bersamaan
        // $pemesanans = Pemesanan::with('histori')->where('id_customer', auth()->id())->get();
        $historis = Histori::where('id_customer', auth()->id())->get();
    
        // Pastikan variabel dikirimkan ke tampilan
        return view('home.histori', compact('historis'));
    }
    public function indexAdmin()
    {
        // Mengambil semua data histori dari tabel
        $historis = Histori::paginate(10);  // Kamu bisa menggunakan `Histori::paginate(10)` jika ingin menggunakan pagination

        // Mengirim data histori ke view
        return view('admin.histori', compact('historis'));
    }

    // public function index()
    // {
    //     $historis = Historis::all();
        
    //     dd($historis);  
        
    //     return view('admin.histori', compact('historis'));
    // }
    

    




    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'id_pemesanan' => 'required',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required|string|max:255',
        ]);

        // Find the Histori record and update it
        $histori = Histori::findOrFail($id);
        $histori->update([
            'id_pemesanan' => $request->id_pemesanan,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'status_pemesanan' => $request->status_pemesanan,
        ]);

        // Redirect back with success message
        return redirect()->route('histori.index')->with('success', 'Histori updated successfully');
    }


}
