<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use Illuminate\Http\Request;
use App\Models\FotoUndangan;


class UndanganController extends Controller
{
    // public function index()
    // {
    //     // Ambil data undangans dari database
    //     $undangans = Undangan::with('fotoUndangan')->paginate(5); // Pagination dengan 5 data per halaman

    //     // Kirim data ke view
    //     return view('admin.undangan', compact('undangans'));
    // }
    public function index(Request $request)
{
        // Ambil input pencarian dari request
        $search = $request->input('search');
        
        // Ambil data undangan dengan pencarian (jika ada) dan paginate
        $undangans = Undangan::when($search, function ($query, $search) {
                $query->where('nama_undangan', 'like', '%' . $search . '%')
                    ->orWhere('bahan_undangan', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi_undangan', 'like', '%' . $search . '%');
            })
            ->paginate(5); // Pagination dengan 5 data per halaman

        // Kirim data ke view
        return view('admin.undangan', compact('undangans', 'search'));
    }


   
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_undangan' => 'required|string',
            'bahan_undangan' => 'required|string',
            'deskripsi_undangan' => 'nullable|string',
            'harga_undangan' => 'required|numeric',
            'foto_undangan.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan data undangan terlebih dahulu
        $undangan = Undangan::create([
            'nama_undangan' => $request->input('nama_undangan'),
            'bahan_undangan' => $request->input('bahan_undangan'),
            'deskripsi_undangan' => $request->input('deskripsi_undangan'),
            'harga_undangan' => $request->input('harga_undangan'),
            // 'foto_undangan' => null, // Jika tidak ingin menyimpan kolom foto di sini
        ]);

        // Jika ada file foto yang diunggah
        if ($request->hasFile('foto_undangan')) {
            foreach ($request->file('foto_undangan') as $file) {
                // Generate unique filename
                $filename = time() . '_' . $file->getClientOriginalName();

                // Simpan file di folder storage/app/public/undangan
                $filePath = $file->storeAs('undangan', $filename, 'public');

                // Simpan path foto ke dalam tabel FotoUndangan
                FotoUndangan::create([
                    'undangan_id' => $undangan->id_undangan, // Menggunakan ID undangan yang baru disimpan
                    'foto_path' => $filePath,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Data undangan berhasil ditambahkan.');
    }

    
    public function update(Request $request, $id_undangan)
    {
        $undangans = Undangan::findOrFail($id_undangan);

        $request->validate([
            'bahan_undangan' => 'required|string',
            'deskripsi_undangan' => 'required|string',
            'harga_undangan' => 'required|numeric',
            'foto_undangan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $undangans->bahan_undangan = $request->bahan_undangan;
        $undangans->deskripsi_undangan = $request->deskripsi_undangan;
        $undangans->harga_undangan = $request->harga_undangan;

        if ($request->hasFile('foto_undangan')) {
            $file = $request->file('foto_undangan');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/images'), $filename);
            $undangans->foto_undangan = $filename;
        }

        $undangans->save();

        return redirect()->route('undangan.index')->with('success', 'Data item undangan berhasil diperbarui!');
    }
    public function userUndangan()
    {
        $undangans = Undangan::with('fotoUndangan')->paginate(5); // Menampilkan 5 item per halaman
        return view('home.undangan', compact('undangans'));
    }

}
