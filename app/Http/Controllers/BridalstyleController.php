<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bridalstyle;
use App\Models\Style;

class BridalstyleController extends Controller
{
    // public function index()
    // {
    //     // Ambil data undangans dari database
    //     $bridalstyles = Bridalstyle::paginate(5); // Pagination dengan 5 data per halaman
    //     $styles = Style::paginate(5);
    //     // Kirim data ke view
    //     return view('admin.bridalstyle', compact('bridalstyles', 'styles'));

    // }
    public function index(Request $request)
    {
        // Ambil query pencarian dari parameter 'search'
        $search = $request->input('search');
        
        // Jika ada parameter pencarian, filter data berdasarkan nama paket bridalstyle
        if ($search) {
            $bridalstyles = Bridalstyle::where('nama_paket_bridalstyle', 'like', '%' . $search . '%')->paginate(5);
        } else {
            // Jika tidak ada pencarian, ambil semua data bridalstyle dengan pagination
            $bridalstyles = Bridalstyle::paginate(5);
        }

        // Ambil data styles untuk ditampilkan
        $styles = Style::paginate(5);

        // Kirim data ke view
        return view('admin.bridalstyle', compact('bridalstyles', 'styles'));
    }


    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_paket_bridalstyle' => 'required|string|max:255',
            'deskripsi_paket' => 'nullable|string',
            'harga_paket' => 'required|numeric',
            // 'foto_paket' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Simpan data ke database
        Bridalstyle::create([
            'nama_paket_bridalstyle' => $request->input('nama_paket_bridalstyle'),
            'deskripsi_paket' => $request->input('deskripsi_paket'),
            'harga_paket' => $request->input('harga_paket'),
            // 'foto_paket' => $fotoPath ? basename($fotoPath) : null,
        ]);

        return redirect()->back()->with('success_bridal', 'Data item vendor Bridalstyle berhasil ditambahkan!');
    }

    public function update(Request $request, $id_bridalstyle)
    {
        // Cari item dokumentasi berdasarkan ID
        $bridalstyles = Bridalstyle::findOrFail($id_bridalstyle);

        // Validasi data yang dikirim dari form
        $request->validate([
            'nama_paket_bridalstyle' => 'required|string|max:255',
            'deskripsi_paket' => 'nullable|string',
            'harga_paket' => 'required|numeric',
            // 'foto_paket' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Update data dokumentasi
        $bridalstyles->nama_paket_bridalstyle = $request->nama_paket_bridalstyle;
        $bridalstyles->deskripsi_paket = $request->deskripsi_paket;
        $bridalstyles->harga_paket = $request->harga_paket;


        // Simpan perubahan ke database
        $bridalstyles->save();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('bridalstyle.index')->with('success', 'Data item bridalstyle berhasil diperbarui!');
    }
    // public function storeStyle(Request $request)
    // {
    //     // Validasi data
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_style' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    //     ]);

    //     // Simpan file gambar jika ada yang diunggah
    //     $fotoPath = null; // Inisialisasi variabel fotoPath
    //     if ($request->hasFile('foto_style')) {
    //         // Upload dan simpan file ke storage/public/styles
    //         $fotoPath = $request->file('foto_style')->store('styles', 'public');
    //     }

    //     // Simpan data ke database
    //     $styles = Style::create([
    //         'nama_style' => $request->input('nama_style'),
    //         'foto_style' => $fotoPath ? basename($fotoPath) : null,
    //     ]);

    //     return redirect()->back()->with('success_style', 'Data item Style berhasil ditambahkan!');
    // }
    // public function storeStyle(Request $request)
    // {
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_style.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk beberapa foto
    //     ]);
    
    //     $styles = new Style();
    //     $styles->nama_style = $request->input('nama_style');
    
    //     // Menyimpan foto
    //     if ($request->hasFile('foto_style')) {
    //         $files = $request->file('foto_style');
    //         $fileNames = [];
    //         foreach ($files as $file) {
    //             $filename = time() . '_' . $file->getClientOriginalName();
    //             $file->storeAs('public/styles', $filename);
    //             $fileNames[] = $filename;
    //         }
    //         $styles->foto_styles = json_encode($fileNames); // Simpan nama file dalam format JSON
    //     } else {
    //         $styles->foto_styles = json_encode([]); // Atur sebagai array kosong jika tidak ada foto
    //     }
    
    //     $styles->save();
    
    //     return redirect()->back()->with('success_style', 'Data item style berhasil ditambahkan.');
    // }
    // public function storeStyle(Request $request)
    // {
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_style' => 'required|array', // Gambar wajib diunggah
    //         'foto_style.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe gambar
    //     ]);

    //     $styles = new Style();
    //     $styles->nama_style = $request->input('nama_style');

    //     // Menyimpan foto
    //     $files = $request->file('foto_style');
    //     $fileNames = [];
    //     foreach ($files as $file) {
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('public/styles', $filename);
    //         $fileNames[] = $filename;
    //     }
    //     $styles->foto_style = json_encode($fileNames); // Simpan nama file dalam format JSON

    //     $styles->save();

    //     return redirect()->back()->with('success_style', 'Data item style berhasil ditambahkan.');
    // }
    // public function storeStyle(Request $request)
    // {
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_styles' => 'required|array', // Gambar wajib diunggah
    //         'foto_styles.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe gambar
    //     ]);

    //     $styles = new Style();
    //     $styles->nama_style = $request->input('nama_style');

    //     // Menyimpan foto
    //     $files = $request->file('foto_styles');
    //     $fileNames = [];
    //     foreach ($files as $file) {
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('public/styles', $filename);
    //         $fileNames[] = $filename;
    //     }
    //     $styles->foto_styles = json_encode($fileNames); // Simpan nama file dalam format JSON

    //     $styles->save();

    //     return redirect()->back()->with('success_style', 'Data item style berhasil ditambahkan.');
    // }
    // public function storeStyle(Request $request)
    // {
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_styles' => 'required|array', // Gambar wajib diunggah
    //         'foto_styles.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe gambar
    //     ]);

    //     $styles = new Style();
    //     $styles->nama_style = $request->input('nama_style');

    //     // Menyimpan foto
    //     $files = $request->file('foto_styles');
    //     $fileNames = [];
    //     foreach ($files as $file) {
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('public/styles', $filename);
    //         $fileNames[] = $filename;
    //     }

    //     // Simpan file names sebagai JSON
    //     $styles->foto_styles = json_encode($fileNames); 

    //     $styles->save();

    //     return redirect()->back()->with('success_style', 'Data item style berhasil ditambahkan.');
    // }
    // public function storeStyle(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_styles' => 'required|array',
    //         'foto_styles.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     \Log::info('Request Data:', $request->all()); // Log data request

    //     $style = new Style();
    //     $style->nama_style = $request->input('nama_style');

    //     // Menyimpan foto
    //     $files = $request->file('foto_styles');
    //     $fileNames = [];
    //     foreach ($files as $file) {
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('public/styles', $filename);
    //         $fileNames[] = $filename;
    //     }

    //     // Menyimpan nama file dalam format JSON
    //     $style->foto_styles = json_encode($fileNames);

    //     $style->save();

    //     return redirect()->back()->with('success_style', 'Data item style berhasil ditambahkan.');
    // }
    public function storeStyle(Request $request)
    {
        $request->validate([
            'nama_style' => 'required|string|max:255',
            'foto_styles' => 'required|array',
            'foto_styles.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        \Log::info('Request Data:', $request->all()); // Log data request

        $style = new Style();
        $style->nama_style = $request->input('nama_style');

        // Menyimpan foto
        $files = $request->file('foto_styles');
        $fileNames = [];
        foreach ($files as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/styles', $filename);
            $fileNames[] = $filename;
        }

        // Menyimpan nama file dalam format JSON
        $style->foto_styles = json_encode($fileNames);

        $style->save();

        return redirect()->back()->with('success_style', 'Data item style berhasil ditambahkan.');
    }

    // public function storeStyle(Request $request)
    // {
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_styles' => 'required|array',
    //         'foto_styles.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);
    
    //     \Log::info('Request Data:', $request->all()); // Log data request
    
    //     $styles = new Style();
    //     $styles->nama_style = $request->input('nama_style');
    
    //     // Menyimpan foto
    //     $files = $request->file('foto_styles');
    //     $fileNames = [];
    //     foreach ($files as $file) {
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('public/styles', $filename);
    //         $fileNames[] = $filename;
    //     }
    
    //     $styles->foto_styles = json_encode($fileNames);
    
    //     $styles->save();
    
    //     return redirect()->back()->with('success_style', 'Data item style berhasil ditambahkan.');
    // }

    //bener
    // public function updateStyle(Request $request, $id_style)
    // {
    //     // Validasi data jika diperlukan
    //     $request->validate([
    //         'nama_style' => 'required|string|max:255',
    //         'foto_style' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Temukan item berdasarkan ID
    //     $styles = Style::findOrFail($id_style);

    //     // Upload foto jika ada 
    //     if ($request->hasFile('foto_style')) {

    //         // Simpan foto baru
    //         $fotoPath = $request->file('foto_style')->store('foto_style', 'public');
    //         $styles->foto_style = $fotoPath;
    //     }

    //     // Update data lainnya
    //     $styles->nama_style = $request->input('nama_style');

    //     // Simpan perubahan
    //     $styles->save();

    //     // Redirect dengan pesan sukses
    //     return redirect()->back()->with('success_style', 'Data Item Style berhasil diperbarui!');
    // }
    public function updateStyle(Request $request, $id_style)
    {
        $request->validate([
            'nama_style' => 'required|string|max:255',
            'foto_styles.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $styles = Style::findOrFail($id_style);
        $styles->nama_style = $request->input('nama_style');
    
        if ($request->hasFile('foto_styles')) {
            // Ambil foto yang sudah ada (jika ada)
            $fotoLama = json_decode($styles->foto_styles, true) ?? [];
            
            $fotoPaths = [];
            foreach ($request->file('foto_styles') as $file) {
                // Simpan hanya nama filenya saja, bukan path lengkap
                $namaFile = $file->hashName();
                $file->store('styles', 'public');
                $fotoPaths[] = $namaFile;
            }
            
            // Gabungkan dengan foto lama jika ingin mempertahankannya
            // $fotoPaths = array_merge($fotoLama, $fotoPaths); // Hilangkan komentar jika ingin simpan foto lama
            
            $styles->foto_styles = json_encode($fotoPaths);
        }
    
        $styles->save();
    
        return redirect()->back()->with('success_style', 'Data Item Style berhasil diperbarui!');
    }
    

    //bner
    // public function userBridal()
    // {
    //      $bridalstyles= Bridalstyle::paginate(5); // Menampilkan 5 item per halaman
    //      return view('home.bridalstyle', compact('bridalstyles'));
    // }
    public function userBridal()
    {
        $bridalstyles = Bridalstyle::with('styles')->get();
        return view('home.bridalstyle', compact('bridalstyles'));
    }

}
