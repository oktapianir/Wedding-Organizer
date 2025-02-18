<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ItemVendorController;
use App\Http\Controllers\DekorasiController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\HiburanController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\PaketSouvenirController;
use App\Http\Controllers\PaketMakananController;
use App\Http\Controllers\BridalstyleController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LaporanController;













// route yang benar untuk default sebelum login 
route::get('/',[HomeController::class,'home']);
// Route::get('/', function () {
//     return view('home.index');
// });

//register
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::post('/user/dashboard', [HomeController::class, 'home'])->name('home.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//menuju halaman profil user 
Route::get('/user/profil', [ProfileController::class, 'index'])->name('home.profil');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Route untuk update profil
Route::post('/profile/edit', [ProfileController::class, 'updateProfile'])->name('profile.update');

//route histori pemesanan user 
// Route::get('/user/dahsboard', [ProfileController::class, 'showProfile'])->name('show.pemesanan');
Route::get('/histori-pemesanan', [ProfileController::class, 'showHistori']);


require __DIR__.'/auth.php';

// KODE BENAR UNTUK RUTE TAMPILAN SETELAH LOGINrute login admin
route::get('admin/dashboard',[HomeController::class,'index'])->
middleware(['auth','admin']);
// Rute untuk dashboard user
Route::get('/user/dashboard', [HomeController::class, 'home'])->middleware(['auth'])->name('home.index');




// Route::get('/user/dashboard', [HomeController::class, 'checkProfileCompletion'])->middleware('auth');

// Route::get('/user/dashboard', [HomeController::class, 'home'])->middleware(['auth'])->name('home.dashboard');
// Route::get('/user/dekorasi', [DekorasiController::class, 'userDekorasi'])->middleware(['auth'])->name('home.dekorasi');
// Route::get('/user/dashboard', [HomeController::class, 'home'])->middleware(['auth'])->name('home.dashboard');


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('logout');

//dashboard admin testimoni 
// Route::get('/testimoni', [TestimoniController::class, 'index']);


// Rute untuk dashboard user
// Route::get('home.index', [HomeController::class, 'home.index'])->middleware(['auth'])->name('home.index');

// rute login admin
// route::get('admin/dashboard',[HomeController::class,'index'])->name('home.index');

Route::get('admin/CRUD', [VendorController::class, 'CRUD'])->name('CRUD');

route::post('admin/CRUD',[VendorController::class,'CRUD'])->
middleware(['auth','admin']);

//
route::get('view_vendor',[VendorController::class,'view_vendor'])->
middleware(['auth','admin']);

route::post('add_vendor',[VendorController::class,'add_vendor'])->
middleware(['auth','admin']);

//ke halaman item vendor admin 
// Route untuk menampilkan daftar item vendor
// Route::get('/items', [ItemVendorController::class, 'index'])->name('items.index');
// Route::get('/itemvendor', [ItemVendorController::class, 'create']);
// Route::get('/itemvendor', [ItemVendorController::class, 'store'])->name('items.store');
// Route::get('/itemvendor/create', [ItemVendorController::class, 'create'])->name('itemvendor.create');

//tambah item
// Route::post('/items/store', [ItemVendorController::class, 'store'])->name('items.store');
// Route::post('/item-vendor', [ItemVendorController::class, 'store'])->name('itemvendor.store');
// Route::post('/itemvendor/store', [ItemVendorController::class, 'store'])->name('itemvendor.store');


// Route::get('/items', [GedungController::class, 'create'])->name('items.create');
// // Route::get('/admin/gedung', [GedungController::class, 'indexgedung'])->name('admin.gedung');
// //form item vendor gedung
// Route::post('/gedung/store', [GedungController::class, 'store'])->name('gedung.store');
// //edit item vendor gedung
// Route::get('gedung/{id}/edit', [GedungController::class, 'edit'])->name('gedung.edit');
// //detail item gedung
// Route::get('gedung/{custom_id}', [GedungController::class, 'show'])->name('gedung.show');


// Route::match(['get', 'post'], '/items/{id?}/edit', [VendorController::class, 'editOrUpdate'])->name('gedung.editOrUpdate');
Route::get('/gedung', [GedungController::class, 'index'])->name('gedung.index');
// Route untuk menampilkan form tambah gedung
Route::get('/gedung/create', [GedungController::class, 'create'])->name('gedung.create');
// Route untuk menyimpan data gedung
Route::post('/gedung', [GedungController::class, 'store'])->name('gedung.store');
// Route untuk menampilkan data gedung (jika perlu)
Route::get('/items', [GedungController::class, 'index'])->name('gedung.index');
// Route untuk edit data gedung
// Route::get('/items/{id}/edit', [GedungController::class, 'edit'])->name('gedung.edit');
//route untuk update data
// Route::put('/gedung/update', [GedungController::class, 'update'])->name('gedung.update');
// Route::patch('/gedung/update/{id}', [GedungController::class, 'update'])->name('gedung.update');
// Menangani update data gedung
// Route::put('/gedung/update/{id}', [GedungController::class, 'update'])->name('gedung.update');
Route::get('gedung/{id}/edit', [GedungController::class, 'edit'])->name('gedung.edit');
Route::put('/gedung/update/{id}', [GedungController::class, 'update'])->name('gedung.update');

// Route untuk show data gedung
// Route::get('/items/{id}', [GedungController::class, 'show'])->name('gedung.show');

//form item dekorasi
Route::get('/dekorasi-dashboard', [DekorasiController::class, 'index'])->name('dekorasi.index');
Route::post('/dekorasi/store', [DekorasiController::class, 'store'])->name('dekorasi.store');
Route::put('/dekorasi/{id}', [DekorasiController::class, 'update'])->name('dekorasi.update');

//form item undangan 
Route::get('/undangan', [UndanganController::class, 'index'])->name('undangan.index');
Route::post('/undangan/store', [UndanganController::class, 'store'])->name('undangan.store');
Route::put('/undangan/{id}', [UndanganController::class, 'update'])->name('undangan.update');

//form item hiburan 
Route::get('/hiburan', [HiburanController::class, 'index'])->name('hiburan.index');
Route::post('/hiburan/store', [HiburanController::class, 'store'])->name('hiburan.store');
Route::put('/hiburan/{id}', [HiburanController::class, 'update'])->name('hiburan.update');

//form item dokumentasi
Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi.index');
Route::post('/dokumentasi/store', [DokumentasiController::class, 'store'])->name('dokumentasi.store');
Route::put('/dokumentasi/{id}', [DokumentasiController::class, 'update'])->name('dokumentasi.update');

//form item souvenir
Route::get('/paketsouvenir', [PaketSouvenirController::class, 'index'])->name('paketsouvenir.index');
Route::post('/paketsouvenir/store', [PaketSouvenirController::class, 'store'])->name('paketsouvenir.store');
Route::put('/paketsouvenir/{id}', [PaketSouvenirController::class, 'update'])->name('paketsouvenir.update');

//form item katering
Route::get('/paketmakanan', [PaketMakananController::class, 'index'])->name('paketmakanan.index');
Route::post('/paketmakanan/store', [PaketMakananController::class, 'store'])->name('paketmakanan.store');
Route::put('/paketmakanan/{id}', [PaketMakananController::class, 'update'])->name('paketmakanan.update');
// Route::post('/paketdishes/store', [PaketMakananController::class, 'storeDishes'])->name('paketdishes.store');
// Route::post('/paketmakanan/storeDishes', [PaketMakananController::class, 'storeDishes'])->name('paketmakanan.storeDishes');
Route::post('/paketmakanan/storeDishes', [PaketMakananController::class, 'storeDishes'])->name('paketmakanan.storeDishes');
Route::put('/paketmakanan/updateDishes/{id_dishes}', [PaketMakananController::class, 'updateDishes'])->name('paketmakanan.updateDishes');
// Route::get('/paketmakanan', [PaketMakananController::class, 'indexDishes'])->name('paketmakanan.indexDishes');



//menu
Route::post('/menumakanan/store', [PaketMakananController::class, 'storeMenuMakanan'])->name('menumakanan.store');

//form item birdalstyle
Route::get('/bridalstyle', [BridalstyleController::class, 'index'])->name('bridalstyle.index');
Route::post('/bridalstyle/store', [BridalstyleController::class, 'store'])->name('bridalstyle.store');
Route::put('/bridalstyle/{id}', [BridalstyleController::class, 'update'])->name('bridalstyle.update');
Route::post('/style/store', [BridalstyleController::class, 'storeStyle'])->name('bridalstyle.storeStyle');
Route::put('/bridalstyle/updateStyle/{id_style}', [BridalstyleController::class, 'updateStyle'])->name('bridalstyle.updateStyle');


//route untuk menampilkan data table pemesanan di bagian booking admin 
Route::get('/admin/booking', [PemesananController::class, 'bookingIndex'])->name('admin.booking');
// Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');

//pembayaran admin
Route::get('/admin/pembayaran', [PembayaranController::class, 'indexAdmin'])->name('admin.pembayaran');
// Rute untuk menampilkan halaman pembayaran dengan filter
Route::get('/admin/pembayaran', [PembayaranController::class, 'filterPembayaran'])->name('admin.pembayaran');
Route::put('/pembayaran/{id_pembayaran}/update', [PembayaranController::class, 'updateStatus'])->name('pembayaran.updateStatus');

//histori admin
Route::get('/admin/histori', [HistoriController::class, 'indexAdmin'])->name('histori.index');

//invoice admin
Route::get('/admin/invoice', [InvoiceController::class, 'index'])->name('invoices.index');
Route::delete('/invoices/{id_inv}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');

//laporan admin
Route::get('/admin/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
Route::get('/admin/laporanOmzet', [LaporanController::class, 'laporanOmzet'])->name('admin.laporanOmzet');



















// Route::get('/vendors/select', [VendorController::class, 'showVendorSelect']);

// Route::post('/vendors/select', [VendorController::class, 'store'])->name('vendors.tambah');

// Route::get('/vendors/create', [VendorController::class, 'create'])->name('vendors.create');
// Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store');
// Route::get('/vendors', [VendorController::class, 'view_vendor'])->name('vendors.index');

// Route untuk menampilkan form tambah vendor
Route::get('/vendors/create', [VendorController::class, 'create'])->name('vendors.create');

// Route untuk menyimpan data vendor
Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store');

// Route untuk menampilkan daftar vendor
Route::get('/vendors', [VendorController::class, 'view_vendor'])->name('vendors.index');

// Mendefinisikan rute untuk melihat daftar vendor
// Route::get('/vendors', [VendorController::class, 'view_add_vendor'])->name('vendors.index');

// Route untuk menghapus vendor
// Route::delete('/vendors/{id}', [VendorController::class, 'destroy'])->name('vendors.destroy');
Route::delete('vendors/{custom_id}', [VendorController::class, 'destroy'])->name('vendors.destroy');

//route untuk search data vendor 
// Route::get('/vendors/search', [VendorController::class,'search'])->name('vendors.search');
Route::get('/vendors/search', [VendorController::class, 'ajaxSearch'])->name('vendors.ajaxSearch');

//Route untuk edit/update data
// Route::get('vendors/{id}/edit', [VendorController::class, 'edit'])->name('vendors.edit');
Route::get('vendors/{custom_id}/edit', [VendorController::class, 'edit'])->name('vendors.edit');
// Route::put('vendors/{id}', [VendorController::class, 'update'])->name('vendors.update');
Route::put('vendors/{custom_id}', [VendorController::class, 'update'])->name('vendors.update');
//untuk detail
Route::get('vendors/{custom_id}', [VendorController::class, 'show'])->name('vendors.show');

// route::get('/booking',[BookingController::class,'ShowBooking'])->
// middleware(['auth','admin']);

//route untuk delet booking vendor 
Route::delete('/admin/booking/{custom_id}', [BookingController::class, 'destroy'])->name('booking.destroy');

//testimoni admin
Route::get('/api/testimonis/ratings', [TestimoniController::class, 'getRatings']);
// Route untuk halaman index yang menampilkan grafik
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
// Route untuk halaman testimoni yang menampilkan tabel
// Route::get('user/testimoni', [TestimoniController::class, 'show'])->name('testimoni.show');
Route::get('/testimoni/form', [TestimoniController::class, 'showTestimoniForm'])->name('testimoni.form');
// Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
// // Route::get('/testimoni', [TestimoniController::class, 'showTestimonis'])->name('testimoni.show');
// // Route untuk menghapus testimoni
Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');

// Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
// // Route untuk menampilkan daftar testimoni
// // Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
// Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');


//route dashboard total acara
Route::get('/admin/total-events', [HomeController::class, 'showTotalEvents'])->name('admin.totalEvents');
// 1. Buat route baru di routes/web.php
Route::get('/admin/pesanBaru', [HomeController::class, 'index'])->name('admin.index');
Route::post('/ubah-status-pesanan/{id}', [PemesananController::class, 'ubahStatus']);




//route notifikasi pemberitahuan pesanan masuk
// Route::get('/admin/pesan-baru', [HomeController::class, 'showOrders'])->name('admin.orders');
Route::get('admin/orders/{id}/mark-as-read', [HomeController::class, 'markAsRead'])
    ->name('admin.orders.markAsRead');


//user masuk vendor gedung
Route::get('/gedung', function () {
    return view('home.gedung');
})->name('home.gedung');


Route::prefix('gedung')->group(function() {
    Route::get('/user/gedung', [GedungController::class, 'userIndex'])->name('gedung.userIndex');
    Route::get('{id_gedung}', [GedungController::class, 'show'])->name('gedung.show'); // Untuk AJAX
});


//ambil data gedung dari table data vendor 
// Route::get('gedung', [GedungController::class, 'index'])->name('gedung.index');

//user masuk ke vendor dekorasi
// Route::get('/user/dekorasi', function () {
//     return view('home.dekorasi');
// })->name('home.dekorasi');  

//filterisasi gedung 
Route::get('/gedung', [GedungController::class, 'filterGedung'])->name('filter.gedung');
Route::get('/user/gedung', [GedungController::class, 'userGedung'])->name('home.gedung');
Route::get('/user/dekorasi', [DekorasiController::class, 'userDekorasi'])->name('home.dekorasi');
Route::get('/user/hiburan', [HiburanController::class, 'userHiburan'])->name('home.hiburan');
Route::get('/user/dokumentasi', [DokumentasiController::class, 'userDokumentasi'])->name('home.dokumentasi');
Route::get('/user/undangan', [UndanganController::class, 'userUndangan'])->name('home.undangan');
Route::get('/user/katering', [PaketMakananController::class, 'userKateringMainC'])->name('home.katering');
Route::get('/user/dishes', [PaketMakananController::class, 'userKateringDishes'])->name('home.dishes');
Route::get('/user/tatarias', [BridalstyleController::class, 'userBridal'])->name('home.bridalstyle');
Route::get('/user/souvenir', [PaketSouvenirController::class, 'userSouvenir'])->name('home.souvenir');

// Route::get('/detail/dekorasi', [DekorasiController::class, 'userDekorasi'])->name('dekorasi.user');
// Route::prefix('dekorasi')->group(function() {
//     Route::get('/userhome/dekorasi', [DekorasiController::class, 'userDekorasi'])->name('dekorasi.userDekorasi');
//     // Route::get('{id_gedung}', [GedungController::class, 'show'])->name('gedung.show'); // Untuk AJAX
// });

//USER 
//tentang kami
Route::get('/tentangkami', function () {
    return view('home.tentangkami');
})->name('tentangkami');

//pelayanan
Route::get('/pelayanan', function () {
    return view('home.pelayanan');
})->name('pelayanan');

//kontak
Route::get('/kontak', function () {
    return view('home.kontak');
})->name('kontak');

// //testimoni
// Route::get('/user/testimoni', function () {
//     return view('home.testimoni');
// })->name('home.testimoni');

//pemesanan
Route::group(['middleware' => ['auth']], function () {
    Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
    Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');
});
Route::put('/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');
Route::get('/pemesanan/booking', [PemesananController::class, 'filterPemesanan'])->name('pemesanan.index');
Route::get('/test-store-histori', [PemesananController::class, 'testStoreHistori']);


//pembayaran
Route::get('/pembayaran/{id_pemesanan}', [PembayaranController::class, 'show'])->name('home.pembayaran');
// Route::post('/pembayaran/bukti-pembayaran/{id}', [PemesananController::class, 'uploadBukti'])->name('bukti.upload');
// Route::post('/upload-bukti/{id_pemesanan}', [PemesananController::class, 'uploadBuktiPemesanan'])->name('upload.bukti');
//yg bener
// Route::post('/pembayaran/index', [PembayaranController::class, 'index'])->name('pembayaran.index');
// Route::post('/pembayaran/index', [PembayaranController::class, 'index'])->name('home.invoice');
Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/create/{id_pemesanan}', [PembayaranController::class, 'create'])->name('pembayaran.create');
// Route::get('/pembayaran/create/{id}', [PembayaranController::class, 'show'])->name('pembayaran.create');
Route::post('/upload-bukti/{id}', [PemesananController::class, 'uploadBukti'])->name('upload.bukti');

Route::get('/pemesanan/{id}', [PemesananController::class, 'showPemesanan'])->name('pemesanan.show');
// Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->name('invoice');    

// Route::get('/pembayaran/{id}', [PembayaranController::class, 'ringkasanPemesanan']);


// Rute untuk halaman keranjang
Route::get('/keranjang', [CartController::class, 'index'])->name('home.keranjang');
Route::post('/keranjang/add', [CartController::class, 'addToCart'])->name('keranjang.add');  
Route::delete('/cart/remove/{index}', [CartController::class, 'removeFromCart'])->name('cart.remove');
// Menampilkan halaman checkout
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.showCheckout');
// Memproses form checkout menggunakan POST
Route::post('/checkout/proses', [CheckoutController::class, 'processCheckout'])->name('checkout.processCheckout'); 
// Route::get('/checkout/sukses', [CheckoutController::class, 'sukses'])->name('checkout.sukses');
Route::delete('/cart/checkout', [CheckoutController::class, 'checkout'])->name('cart.checkout');
Route::get('/cart/checkout', [CheckoutController::class, 'checkout'])->name('cart.checkout');   

// Route::get('/test-histori', function () {
//     try {
//         $histori = Histori::createHistori(1, 'TEST123', now(), 'pending');
//         return 'Data histori berhasil disimpan dengan ID: ' . $histori->id_histori;
//     } catch (\Exception $e) {
//         return 'Gagal menyimpan data histori: ' . $e->getMessage();
//     }
// });

//histori
Route::put('/historis/{id}', [HistoriController::class, 'update'])->name('historis.update');
Route::get('/user/profile', [ProfileController::class, 'showProfile'])->name('user.profile');
Route::get('/histori', [HistoriController::class, 'index'])->name('home.histori');





//invoice user 
// Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->name('home.invoice');
// Route::get('inv/{id}', [InvoiceController::class, 'showInvoice'])->name('invoice.show');
Route::get('/invoice/{id_pemesanan}', [InvoiceController::class, 'showInvoice'])->name('home.invoice');
Route::get('/generate-invoice/{id_pemesanan}', [InvoiceController::class, 'generateInvoice'])->name('generate.invoice');
Route::get('/invoice/download/{id}', [InvoiceController::class, 'download'])->name('invoice.download');



//testimoni user
// Route::get('/user/testimoni', [TestimoniController::class, 'showLastPemesanan'])->name('home.testimoni');
Route::get('/testimoni/{id_pemesanan}', [TestimoniController::class, 'createTestimoni'])->name('home.testimoni');
Route::get('/testimoni/create', [TestimoniController::class, 'createTestimoni'])->name('testimoni.create');
Route::post('/testimoni', [TestimoniController::class, 'storeTestimoni'])->name('testimoni.store');
Route::get('/user/testimoni/general', [TestimoniController::class, 'TestimoniGeneral'])->name('home.testimonigeneral');

// Route::get('/testimoni', [TestimoniController::class, 'showLastPemesanan']);












