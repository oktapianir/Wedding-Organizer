<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dekorasi;
use App\Models\FotoDekorasi;


class DekorasiController extends Controller
{
    // public function index()
    // {
    //     // Ambil data dekorasi dari database
    //     $dekorasis = Dekorasi::with('fotoDekorasi')->paginate(5); // Pagination dengan 5 data per halaman

    //     // Kirim data ke view
    //     return view('admin.dekorasi', compact('dekorasis'));
    // }
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $dekorasis = Dekorasi::with('fotoDekorasi')
            ->when($search, function ($query, $search) {
                $query->where('nama_dekorasi', 'like', '%' . $search . '%')
                      ->orWhere('deskripsi_dekorasi', 'like', '%' . $search . '%');
            })
            ->paginate(5);
    
        return view('admin.dekorasi', compact('dekorasis', 'search'));
    }
    
    

    public function store(Request $request)
    {
        $request->validate([
            'nama_dekorasi' => 'required|string',
            'deskripsi_dekorasi' => 'nullable|string',
            'harga_dekorasi' => 'required|numeric',
            'foto_dekorasi.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan data dekorasi terlebih dahulu
        $dekorasi = Dekorasi::create([
            'id_dekorasi' => $request->id_dekorasi,
            'nama_dekorasi' => $request->nama_dekorasi,
            'deskripsi_dekorasi' => $request->deskripsi_dekorasi,
            'harga_dekorasi' => $request->harga_dekorasi,
        ]);

        // Jika ada file foto yang diunggah
        if($request->hasFile('foto_dekorasi')) {
            foreach ($request->file('foto_dekorasi') as $file) {
                // Generate unique filename
                $filename = time() . '_' . $file->getClientOriginalName();

                // Simpan file di folder storage/app/public/dekorasi
                $filePath = $file->storeAs('dekorasi', $filename, 'public');

                // Simpan path foto ke dalam tabel FotoDekorasi
                FotoDekorasi::create([
                    'dekorasi_id' => $dekorasi->id_dekorasi, // Menggunakan ID dekorasi yang baru disimpan
                    'foto_path' => $filePath,
                ]);     
            }
        }

        return redirect()->back()->with('success', 'Data dekorasi berhasil ditambahkan.');
    }




    // public function update(Request $request, $id_dekorasi)
    // {
    //     $dekorasi = Dekorasi::findOrFail($id_dekorasi);

    //     $request->validate([
    //         'nama_dekorasi' => 'required|string',
    //         'deskripsi_dekorasi' => 'required|string',
    //         'harga_dekorasi' => 'required|numeric',
    //         'foto_dekorasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $dekorasi->nama_dekorasi = $request->nama_dekorasi;
    //     $dekorasi->deskripsi_dekorasi = $request->deskripsi_dekorasi;
    //     $dekorasi->harga_dekorasi = $request->harga_dekorasi;

    //     if ($request->hasFile('foto_dekorasi')) {
    //         $file = $request->file('foto_dekorasi');
    //         $filename = time() . '.' . $file->getClientOriginalExtension();
    //         $file->move(public_path('storage/images'), $filename);
    //         $dekorasi->foto_dekorasi = $filename;
    //     }

    //     $dekorasi->save();

    //     return redirect()->route('dekorasi.index')->with('success', 'Data item dekorasi berhasil diperbarui!');
    // }
    public function update(Request $request, $id_dekorasi)
    {
        $dekorasi = Dekorasi::findOrFail($id_dekorasi);

        $request->validate([
            'nama_dekorasi' => 'required|string',
            'deskripsi_dekorasi' => 'required|string',
            'harga_dekorasi' => 'required|numeric',
            'foto_dekorasi.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dekorasi->nama_dekorasi = $request->nama_dekorasi;
        $dekorasi->deskripsi_dekorasi = $request->deskripsi_dekorasi;
        $dekorasi->harga_dekorasi = $request->harga_dekorasi;

        if ($request->hasFile('foto_dekorasi')) {
            // Hapus foto lama
            foreach ($dekorasi->fotoDekorasi as $foto) {
                $filePath = public_path('storage/dekorasi/' . str_replace('dekorasi/', '', $foto->foto_path));
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                $foto->delete();
            }

            // Upload foto baru
            $files = $request->file('foto_dekorasi');
            foreach ($files as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/dekorasi'), $filename);
                $dekorasi->fotoDekorasi()->create(['foto_path' => 'dekorasi/' . $filename]);
            }
        }

        $dekorasi->save();

        return redirect()->route('dekorasi.index')->with('success', 'Data item dekorasi berhasil diperbarui!');
    }



     // Metode untuk User
    public function userDekorasi()
    {
        $dekorasis = Dekorasi::with('fotoDekorasi')->paginate(5); // Menampilkan 5 item per halaman
        return view('home.dekorasi', compact('dekorasis'));
    }

}

