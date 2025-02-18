<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;
use App\Models\fotoDokumentasi;


class DokumentasiController extends Controller
{
    // public function index()
    // {
    //     // Ambil data undangans dari database
    //     $dokumentasis = Dokumentasi::paginate(5); // Pagination dengan 5 data per halaman

    //     // Kirim data ke view
    //     return view('admin.dokumentasi', compact('dokumentasis'));
    // }
    public function index(Request $request)
    {
        // Ambil input pencarian dari request
        $search = $request->input('search');
        
        // Ambil data dokumentasi dengan pencarian (jika ada) dan paginate
        $dokumentasis = Dokumentasi::when($search, function ($query, $search) {
                $query->where('nama_paket_dokumentasi', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi_dokumentasi', 'like', '%' . $search . '%');
            })
            ->paginate(5); // Pagination dengan 5 data per halaman

        // Kirim data ke view
        return view('admin.dokumentasi', compact('dokumentasis', 'search'));
    }


    // public function store(Request $request)
    // {
    //     // Validasi input form
    //     $request->validate([
    //         'nama_paket_dokumentasi' => 'required|string|max:255',
    //         'jenis_dokumentasi' => 'required|string',
    //         'deskripsi_dokumentasi' => 'nullable|string',
    //         'harga_dokumentasi' => 'required|numeric',
    //         'foto_dokumentasi.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi setiap foto
    //     ]);
    
    //     // Simpan data dokumentasi
    //     $dokumentasi = Dokumentasi::create([
    //         'nama_paket_dokumentasi' => $request->input('nama_paket_dokumentasi'),
    //         'jenis_dokumentasi' => $request->input('jenis_dokumentasi'),
    //         'deskripsi_dokumentasi' => $request->input('deskripsi_dokumentasi'),
    //         'harga_dokumentasi' => $request->input('harga_dokumentasi'),
    //     ]);
    
    //     // Jika ada file foto yang diupload
    //     if ($request->hasFile('foto_dokumentasi')) {
    //         foreach ($request->file('foto_dokumentasi') as $file) {
    //             $filename = time() . '-' . $file->getClientOriginalName();
    //             $file->storeAs('public/foto_dokumentasi', $filename);
    
    //             // Simpan foto ke tabel foto_dokumentasi
    //             FotoDokumentasi::create([
    //                 'dokumentasi_id' => $dokumentasi->id_dokumentasi,  // Foreign key ke tabel dokumentasi
    //                 'foto_path' => $filename,
    //             ]);
    //         }
    //     }   
    
    //     // Redirect dengan pesan sukses
    //     return redirect()->back()->with('success', 'Data item vendor dokumentasi berhasil ditambahkan!');
    // }
    
    public function store(Request $request)
{
    // Validasi input form
    $request->validate([
        'nama_paket_dokumentasi' => 'required|string|max:255',
        'jenis_dokumentasi' => 'required|string',
        'deskripsi_dokumentasi' => 'nullable|string',
        'harga_dokumentasi' => 'required|numeric',
        'foto_dokumentasi.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi setiap foto
    ]);

    // Simpan data dokumentasi
    $dokumentasi = Dokumentasi::create([
        'nama_paket_dokumentasi' => $request->input('nama_paket_dokumentasi'),
        'jenis_dokumentasi' => $request->input('jenis_dokumentasi'),
        'deskripsi_dokumentasi' => $request->input('deskripsi_dokumentasi'),
        'harga_dokumentasi' => $request->input('harga_dokumentasi'),
    ]);

    // Jika ada file foto yang diupload
    if ($request->hasFile('foto_dokumentasi')) {
        foreach ($request->file('foto_dokumentasi') as $file) {
            $filename = time() . '-' . $file->getClientOriginalName();
            // Simpan file ke direktori foto_dokumentasi
            $file->storeAs('public/foto_dokumentasi', $filename);

            // Simpan foto ke tabel foto_dokumentasi
            FotoDokumentasi::create([
                'dokumentasi_id' => $dokumentasi->id_dokumentasi,  // Foreign key ke tabel dokumentasi
                'foto_path' => 'foto_dokumentasi/' . $filename,  // Path di database
            ]);
        }
    }

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Data item vendor dokumentasi berhasil ditambahkan!');
}




    // public function update(Request $request, $id_dokumentasi)
    // {
    //     // Cari item dokumentasi berdasarkan ID
    //     $dokumentasis = Dokumentasi::findOrFail($id_dokumentasi);

    //     // Validasi data yang dikirim dari form
    //     $request->validate([
    //         'jenis_dokumentasi' => 'required|string',
    //         'deskripsi_dokumentasi' => 'required|string',
    //         'harga_dokumentasi' => 'required|numeric',
    //         'foto_dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Update data dokumentasi
    //     $dokumentasis->jenis_dokumentasi = $request->jenis_dokumentasi;
    //     $dokumentasis->deskripsi_dokumentasi = $request->deskripsi_dokumentasi;
    //     $dokumentasis->harga_dokumentasi = $request->harga_dokumentasi;

    //     // Jika ada file foto yang diupload
    //     $fotoPath = null;
    //     if ($request->hasFile('foto_dokumentasi')) {
    //         $fotoPath = $request->file('foto_dokumentasi')->store('foto_dokumentasi', 'public');
    //     };

    //     Dokumentasi::create([
    //         'nama_paket_dokumentasi' => $request->input('nama_paket_dokumentasi'),
    //         'jenis_dokumentasi' => $request->input('jenis_dokumentasi'),
    //         'deskripsi_dokumentasi' => $request->input('deskripsi_dokumentasi'),
    //         'harga_dokumentasi' => $request->input('harga_dokumentasi'),
    //         'foto_dokumentasi' => $fotoPath,
    //     ]); 

    //     // Redirect kembali ke halaman index dengan pesan sukses
    //     return redirect()->route('dokumentasi.index')->with('success', 'Data item dokumentasi berhasil diperbarui!');
    // }


    public function update(Request $request, $id)
{
    // Validasi
    $validated = $request->validate([
        'nama_paket_dokumentasi' => 'required|string|max:255',
        'jenis_dokumentasi' => 'required|string|max:255',
        'deskripsi_dokumentasi' => 'required|string',
        'harga_dokumentasi' => 'required|numeric',
        'foto_dokumentasi.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // validasi untuk multiple file
    ]);

    // Temukan dokumentasi berdasarkan ID
    $dokumentasi = Dokumentasi::findOrFail($id);

    // Update data dokumentasi tanpa foto
    $dokumentasi->update([
        'nama_paket_dokumentasi' => $validated['nama_paket_dokumentasi'],
        'jenis_dokumentasi' => $validated['jenis_dokumentasi'],
        'deskripsi_dokumentasi' => $validated['deskripsi_dokumentasi'],
        'harga_dokumentasi' => $validated['harga_dokumentasi']
    ]);

    // Jika ada file foto baru yang diunggah
    if ($request->hasFile('foto_dokumentasi')) {
        // Hapus foto lama
        $existingPhotos = FotoDokumentasi::where('dokumentasi_id', $dokumentasi->id_dokumentasi)->get();
        foreach ($existingPhotos as $existingPhoto) {
            if (\Storage::disk('public')->exists($existingPhoto->foto_path)) {
                \Storage::disk('public')->delete($existingPhoto->foto_path);
            }
            $existingPhoto->delete();
        }

        // Simpan foto yang baru di-upload
        foreach ($request->file('foto_dokumentasi') as $foto) {
            $fotoPath = $foto->store('foto_dokumentasi', 'public'); // Menyimpan di folder 'storage/app/public/foto_dokumentasi'

            // Buat entri di tabel `foto_dokumentasi` untuk setiap foto baru
            FotoDokumentasi::create([
                'dokumentasi_id' => $dokumentasi->id_dokumentasi,
                'foto_path' => $fotoPath,
            ]);
        }
    }

    // Redirect atau beri notifikasi sukses
    return redirect()->back()->with('success', 'Data dokumentasi berhasil diperbarui!');
}




        public function userDokumentasi()
    {
         $dokumentasis = Dokumentasi::paginate(5); // Menampilkan 5 item per halaman
         return view('home.dokumentasi', compact('dokumentasis'));
    }

}
