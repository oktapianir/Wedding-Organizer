<?php
namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\FotoGedung;



class GedungController extends Controller
{
    // public function index()
    // {
    //     $gedung = Gedung::with('fotoGedung')->paginate(5);
    //     return view('admin.item', compact('gedung'));
    //     // $gedung = Gedung::paginate(5); // Menampilkan 5 item per halaman
    //     // return view('admin.item', compact('gedung'));
    // }
    public function index(Request $request)
{
    // Ambil input pencarian dari request
    $search = $request->input('search');
    
    // Ambil data gedung dengan pencarian (jika ada) dan paginate
    $gedung = Gedung::when($search, function ($query, $search) {
            $query->where('nama_gedung', 'like', '%' . $search . '%')
                ->orWhere('status_gedung', 'like', '%' . $search . '%');
        })
        ->paginate(5); // Pagination dengan 5 data per halaman

    // Kirim data ke view
    return view('admin.item', compact('gedung', 'search'));
}

    


    public function create()
    {
        $gedung = Gedung::paginate(5); // Menampilkan 5 item per halaman
        return view('admin.item', compact('gedung'));
         // return view('admin.item'); // Menampilkan form untuk menambah gedung
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nama_gedung' => 'required|string|max:255',
            'tipe_gedung' => 'required',
            'alamat_gedung' => 'required|string',
            'kapasitas_gedung' => 'required|integer',
            'harga_gedung' => 'nullable|integer',
            'status_gedung' => 'required',
            'deskripsi_gedung' => 'nullable|string',
            'foto_gedung.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation for each image
        ]);

        // Simpan data gedung
        $gedung = Gedung::create([
            'nama_gedung' => $request->nama_gedung,
            'tipe_gedung' => $request->tipe_gedung,
            'alamat_gedung' => $request->alamat_gedung,
            'kapasitas_gedung' => $request->kapasitas_gedung,
            'harga_gedung' => $request->harga_gedung,
            'status_gedung' => $request->status_gedung,
            'deskripsi_gedung' => $request->deskripsi_gedung,
        ]);

           // Simpan beberapa foto
            if ($request->hasFile('foto_gedung')) {
                foreach ($request->file('foto_gedung') as $file) {
                    // Menghasilkan nama file unik
                    $filename = uniqid() . '-' . $file->getClientOriginalName(); // Nama file unik
                    $path = $file->storeAs('public/foto_gedung', $filename); // Simpan file

                    // Simpan path foto ke database
                    FotoGedung::create([
                        'gedung_id' => $gedung->id_gedung, // Pastikan ini sesuai dengan kolom yang ada
                        'foto_path' => $path,
                    ]);
                }
            }
        return redirect()->route('gedung.index')->with('success', 'Data Gedung berhasil ditambahkan!');
    }


    public function edit($id_gedung)
    {
        $gedung = Gedung::with('fotoGedung')->findOrFail($id_gedung);
        return view('admin.item', compact('gedung'));
        // Log::info("Editing Gedung with ID: $id");
        // $gedung = Gedung::find($id_gedung);
        // dd($gedung);

        // return view('admin.item', compact('gedung'));
    }

    public function update(Request $request, $id_gedung)
    {
        try {
            // Temukan gedung dengan ID yang diberikan
            $gedung = Gedung::findOrFail($id_gedung);

            // Validasi data
            $validated = $request->validate([
                'nama_gedung' => 'required|string|max:255',
                'tipe_gedung' => 'required|string|max:255',
                'alamat_gedung' => 'required|string|max:255',
                'kapasitas_gedung' => 'required|integer',
                'harga_gedung' => 'required|numeric',
                'status_gedung' => 'required|string|max:255',
                'deskripsi_gedung' => 'nullable|string',
                'foto_gedung' => 'nullable|array', // Pastikan ini adalah array untuk file gambar
                'foto_gedung.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk setiap foto
                'remove_foto' => 'nullable|array', // Validasi untuk ID foto yang ingin dihapus
            ]);

            // Hapus foto yang dipilih
            if ($request->has('remove_foto')) {
                foreach ($request->remove_foto as $fotoId) {
                    $foto = FotoGedung::findOrFail($fotoId);
                    Storage::disk('public')->delete($foto->foto_path); // Menghapus file dari penyimpanan
                    $foto->delete(); // Menghapus entri dari database
                }
            }

            // Mengelola foto baru jika ada
            if ($request->hasFile('foto_gedung')) {
                foreach ($request->file('foto_gedung') as $file) {
                    $fotoPath = $file->store('foto_gedung', 'public');
                    // Simpan data foto baru ke database
                    $gedung->fotoGedung()->create(['foto_path' => $fotoPath]);
                }
            }

            // Update data gedung
            $gedung->update($validated);

            // Redirect atau respon
            return redirect()->route('gedung.index')->with('success', 'Data gedung berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error("Terjadi kesalahan: " . $e->getMessage());
            return redirect()->back()->withErrors('Gagal memperbarui data gedung.'. $e->getMessage());
        }
    }






        // Metode untuk User
    // public function userIndex()
    // {
    //     $gedung = Gedung::all; // Menampilkan 5 item per halaman
    //     dd($gedung);
    //     return view('home.gedung', compact('gedung'));
    // }

    // public function show($id_gedung)
    // {
    //     $gedung = Gedung::findOrFail($id_gedung);
    //     return view('home.detail', compact('gedung'));
    // }

     // Method untuk menampilkan detail (misalnya untuk AJAX)
    public function show($id_gedung)
    {
        $gedung = Gedung::find($id_gedung);

        if ($gedung) {
            return response()->json($gedung);
        }

        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    // public function show($id_gedung)
    // {
    //     $gedung = Gedung::findOrFail($id_gedung);
    //     return response()->json($gedung);
    // }

    
     // Metode untuk User
     public function userGedung()
     {
         $gedung = Gedung::paginate(5); // Menampilkan 5 item per halaman
         return view('home.gedung', compact('gedung'));
     }

    //  public function filterGedung(Request $request)
    //  {
    //      // Ambil input dari request
    //      $tanggal = $request->input('tanggal');
    //      $kapasitas = $request->input('kapasitas');
     
    //      // Query dasar untuk gedung
    //      $query = Gedung::with('fotoGedung');
     
    //      // Filter berdasarkan kapasitas
    //      if ($kapasitas) {
    //          $query->where('kapasitas_gedung', '>=', $kapasitas);
    //      }
     
    //     //  Filter berdasarkan tanggal (jika ada, ini bisa disesuaikan sesuai logika bisnis)
    //      if ($tanggal) {
    //          $query->whereDoesntHave('acara', function($q) use ($tanggal) {
    //              $q->where('tanggal_acara', $tanggal);
    //          });
    //      }
     
    //      // Paginate hasilnya
    //      $gedung = $query->paginate(5);
     
    //      // Kembalikan view dengan data gedung yang sudah difilter
    //      return view('home.gedung', compact('gedung'));
    //  }

    // public function filterGedung(Request $request)
    // {
    //     // Ambil input kapasitas dari request
    //     $kapasitas = $request->input('kapasitas');

    //     // Query dasar untuk gedung dengan fotoGedung terkait
    //     $query = Gedung::with('fotoGedung');

    //     // Filter berdasarkan kapasitas gedung jika input kapasitas diberikan
    //     if ($kapasitas) {
    //         $query->where('kapasitas_gedung', '>=', $kapasitas);
    //     }

    //     // Paginate hasilnya, tampilkan 5 item per halaman
    //     $gedung = $query->paginate(5);

    //     // Kembalikan view dengan data gedung yang sudah difilter
    //     return view('home.gedung', compact('gedung'));
    // }

    // public function filterGedung(Request $request)
    // {
    //     // Ambil input dari request
    //     $tanggal = $request->input('tanggal');
    //     $kapasitas = $request->input('kapasitas');

    //     // Debugging: cek inputan
    //     dd($request->all());

    //     // Query dasar untuk gedung
    //     $query = Gedung::with('fotoGedung');

    //     // Filter berdasarkan kapasitas
    //     if ($kapasitas) {
    //         $query->where('kapasitas_gedung', '>=', $kapasitas);
    //     }

    //     // Jika perlu, filter berdasarkan tanggal
    //     // if ($tanggal) {
    //     //     $query->whereDoesntHave('acara', function($q) use ($tanggal) {
    //     //         $q->where('tanggal_acara', $tanggal);
    //     //     });
    //     // }

    //     // Paginate hasilnya
    //     $gedung = $query->paginate(5);

    //     // Kembalikan view dengan data gedung yang sudah difilter
    //     return view('home.gedung', compact('gedung'));
    // }

    // public function filterGedung(Request $request)
    // {
    //     // Ambil input dari request
    //     $kapasitas = $request->input('kapasitas');

    //     // Query dasar untuk gedung
    //     $query = Gedung::with('fotoGedung');

    //     // Filter berdasarkan kapasitas
    //     if ($kapasitas) {
    //         $query->where('kapasitas_gedung', '>=', $kapasitas);
    //     }

    //     // Ambil hasil query
    //     $gedung = $query->paginate(5);
        
    //     // Debugging: tampilkan hasil gedung
    //     // dd($gedung);
        
    //     // Kembalikan view dengan data gedung yang sudah difilter
    //     return view('home.gedung', compact('gedung'));
    // }

//     public function filterGedung(Request $request)
// {
//     // Ambil input dari request
//     $tanggal = $request->input('tanggal');
//     $kapasitas = $request->input('kapasitas');

//     // Mulai query untuk gedung
//     $query = Gedung::with('fotoGedung');

//     // Filter berdasarkan kapasitas
//     if ($kapasitas) {
//         $query->where('kapasitas_gedung', '>=', $kapasitas);
//     }

//     // Ambil hasil query
//     $gedung = $query->paginate(5);
    
//     // Kembalikan view dengan data gedung yang sudah difilter
//     return view('home.gedung', compact('gedung'));
// }

// public function filterGedung(Request $request)
// {
//     $tanggal = $request->input('tanggal');
//     $kapasitas = $request->input('kapasitas');

//     // Mulai query untuk gedung
//     $query = Gedung::with('fotoGedung');

//     // Filter berdasarkan kapasitas
//     if ($kapasitas) {
//         // Pastikan kapasitas adalah angka dan sesuai dengan yang diinginkan
//         $query->where('kapasitas_gedung', '>=', $kapasitas);
//     }

//     // Ambil hasil query
//     $gedung = $query->paginate(5);

//     // Debugging: Cek query yang dihasilkan
//     // dd($query->toSql(), $query->getBindings()); // Uncomment untuk melihat query

//     return view('home.gedung', compact('gedung'));
// }


//bener dan digunakan
// public function filterGedung(Request $request)
// {
//     $tanggal = $request->input('tanggal');
//     $kapasitas = $request->input('kapasitas');

//     // Mulai query untuk gedung
//     $query = Gedung::with('fotoGedung');

//     // Filter berdasarkan kapasitas
//     if ($kapasitas) {
//         // Pastikan kapasitas adalah angka dan sesuai dengan yang diinginkan
//         $query->where('kapasitas_gedung', '=', $kapasitas); // Menggunakan '=' untuk hanya menampilkan kapasitas yang tepat
//     }

//     // Ambil hasil query
//     $gedung = $query->paginate(5);

//     // Debugging: Cek query yang dihasilkan
//     // dd($query->toSql(), $query->getBindings()); // Uncomment untuk melihat query

//     return view('home.gedung', compact('gedung'));
// }

public function filterGedung(Request $request)
{
    $tanggal = $request->input('tanggal');
    $kapasitas = $request->input('kapasitas');

    // Filter gedung berdasarkan tanggal acara dan kapasitas
    $gedung = Gedung::whereNotIn('id_gedung', function($query) use ($tanggal) {
        $query->select('id_gedung')
              ->from('pemesanan_gedung')
              ->where('tanggal_acara', $tanggal);
    })
    ->where('kapasitas_gedung', '>=', $kapasitas)
    ->get();

    return view('home.gedung', compact('gedung'));
}






     


}



