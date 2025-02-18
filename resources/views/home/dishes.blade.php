<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <style>
        .carousel-item img {
            max-height: 200px;
            object-fit: cover;
        }
        .carousel-inner {
            max-height: 200px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            filter: invert(100%);
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
            <a href="{{ url('user/dashboard') }}" class="btn btn-outline-primary py-2 px-4">
                <i class="fa fa-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </div>

   <!-- Main content container -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-1">
            <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-dark">Vendor Katering Dishes</h1>
                <p class="lead text-muted">Pilihlah Katering Dish dan Dessert terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
            </div>
            <div class="row">
                @foreach($paketDish as $dish)
                <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top">
                            @if($dish->foto_paket_dish)
                                @php
                                    $fotos = json_decode($dish->foto_paket_dish);
                                @endphp
                                @if($fotos && count($fotos) > 0)
                                    <div id="carousel-{{$dish->id_dish}}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($fotos as $index => $foto)
                                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('images/' . $foto) }}" 
                                                         class="d-block w-100" 
                                                         alt="Foto Dish {{ $index + 1 }}" 
                                                         style="height: 200px; object-fit: cover;">
                                                </div>
                                            @endforeach
                                        </div>
                                        @if(count($fotos) > 1)
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{$dish->id_dish}}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{$dish->id_dish}}" data-bs-slide="next">
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
                            <h5 class="card-title">{{ $dish->nama_paket_dish }}</h5>  
                            <p class="card-text text-muted">Harga: Rp {{ number_format($dish->harga_dish, 0, ',', '.') }}</p>
                           <!-- Button -->
                            <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$dish->id_dish}}">
                                Detail Vendor
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <div class="container-fluid py-5">
        <div class="container py-1">
            <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-dark">Vendor Katering Dishes</h1>
                <p class="lead text-muted">Pilihlah Katering Dish dan Dessert terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
            </div>
            <div class="row">
                @foreach($paketDish as $dish)
                <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top">
                            @if($dish->foto_paket_dish)
                                @php
                                    $fotos = json_decode($dish->foto_paket_dish);
                                @endphp
                                @if($fotos && count($fotos) > 0)
                                    <div id="carousel-{{$dish->id_dishes}}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($fotos as $index => $foto)
                                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('storage/' . $foto) }}" 
                                                    class="d-block w-100" 
                                                    alt="Foto Dish {{ $index + 1 }}" 
                                                    style="height: 200px; object-fit: cover;">                                               
                                                </div>
                                            @endforeach
                                        </div>
                                        @if(count($fotos) > 1)
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{$dish->id_dishes}}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{$dish->id_dishes}}" data-bs-slide="next">
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
                            <h5 class="card-title">{{ $dish->nama_paket_dish }}</h5>  
                            <p class="card-text text-muted">Harga: Rp {{ number_format($dish->harga_dish, 0, ',', '.') }}</p>
                            <!-- Button -->
                            <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$dish->id_dishes}}">
                                Detail Vendor
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    


    <!-- Modal Detail Dishes -->
    {{-- @foreach($paketDish as $dish)
    <div class="modal fade" id="detailModal-{{ $dish->id_dish }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $dish->id_dish }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{ $dish->id_dish }}">
                        <h3 class="text-muted mb-2">Paket Dishes</h3>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-7 p-3">
                            @if($dish->foto_paket_dish)
                                <div class="w-100 h-100">
                                    <img src="{{ asset('storage/' . $dish->foto_paket_dish) }}" 
                                         class="w-100 h-100 rounded" 
                                         alt="Foto Dish"
                                         style="object-fit: cover;">
                                </div>
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 400px;">
                                    <p class="text-muted">Tidak ada foto</p>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5 p-4">
                            <h3 class="mb-3">{{ $dish->nama_paket_dish }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($dish->harga_dish, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            <p class="mb-4">{{ $dish->deskripsi_dish }}</p>
                            
                            <div class="mb-3">
                                <label for="kuantitas-{{ $dish->id_dish }}" class="form-label">Kuantitas (Pax)</label>
                                <input type="number" id="kuantitas-{{ $dish->id_dish }}" name="kuantitas" value="1" min="1" class="form-control" required style="color: black;">
                            </div>

                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_dish' => $dish->id_dish]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>

                            <div class="mt-3">
                                <form action="{{ route('keranjang.add', $dish->id_dish) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_dish" value="{{ $dish->id_dish }}">
                                    <input type="hidden" name="nama_paket_dish" value="{{ $dish->nama_paket_dish }}">
                                    <input type="hidden" name="deskripsi_dish" value="{{ $dish->deskripsi_dish }}">
                                    <input type="hidden" name="harga_paket_dish" value="{{ $dish->harga_dish }}">
                                    <input type="hidden" name="kuantitas" id="kuantitas-hidden-{{ $dish->id_dish }}" value="1">
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
    @foreach($paketDish as $dish)
    <div class="modal fade" id="detailModal-{{ $dish->id_dishes }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $dish->id_dishes }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{ $dish->id_dishes }}">
                        <h3 class="text-muted mb-2">Paket Dishes</h3>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-7 p-3">
                            @if($dish->foto_paket_dish)
                            @php
                                $fotos = json_decode($dish->foto_paket_dish);
                            @endphp
                            @if($fotos && count($fotos) > 0)
                                <div id="carouselModalDish-{{$dish->id_dishes}}" class="carousel slide h-100" data-bs-ride="carousel">
                                    <div class="carousel-inner h-100">
                                        @foreach($fotos as $index => $foto)
                                            <div class="carousel-item h-100 {{ $index === 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/' . $foto) }}" 
                                                     class="d-block w-100 rounded" 
                                                     alt="Foto {{ $dish->nama_paket_dish }}"
                                                     style="height: 600px; object-fit: contain;">
                                            </div>
                                        @endforeach
                                    </div>
                                    @if(count($fotos) > 1)
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselModalDish-{{$dish->id_dishes}}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselModalDish-{{$dish->id_dishes}}" data-bs-slide="next">
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
                            <h3 class="mb-3">{{ $dish->nama_paket_dish }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($dish->harga_dish, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            {{-- <p class="mb-4">{{ $dish->deskripsi_dish }}</p> --}}
                            @php
                            // Memisahkan deskripsi menjadi array berdasarkan baris baru atau tanda koma
                            $deskripsiItems = preg_split('/[\n,]+/', $dish->deskripsi_dish);
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
                            
                            
                            <div class="mb-3">
                                <label for="kuantitas-{{ $dish->id_dishes }}" class="form-label">Kuantitas (Pax)</label>
                                <input type="number" id="kuantitas-{{ $dish->id_dishes }}" name="kuantitas" value="1" min="1" class="form-control" required style="color: black;">
                            </div>

                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_dishes' => $dish->id_dishes]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>

                            <div class="mt-3">
                                <form action="{{ route('keranjang.add', $dish->id_dishes) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_dishes" value="{{ $dish->id_dishes }}">
                                    <input type="hidden" name="nama_paket_dish" value="{{ $dish->nama_paket_dish }}">
                                    <input type="hidden" name="deskripsi_dish" value="{{ $dish->deskripsi_dish }}">
                                    <input type="hidden" name="harga_paket_dish" value="{{ $dish->harga_dish }}">
                                    <input type="hidden" name="kuantitas" id="kuantitas-hidden-{{ $dish->id_dishes }}" value="1">
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


    <!-- Scripts -->
    <script>
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('change', function() {
                const id = this.id.split('-')[1];
                document.getElementById(`kuantitas-hidden-${id}`).value = this.value;
            });
        });

        function scrollGallery(id, direction) {
            const gallery = document.getElementById(`imageGallery-${id}`);
            const scrollAmount = gallery.clientWidth;
            gallery.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        function disableOtherButtons(form) {
            const buttons = form.querySelectorAll('button');
            buttons.forEach(btn => btn.disabled = true);
        }
    </script>

    @include('home.footer')
</body>
</html>