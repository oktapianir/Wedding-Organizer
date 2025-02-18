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
                <h1 class="display-2 text-dark">Vendor BridalStyle</h1>
                <p class="lead text-muted">
                    Pilihlah BridalStyle terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
            </div>
            <div class="row">
                <div class="container py-5">
                    <div class="row">
                        @foreach($bridalstyles as $bridalstyle) 
                        <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card h-100 shadow-sm">
                                <div class="card-img-top">
                                        @if($bridalstyle->styles)
                                        @php
                                            $photos = json_decode($bridalstyle->styles->foto_styles, true);
                                        @endphp
                                        @if(!empty($photos))
                                            <div id="carouselBridal-{{$bridalstyle->id_bridalstyle}}" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach($photos as $index => $photo)
                                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                            <img src="{{ asset('storage/styles/'.$photo) }}" 
                                                                alt="{{ $bridalstyle->nama_paket_bridalstyle }}"
                                                                class="d-block w-100">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                @if(count($photos) > 1)
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBridal-{{$bridalstyle->id_bridalstyle}}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBridal-{{$bridalstyle->id_bridalstyle}}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                @endif
                                            </div>
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
                                    <h5 class="card-title">{{ $bridalstyle->nama_paket_bridalstyle }}</h5> 
                                    <p class="card-text text-muted">Harga: Rp {{ number_format($bridalstyle->harga_paket, 0, ',', '.') }}</p> 
                                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$bridalstyle->id_bridalstyle}}">
                                        Detail Vendor
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Bridal Style --> 
    @foreach($bridalstyles as $bridalstyle)
    <div class="modal fade" id="detailModal-{{ $bridalstyle->id_bridalstyle }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $bridalstyle->id_bridalstyle }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{ $bridalstyle->id_bridalstyle }}">
                        <i class="bi bi-music-note me-2"></i>{{ $bridalstyle->nama_paket_bridalstyle }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-7 position-relative p-3">
                            <div id="imageGallery-{{ $bridalstyle->id_bridalstyle }}" class="d-flex overflow-hidden" style="scroll-behavior: smooth;">
                                @forelse(json_decode($bridalstyle->styles->foto_styles ?? '[]', true) as $foto)
                                    <img src="{{ asset('storage/styles/' . $foto) }}"
                                        class="flex-shrink-0 w-100 rounded" style="height: 600px; object-fit: contain;" alt="Foto Bridal Style">
                                @empty
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 600px; width: 100%;">
                                        <p class="text-muted">No Image Available</p>
                                    </div>
                                @endforelse
                            </div>
                            @if(!empty(json_decode($bridalstyle->styles->foto_styles ?? '[]', true)) && count(json_decode($bridalstyle->styles->foto_styles, true)) > 1)
                                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y" onclick="scrollGallery('{{ $bridalstyle->id_bridalstyle }}', -1)">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y" onclick="scrollGallery('{{ $bridalstyle->id_bridalstyle }}', 1)">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            @endif
                        </div>
                        <div class="col-md-5 p-4">
                            <h3 class="mb-3">{{ $bridalstyle->nama_paket_bridalstyle }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($bridalstyle->harga_paket, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            {{-- <p class="mb-4">{{ $bridalstyle->deskripsi_paket }}</p> --}}
                            @php
                                $deskripsiItems = preg_split('/[\n,]+/', $bridalstyle->deskripsi_paket);
                            @endphp

                            <ul class="list-unstyled mb-4">
                                @foreach($deskripsiItems as $item)
                                    @if(trim($item) !== '')
                                        <li class="mb-2">
                                            <i class="bi bi-check2-circle text-primary me-2"></i>
                                            {{ trim($item) }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_bridalstyle' => $bridalstyle->id_bridalstyle]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('keranjang.add', $bridalstyle->id_bridalstyle) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_bridalstyle" value="{{ $bridalstyle->id_bridalstyle }}">
                                    <input type="hidden" name="nama_bridalstyle" value="{{ $bridalstyle->nama_bridalstyle }}">
                                    <input type="hidden" name="deskripsi_bridalstyle" value="{{ $bridalstyle->deskripsi_paket }}">
                                    <input type="hidden" name="harga_bridalstyle" value="{{ $bridalstyle->harga_paket }}">
                                    <button type="submit" class="add-to-cart-button"
                                        style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                                        Tambah ke Keranjang
                                    </button>
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script>
        function scrollGallery(bridalstyleId, direction) {
            let gallery = document.getElementById(`imageGallery-${bridalstyleId}`);
            let scrollAmount = gallery.clientWidth; // Geser sepanjang lebar container
            gallery.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
        }
    </script>
    

    @include('home.footer')
</body>
</html>
