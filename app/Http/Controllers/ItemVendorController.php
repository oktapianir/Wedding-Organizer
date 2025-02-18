<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Gedung;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Undangan;
use App\Models\Hiburan;

class ItemVendorController extends Controller
{
    public function index()
    {
        // Ambil data dari semua model vendor
        $gedungs = Gedung::all();
        // $dekoras = Dekorasi::all();
        // $dokumentasis = Dokumentasi::all();
        // $undangans = Undangan::all();
        // $hiburans = Hiburan::all();
        
        // Gabungkan data untuk ditampilkan di view
        // return view('admin.itemvendor', compact('gedungs', 'dekorasis', 'dokumentasis', 'undangans', 'hiburans'));
        return view('admin.itemvendor', compact('gedungs', 'dekoras'));
        // return view('admin.itemvendor', compact('gedungs'));
    }
   
    public function create()
    {
        // Ambil semua nama vendor untuk dipilih di form
        $vendors = Vendor::pluck('nama');
        
        // Tampilkan halaman formulir tambah item vendor
        return view('admin.itemvendor', compact('vendors'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'vendor_type' => 'required|string',
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'alamat' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tipe_gedung' => 'nullable|string',
            'kapasitas_gedung' => 'nullable|numeric',
            'status_gedung' => 'nullable|string',
            'jenis_dokumentasi' => 'nullable|string',
            'jenis_hiburan' => 'nullable|string',
            'jenis_undangan' => 'nullable|string',
            'bahan_undangan' => 'nullable|string',
        ]);

        // Menyimpan foto jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
        }

        // Menentukan vendor_type dan menyimpan data ke tabel yang sesuai
        switch ($request->vendor_type) {
            case 'Gedung':
                Gedung::create([
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'deskripsi' => $request->deskripsi,
                    'alamat' => $request->alamat,
                    'image' => $imagePath,
                    'tipe_gedung' => $request->tipe_gedung,
                    'kapasitas' => $request->kapasitas_gedung,
                    'status' => $request->status_gedung,
                ]);
                break;
            
            case 'Dekorasi':
                Dekorasi::create([
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'deskripsi' => $request->deskripsi,
                    'alamat' => $request->alamat,
                    'image' => $imagePath,
                ]);
                break;
            
            case 'Dokumentasi':
                Dokumentasi::create([
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'deskripsi' => $request->deskripsi,
                    'alamat' => $request->alamat,
                    'image' => $imagePath,
                    'jenis_dokumentasi' => $request->jenis_dokumentasi,
                ]);
                break;

            case 'Hiburan':
                Hiburan::create([
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'deskripsi' => $request->deskripsi,
                    'alamat' => $request->alamat,
                    'image' => $imagePath,
                    'jenis_hiburan' => $request->jenis_hiburan,
                ]);
                break;

            case 'Undangan':
                Undangan::create([
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'deskripsi' => $request->deskripsi,
                    'alamat' => $request->alamat,
                    'image' => $imagePath,
                    'jenis_undangan' => $request->jenis_undangan,
                    'bahan_undangan' => $request->bahan_undangan,
                ]);
                break;

            // Tambahkan case lain jika diperlukan
            
            default:
                return redirect()->back()->withErrors(['vendor_type' => 'Jenis vendor tidak valid']);
        }

        // Redirect ke halaman sukses atau tampilkan pesan sukses
        return redirect()->route('itemvendor.index')->with('success', 'Item vendor berhasil ditambahkan');
    }

}
