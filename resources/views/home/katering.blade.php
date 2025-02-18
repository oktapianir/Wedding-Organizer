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
    {{-- <div class="container-fluid py-3">
        <div class="container">
            <a href="javascript:history.back()" class="btn btn-outline-primary py-2 px-4">
                <i class="fa fa-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </div> --}}

    <!-- Back and Dishes Buttons -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="javascript:history.back()" class="btn btn-outline-primary py-2 px-4">
                <i class="fa fa-arrow-left me-2"></i>Kembali
            </a>
            <a href="{{ route('home.dishes') }}" class="btn btn-outline-primary py-2 px-4">
                <i class="fa fa-utensils me-2"></i>Dishes
            </a>
        </div>
    </div>
</div>

    <!-- Main content container -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-1">
            <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-dark">Vendor Katering</h1>
                <p class="lead text-muted">Pilihlah Katering terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
            </div>
            <div class="row">
                <div class="container py-5">
                    <div class="row">
                        @foreach($mainCourse as $mainC)
                        <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card h-100 shadow-sm">
                                <div class="card-img-top">
                                    @if($mainC->foto_paket_mainC && $mainC->foto_paket_mainC->count() > 0)
                                        <img src="{{ asset('storage/foto_katering/' . $mainC->foto_paket_mainC->first()->foto_path) }}" 
                                             class="d-block w-100" alt="Foto Katering" 
                                             style="height: 200px; object-fit: cover;">
                                    @else
                                        <div class="d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                                            <p class="text-muted">No Image Available</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $mainC->nama_paket_mainC }}</h5>  
                                    <p class="card-text text-muted">Harga: Rp {{ number_format($mainC->harga_paket_mainC, 0, ',', '.') }}</p>
                                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$mainC->id_mainC}}">
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
    </div> --}}
    <div class="container-fluid py-5">
        <div class="container py-1">
            <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-dark">Vendor Katering Maincourse</h1>
                <p class="lead text-muted">Pilihlah Katering Maincourse dan Dessert terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
            </div>
            <div class="row">
                @foreach($mainCourse as $mainC)
                <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top">
                            @if($mainC->foto_paket_mainC)
                                @php
                                    $fotos = json_decode($mainC->foto_paket_mainC);
                                @endphp
                                @if($fotos && count($fotos) > 0)
                                    <div id="carousel-{{$mainC->id_mainC}}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($fotos as $index => $foto)
                                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('images/' . $foto) }}" 
                                                         class="d-block w-100" 
                                                         alt="Foto MainCourse {{ $index + 1 }}" 
                                                         style="height: 200px; object-fit: cover;">
                                                </div>
                                            @endforeach
                                        </div>
                                        @if(count($fotos) > 1)
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{$mainC->id_mainC}}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{$mainC->id_mainC}}" data-bs-slide="next">
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
                            <h5 class="card-title">{{ $mainC->nama_paket_mainC }}</h5>  
                            <p class="card-text text-muted">Harga: Rp {{ number_format($mainC->harga_paket_mainC, 0, ',', '.') }}</p>
                           <!-- Button -->
                            <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$mainC->id_mainC}}">
                                Detail Vendor
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal Detail Katering --> 
    {{-- @foreach($mainCourse as $katering)
    <div class="modal fade" id="detailModal-{{ $katering->id_mainC }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $katering->id_mainC }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{ $katering->id_mainC }}">
                        <i class="bi bi-plate me-2"></i>{{ $katering->nama_paket_mainC }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-7 position-relative p-3">
                            <div id="imageGallery-{{ $katering->id_mainC }}" class="d-flex overflow-hidden" style="scroll-behavior: smooth;">
                                @forelse($katering->foto_paket_mainC as $index => $foto)
                                    <img src="{{ asset('storage/foto_katering/' . str_replace('katering/', '', $foto->foto_path)) }}"
                                        class="flex-shrink-0 w-100 rounded" style="height: 600px; object-fit: contain;" alt="Foto Katering">
                                @empty
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 600px; width: 100%;">
                                        <p class="text-muted">No Image Available</p>
                                    </div>
                                @endforelse
                            </div>
                            @if($katering->fotoKatering->count() > 1)
                                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y" onclick="scrollGallery('{{ $katering->id_mainC }}', -1)">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y" onclick="scrollGallery('{{ $katering->id_mainC }}', 1)">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            @endif
                        </div>
                        <div class="col-md-5 p-4">
                            <h3 class="mb-3">{{ $katering->nama_katering }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($katering->harga_katering, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            <p class="mb-4">{{ $katering->deskripsi_katering }}</p>
                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_katering' => $katering->id_katering]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('keranjang.add', $katering->id_katering) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_katering" value="{{ $katering->id_katering }}">
                                    <input type="hidden" name="nama_katering" value="{{ $katering->nama_katering }}">
                                    <input type="hidden" name="deskripsi_katering" value="{{ $katering->deskripsi_katering }}">
                                    <input type="hidden" name="harga_katering" value="{{ $katering->harga_katering }}">
                                    <button type="submit" class="add-to-cart-button" style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                                        Tambah ke Keranjang
                                    </button>
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}
    @foreach($mainCourse as $katering)
    <div class="modal fade" id="detailModal-{{ $katering->id_mainC }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $katering->id_mainC }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{ $katering->id_mainC }}">
                        <h3 class="text-muted mb-2">Paket Maincourse</h3>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-7 position-relative p-3">
                            @if($katering->foto_paket_mainC)
                                @php
                                    $fotos = json_decode($katering->foto_paket_mainC);
                                @endphp
                                @if($fotos && count($fotos) > 0)
                                    <div id="carouselModal-{{$katering->id_mainC}}" class="carousel slide h-100" data-bs-ride="carousel">
                                        <div class="carousel-inner h-100">
                                            @foreach($fotos as $index => $foto)
                                                <div class="carousel-item h-100 {{ $index === 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('images/' . $foto) }}" 
                                                         class="d-block w-100 rounded" 
                                                         alt="Foto {{ $katering->nama_paket_mainC }}"
                                                         style="height: 600px; object-fit: contain;">
                                                </div>
                                            @endforeach
                                        </div>
                                        @if(count($fotos) > 1)
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModal-{{$katering->id_mainC}}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModal-{{$katering->id_mainC}}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        @endif
                                    </div>
                                @else
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 600px; width: 100%;">
                                        <p class="text-muted">No Image Available</p>
                                    </div>
                                @endif
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 600px; width: 100%;">
                                    <p class="text-muted">No Image Available</p>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5 p-4">
                            <h3 class="mb-3">{{ $katering->nama_paket_mainC }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($katering->harga_paket_mainC, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            {{-- <p class="mb-4">{{ $katering->deskripsi_mainC }}</p> --}}
                            @php
                            // Memisahkan deskripsi menjadi array berdasarkan baris baru atau tanda koma
                            $deskripsiItems = preg_split('/[\n,]+/', $katering->deskripsi_mainC);
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
                            
                            {{-- Input Kuantitas --}}
                            <div class="mb-3">
                                <label for="kuantitas-{{ $katering->id_mainC }}" class="form-label">Kuantitas (Pax)</label>
                                <input type="number" id="kuantitas-{{ $katering->id_mainC }}" name="kuantitas" value="1" min="1" class="form-control" required style="color: black;">
                            </div>

                             {{-- Input Catatan --}}
                            <div class="mb-3">
                                <label for="catatan-{{ $katering->id_mainC }}" class="form-label">Catatan Pesanan</label>
                                <textarea 
                                    id="catatan-{{ $katering->id_mainC }}" 
                                    class="form-control" 
                                    rows="3" 
                                    placeholder="Tambahkan catatan khusus untuk pesanan menu yang anda inginkan"
                                    style="color: black; resize: vertical;"
                                ></textarea>
                            </div>

                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_mainC' => $katering->id_mainC]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>

                            <div class="mt-3">
                                <form action="{{ route('keranjang.add', $katering->id_mainC) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_mainC" value="{{ $katering->id_mainC }}">
                                    <input type="hidden" name="nama_paket_mainC" value="{{ $katering->nama_paket_mainC }}">
                                    <input type="hidden" name="deskripsi_mainC" value="{{ $katering->deskripsi_mainC }}">
                                    <input type="hidden" name="harga_paket_mainC" value="{{ $katering->harga_paket_mainC }}">
                                    <input type="hidden" name="kuantitas" id="kuantitas-hidden-{{ $katering->id_mainC }}" value="1">
                                    <button type="submit" class="add-to-cart-button" style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                                        Tambah ke Keranjang
                                    </button>
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


<!--script untuk mengubah nilai kuantitas di input, nilai yang diinputkan akan disalin ke input tersembunyi yang akan digunakan ketika formulir dikirim-->
    <script>
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('change', function() {
                const id = this.id.split('-')[1]; // Mengambil id dari input
                document.getElementById(`kuantitas-hidden-${id}`).value = this.value;
            });
        });
    </script>
     



    <!--script untuk modal detail-->
    <script>
        function scrollGallery(id, direction) {
            const gallery = document.getElementById(`imageGallery-${id}`);
            const scrollAmount = gallery.clientWidth;
            gallery.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var modals = document.querySelectorAll('.modal');
            modals.forEach(function(modal) {
                var thumbnails = modal.querySelectorAll('.thumbnail');
                thumbnails.forEach(function(thumbnail, index) {
                    thumbnail.addEventListener('click', function() {
                        thumbnails.forEach(t => t.style.opacity = '0.6');
                        this.style.opacity = '1';
                    });
                });
            });
        });

        function disableOtherButtons(form) {
            const buttons = form.querySelectorAll('button');
            buttons.forEach(btn => btn.disabled = true);
        }
    </script>

    @include('home.footer')

</body>
</html>
