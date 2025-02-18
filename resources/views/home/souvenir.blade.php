<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('home.header')
</head>

<body data-bs-spy="scroll" data-bs-target="#navBar" id="weddingHome">

    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>
    <!-- Back Button -->
    <div class="container-fluid py-3">
       <div class="container">
           <a href="javascript:history.back()" class="btn btn-outline-primary py-2 px-4">
               <i class="fa fa-arrow-left me-2"></i>Kembali
           </a>
       </div>
   </div>

    <!-- Main content container -->
    <div class="container-fluid py-5">
        <div class="container py-1">
            <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-dark">Vendor Souvenir</h1>
                <p class="lead text-muted">
                    Pilihlah Souvenir terbaik dari vendor-vendor terpercaya untuk memewahkan momen yang tidak terlupakan.</p>
            </div>
            <div class="row">
                @foreach($paketSouvenir as $souvenir)
                <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top">
                            @if($souvenir->foto_souvenir)
                                @php
                                    $fotoArray = json_decode($souvenir->foto_souvenir, true); // Decode JSON ke array
                                    $fotoPertama = is_array($fotoArray) && count($fotoArray) > 0 ? $fotoArray[0] : null;
                                @endphp
                                @if($fotoPertama && file_exists(public_path('storage/' . $fotoPertama)))
                                    <img src="{{ asset('storage/' . $fotoPertama) }}" 
                                        class="d-block w-100" alt="Foto Souvenir" 
                                        style="height: 200px; object-fit: cover;">
                                @else
                                    <div class="d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                                        <p class="text-muted">No Image Available</p>
                                    </div>
                                @endif
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                                    <p class="text-muted">No Image Available</p>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $souvenir->nama_paket_souvenir }}</h5>  
                            <p class="card-text text-muted">Harga: Rp {{ number_format($souvenir->harga_souvenir, 0, ',', '.') }}</p>
                            <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$souvenir->id_paket_souvenir}}">
                                Detail Vendor
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $paketSouvenir->links() }}
            </div>
            
        </div>
    </div>

    <!--modal detail-->
    @foreach($paketSouvenir as $souvenir)
    <div class="modal fade" id="detailModal-{{ $souvenir->id_paket_souvenir }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $souvenir->id_paket_souvenir }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{ $souvenir->id_paket_souvenir }}">
                        <i class="bi bi-gift me-2"></i>{{ $souvenir->nama_paket_souvenir }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <!-- Bagian Gambar -->
                        <div class="col-md-7 position-relative p-3">
                            <div id="imageGallery-{{ $souvenir->id_paket_souvenir }}" class="d-flex overflow-hidden" style="scroll-behavior: smooth;">
                                @php
                                    $fotoArray = json_decode($souvenir->foto_souvenir, true);
                                @endphp
                                @forelse($fotoArray as $foto)
                                    <img src="{{ asset('storage/' . $foto) }}" 
                                        class="flex-shrink-0 w-100 rounded" style="height: 600px; object-fit: contain;" alt="Foto Souvenir">
                                @empty
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 600px; width: 100%;">
                                        <p class="text-muted">No Image Available</p>
                                    </div>
                                @endforelse
                            </div>
                            @if(is_array($fotoArray) && count($fotoArray) > 1)
                                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y" onclick="scrollGallery('{{ $souvenir->id_paket_souvenir }}', -1)">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y" onclick="scrollGallery('{{ $souvenir->id_paket_souvenir }}', 1)">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            @endif
                        </div>

                        <!-- Bagian Detail -->
                        <div class="col-md-5 p-4">
                            <h3 class="mb-3">{{ $souvenir->nama_paket_souvenir }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($souvenir->harga_souvenir, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            <p class="mb-4">{{ $souvenir->deskripsi_souvenir }}</p>
                            
                            <!-- Kolom untuk Notes Pesanan -->
                            <div class="mb-3">
                                <h6 class="text-muted mb-2">Notes Pesanan</h6>
                                <textarea name="notes_pesanan" rows="3" class="form-control" placeholder="Tulis catatan khusus untuk pesanan Anda..." style="color: black;"></textarea>
                            </div>

                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_paket_souvenir' => $souvenir->id_paket_souvenir]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('keranjang.add', $souvenir->id_paket_souvenir) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_paket_souvenir" value="{{ $souvenir->id_paket_souvenir }}">
                                    <input type="hidden" name="nama_paket_souvenir" value="{{ $souvenir->nama_paket_souvenir }}">
                                    <input type="hidden" name="deskripsi_souvenir" value="{{ $souvenir->deskripsi_souvenir }}">
                                    <input type="hidden" name="harga_souvenir" value="{{ $souvenir->harga_souvenir }}">
                                    <button type="submit" class="add-to-cart-button"
                                        style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;">
                                        Tambah ke Keranjang
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach



    <!-- Script untuk Navigasi Galeri -->
    <script>
        function scrollGallery(id, direction) {
            const gallery = document.getElementById(`imageGallery-${id}`);
            const scrollAmount = gallery.offsetWidth;
            gallery.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
        }

        function disableOtherButtons(form) {
            const buttons = form.querySelectorAll('button');
            buttons.forEach(button => button.disabled = true);
        }
    </script>

    

    <!-- Footer Start -->
    @include('home.footer')
    <!-- Footer End -->

</body>

</html>
