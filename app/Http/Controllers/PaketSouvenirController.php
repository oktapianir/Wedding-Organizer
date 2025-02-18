<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketSouvenir;
use Illuminate\Support\Facades\Storage;


class PaketSouvenirController extends Controller
{
    // public function index()
    // {
    //     $paketSouvenirs = PaketSouvenir::paginate(5); // Pagination dengan 5 data per halaman
    //     return view('admin.souvenir', compact('paketSouvenirs'));
    // }
    public function index(Request $request)
    {
        // Ambil parameter pencarian dari request
        $search = $request->input('search');

        // Jika ada parameter pencarian, filter data berdasarkan nama souvenir
        if ($search) {
            $paketSouvenirs = PaketSouvenir::where('nama_paket_souvenir', 'like', '%' . $search . '%')
                                        ->paginate(5); // Pagination dengan 5 data per halaman
        } else {
            // Jika tidak ada pencarian, tampilkan semua data dengan pagination
            $paketSouvenirs = PaketSouvenir::paginate(5); // Pagination dengan 5 data per halaman
        }

        // Kirim data ke view
        return view('admin.souvenir', compact('paketSouvenirs', 'search'));
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama_paket_souvenir' => 'required|string|max:255',
    //         'deskripsi_souvenir' => 'nullable|string',
    //         'harga_souvenir' => 'required|numeric',
    //         // 'foto_souvenir' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    //     ]);

    //     // $fotoPath = null;
    //     // if ($request->hasFile('foto_souvenir')) {
    //     //     $foto = $request->file('foto_souvenir');
    //     //     $fotoPath = $foto->store('public/souvenir');
    //     // }

    //     PaketSouvenir::create([
    //         'nama_paket_souvenir' => $request->input('nama_paket_souvenir'),
    //         'deskripsi_souvenir' => $request->input('deskripsi_souvenir'),
    //         'harga_souvenir' => $request->input('harga_souvenir'),
    //         // 'foto_souvenir' => $fotoPath,
    //     ]);

    //     return redirect()->back()->with('success', 'Data paket souvenir berhasil ditambahkan!');
    // }
    // public function store(Request $request)
    // {
    //     $fotoPath = null;
    //     if ($request->hasFile('foto_souvenir')) {
    //         $fotoPath = $request->file('foto_souvenir')->store('foto_souvenir', 'public');
    //     }
        
    //     $paketSouvenir = PaketSouvenir::create([
    //         'nama_paket_souvenir' => $request->input('nama_paket_souvenir'),
    //         'deskripsi_souvenir' => $request->input('deskripsi_souvenir'),
    //         'harga_souvenir' => $request->input('harga_souvenir'),
    //         'foto_souvenir' => $fotoPath,
    //     ]);    

    //     // $validatedData = $request->validate([
    //     //     'nama_paket_souvenir' => 'required|string|max:255',
    //     //     'deskripsi_souvenir' => 'nullable|string',
    //     //     'harga_souvenir' => 'required|numeric',
    //     //     'foto_souvenir' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi foto
    //     // ]);

    //     // $descriptions = explode(',', $request->input('deskripsi_souvenir'));

    //     // $paketSouvenir = new PaketSouvenir();
    //     // $paketSouvenir->nama_paket_souvenir = $validatedData['nama_paket_souvenir'];
    //     // $paketSouvenir->deskripsi_souvenir = json_encode($descriptions);
    //     // $paketSouvenir->harga_souvenir = $validatedData['harga_souvenir'];

    //     // // Cek jika ada file foto yang diupload
    //     // if ($request->hasFile('foto_souvenir')) {
    //     //     $foto = $request->file('foto_souvenir');
    //     //     $fotoPath = $foto->store('public/foto_souvenir'); // Menyimpan foto ke direktori 'storage/app/public/foto_souvenir'
    //     //     $paketSouvenir->foto_souvenir = basename($fotoPath); // Simpan nama file foto
    //     // }

    //     // $paketSouvenir->save();

    //     return redirect()->back()->with('success', 'Paket Souvenir berhasil ditambahkan');
    // }
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_paket_souvenir' => 'required|string|max:255',
        'deskripsi_souvenir' => 'nullable|string',
        'harga_souvenir' => 'required|numeric',
        'foto_souvenir.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi foto
    ]);

    // Menyimpan foto-foto yang diunggah
    $fotoPaths = [];
    if ($request->hasFile('foto_souvenir')) {
        foreach ($request->file('foto_souvenir') as $foto) {
            $fotoPath = $foto->store('foto_souvenir', 'public');
            $fotoPaths[] = $fotoPath; // Menyimpan path foto
        }
    }

    // Menyimpan data paket souvenir dengan foto-foto
    $paketSouvenir = PaketSouvenir::create([
        'nama_paket_souvenir' => $request->input('nama_paket_souvenir'),
        'deskripsi_souvenir' => $request->input('deskripsi_souvenir'),
        'harga_souvenir' => $request->input('harga_souvenir'),
        'foto_souvenir' => json_encode($fotoPaths), // Simpan array foto sebagai JSON
    ]);

    return redirect()->back()->with('success', 'Paket Souvenir berhasil ditambahkan');
}



    public function update(Request $request, $id_paket_souvenir)
    {
        $paketSouvenir = PaketSouvenir::findOrFail($id_paket_souvenir);

        $request->validate([
            'nama_paket_souvenir' => 'required|string|max:255',
            'deskripsi_souvenir' => 'nullable|string',
            'harga_souvenir' => 'required|numeric',
            // 'foto_souvenir' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $paketSouvenir->nama_paket_souvenir = $request->input('nama_paket_souvenir');
        $paketSouvenir->deskripsi_souvenir = $request->input('deskripsi_souvenir');
        $paketSouvenir->harga_souvenir = $request->input('harga_souvenir');

         // Hapus foto lama jika dipilih
        if ($request->has('delete_foto')) {
            $fotoHapus = $request->input('delete_foto');
            $fotoLama = json_decode($paketSouvenir->foto_souvenir, true) ?? [];
            $fotoTersisa = array_diff($fotoLama, $fotoHapus);

            foreach ($fotoHapus as $foto) {
                if (Storage::exists($foto)) {
                    Storage::delete($foto);
                }
            }

            $paketSouvenir->foto_souvenir = json_encode($fotoTersisa);
        }

        // Simpan foto baru
        if ($request->hasFile('foto_souvenir')) {
            $fotoBaru = json_decode($paketSouvenir->foto_souvenir, true) ?? [];
            foreach ($request->file('foto_souvenir') as $file) {
                $path = $file->store('paketsouvenir', 'public');
                $fotoBaru[] = $path;
            }
            $paketSouvenir->foto_souvenir = json_encode($fotoBaru);
        }

        $paketSouvenir->save();

        return redirect()->route('paketsouvenir.index')->with('success', 'Data paket souvenir berhasil diperbarui!');
    }
    

    public function userSouvenir()
    {
         $paketSouvenir = PaketSouvenir::paginate(5);
         return view('home.souvenir', compact('paketSouvenir'));
    }
}
