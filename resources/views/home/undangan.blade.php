<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
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
                <h1 class="display-2 text-dark">Vendor Undangan</h1>
                <p class="lead text-muted">
                    Pilihlah Undangan terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
            </div>

            <div class="row">
                <!-- Filter Section -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="color: black;">
                            <h5 class="card-title" style="color: black;">Filter Undangan</h5>
                            <div class="mb-3">
                                <label for="bahanFilter" class="form-label" style="color: black;">Bahan Undangan:</label>
                                <select class="form-select" id="bahanFilter" style="color: black;">
                                    <option value="">Semua Bahan</option>
                                    <option value="linen">Linen</option>
                                    <option value="kertas jasmine">Kertas Jasmine</option>
                                    <option value="kertas matt">Kertas Matt</option>
                                    <option value="art Paper">Art Paper</option>
                                    <option value="art Carton">Art Carton</option>
                                    <option value="aster">Aster</option>
                                    <option value="concorde">Corcode</option>
                                    <option value="samson kraft">Samson Kraft</option>
                                    <option value="ivory">Ivory</option>
                                    <option value="akasia">Akasia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantityFilter" class="form-label" style="color: black;">Kuantitas:</label>
                                <input type="number" class="form-control" id="quantityFilter" min="1" placeholder="Masukkan jumlah" style="color: black;">
                            </div>
                            <button class="btn btn-primary w-100" onclick="applyFilters()">Terapkan Filter</button>
                        </div>
                    </div>
                </div>

                <!-- Undangan List -->
                <div class="col-md-9">
                    <div class="row">
                        @foreach($undangans as $undangan)
                        <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card h-100 shadow-sm">
                                <div class="card-img-top">
                                    @if($undangan->fotoUndangan && $undangan->fotoUndangan->count() > 0)
                                        <img src="{{ asset('storage/' . str_replace('foto_undangan/', '',$undangan->fotoUndangan->first()->foto_path)) }}" 
                                            class="d-block w-100" alt="Foto Undangan" 
                                            style="height: 200px; object-fit: cover;">
                                    @else
                                        <div class="d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                                            <p class="text-muted">No Image Available</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$undangan->nama_undangan }}</h5>  
                                    {{-- <h5 class="card-title">{{$undangan->bahan_undangan }}</h5>   --}}
                                    <p class="card-text text-muted">Harga: Rp {{ number_format($undangan->harga_undangan, 0, ',', '.') }}</p>
                                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal-{{$undangan->id_undangan}}">
                                        Detail Vendor
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                        {{$undangans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Undangan --> 
    @foreach($undangans as $undangan)
    <div class="modal fade" id="detailModal-{{$undangan->id_undangan }}" tabindex="-1" aria-labelledby="detailModalLabel-{{$undangan->id_undangan }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="detailModalLabel-{{ $undangan->id_undangan }}">
                        <i class="bi bi-envelope me-2"></i>{{ $undangan->nama_undangan}}
                        {{-- <i class="bi bi-envelope me-2"></i>{{ $undangan->bahan_undangan}} --}}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-7 position-relative p-3">
                            <div id="imageGallery-{{ $undangan->id_undangan }}" class="d-flex overflow-hidden" style="scroll-behavior: smooth;">
                                @forelse($undangan->fotoUndangan as $index => $foto)
                                    <img src="{{ asset('storage/' . str_replace('foto_undangan/', '', $foto->foto_path)) }}"
                                        class="flex-shrink-0 w-100 rounded" style="height: 600px; object-fit: contain;" alt="Foto Undangan">
                                @empty
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 600px; width: 100%;">
                                        <p class="text-muted">No Image Available</p>
                                    </div>
                                @endforelse
                            </div>
                            @if($undangan->fotoUndangan->count() > 1)
                                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y" onclick="scrollGallery('{{ $undangan->id_undangan }}', -1)">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y" onclick="scrollGallery('{{ $undangan->id_undangan }}', 1)">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            @endif
                        </div>
                        <div class="col-md-5 p-4">
                            <h2 class="mb-3">{{ $undangan->nama_undangan }}</h2>
                            <h3 class="mb-3">{{ $undangan->bahan_undangan }}</h3>
                            <h4 class="text-primary mb-4">Rp {{ number_format($undangan->harga_undangan, 0, ',', '.') }}</h4>
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            <p class="mb-4">{{ $undangan->deskripsi_undangan }}</p>
                              <!-- Kuantitas -->
                              <div class="mb-3">
                                <label for="quantity-{{ $undangan->id_undangan }}" class="form-label">Kuantitas</label>
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-secondary" onclick="changeQuantity('{{ $undangan->id_undangan }}', -1)">-</button>
                                    <input type="number" class="form-control text-center" id="quantity-{{ $undangan->id_undangan }}" name="quantity" 
                                        value="1" min="1" style="max-width: 80px; color: gray;" 
                                        oninput="updateInputColor(this)">
                                    <button type="button" class="btn btn-outline-secondary" onclick="changeQuantity('{{ $undangan->id_undangan }}', 1)">+</button>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('pemesanan.create', ['id_undangan' => $undangan->id_undangan]) }}" class="btn btn-primary btn-lg w-50 me-2">Pesan Sekarang</a>
                                <button type="button" class="btn btn-secondary btn-lg w-50" data-bs-dismiss="modal">Batal</button>
                            </div>
                            <div class="mt-3">
                            <form action="{{ route('keranjang.add', $undangan->id_undangan) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                @csrf
                                <input type="hidden" name="id_undangan" value="{{$undangan->id_undangan }}">
                                <input type="hidden" name="bahan_undangan" value="{{$undangan->bahan_undangan }}">
                                <input type="hidden" name="harga_undangan" value="{{$undangan->harga_undangan }}">
                                <button type="submit" class="add-to-cart-button"
                                    style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Tambah
                                    ke Keranjang</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!--untuk mengubah kuantitas-->
    <script>
        function changeQuantity(id, step) {
            const quantityInput = document.getElementById('quantity-' + id);
            let quantity = parseInt(quantityInput.value) || 1;
    
            quantity = quantity + step;
            if (quantity < 1) quantity = 1;
    
            quantityInput.value = quantity;
            quantityInput.style.color = 'gray';  // Mengembalikan warna ke abu-abu jika tombol +/- digunakan
        }
    
        function updateInputColor(input) {
            input.style.color = 'black';  // Mengubah warna teks menjadi hitam ketika pengguna mengetik
        }
    </script>
    
    
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

        function applyFilters() {
            // Get selected values
            var bahan = document.getElementById('bahanFilter').value;
            var quantity = document.getElementById('quantityFilter').value;

            // Here you would typically make an AJAX call to your backend
            // to fetch filtered results. For now, we'll just log the values.
            console.log('Applying filters:', { bahan: bahan, quantity: quantity });

            // You can add your filter logic here or make an AJAX call to refresh the product list
            // based on the selected filters
        }
    </script>

    @include('home.footer')
</body>
</html>