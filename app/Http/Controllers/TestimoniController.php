<?php
namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class TestimoniController extends Controller
{
    public function getRatings()
    {
        // Ambil jumlah testimoni berdasarkan rating
        // $ratings = DB::table('testimonis')
        //     ->select('rating', DB::raw('count(*) as total'))
        //     ->groupBy('rating')
        //     ->orderBy('rating')
        //     ->get();
        
        // // Format data untuk dikembalikan ke view
        // $data = [
        //     'ratings' => $ratings->pluck('rating')->toArray(),
        //     'counts' => $ratings->pluck('total')->toArray(),
        // ];

            // Ambil jumlah testimoni berdasarkan rating
            $ratings = DB::table('testimonis')
                ->select('rating', DB::raw('count(*) as total'))
                ->groupBy('rating')
                ->orderBy('rating')
                ->get();
        
            // Format data untuk dikembalikan ke view
            $data = [
                'ratings' => $ratings->pluck('rating')->toArray(),
                'counts' => $ratings->pluck('total')->toArray(),
            ];
        
            // return response()->json($data);

    return view('admin.index', compact('data'));
    }
    // Menampilkan daftar testimoni
    public function index()
    {
        $testimonis = Testimoni::paginate(10);
        return view('admin.testimoni', compact('testimonis'));
    }

    // Menampilkan detail testimoni berdasarkan ID
    // public function show($id)
    // {
    //     // Temukan testimoni berdasarkan ID atau gagal jika tidak ditemukan
    //     $testimonis = Testimoni::findOrFail($id);
        
    //     // Kirim data testimoni ke view
    //     return view('admin.testimoni', compact('testimonis'));
    // }

    // Menghapus testimoni berdasarkan ID
    public function destroy($id)
    {
        $testimonis = Testimoni::findOrFail($id);
        $testimonis->delete();
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus.');
    }

    // public function indexUser()
    // {
    //     $testimonis = Testimoni::all(); // Ambil semua testimoni dari database
    //     return view('home.testimoni', compact('testimonis')); // Tampilkan ke view bagian user
    // }

    public function indexUser()
    {
        $testimonis = Testimoni::all();
        $pemesanans = Pemesanan::where('id_customer', Auth::id())->get();

        Log::info('Auth::id(): ' . Auth::id()); // Debug ID user yang sedang login
        Log::info('Data Pemesanans:', $pemesanans->toArray()); // Debug data hasil query

        return view('home.testimoni', compact('testimonis', 'pemesanans'));
    }


    // public function createTestimoni()
    // {
    //     // Ambil user yang login
    //     $user = Auth::user();
    //     Log::info('User logged in:', ['id' => $user->id, 'name' => $user->name]);

    //     // Ambil semua pemesanan terkait user
    //     $pemesanans = $user->pemesanans;
    //     Log::info('All pemesanans related to the user:', $pemesanans->toArray());

    //     // Ambil pemesanan terakhir berdasarkan created_at
    //     $pemesanan = $user->pemesanans()->orderBy('created_at', 'desc')->first();
    //     Log::info('Latest pemesanan:', $pemesanan ? $pemesanan->toArray() : 'No pemesanan found');

    //     // Ambil id_pemesanan atau null jika tidak ditemukan
    //     $id_pemesanan = $pemesanan ? $pemesanan->id_pemesanan : null;
    //     Log::info('Final id_pemesanan:', ['id_pemesanan' => $id_pemesanan]);

    //     // Debugging langsung ke layar
    //     dd([
    //         'user' => $user,
    //         'pemesanans' => $pemesanans,
    //         'latest_pemesanan' => $pemesanan,
    //         'id_pemesanan' => $id_pemesanan,
    //     ]);

    //     // Kirim ke view
    //     return view('testimoni.form', compact('id_pemesanan'));
    // }

    public function createTestimoni($id_pemesanan)
{
    // Ambil user yang login
    $user = Auth::user();
    
    // Ambil data pemesanan spesifik berdasarkan id_pemesanan yang diklik
    // dan pastikan pemesanan tersebut milik user yang sedang login
    $pemesanan = Pemesanan::where('id_pemesanan', $id_pemesanan)
                          ->where('id_customer', $user->id)
                          ->first();

    // Logging untuk debugging
    Log::info('Testimoni request:', [
        'user_id' => $user->id,
        'requested_pemesanan_id' => $id_pemesanan,
        'pemesanan_found' => $pemesanan ? 'yes' : 'no'
    ]);

    // Jika pemesanan tidak ditemukan, redirect dengan pesan error
    if (!$pemesanan) {
        return redirect()->back()->with('error', 'Pemesanan tidak ditemukan');
    }

    // Kirim data ke view
    return view('home.testimoni', compact('id_pemesanan'));
}

    // public function showLastPemesanan()
    // {
    //     // Mendapatkan ID pengguna yang sedang login
    //     $userId = Auth::id();
        
    //     // Mendapatkan pemesanan terakhir berdasarkan ID pengguna, diurutkan berdasarkan 'created_at' secara descending
    //     $lastPemesanan = Pemesanan::where('id_customer', $userId)
    //         ->orderBy('created_at', 'desc')  // Menggunakan created_at untuk pengurutan
    //         ->first();  // Mengambil hanya satu hasil (pemesan terakhir)

    //     // Kirim data pemesanan terakhir ke view
    //     return view('home.testimoni', compact('lastPemesanan'));
    // }

    // public function storeTestimoni(Request $request)
    // {
    //     // Validasi form
    //     $request->validate([
    //         'id_cust' => 'required|exists:users,id',
    //         'id_pemesanan' => 'required|exists:pemesanans,id',
    //         'testimoni' => 'required|string',
    //         'rating' => 'required|integer|min:1|max:5',
    //         'nama' => 'required|string|max:255',  // Validasi nama
    //     ]);

    //     // Simpan data testimoni, termasuk nama
    //     Testimoni::create([
    //         'id_cust' => $request->id_cust,
    //         'id_pemesanan' => $request->id_pemesanan,
    //         'testimoni' => $request->testimoni,
    //         'rating' => $request->rating,
    //         'nama' => $request->nama,  // Menyimpan nama yang diinputkan
    //     ]);

    //     return redirect()->back()->with('success', 'Testimoni berhasil dikirim!');
    // }

    public function storeTestimoni(Request $request)
    {
        // Validasi form input
        $request->validate([
            'id_cust' => 'required|exists:users,id',
            'id_pemesanan' => 'required|exists:pemesanans,id_pemesanan',
            'testimoni' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'nama' => 'required|string|max:255',
        ]);

        // Cek apakah pemesanan yang dimaksud ada
        $pemesanan = Pemesanan::where('id_pemesanan', $request->id_pemesanan)->first();
        if (!$pemesanan) {
            return redirect()->back()->with('error', 'Pemesanan tidak ditemukan.');
        }

        try {
            // Simpan data testimoni ke tabel
            $testimoni = Testimoni::create([
                'id_cust' => $request->id_cust,
                'id_pemesanan' => $request->id_pemesanan,
                'testimoni' => $request->testimoni,
                'rating' => $request->rating,
                'nama' => $request->nama, 
            ]);

            // Tambahkan log untuk memeriksa apakah session 'success' sudah diteruskan
            \Log::info('Testimoni berhasil dikirim!');

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Testimoni berhasil dikirim!Terimakasih telah mempercayakan acara anda pada kami.');
            // return redirect()->route('home.index')->with('success', 'Testimoni berhasil dikirim!');
            
        } catch (\Exception $e) {
            \Log::error('Error while saving testimoni: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan testimoni.');
        }
    }

    public function testimoniGeneral()
    {
        // Ambil semua data dari tabel testimonis
        $testimonis = Testimoni::all();

        // Kirim data ke view
        return view('home.testimonigeneral', compact('testimonis'));
    }

}
