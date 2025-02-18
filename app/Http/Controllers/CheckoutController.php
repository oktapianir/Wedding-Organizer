<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan; // Pastikan Anda mengimpor model Pemesanan
use App\Models\Gedung;
use App\Models\Historis;
use App\Models\Dekorasis;
use App\Models\Dokumentasi;
use App\Models\Undangan;
use App\Models\PemesananDekorasi;
use App\Models\PemesananHiburan;
use App\Models\PemesananDokumentasi;
use App\Models\PemesananUndangan;
use App\Models\PemesananGedung;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB; // Tambahkan ini untuk DB transactions
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;




class CheckoutController extends Controller
{
    public function showCheckout(Request $request)
    {
        // Ambil data keranjang dari cookies
        $cart = json_decode($request->cookie('cart', '[]'), true);

        // Generate ID Pemesanan baru
        $idPemesanan = $this->generateIdPemesanan();

        // Kirim data ke view
        return view('home.checkout', [
            'items' => $cart,
            'id_pemesanan' => $idPemesanan, // Kirim ID Pemesanan ke view
        ]);
    }
     // Metode untuk melanjutkan ke checkout
    //  public function checkout(Request $request)
    //  {
    //      // Ambil data keranjang dari cookies
    //      $cart = json_decode($request->cookie('cart', '[]'), true);
 
    //      // Ambil data yang dipilih oleh pengguna berdasarkan checkbox
    //      $selectedItems = $request->input('selected_items', []);
 
    //      // Filter item keranjang berdasarkan item yang dipilih
    //      $selectedCartItems = array_filter($cart, function ($item, $index) use ($selectedItems) {
    //          return in_array($index, $selectedItems);
    //      }, ARRAY_FILTER_USE_BOTH);
 
    //      // Kirim data yang dipilih ke halaman checkout
    //      return view('home.checkout', ['cart' => $selectedCartItems]);
    //  }
    
    // public function checkout(Request $request)
    // {
    //     // Ambil data keranjang dari cookies (decode JSON menjadi array)
    //     $cart = json_decode($request->cookie('cart', '[]'), true);
    
    //     // Ambil data yang dipilih oleh pengguna berdasarkan checkbox
    //     $selectedItems = $request->input('selected_items', []);
    
    //     // Filter item keranjang berdasarkan item yang dipilih
    //     $selectedCartItems = array_filter($cart, function ($item, $index) use ($selectedItems) {
    //         return in_array($index, $selectedItems);
    //     }, ARRAY_FILTER_USE_BOTH);
    
    //     // Hitung total biaya dari data keranjang yang dipilih
    //     $total = 0;
    //     foreach ($selectedCartItems as $item) {
    //         if (isset($item['harga_dekorasi'])) {
    //             $total += $item['harga_dekorasi'];
    //         } elseif (isset($item['harga_undangan'])) {
    //             $total += $item['harga_undangan'];
    //         } elseif (isset($item['harga_hiburan'])) {
    //             $total += $item['harga_hiburan'];
    //         } elseif (isset($item['harga_dokumentasi'])) {
    //             $total += $item['harga_dokumentasi'];
    //         } elseif (isset($item['harga_paket_mainC'])) {
    //             $total += $item['harga_paket_mainC'];
    //         }
    //     }
    
    //     // Buat ID pemesanan baru
    //     $id_pemesanan = 'PSN' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
    
    //     // Kirim data yang dipilih ke view
    //     return view('home.checkout', [
    //         'cart' => $selectedCartItems,
    //         'total' => $total,
    //         'id_pemesanan' => $id_pemesanan,
    //     ]);
    // }
    
    //yang bener & digunakan
    // public function checkout(Request $request)
    // {
    //     // Ambil data keranjang dari cookies (decode JSON menjadi array)
    //     $cart = json_decode($request->cookie('cart', '[]'), true);

    //     // Ambil data yang dipilih oleh pengguna berdasarkan checkbox
    //     $selectedItems = $request->input('selected_items', []);

    //     // Filter item keranjang berdasarkan item yang dipilih
    //     $selectedCartItems = array_filter($cart, function ($item, $index) use ($selectedItems) {
    //         return in_array($index, $selectedItems);
    //     }, ARRAY_FILTER_USE_BOTH);

    //     // Hitung total biaya dari data keranjang yang dipilih
    //     $total = 0;
    //     foreach ($selectedCartItems as $item) {
    //         if (isset($item['harga_dekorasi'])) {
    //             $total += $item['harga_dekorasi'];
    //         } elseif (isset($item['harga_undangan'])) {
    //             $total += $item['harga_undangan'];
    //         } elseif (isset($item['harga_hiburan'])) {
    //             $total += $item['harga_hiburan'];
    //         } elseif (isset($item['harga_dokumentasi'])) {
    //             $total += $item['harga_dokumentasi'];
    //         } elseif (isset($item['harga_paket_mainC'])) {
    //             $total += $item['harga_paket_mainC'];
    //         }
    //     }

    //     // Gunakan fungsi generateIdPemesanan untuk ID pemesanan
    //     $id_pemesanan = $this->generateIdPemesanan();

    //     // Kirim data yang dipilih ke view
    //     return view('home.checkout', [
    //         'cart' => $selectedCartItems,
    //         'total' => $total,
    //         'id_pemesanan' => $id_pemesanan,
    //     ]);
    // }
    public function checkout(Request $request)
    {
        // Ambil data keranjang dari cookies
        $cart = json_decode($request->cookie('cart', '[]'), true);
        
        // Hitung total biaya
        $total = 0;
        foreach ($cart as $item) {
            if (isset($item['harga_dekorasi'])) {
                $total += $item['harga_dekorasi'];
            } elseif (isset($item['harga_undangan'])) {
                $total += $item['harga_undangan'];
            } elseif (isset($item['harga_hiburan'])) {
                $total += $item['harga_hiburan'];
            } elseif (isset($item['harga_dokumentasi'])) {
                $total += $item['harga_dokumentasi'];
            } elseif (isset($item['harga_paket_mainC'])) {
                $total += $item['harga_paket_mainC'];
            } elseif (isset($item['harga_gedung'])) {
                $total += $item['harga_gedung'];
            }
        }

        // Generate ID Pemesanan
        $id_pemesanan = $this->generateIdPemesanan();

        return view('home.checkout', [
            'cart' => $cart,
            'total' => $total,
            'id_pemesanan' => $id_pemesanan,
        ]);
    }

//     public function checkout(Request $request)
// {
//     // Ambil data keranjang dari cookies (decode JSON menjadi array)
//     $cart = json_decode($request->cookie('cart', '[]'), true);

//     // Ambil data yang dipilih oleh pengguna berdasarkan checkbox
//     $selectedItems = $request->input('selected_items', []);

//     // Filter item keranjang berdasarkan item yang dipilih
//     $selectedCartItems = array_filter($cart, function ($item, $index) use ($selectedItems) {
//         return in_array($index, $selectedItems);
//     }, ARRAY_FILTER_USE_BOTH);

//     // Hitung total biaya dari data keranjang yang dipilih
//     $total = 0;
//     foreach ($selectedCartItems as $item) {
//         if (isset($item['harga_dekorasi'])) {
//             $total += $item['harga_dekorasi'];
//         } elseif (isset($item['harga_undangan'])) {
//             $total += $item['harga_undangan'];
//         } elseif (isset($item['harga_hiburan'])) {
//             $total += $item['harga_hiburan'];
//         } elseif (isset($item['harga_dokumentasi'])) {
//             $total += $item['harga_dokumentasi'];
//         } elseif (isset($item['harga_paket_mainC'])) {
//             $total += $item['harga_paket_mainC'];
//         }
//     }

//     // Gunakan fungsi generateIdPemesanan untuk ID pemesanan
//     $id_pemesanan = $this->generateIdPemesanan();

//     $request->validate([
//         'tanggal_acara' => 'required|date', // Pastikan tanggal acara ada dan valid
//     ]);

//     // Simpan data pemesanan utama
//     $pemesanans = Pemesanan::create([
//         'id_pemesanan' => $id_pemesanan,
//         'tanggal_pemesanan' => now(),
//         'tanggal_acara' => $request->input('tanggal_acara'),
//         'total' => $total,
//         'status' => 'pending', // atau sesuai status yang diinginkan
//         'id_customer' => auth()->id(), // Menyimpan ID user yang membuat pemesanan
//     ]);

//     // Loop melalui item yang dipilih dan simpan ke tabel terkait
//     foreach ($selectedCartItems as $item) {
//         if (isset($item['harga_dekorasi'])) {
//             // Simpan data ke tabel pemesanan_dekorasi
//             PemesananDekorasi::create([
//                 'id_pemesanan' => $id_pemesanan,
//                 'id_dekorasi' => $item['id_dekorasi'], // Misalnya ID dekorasi
//                 'harga_pemesanan' => $item['harga_dekorasi'],
//             ]);
//         } elseif (isset($item['harga_undangan'])) {
//             // Simpan data ke tabel pemesanan_undangan
//             PemesananUndangan::create([
//                 'id_pemesanan' => $id_pemesanan,
//                 'id_undangan' => $item['id_undangan'], // Misalnya ID undangan
//                 'harga_pemesanan' => $item['harga_undangan'],
//             ]);
//         } elseif (isset($item['harga_hiburan'])) {
//             // Simpan data ke tabel pemesanan_hiburan
//             PemesananHiburan::create([
//                 'id_pemesanan' => $id_pemesanan,
//                 'id_hiburan' => $item['id_hiburan'], // Misalnya ID hiburan
//                 'harga_pemesanan' => $item['harga_hiburan'],
//             ]);
//         } elseif (isset($item['harga_dokumentasi'])) {
//             // Simpan data ke tabel pemesanan_dokumentasi
//             PemesananDokumentasi::create([
//                 'id_pemesanan' => $id_pemesanan,
//                 'id_dokumentasi' => $item['id_dokumentasi'], // Misalnya ID dokumentasi
//                 'harga_pemesanan' => $item['harga_dokumentasi'],
//             ]);
//         } elseif (isset($item['harga_paket_mainC'])) {
//             // Simpan data ke tabel pemesanan_paket_mainC
//             PemesananPaketMainC::create([
//                 'id_pemesanan' => $id_pemesanan,
//                 'id_paket_mainC' => $item['id_paket_mainC'], // Misalnya ID paket main course
//                 'harga_pemesanan' => $item['harga_paket_mainC'],
//             ]);
//         }
//     }

//     // Kirim data yang dipilih ke view
//     return view('home.checkout', [
//         'cart' => $selectedCartItems,
//         'total' => $total,
//         'id_pemesanan' => $id_pemesanan,
//     ]);
// }


//    public function checkout(Request $request)
//     {
//         // Ambil data keranjang dari cookies (decode JSON menjadi array)
//         $cart = json_decode($request->cookie('cart', '[]'), true);

//         // Ambil data yang dipilih oleh pengguna berdasarkan checkbox
//         $selectedItems = $request->input('selected_items', []);

//         // Filter item keranjang berdasarkan item yang dipilih
//         $selectedCartItems = array_filter($cart, function ($item, $index) use ($selectedItems) {
//             return in_array($index, $selectedItems);
//         }, ARRAY_FILTER_USE_BOTH);

//         // Hitung total biaya dari data keranjang yang dipilih
//         $total = $this->calculateTotalCost($selectedCartItems);

//         // Gunakan fungsi generateIdPemesanan untuk ID pemesanan
//         $id_pemesanan = $this->generateIdPemesanan();

//         // Ambil ID customer (misalnya dari user yang login)
//         $id_customer = auth()->id(); // Pastikan user sudah login

//         // Ambil tanggal acara dari input form, jika tidak ada maka gunakan tanggal hari ini
//         $tanggal_acara = $request->input('tanggal_acara', now());

//         // Simpan data pemesanan ke database
//         $pemesanan = Pemesanan::create([
//             'id_pemesanan' => $id_pemesanan,
//             'id_customer' => $id_customer,
//             'total_biaya' => $total,
//             'tanggal_pemesanan' => now(), // Menambahkan tanggal pemesanan
//             'tanggal_acara' => $tanggal_acara, // Menggunakan tanggal acara yang dipilih atau default
//         ]);

//         // Simpan detail pesanan ke kolom detail dalam tabel pemesanan
//         $pemesanan->update([
//             'id_dekorasi' => $selectedCartItems[0]['id_dekorasi'] ?? null,
//             'id_undangan' => $selectedCartItems[0]['id_undangan'] ?? null,
//             'id_hiburan' => $selectedCartItems[0]['id_hiburan'] ?? null,
//             'id_dokumentasi' => $selectedCartItems[0]['id_dokumentasi'] ?? null,
//             'id_paket_mainC' => $selectedCartItems[0]['id_paket_mainC'] ?? null,
//             'harga' => $this->getItemPrice($selectedCartItems[0]), // Hitung harga untuk item pertama
//         ]);

//         // Hapus keranjang dari cookie
//         Cookie::queue(Cookie::forget('cart'));

//         // Redirect ke halaman pembayaran
//         return redirect()->route('pembayaran.create', ['id_pemesanan' => $id_pemesanan])
//             ->with('success', 'Pemesanan berhasil dibuat. Silakan lakukan pembayaran.');
//     }

    



    private function calculateTotalCost(array $cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $this->getItemPrice($item);
        }
        return $total;
    }

    private function getItemPrice(array $item)
    {
        if (isset($item['harga_dekorasi'])) {
            return $item['harga_dekorasi'];
        } elseif (isset($item['harga_undangan'])) {
            return $item['harga_undangan'];
        } elseif (isset($item['harga_hiburan'])) {
            return $item['harga_hiburan'];
        } elseif (isset($item['harga_dokumentasi'])) {
            return $item['harga_dokumentasi'];
        } elseif (isset($item['harga_paket_mainC'])) {
            return $item['harga_paket_mainC'];
        }
        return 0;
    }    

    // public function processCheckout(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'tanggal_acara' => 'required|date',
    //     ]);

    //     try {
    //         // Ambil data pengguna yang terautentikasi
    //         $user = Auth::user();
    //         $nama = $request->input('nama', $user->name);
    //         $noTelepon = $request->input('no_telepon', $user->no_handphone);
    //         $alamat = $request->input('alamat', $user->alamat);
    //         $totalBiaya = $request->input('total_biaya');

    //         // Log data pesanan
    //         $dataToSave = [
    //             'id_pemesanan' => $this->generateIdPemesanan(),
    //             'id_customer' => $user->id,
    //             'tanggal_pemesanan' => now(),
    //             'tanggal_acara' => $request->input('tanggal_acara'),
    //             'status_pemesanan' => 'pending',
    //             'nama' => $nama,
    //             'no_telepon' => $noTelepon,
    //             'alamat' => $alamat,
    //             'total_biaya' => $totalBiaya,
    //         ];

    //         Log::info('Data yang akan disimpan ke pemesanan:', $dataToSave);

    //         // Simpan data ke tabel pemesanan
    //         $pemesanan = Pemesanan::create($dataToSave);

    //         // Simpan item pesanan (contoh dekorasi)
    //         foreach ($request->items as $item) {
    //             if (isset($item['id_dekorasi'])) {
    //                 DB::table('pemesanan_dekorasi')->insert([
    //                     'id_pemesanan' => $pemesanan->id_pemesanan,
    //                     'id_dekorasi' => $item['id_dekorasi'],
    //                     'harga_dekorasi' => $item['harga_dekorasi'],
    //                 ]);
    //             }
    //         }

    //         // Kosongkan keranjang setelah checkout
    //         $cookie = cookie('cart', '', -60);

    //         // Simpan notifikasi ke dalam cache
    //         Session::flash('order_notification', [
    //             'id' => $pemesanan->id_pemesanan,
    //             'nama' => $pemesanan->nama,
    //             'waktu' => now()->diffForHumans(),
    //         ]);

    //         // Redirect ke halaman pembayaran
    //         return redirect()->route('home.index')->withCookie($cookie);

    //     } catch (\Exception $e) {
    //         // Log kesalahan
    //         Log::error('Checkout Error: ' . $e->getMessage());
    //         return redirect()->back()->withErrors('Gagal melakukan checkout. Silakan coba lagi.');
    //     }
    // }

    // yg bener 
    // public function processCheckout(Request $request)
    // {
    //     $request->validate([
    //         'tanggal_acara' => 'required|date',
    //     ]);

    //     try {
    //         // Proses penyimpanan data checkout (sama seperti sebelumnya)
    //         $user = Auth::user();
    //         $dataToSave = [
    //             'id_pemesanan' => $this->generateIdPemesanan(),
    //             'id_customer' => $user->id,
    //             'tanggal_pemesanan' => now(),
    //             'tanggal_acara' => $request->input('tanggal_acara'),
    //             'status_pemesanan' => 'pending',
    //             'nama' => $request->input('nama', $user->name),
    //             'no_telepon' => $request->input('no_telepon', $user->no_handphone),
    //             'alamat' => $request->input('alamat', $user->alamat),
    //             'total_biaya' => $request->input('total_biaya'),
    //         ];

    //         $pemesanan = Pemesanan::create($dataToSave);

    //         // Proses lainnya (simpan item pesanan dan hapus keranjang)
    //         $cookie = cookie('cart', '', -60);
    //         Session::flash('order_notification', [
    //             'id' => $pemesanan->id_pemesanan,
    //             'nama' => $pemesanan->nama,
    //             'waktu' => now()->diffForHumans(),
    //         ]);

    //         // Redirect ke halaman home.index dengan pesan
    //         return redirect()->route('home.pembayaran',['id_pemesanan' => $pemesanan->id_pemesanan])->with([
    //             'success_message' => 'Pemesanan berhasil dilakukan. Mohon untuk menunggu konfirmasi dari pihak management wedding organizer. 
    //             Dan pembayaran dapat dilakukan secara back door dengan menghubungi pihak management wedding organizer'
    //         ])->withCookie($cookie);

    //     } catch (\Exception $e) {
    //         Log::error('Checkout Error: ' . $e->getMessage());
    //         return redirect()->back()->withErrors('Gagal melakukan checkout. Silakan coba lagi.');
    //     }
    // }

    //yg bneer
    // public function processCheckout(Request $request)
    // {
    //     // Validasi input
    //     $validatedData = $request->validate([
    //         'tanggal_acara' => 'required|date|after:today',
    //         'nama' => 'required|string|max:255',
    //         'no_telepon' => 'required|string|max:20',
    //         'alamat' => 'required|string|max:500',
    //         'total_biaya' => 'required|numeric|min:0',
    //         'selected_items' => 'nullable|array',
    //     ]);

    //     DB::beginTransaction();

    //     try {
    //         $user = Auth::user();
            
    //         // Generate ID Pemesanan unik
    //         $idPemesanan = $this->generateIdPemesanan();

    //         $cartCookie = Cookie::get('cart');
    //         $cartItems = json_decode($cartCookie, true);

    //         if (!is_array($cartItems) || empty($cartItems)) {
    //             throw new \Exception('Keranjang kosong');
    //         }

    //         // Inisialisasi array untuk menyimpan ID item yang dipesan
    //         $orderedItems = [
    //             'id_dekorasi' => null,
    //             'id_dokumentasi' => null,
    //             'id_hiburan' => null,
    //             'id_undangan' => null,
    //             'id_main_course' => null
    //         ];

    //         // Fungsi untuk menentukan kategori item
    //         $determineItemCategory = function($item) {
    //             if (isset($item['id_dekorasi'])) return ['dekorasi', 'id_dekorasi'];
    //             if (isset($item['id_dokumentasi'])) return ['dokumentasi', 'id_dokumentasi'];
    //             if (isset($item['id_hiburan'])) return ['hiburan', 'id_hiburan'];
    //             if (isset($item['id_undangan'])) return ['undangan', 'id_undangan'];
    //             if (isset($item['id_main_course'])) return ['mainCourse', 'id_main_course'];
    //             return [null, null];
    //         };

    //         // Proses setiap item dan kumpulkan ID-nya
    //         foreach ($cartItems as $item) {
    //             [$kategori, $idField] = $determineItemCategory($item);
    //             if ($kategori && $idField) {
    //                 $orderedItems[$idField] = $item[$idField];
    //             }
    //         }

    //         // Buat data pemesanan utama dengan semua ID item
    //         $pemesanan = Pemesanan::create([
    //             'id_pemesanan' => $idPemesanan,
    //             'id_customer' => $user->id,
    //             'tanggal_pemesanan' => now(),
    //             'tanggal_acara' => $request->input('tanggal_acara'),
    //             'status_pemesanan' => 'pending',
    //             'nama' => $request->input('nama'),
    //             'no_telepon' => $request->input('no_telepon'),
    //             'alamat' => $request->input('alamat'),
    //             'total_biaya' => $request->input('total_biaya'),
    //             'id_dekorasi' => $orderedItems['id_dekorasi'],
    //             'id_dokumentasi' => $orderedItems['id_dokumentasi'],
    //             'id_hiburan' => $orderedItems['id_hiburan'],
    //             'id_undangan' => $orderedItems['id_undangan'],
    //             'id_main_course' => $orderedItems['id_main_course']
    //         ]);

    //         // Buat detail pemesanan untuk setiap kategori
    //         foreach ($cartItems as $item) {
    //             [$kategori, $idField] = $determineItemCategory($item);
                
    //             switch ($kategori) {
    //                 case 'dekorasi':
    //                     PemesananDekorasi::create([
    //                         'id_pemesanan' => $pemesanan->id_pemesanan,
    //                         'id_dekorasi' => $item['id_dekorasi'],
    //                         'harga_dekorasi' => $item['harga_dekorasi']
    //                     ]);
    //                     break;

    //                 case 'dokumentasi':
    //                     PemesananDokumentasi::create([
    //                         'id_pemesanan' => $pemesanan->id_pemesanan,
    //                         'id_dokumentasi' => $item['id_dokumentasi'],
    //                         'harga_dokumentasi' => $item['harga_dokumentasi']
    //                     ]);
    //                     break;

    //                 case 'hiburan':
    //                     PemesananHiburan::create([
    //                         'id_pemesanan' => $pemesanan->id_pemesanan,
    //                         'id_hiburan' => $item['id_hiburan'],
    //                         'harga_hiburan' => $item['harga_hiburan']
    //                     ]);
    //                     break;

    //                 case 'undangan':
    //                     PemesananUndangan::create([
    //                         'id_pemesanan' => $pemesanan->id_pemesanan,
    //                         'id_undangan' => $item['id_undangan'],
    //                         'harga_undangan' => $item['harga_undangan']
    //                     ]);
    //                     break;

    //                 case 'mainCourse':
    //                     PemesananMainCourse::create([
    //                         'id_pemesanan' => $pemesanan->id_pemesanan,
    //                         'id_main_course' => $item['id_main_course'],
    //                         'harga_main_course' => $item['harga_main_course']
    //                     ]);
    //                     break;
    //             }
    //         }

    //         // Hapus keranjang
    //         $cookie = Cookie::forget('cart');

    //         DB::commit();

    //         session()->flash('order_notification', [
    //             'id' => $pemesanan->id_pemesanan,
    //             'total' => $pemesanan->total_biaya,
    //             'tanggal' => $pemesanan->tanggal_acara
    //         ]);

    //         return redirect()->route('home.pembayaran', ['id_pemesanan' => $idPemesanan])
    //             ->with('success', 'Pesanan berhasil dibuat')
    //             ->withCookie($cookie);

    //     } catch (\Exception $e) {
    //         DB::rollBack();
            
    //         Log::error('Checkout Error: ' . $e->getMessage(), [
    //             'user_id' => $user->id ?? null,
    //             'error_trace' => $e->getTraceAsString(),
    //             'cart_items' => $cartItems ?? 'No cart items'
    //         ]);

    //         return redirect()->back()
    //             ->withErrors(['error' => 'Gagal membuat pesanan. Silakan coba lagi. ' . $e->getMessage()])
    //             ->withInput();
    //     }
    // }

    //bener 
//     public function processCheckout(Request $request)
// {
//     // Validasi input
//     $validatedData = $request->validate([
//         'tanggal_acara' => 'required|date|after:today',
//         'nama' => 'required|string|max:255',
//         'no_telepon' => 'required|string|max:20',
//         'alamat' => 'required|string|max:500',
//         'total_biaya' => 'required|numeric|min:0',
//         'selected_items' => 'nullable|array',
//     ]);

//     DB::beginTransaction();

//     try {
//         $user = Auth::user();
        
//         // Generate ID Pemesanan unik
//         $id_pemesanan = $this->generateIdPemesanan();

//         $cartCookie = Cookie::get('cart');
//         $cartItems = json_decode($cartCookie, true);

//         if (!is_array($cartItems) || empty($cartItems)) {
//             throw new \Exception('Keranjang kosong');
//         }

//         // Inisialisasi array untuk menyimpan ID item yang dipesan
//         $orderedItems = [
//             'id_dekorasi' => null,
//             'id_dokumentasi' => null,
//             'id_hiburan' => null,
//             'id_undangan' => null,
//             'id_main_course' => null
//         ];

//         // Fungsi untuk menentukan kategori item
//         $determineItemCategory = function($item) {
//             if (isset($item['id_dekorasi'])) return ['dekorasi', 'id_dekorasi'];
//             if (isset($item['id_dokumentasi'])) return ['dokumentasi', 'id_dokumentasi'];
//             if (isset($item['id_hiburan'])) return ['hiburan', 'id_hiburan'];
//             if (isset($item['id_undangan'])) return ['undangan', 'id_undangan'];
//             if (isset($item['id_main_course'])) return ['mainCourse', 'id_main_course'];
//             return [null, null];
//         };

//         // Proses setiap item dan kumpulkan ID-nya
//         foreach ($cartItems as $item) {
//             [$kategori, $idField] = $determineItemCategory($item);
//             if ($kategori && $idField) {
//                 $orderedItems[$idField] = $item[$idField];
//             }
//         }

//         // Buat data pemesanan utama dengan semua ID item
//         $pemesanan = Pemesanan::create([
//             'id_pemesanan' => $id_pemesanan,
//             'id_customer' => $user->id,
//             'tanggal_pemesanan' => now(),
//             'tanggal_acara' => $request->input('tanggal_acara'),
//             'status_pemesanan' => 'pending',
//             'nama' => $request->input('nama'),
//             'no_telepon' => $request->input('no_telepon'),
//             'alamat' => $request->input('alamat'),
//             'total_biaya' => $request->input('total_biaya'),
//             'id_dekorasi' => $orderedItems['id_dekorasi'],
//             'id_dokumentasi' => $orderedItems['id_dokumentasi'],
//             'id_hiburan' => $orderedItems['id_hiburan'],
//             'id_undangan' => $orderedItems['id_undangan'],
//             'id_main_course' => $orderedItems['id_main_course']
//         ]);

//         // Buat Invoice secara otomatis
//         $invoice = Invoice::create([
//             'id_pemesanan' => $pemesanan->id_pemesanan,
//             'id_customer' => $user->id
//         ]);

//         // Buat detail pemesanan untuk setiap kategori
//         foreach ($cartItems as $item) {
//             [$kategori, $idField] = $determineItemCategory($item);
            
//             switch ($kategori) {
//                 case 'dekorasi':
//                     PemesananDekorasi::create([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_dekorasi' => $item['id_dekorasi'],
//                         'harga_dekorasi' => $item['harga_dekorasi']
//                     ]);
//                     break;

//                 case 'dokumentasi':
//                     PemesananDokumentasi::create([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_dokumentasi' => $item['id_dokumentasi'],
//                         'harga_dokumentasi' => $item['harga_dokumentasi']
//                     ]);
//                     break;

//                 case 'hiburan':
//                     PemesananHiburan::create([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_hiburan' => $item['id_hiburan'],
//                         'harga_hiburan' => $item['harga_hiburan']
//                     ]);
//                     break;

//                 case 'undangan':
//                     PemesananUndangan::create([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_undangan' => $item['id_undangan'],
//                         'harga_undangan' => $item['harga_undangan']
//                     ]);
//                     break;

//                 case 'mainCourse':
//                     PemesananMainCourse::create([
//                         'id_pemesanan' => $pemesanan->id_pemesanan,
//                         'id_main_course' => $item['id_main_course'],
//                         'harga_main_course' => $item['harga_main_course']
//                     ]);
//                     break;
//             }
//         }

//         // Hapus keranjang
//         $cookie = Cookie::forget('cart');

//         DB::commit();

//         session()->flash('order_notification', [
//             'id' => $pemesanan->id_pemesanan,
//             'total' => $pemesanan->total_biaya,
//             'tanggal' => $pemesanan->tanggal_acara
//         ]);

//         return redirect()->route('home.invoice', ['id_pemesanan' => $id_pemesanan])
//             ->with('success', 'Pesanan berhasil dibuat')
//             ->withCookie($cookie);

//     } catch (\Exception $e) {
//         DB::rollBack();
        
//         Log::error('Checkout Error: ' . $e->getMessage(), [
//             'user_id' => $user->id ?? null,
//             'error_trace' => $e->getTraceAsString(),
//             'cart_items' => $cartItems ?? 'No cart items'
//         ]);

//         return redirect()->back()
//             ->withErrors(['error' => 'Gagal membuat pesanan. Silakan coba lagi. ' . $e->getMessage()])
//             ->withInput();
//     }
// }

//bener dan digunakan
public function processCheckout(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'tanggal_acara' => 'required|date|after:today',
        'nama' => 'required|string|max:255',
        'no_telepon' => 'required|string|max:20',
        'alamat' => 'required|string|max:500',
        'total_biaya' => 'required|numeric|min:0',
        'selected_items' => 'nullable|array',
    ]);

    Log::info('=== DEBUG CHECKOUT ===', $request->all());

    // Ambil isi cart dari cookie
    $cartCookie = Cookie::get('cart');
    $cartItems = json_decode($cartCookie, true);

    if (!is_array($cartItems) || empty($cartItems)) {
        return redirect()->back()->withErrors(['error' => 'Keranjang belanja kosong.'])->withInput();
    }

    Log::info('Isi Cart:', ['items' => $cartItems]);

    // Cek user yang login
    $user = Auth::user();
    if (!$user) {
        return redirect()->route('login')->withErrors(['error' => 'Silakan login terlebih dahulu.']);
    }

    try {
        DB::beginTransaction();

        // Generate ID Pemesanan
        $id_pemesanan = $this->generateIdPemesanan();
        Log::info('ID Pemesanan: ' . $id_pemesanan);

        // Simpan pemesanan utama (sementara tanpa ID item)
        $pemesanan = Pemesanan::create([
            'id_pemesanan' => $id_pemesanan,
            'id_customer' => $user->id,
            'tanggal_pemesanan' => now(),
            'tanggal_acara' => $request->input('tanggal_acara'),
            'status_pemesanan' => 'pending',
            'nama' => $request->input('nama'),
            'no_telepon' => $request->input('no_telepon'),
            'alamat' => $request->input('alamat'),
            'total_biaya' => $request->input('total_biaya'),
        ]);

        Log::info('Pemesanan berhasil dibuat:', ['pemesanan' => $pemesanan]);

        // Array untuk menyimpan ID item yang dipesan
        $updateData = [
            'id_gedung' => null,
            'id_dekorasi' => null,
            'id_dokumentasi' => null,
            'id_hiburan' => null,
            'id_undangan' => null,
        ];

        // Simpan setiap item dalam keranjang
        foreach ($cartItems as $item) {
            Log::info('Memproses item:', $item);

            try {
                if (isset($item['id_gedung'])) {
                    $gedung = Gedung::where('id_gedung', $item['id_gedung'])->first();
                    if (!$gedung) {
                        throw new \Exception('Data gedung tidak ditemukan.');
                    }

                    PemesananGedung::create([
                        'id_pemesanan' => $id_pemesanan,
                        'id_gedung' => $item['id_gedung'],
                        'tanggal_acara' => $pemesanan->tanggal_acara,
                        'harga_gedung' => $item['harga_gedung'],
                        'kapasitas' => $gedung->kapasitas_gedung,
                    ]);

                    $updateData['id_gedung'] = $item['id_gedung'];
                    Log::info('Gedung berhasil disimpan');
                }

                if (isset($item['id_dekorasi'])) {
                    PemesananDekorasi::create([
                        'id_pemesanan' => $id_pemesanan,
                        'id_dekorasi' => $item['id_dekorasi'],
                        'harga_dekorasi' => $item['harga_dekorasi'],
                    ]);

                    $updateData['id_dekorasi'] = $item['id_dekorasi'];
                    Log::info('Dekorasi berhasil disimpan');
                }

                if (isset($item['id_dokumentasi'])) {
                    PemesananDokumentasi::create([
                        'id_pemesanan' => $id_pemesanan,
                        'id_dokumentasi' => $item['id_dokumentasi'],
                        'harga_dokumentasi' => $item['harga_dokumentasi'],
                    ]);

                    $updateData['id_dokumentasi'] = $item['id_dokumentasi'];
                }

                if (isset($item['id_hiburan'])) {
                    PemesananHiburan::create([
                        'id_pemesanan' => $id_pemesanan,
                        'id_hiburan' => $item['id_hiburan'],
                        'harga_hiburan' => $item['harga_hiburan'],
                    ]);

                    $updateData['id_hiburan'] = $item['id_hiburan'];
                }

                if (isset($item['id_undangan'])) {
                    PemesananUndangan::create([
                        'id_pemesanan' => $id_pemesanan,
                        'id_undangan' => $item['id_undangan'],
                        'harga_undangan' => $item['harga_undangan'],
                    ]);

                    $updateData['id_undangan'] = $item['id_undangan'];
                }
            } catch (\Exception $itemError) {
                Log::error('Error saat menyimpan item:', [
                    'item' => $item,
                    'error' => $itemError->getMessage(),
                ]);
                throw $itemError;
            }
        }

        // **UPDATE DATA PESANAN DENGAN ID ITEM YANG DIBELI**
        $pemesanan->update($updateData);

        Log::info('Pemesanan berhasil diperbarui dengan ID item:', ['updateData' => $updateData]);

        // Buat invoice
        $invoice = Invoice::create([
            'id_pemesanan' => $id_pemesanan,
            'id_customer' => $user->id,
        ]);
        Log::info('Invoice berhasil dibuat');

        DB::commit();

        // Hapus cart
        $cookie = Cookie::forget('cart');

        session()->flash('order_notification', [
            'id' => $pemesanan->id_pemesanan,
            'total' => $pemesanan->total_biaya,
            'tanggal' => $pemesanan->tanggal_acara,
        ]);

        return redirect()->route('home.invoice', ['id_pemesanan' => $id_pemesanan])
            ->with('success', 'Pesanan berhasil dibuat')
            ->withCookie($cookie);

    } catch (\Exception $e) {
        DB::rollBack();
        Log::error('Error Checkout:', [
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'user_id' => optional($user)->id,
            'cart_items' => $cartItems ?? 'No cart items',
        ]);

        return redirect()->back()
            ->withErrors(['error' => 'Gagal membuat pesanan: ' . $e->getMessage()])
            ->withInput();
    }
}




    
    
    



//     public function processCheckout(Request $request)
// {
//     $request->validate([
//         'tanggal_acara' => 'required|date',
//         'items' => 'required|array', // Pastikan ada array item yang dipesan
//         'items.*.id' => 'required|integer', // Validasi ID item
//         'items.*.quantity' => 'required|integer|min:1', // Validasi jumlah item
//     ]);

//     try {
//         // Proses penyimpanan data checkout (sama seperti sebelumnya)
//         $user = Auth::user();
//         $dataToSave = [
//             'id_pemesanan' => $this->generateIdPemesanan(),
//             'id_customer' => $user->id,
//             'tanggal_pemesanan' => now(),
//             'tanggal_acara' => $request->input('tanggal_acara'),
//             'status_pemesanan' => 'pending',
//             'nama' => $request->input('nama', $user->name),
//             'no_telepon' => $request->input('no_telepon', $user->no_handphone),
//             'alamat' => $request->input('alamat', $user->alamat),
//             'total_biaya' => $request->input('total_biaya'),
//         ];

//         // Simpan pemesanan utama
//         $pemesanan = Pemesanan::create($dataToSave);

//         // Simpan item-item pemesanan, misalnya item dekorasi, undangan, dll.
//         foreach ($request->input('items') as $item) {
//             // Cek tipe item (misalnya "dekorasi", "undangan", dll)
//             switch ($item['type']) {
//                 case 'dekorasi':
//                     $this->storePemesananDekorasi($pemesanan->id_pemesanan, $item);
//                     break;

//                 case 'undangan':
//                     $this->storePemesananUndangan($pemesanan->id_pemesanan, $item);
//                     break;

//                 // Tambahkan case untuk item lainnya jika diperlukan
//                 default:
//                     break;
//             }
//         }

//         // Proses lainnya (simpan item pesanan dan hapus keranjang)
//         $cookie = cookie('cart', '', -60);
//         Session::flash('order_notification', [
//             'id' => $pemesanan->id_pemesanan,
//             'nama' => $pemesanan->nama,
//             'waktu' => now()->diffForHumans(),
//         ]);

//         // Redirect ke halaman pembayaran
//         return redirect()->route('home.pembayaran', ['id_pemesanan' => $pemesanan->id_pemesanan])
//             ->with([
//                 'success_message' => 'Pemesanan berhasil dilakukan. Mohon untuk menunggu konfirmasi dari pihak management wedding organizer. 
//                 Dan pembayaran dapat dilakukan secara back door dengan menghubungi pihak management wedding organizer'
//             ])
//             ->withCookie($cookie);

//     } catch (\Exception $e) {
//         Log::error('Checkout Error: ' . $e->getMessage());
//         return redirect()->back()->withErrors('Gagal melakukan checkout. Silakan coba lagi.');
//     }
// }



    protected function generateIdPemesanan() 
    {
        $lastPemesanan = Pemesanan::orderBy('id_pemesanan', 'desc')->first();
        
        if (!$lastPemesanan) {
            return 'PSN0001';
        }
        
        // Ekstrak angka dari ID terakhir
        preg_match('/PSN(\d+)/', $lastPemesanan->id_pemesanan, $matches);
        $lastNumber = isset($matches[1]) ? (int)$matches[1] : 0;
        $newNumber = $lastNumber + 1;
        
        return 'PSN' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }

    
}
