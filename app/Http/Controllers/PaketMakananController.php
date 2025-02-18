<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketMakanan;    
use App\Models\PaketDish;
use App\Models\MenuMakanan; 
use App\Models\FotoPaketMaincourse;
use Illuminate\Support\Facades\Storage;


class PaketMakananController extends Controller
{
    //     public function index()
    // {
    //     // Mengambil data PaketMakanan dengan pagination dan memuat relasi foto_paket_mainC
    //     $mainCourse = PaketMakanan::with('foto_paket_mainC')->paginate(5); // Pagination dengan 5 data per halaman
    //     // dd($mainCourse);
    //     $paketDish = PaketDish::paginate(5); // Pagination dengan 5 data per halaman
        
    //     // Mengembalikan view dengan data yang dibutuhkan
    //     return view('admin.katering', compact('mainCourse', 'paketDish'));
    // }

    public function index(Request $request)
    {
        // Ambil input pencarian dari request
        $search = $request->input('search');

        // Ambil data PaketMakanan dengan pagination dan relasi foto_paket_mainC
        $mainCourse = PaketMakanan::with('foto_paket_mainC')
            ->when($search, function ($query, $search) {
                $query->where('nama_paket_mainC', 'like', '%' . $search . '%')
                    ->orWhere('harga_paket_mainC', 'like', '%' . $search . '%');
            })
            ->paginate(5); // Pagination dengan 5 data per halaman
        
         // Ambil data Paket Dish dengan pencarian dan pagination
        $paketDish = PaketDish::when($search, function ($query, $search) {
            $query->where('nama_paket_dish', 'like', '%' . $search . '%')
                ->orWhere('harga_dish', 'like', '%' . $search . '%');
        })
        ->paginate(5); // Pagination dengan 5 data per halaman

        // Kirim data ke view
        return view('admin.katering', compact('mainCourse', 'paketDish', 'search'));
    }



    // public function store(Request $request)
    // {
    //     // Upload foto
    //     $fotoPath = null;
    //     if ($request->hasFile('foto_paket_mainC')) {
    //         $fotoPath = $request->file('foto_paket_mainC')->store('foto_mainC', 'public');
    //     };
        
    //     PaketMakanan::create([
    //         'nama_paket_mainC' => $request->input('nama_paket_mainC'),
    //         'deskripsi_mainC' => $request->input('deskripsi_mainC'),
    //         'harga_paket_mainC' => $request->input('harga_paket_mainC'),
    //         'foto_paket_mainC' => $fotoPath,
    //     ]);

    //     // return redirect()->route('paketmakanan.index')->with('success', 'Paket Main Course berhasil ditambahkan!');
    //     return redirect()->back()->with('success_maincourse', 'Data Main Course berhasil ditambahkan!');
    // }

    //     public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'nama_paket_mainC' => 'required|string|max:255',
    //         'deskripsi_mainC' => 'required|string',
    //         'harga_paket_mainC' => 'required|numeric',
    //         'foto_paket_mainC.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi foto
    //     ]);

    //     // Simpan data paket makanan sekali saja
    //     $mainCourse = PaketMakanan::create([
    //         'nama_paket_mainC' => $request->input('nama_paket_mainC'),
    //         'deskripsi_mainC' => $request->input('deskripsi_mainC'),
    //         'harga_paket_mainC' => $request->input('harga_paket_mainC'),
    //     ]);

    //     // Jika ada file foto yang diunggah
    //     if ($request->hasFile('foto_paket_mainC')) {
    //         foreach ($request->file('foto_paket_mainC') as $file) {
    //             // Generate unique filename
    //             $filename = time() . '_' . $file->getClientOriginalName();

    //             // Simpan file di folder storage/app/public/paketmakanan
    //             $filePath = $file->storeAs('paketmakanan', $filename, 'public');

    //             //  Debug path yang disimpan
    //             // dd($filePath);

    //             // Simpan path foto ke dalam tabel FotoPaketMaincourse tanpa menambah data paket makanan
    //             FotoPaketMaincourse::create([
    //                 'mainC_id' => $mainCourse->id_mainC, // Menggunakan ID paket makanan yang baru disimpan
    //                 'foto_path' => $filePath,
    //             ]);
    //         }
    //     }

    //     return redirect()->back()->with('success_maincourse', 'Data Main Course berhasil ditambahkan!');


    // }


    public function store(Request $request)
    {
        try {
            // Validasi
            $request->validate([
                'nama_paket_mainC' => 'required|string|max:255',
                'deskripsi_mainC' => 'required|string',
                'harga_paket_mainC' => 'required|numeric',
                'foto_paket_mainC.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Buat PaketMakanan
            $mainCourse = PaketMakanan::create([
                'nama_paket_mainC' => $request->nama_paket_mainC,
                'deskripsi_mainC' => $request->deskripsi_mainC,
                'harga_paket_mainC' => $request->harga_paket_mainC,
            ]);

            // Menyimpan Foto Jika Ada
            $fotoPaths = [];
            if ($request->hasFile('foto_paket_mainC')) {
                foreach ($request->file('foto_paket_mainC') as $file) {
                    // Generate filename unik
                    $filename = time() . '_' . $file->getClientOriginalName();
                    
                    // Simpan file ke direktori 'public/images'
                    $file->move(public_path('images'), $filename);
                    
                    // Simpan path foto ke dalam array
                    $fotoPaths[] = $filename;
                }
            }

            // Menyimpan path foto dalam bentuk array di database
            $mainCourse->update([
                'foto_paket_mainC' => json_encode($fotoPaths)
            ]);

            return redirect()->back()->with('success_maincourse', 'Data berhasil ditambahkan!');
        } catch (\Exception $e) {
            \Log::error('Error uploading: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_paket_mainC' => 'required|string|max:255',
            'deskripsi_mainC' => 'nullable|string',
            'harga_paket_mainC' => 'required|numeric',
            'foto_paket_mainC.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi array foto
        ]);
    
        // Ambil data berdasarkan ID
        $mainCourse = PaketMakanan::findOrFail($id);
    
        // Upload foto jika ada
        if ($request->hasFile('foto_paket_mainC')) {
            // Hapus foto lama jika ada
            if ($mainCourse->foto_paket_mainC) {
                $oldPhotos = json_decode($mainCourse->foto_paket_mainC, true);
                foreach ($oldPhotos as $oldPhoto) {
                    $oldPhotoPath = public_path('images/' . $oldPhoto);
                    if (file_exists($oldPhotoPath)) {
                        unlink($oldPhotoPath);
                    }
                }
            }
    
            // Simpan foto baru
            $fotoPaths = [];
            foreach ($request->file('foto_paket_mainC') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $fileName);
                $fotoPaths[] = $fileName;
            }
    
            // Simpan sebagai JSON
            $mainCourse->foto_paket_mainC = json_encode($fotoPaths);
        }
    
        // Update data lainnya
        $mainCourse->nama_paket_mainC = $request->nama_paket_mainC;
        $mainCourse->deskripsi_mainC = $request->deskripsi_mainC;
        $mainCourse->harga_paket_mainC = $request->harga_paket_mainC;
    
        // Simpan perubahan
        $mainCourse->save();
    
        return redirect()->back()->with('success_maincourse', 'Data Main Course berhasil diperbarui!');
    }
    
    
    // Method untuk store Paket Dishes
    // public function storeDishes(Request $request)
    // {
        
    //     $fotoPath = null;
    //     if ($request->hasFile('foto_paket_dish')) {
    //         $fotoPath = $request->file('foto_paket_dish')->store('foto_dish', 'public');
    //     };

    //     PaketMakanan::create([
    //         'nama_paket_dish' => $request->input('nama_paket_dish'),
    //         'deskripsi_dish' => $request->input('deskripsi_dish'),
    //         'harga_dish' => $request->input('harga_dish'),
    //         'foto_paket_dish' => $fotoPath,
    //     ]);
    
    //     // Redirect dengan pesan sukses
    //     return redirect()->back()->with('success', 'Paket Dishes berhasil ditambahkan!');
    // }
    //yg bener
    // public function storeDishes(Request $request)
    // {
    //     // Validasi jika diperlukan
    //     $request->validate([
    //         'nama_paket_dish' => 'required|string|max:255',
    //         'deskripsi_dish' => 'nullable|string',
    //         'harga_dish' => 'required|numeric',
    //         'foto_paket_dish' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Upload foto
    //     $fotoPath = null;
    //     if ($request->hasFile('foto_paket_dish')) {
    //         $fotoPath = $request->file('foto_paket_dish')->store('foto_dish', 'public');
    //     }

    //     // Simpan data ke tabel PaketDish
    //     PaketDish::create([
    //         'nama_paket_dish' => $request->input('nama_paket_dish'),
    //         'deskripsi_dish' => $request->input('deskripsi_dish'),
    //         'harga_dish' => $request->input('harga_dish'),
    //         'foto_paket_dish' => $fotoPath,
    //     ]);

    //     // Redirect dengan pesan sukses
    //     return redirect()->back()->with('success_dishes', 'Paket Dishes berhasil ditambahkan!');
    // }

    //yg bener dan terakhir digunakan
    public function storeDishes(Request $request)
{
    // Validasi jika diperlukan
    $request->validate([
        'nama_paket_dish' => 'required|string|max:255',
        'deskripsi_dish' => 'nullable|string',
        'harga_dish' => 'required|numeric',
        'foto_paket_dish' => 'nullable|array', // Tambahkan aturan array
        'foto_paket_dish.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi setiap foto
    ]);

    $fotoPaths = [];
    if ($request->hasFile('foto_paket_dish')) {
        foreach ($request->file('foto_paket_dish') as $foto) {
            $fotoPath = $foto->store('foto_paket_dish', 'public');
            $fotoPaths[] = $fotoPath; // Menyimpan path foto
        }   
    }

    // Simpan data ke tabel PaketDish
    PaketDish::create([
        'nama_paket_dish' => $request->input('nama_paket_dish'),
        'deskripsi_dish' => $request->input('deskripsi_dish'),
        'harga_dish' => $request->input('harga_dish'),
        'foto_paket_dish' => json_encode($fotoPaths), // Simpan foto sebagai JSON
    ]);

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success_dishes', 'Paket Dishes berhasil ditambahkan!');
}

// public function storeDishes(Request $request)
// {
//     $request->validate([
//         'nama_paket_dish' => 'required|string|max:255',
//         'deskripsi_dish' => 'nullable|string',
//         'harga_dish' => 'required|numeric',
//         'foto_paket_dish.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     $fotoPaths = [];
//     if ($request->hasFile('foto_paket_dish')) {
//         foreach ($request->file('foto_paket_dish') as $foto) {
//             $fotoPath = $foto->store('foto_paket_dish', 'public');
//             $fotoPaths[] = $fotoPath;
//         }   
//     }

//     PaketDish::create([
//         'nama_paket_dish' => $request->input('nama_paket_dish'),
//         'deskripsi_dish' => $request->input('deskripsi_dish'),
//         'harga_dish' => $request->input('harga_dish'),
//         'foto_paket_dish' => implode(',', $fotoPaths), // Simpan sebagai string dipisahkan koma
//     ]);

//     return redirect()->back()->with('success_dishes', 'Paket Dishes berhasil ditambahkan!');
// }

// public function storeDishes(Request $request)
// {
//     $request->validate([
//         'nama_paket_dish' => 'required|string|max:255',
//         'deskripsi_dish' => 'nullable|string',
//         'harga_dish' => 'required|numeric',
//         'foto_paket_dish.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     $fotoPaths = [];
//     if ($request->hasFile('foto_paket_dish')) {
//         foreach ($request->file('foto_paket_dish') as $foto) {
//             // Simpan file ke folder public/images
//             $filename = time() . '_' . $foto->getClientOriginalName();
//             $foto->move(public_path('images'), $filename);
//             $fotoPaths[] = $filename;
//         }   
//     }

//     PaketDish::create([
//         'nama_paket_dish' => $request->input('nama_paket_dish'),
//         'deskripsi_dish' => $request->input('deskripsi_dish'),
//         'harga_dish' => $request->input('harga_dish'),
//         'foto_paket_dish' => json_encode($fotoPaths), // Simpan sebagai JSON
//     ]);

//     return redirect()->back()->with('success_dishes', 'Paket Dishes berhasil ditambahkan!');
// }

    // public function updateDishes(Request $request, $id)
    // {
    //     // Validasi data jika diperlukan
    //     $request->validate([
    //         'nama_paket_dish' => 'required|string|max:255',
    //         'deskripsi_dish' => 'nullable|string',
    //         'harga_dish' => 'required|numeric',
    //         'foto_paket_dish' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Temukan item berdasarkan ID
    //     $dish = PaketMakanan::findOrFail($id);

    //     // Upload foto jika ada
    //     if ($request->hasFile('foto_paket_dish')) {
    //         // Hapus foto lama jika ada
    //         if ($dish->foto_paket_dish) {
    //             $oldPhotoPath = public_path('images/' . $dish->foto_paket_dish);
    //             if (file_exists($oldPhotoPath)) {
    //                 unlink($oldPhotoPath);
    //             }
    //         }

    //         // Simpan foto baru
    //         $fileName = time() . '.' . $request->foto_paket_dish->extension();
    //         $request->foto_paket_dish->move(public_path('images'), $fileName);
    //         $dish->foto_paket_dish = $fileName;
    //     }

    //     // Update data lainnya
    //     $dish->nama_paket_dish = $request->nama_paket_dish;
    //     $dish->deksripsi_dish = $request->deksripsi_dish;
    //     $dish->harga_dish = $request->harga_dish;
    //     // Simpan perubahan
    //     $dish->save();

    //     // Redirect dengan pesan sukses
    //     // return redirect()->route('paketmakanan.index')->with('success', 'Paket MainCourse berhasil diperbarui!');
    //     return redirect()->back()->with('success_dishes', 'Data Dishes berhasil diperbarui!');
    // }

    //bener
    // public function updateDishes(Request $request, $id_dishes)
    // {
    //     // Validasi data jika diperlukan
    //     $request->validate([
    //         'nama_paket_dish' => 'required|string|max:255',
    //         'deskripsi_dish' => 'nullable|string',
    //         'harga_dish' => 'required|numeric',
    //         'foto_paket_dish' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Temukan item berdasarkan ID
    //     $paketDish = PaketDish::findOrFail($id_dishes);

    //     // Upload foto jika ada 
    //     if ($request->hasFile('foto_paket_dish')) {

    //         // Simpan foto baru
    //         $fotoPath = $request->file('foto_paket_dish')->store('foto_dish', 'public');
    //         $paketDish->foto_paket_dish = $fotoPath;
    //     }

    //     // Update data lainnya
    //     $paketDish->nama_paket_dish = $request->input('nama_paket_dish');
    //     $paketDish->deskripsi_dish = $request->input('deskripsi_dish');
    //     $paketDish->harga_dish = $request->input('harga_dish');

    //     // Simpan perubahan
    //     $paketDish->save();

    //     // Redirect dengan pesan sukses
    //     return redirect()->back()->with('success_dishes', 'Data Dishes berhasil diperbarui!');
    // }

//     yg bener
//    public function updateDishes(Request $request, $id_dishes)
//     {
//         // Validasi data
//         $request->validate([
//             'nama_paket_dish' => 'required|string|max:255',
//             'deskripsi_dish' => 'nullable|string',
//             'harga_dish' => 'required|numeric',
//             'foto_paket_dish' => 'nullable|array',
//             'foto_paket_dish.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         // Temukan item berdasarkan ID
//         $paketDish = PaketDish::findOrFail($id_dishes);

//         // Upload foto jika ada
//         if ($request->hasFile('foto_paket_dish')) {
//             $uploadedPhotos = [];
            
//             foreach ($request->file('foto_paket_dish') as $photo) {
//                 $path = $photo->store('foto_dish', 'public');
//                 $uploadedPhotos[] = $path;
//             }

//             // Gabungkan foto yang ada dan foto baru
//             $paketDish->foto_paket_dish = implode(',', $uploadedPhotos);
//         }

//         // Update data lainnya
//         $paketDish->nama_paket_dish = $request->input('nama_paket_dish');
//         $paketDish->deskripsi_dish = $request->input('deskripsi_dish');
//         $paketDish->harga_dish = $request->input('harga_dish');

//         // Simpan perubahan
//         $paketDish->save();

//         // Redirect dengan pesan sukses
//         return redirect()->back()->with('success_dishes', 'Data Dishes berhasil diperbarui!');
//     }

//benar &digunakan
// public function updateDishes(Request $request, $id_dishes)
// {
//     $paketDish = PaketDish::findOrFail($id_dishes);

//     if ($request->hasFile('foto_paket_dish')) {
//         // Hapus foto lama
//         if ($paketDish->foto_paket_dish) {
//             $oldPhotos = explode(',', $paketDish->foto_paket_dish);
//             foreach ($oldPhotos as $oldPhoto) {
//                 Storage::disk('public')->delete($oldPhoto);
//             }
//         }

//         // Unggah foto baru
//         $fotoPaths = [];
//         foreach ($request->file('foto_paket_dish') as $file) {
//             $fotoPath = $file->store('foto_paket_dish', 'public');
//             $fotoPaths[] = $fotoPath;
//         }

//         $paketDish->foto_paket_dish = implode(',', $fotoPaths);
//     }

//     // Update data lainnya
//     $paketDish->nama_paket_dish = $request->nama_paket_dish;
//     $paketDish->deskripsi_dish = $request->deskripsi_dish;
//     $paketDish->harga_dish = $request->harga_dish;

//     $paketDish->save();

//     return redirect()->back()->with('success_dishes', 'Data Dishes berhasil diperbarui!');
// }

public function updateDishes(Request $request, $id_dishes)
{
    // Validasi input
    $request->validate([
        'nama_paket_dish' => 'required|string|max:255',
        'deskripsi_dish' => 'nullable|string',
        'harga_dish' => 'required|numeric',
        'foto_paket_dish.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Ambil data berdasarkan ID
    $paketDish = PaketDish::findOrFail($id_dishes);

    // Upload foto jika ada
    if ($request->hasFile('foto_paket_dish')) {
        // Hapus foto lama jika ada
        if ($paketDish->foto_paket_dish) {
            $oldPhotos = json_decode($paketDish->foto_paket_dish, true);
            if (is_array($oldPhotos)) {
                foreach ($oldPhotos as $oldPhoto) {
                    Storage::disk('public')->delete($oldPhoto);
                }
            }
        }

        // Simpan foto baru
        $fotoPaths = [];
        foreach ($request->file('foto_paket_dish') as $file) {
            $path = $file->store('foto_paket_dish', 'public');
            $fotoPaths[] = $path;
        }

        // Simpan sebagai JSON
        $paketDish->foto_paket_dish = json_encode($fotoPaths);
    }

    // Update data lainnya
    $paketDish->nama_paket_dish = $request->nama_paket_dish;
    $paketDish->deskripsi_dish = $request->deskripsi_dish;
    $paketDish->harga_dish = $request->harga_dish;

    // Simpan perubahan
    $paketDish->save();

    return redirect()->back()->with('success_dishes', 'Data Dishes berhasil diperbarui!');
}



    // public function searchDishes(Request $request)
    // {
    //     $search = $request->input('search');

    //     $paketDish = PaketDish::when($search, function ($query, $search) {
    //             $query->where('nama_paket_dish', 'like', '%' . $search . '%')
    //                 ->orWhere('harga_dish', 'like', '%' . $search . '%');
    //         })
    //         ->paginate(5);

    //     return response()->json([
    //         'paketDish' => $paketDish
    //     ]);
    // }

    
    // bener
    // public function userKateringMainC()
    // {
    //     $mainCourse = PaketMakanan::with('foto_paket_mainC')->paginate(5);
    //     return view('home.katering', compact('mainCourse'));
    // }

    public function userKateringMainC()
    {
        $mainCourse = PaketMakanan::all();
        return view('home.katering', compact('mainCourse'));
    }


    //     public function userKateringMainC()
    // {
    //     try {
    //         $mainCourse = PaketMakanan::with('foto_paket_mainC')->paginate(5);
    //         return view('home.katering', compact('mainCourse'));
    //     } catch (\Exception $e) {
    //         \Log::error('Error in KateringController: ' . $e->getMessage());
    //         return back()->with('error', 'Terjadi kesalahan saat memuat data.');
    //     }
    // }

    public function userKateringDishes()
    {
        $paketDish = PaketDish::all();
        return view('home.dishes', compact('paketDish'));
    }


}
