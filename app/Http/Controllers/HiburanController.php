<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hiburan;
use App\Models\FotoHiburan;



class HiburanController extends Controller
{
    // public function index()
    // {
    //     // Ambil data undangans dari database
    //     $hiburans = Hiburan::paginate(5); // Pagination dengan 5 data per halaman

    //     // Kirim data ke view
    //     return view('admin.hiburan', compact('hiburans'));
    // }
    public function index(Request $request)
    {
        // Ambil input pencarian dari request
        $search = $request->input('search');
        
        // Ambil data hiburan dengan pencarian (jika ada) dan paginate
        $hiburans = Hiburan::when($search, function ($query, $search) {
                $query->where('nama_hiburan', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi_hiburan', 'like', '%' . $search . '%');
            })
            ->paginate(5); // Pagination dengan 5 data per halaman

        // Kirim data ke view
        return view('admin.hiburan', compact('hiburans', 'search'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_hiburan' => 'required|string|max:255',
            'deskripsi_hiburan' => 'nullable|string',
            'harga_hiburan' => 'required|numeric',
            'foto_hiburan.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi untuk setiap file foto
        ]);
    
        // Simpan data hiburan terlebih dahulu
        $hiburan = Hiburan::create([
            'nama_hiburan' => $request->nama_hiburan,
            'deskripsi_hiburan' => $request->deskripsi_hiburan,
            'harga_hiburan' => $request->harga_hiburan,
        ]);
    
        // Jika ada file foto yang diunggah
        if ($request->hasFile('foto_hiburan')) {
            foreach ($request->file('foto_hiburan') as $file) {
                // Generate nama file unik
                $filename = time() . '_' . $file->getClientOriginalName();
    
                // Simpan file di folder storage/app/public/foto_hiburan
                $file->storeAs('public/foto_hiburan', $filename);
    
                // Simpan path foto ke dalam tabel FotoHiburan
                FotoHiburan::create([
                    'hiburan_id' => $hiburan->id_hiburan, // Menggunakan ID hiburan yang baru disimpan
                    'foto_path' => $filename, // Menyimpan nama file yang baru dibuat
                ]);
            }
        }
    
        return redirect()->back()->with('success', 'Item hiburan berhasil ditambahkan!');
    }
    

    // public function update(Request $request, $id_hiburan)
    // {
    //     // Validasi data
    //     $request->validate([
    //         'nama_hiburan' => 'required|string|max:255',
    //         'deskripsi_hiburan' => 'nullable|string',
    //         'harga_hiburan' => 'required|numeric',
    //         'foto_hiburan' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    //     ]);

    //     // Temukan hiburan berdasarkan ID
    //     $hiburans = Hiburan::findOrFail($id_hiburan);

    //     // Update data
    //     $hiburans->nama_hiburan = $request->input('nama_hiburan');
    //     $hiburans->deskripsi_hiburan = $request->input('deskripsi_hiburan');
    //     $hiburans->harga_hiburan = $request->input('harga_hiburan');

    //     // // Menyimpan foto jika ada
    //     // if ($request->hasFile('foto_hiburan')) {
    //     //     // Hapus foto lama jika ada
    //     //     if ($hiburans->foto_hiburan) {
    //     //         Storage::delete('public/images/' . $hiburans->foto_hiburan);
    //     //     }

    //     //     $foto = $request->file('foto_hiburan');
    //     //     $fotoPath = $foto->store('public/images'); // Menyimpan foto ke folder 'public/images'
    //     //     $hiburans->foto_hiburan = basename($fotoPath); // Simpan nama file foto
    //     // }

    //      // Proses gambar
    //     if ($request->hasFile('foto_hiburan')) {
    //         $fotoPaths = [];

    //         foreach ($request->file('foto_hiburan') as $file) {
    //             // Simpan gambar dan ambil path-nya
    //             $path = $file->store('foto_hiburan', 'public');
    //             $fotoPaths[] = $path; // Simpan path gambar
    //         }

    //         // Simpan semua path gambar sebagai string yang dipisahkan koma
    //         $hiburans->foto_hiburan = implode(',', $fotoPaths);
    //     }


    //     // Simpan perubahan ke database
    //     $hiburans->save();

    //     // Redirect dengan pesan sukses
    //     return redirect()->back()->with('success', 'Data item hiburan berhasil diperbarui!');
    // }

    public function update(Request $request, $id_hiburan)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_hiburan' => 'required|string|max:255',
            'deskripsi_hiburan' => 'required|string',
            'harga_hiburan' => 'required|numeric',
            'foto_hiburan.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi multiple file
        ]);
    
        // Temukan hiburan berdasarkan ID
        $hiburan = Hiburan::findOrFail($id_hiburan);
    
        // Update data hiburan tanpa foto
        $hiburan->update([
            'nama_hiburan' => $validated['nama_hiburan'],
            'deskripsi_hiburan' => $validated['deskripsi_hiburan'],
            'harga_hiburan' => $validated['harga_hiburan']
        ]);
    
        // Jika ada file foto baru yang diunggah
        if ($request->hasFile('foto_hiburan')) {
            // Hapus foto lama dari penyimpanan dan database
            foreach ($hiburan->fotoHiburan as $foto) {
                if (\Storage::disk('public')->exists('foto_hiburan/' . $foto->foto_path)) {
                    \Storage::disk('public')->delete('foto_hiburan/' . $foto->foto_path);
                }
                $foto->delete(); // Hapus dari database
            }
    
            // Simpan foto baru yang diunggah
            foreach ($request->file('foto_hiburan') as $foto) {
                $fotoPath = $foto->store('foto_hiburan', 'public'); // Simpan di folder 'storage/app/public/foto_hiburan'
                FotoHiburan::create([
                    'hiburan_id' => $hiburan->id_hiburan,
                    'foto_path' => basename($fotoPath)
                ]);
            }
        }
    
        // Redirect atau beri notifikasi sukses
        return redirect()->back()->with('success', 'Data hiburan berhasil diperbarui!');
    }

    public function userHiburan()
    {
         $hiburans = Hiburan::paginate(5); // Menampilkan 5 item per halaman
         return view('home.hiburan', compact('hiburans'));
    }


}
