<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <style>
        .carousel-item img {
            max-height: 200px; /* Set height to fit the frame */
            object-fit: cover; /* Ensure the image covers the frame without stretching */
        }
        .carousel-inner {
            max-height: 200px; /* Ensure the carousel container is not too large */
        }
        .carousel-control-prev,
        .carousel-control-next {
            filter: invert(100%); /* Optionally make controls more visible */
        }
    </style>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
</head>
<body data-bs-spy="scroll" data-bs-target="#navBar" id="weddingHome">
       
    <!-- Back to Top -->
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
                <h1 class="display-2 text-dark">Vendor Dokumentasi</h1>
                <p class="lead text-muted">
                    Pilihlah Dokumentasi terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
            </div>
            <div class="row">
                

                <div class="container py-5">
                    <div class="row">
                        @foreach($dokumentasis as $dokumentasi)
                        <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card h-100 shadow-sm">
                                <div class="card-img-top">
                                    @if($dokumentasi->fotoDokumentasi && $dokumentasi->fotoDokumentasi->count() > 0)
                                        <img src="{{ asset('storage/' . $dokumentasi->fotoDokumentasi->first()->foto_path) }}" 
                                            class="d-block w-100" alt="Foto Dokumentasi" 
                                            style="height: 200px; object-fit: cover;">
                                    @else
                                        <div class="d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                                            <p class="text-muted">No Image Available</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $dokumentasi->nama_paket_dokumentasi }}</h5>  
                                    <p class="card-text text-muted">Harga: Rp {{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</p>
                                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$dokumentasi->id_dokumentasi}}">
                                        Detail Vendor
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    {{-- <div class="d-flex justify-content-center mt-4">
                        {{ $dokumentasis->links() }} <!-- Pastikan ini sesuai dengan paginasi data hiburan -->
                    </div> --}}
                </div>

                
               

            </div>
        </div>
    </div>

    <!-- Modal Detail dokumentasi --> 
    @foreach($dokumentasis as $dokumentasi)
    <div class="modal fade" id="detailModal-{{$dokumentasi->id_dokumentasi }}" tabindex="-1" aria-labelledby="detailModalLabel-{{$dokumentasi->id_dokumentasi }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{$dokumentasi->id_dokumentasi }}">
                        <i class="bi bi-music-note me-2"></i>{{$dokumentasi->nama_paket_dokumentasi }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-7 position-relative p-3">
                            <div id="imageGallery-{{$dokumentasi->id_dokumentasi }}" class="d-flex overflow-hidden" style="scroll-behavior: smooth;">
                                @forelse($dokumentasi->fotoDokumentasi as $index => $foto)
                                    <img src="{{ asset('storage/' . str_replace('foto_  dokumentasi/', '', $foto->foto_path)) }}"
                                        class="flex-shrink-0 w-100 rounded" style="height: 600px; object-fit: contain;" alt="Foto Dokumentasi">
                                @empty
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 600px; width: 100%;">
                                        <p class="text-muted">No Image Available</p>
                                    </div>
                                @endforelse
                            </div>
                            @if($dokumentasi->fotoDokumentasi->count() > 1)
                                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y" onclick="scrollGallery('{{ $dokumentasi->id_dokumentasi }}', -1)">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y" onclick="scrollGallery('{{ $dokumentasi->id_dokumentasi }}', 1)">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            @endif
                        </div>
                        <div class="col-md-5 p-4">
                            <h3 class="mb-3">{{ $dokumentasi->nama_paket_dokumentasi }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            <p class="mb-4">{{ $dokumentasi->deskripsi_dokumentasi }}</p>
                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_dokumentasi' => $dokumentasi->id_dokumentasi]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('keranjang.add', $dokumentasi->id_dokumentasi) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_dokumentasi" value="{{$dokumentasi->id_dokumentasi }}">
                                    <input type="hidden" name="nama_paket_dokumentasi" value="{{$dokumentasi->nama_paket_dokumentasi }}">
                                    <input type="hidden" name="deskripsi_dokumentasi" value="{{$dokumentasi->deskripsi_dokumentasi }}">
                                    <input type="hidden" name="harga_dokumentasi" value="{{$dokumentasi->harga_dokumentasi }}">
                                    <button type="submit" class="add-to-cart-button"
                                        style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Tambah
                                        ke Keranjang</button>
                                </form>
                                {{-- <button type="button" class="btn btn-success w-100" onclick="addToCart('{{ $dokumentasi->id_dokumentasi }}')">Tambah ke Keranjang</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    

   <!--script untuk modal detail-->
<script>
    function scrollGallery(id, direction) {
        const gallery = document.getElementById(`imageGallery-${id}`);
        const scrollAmount = gallery.clientWidth; // Mengambil lebar galeri
        gallery.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            var images = modal.querySelectorAll('img'); // Mengambil semua gambar dalam modal
            images.forEach(function(image, index) {
                image.addEventListener('click', function() {
                    // Mengatur opacity gambar saat diklik
                    images.forEach(img => img.style.opacity = '0.6');
                    this.style.opacity = '1';
                });
            });
        });
    });
</script>


    @include('home.footer')
</body>
</html>
