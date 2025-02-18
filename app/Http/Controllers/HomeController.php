<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Pemesanan;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //     public function index()
    // {
    //     // Mengambil data rating
    //     $ratings = Testimoni::selectRaw('rating, COUNT(*) as count')
    //         ->groupBy('rating')
    //         ->orderBy('rating')
    //         ->pluck('count', 'rating');

    //     // Menghitung total acara
    //     $totalAcara = Pemesanan::whereNotNull('tanggal_acara')->count();

    //     $data = [
    //         'labels' => [1, 2, 3, 4, 5],
    //         'counts' => [
    //             $ratings->get(1) ?? 0,
    //             $ratings->get(2) ?? 0,
    //             $ratings->get(3) ?? 0,
    //             $ratings->get(4) ?? 0,
    //             $ratings->get(5) ?? 0,
    //         ],
    //     ];

    //     // Mengirim data ke view
    //     return view('admin.index', compact('data', 'totalAcara')); 
    // }

    //kode yang bener
    // public function index()
    // {
    //     // Mengambil data rating
    //     $ratings = Testimoni::selectRaw('rating, COUNT(*) as count')
    //         ->groupBy('rating')
    //         ->orderBy('rating')
    //         ->pluck('count', 'rating');

    //     // Menghitung total acara
    //     $totalAcara = Pemesanan::whereNotNull('tanggal_acara')->count();

    //     // Menghitung total pengguna
    //     $totalPengguna = User::count();

    //     $data = [
    //         'labels' => [1, 2, 3, 4, 5],
    //         'counts' => [
    //             $ratings->get(1) ?? 0,
    //             $ratings->get(2) ?? 0,
    //             $ratings->get(3) ?? 0,
    //             $ratings->get(4) ?? 0,
    //             $ratings->get(5) ?? 0,
    //         ],
    //     ];

    //     // Mengirim data ke view
    //     return view('admin.index', compact('data', 'totalAcara', 'totalPengguna')); 
    // }

    public function index()
{
    // Mengambil data rating dari tabel Testimoni
    $ratings = Testimoni::selectRaw('rating, COUNT(*) as count')
        ->groupBy('rating')
        ->orderBy('rating')
        ->pluck('count', 'rating');

    // Menghitung total acara dari tabel Pemesanan
    $totalAcara = Pemesanan::whereNotNull('tanggal_acara')->count();

    // Menghitung total pengguna dari tabel User
    $totalPengguna = User::count();

    // Mengambil 5 pesanan terbaru dari tabel Pemesanan
    // $pesananBaru = Pemesanan::orderBy('created_at', 'desc')
    //     ->take(10)
    //     ->get();
    $pesananBaru = Pemesanan::orderBy('created_at', 'desc')->paginate(4);

    // Menghitung jumlah pemesanan yang statusnya 'completed'
    $closeVenue = Pemesanan::where('status_pemesanan', 'completed')->count();

     // Mendapatkan pendapatan bulanan
     $pendapatanBulanan = Pemesanan::selectRaw('YEAR(tanggal_acara) as year, MONTH(tanggal_acara) as month, SUM(total_biaya) as total')
     ->groupBy('year', 'month')
     ->orderBy('year', 'desc')
     ->orderBy('month', 'desc')
     ->take(12) // Ambil 12 bulan terakhir
     ->get();

      // Mendapatkan pendapatan tahunan
    $pendapatanTahunan = Pemesanan::selectRaw('YEAR(tanggal_acara) as year, SUM(total_biaya) as total')
    ->groupBy('year')
    ->orderBy('year', 'desc')
    ->first(); // Ambil pendapatan untuk tahun terbaru

    // Menyusun data untuk grafik atau tampilan rating
    $data = [
        'labels' => [1, 2, 3, 4, 5],
        'counts' => [
            $ratings->get(1) ?? 0,
            $ratings->get(2) ?? 0,
            $ratings->get(3) ?? 0,
            $ratings->get(4) ?? 0,
            $ratings->get(5) ?? 0,
        ],
    ];

    // Mengirim data ke view
    return view('admin.index', compact('data', 'totalAcara', 'totalPengguna', 'pesananBaru', 'closeVenue', 'pendapatanBulanan'));
}



    // public function showHistory()
    // {
    //     $user = Auth::user();
    //     $pemesanans = Pemesanan::where('id_customer', $user->id)->get();

    //     return view('home.header', compact('pemesanans'));
    // }


//     public function showOrders()
// {
//     $pesanans = Pemesanan::latest()->get();

//     // Debugging untuk memastikan data
//     // dd($pesanans);

//     // Ambil notifikasi dari session
//     $orderNotification = session('order_notification');

//     return view('admin.orders', compact('pesanans', 'orderNotification'));
// }

// public function showOrders()
// {
//     // Ambil 5 pesanan terbaru
//     $pesanans = Pemesanan::latest()
//                         ->take(5)
//                         ->get();
    
//     // Hitung jumlah pesanan baru
//     $newOrdersCount = Pemesanan::where('is_new', true)->count();
    
//     // Kirimkan ke tampilan
//     return view('admin.index', compact('pesanans', 'newOrdersCount'));
// }


// // Tambahkan method untuk menandai pesanan sudah dibaca
// public function markAsRead($id)
// {
//     Pemesanan::where('id_pemesanan', $id)->update(['is_new' => false]);
//     return redirect()->back();
// }




    public function home()
    {
        return view('home.index');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    // Function baru untuk mengecek apakah profil lengkap
    public function checkProfileCompletion()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Cek apakah profil sudah lengkap
        if (!$user->profile_complete) {
            // Jika profil belum lengkap, tambahkan pesan alert ke session
            // return redirect()->route('home')->with('alert', 'Silakan lengkapi data diri Anda di profil.');\
            return redirect('/user/dashboard')->with('alert', 'Silakan lengkapi data diri Anda di profil.');
        }

        // Jika profil lengkap, lanjutkan ke halaman dashboard
        return view('home.index');
    }



}