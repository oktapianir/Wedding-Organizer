<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css">
    <style>
        :root {
            --primary-color: #fd5d5d;
            --secondary-color: #ff8080;
            --background-color: #fff0f0;
            --text-color: #333333;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
            background-color: var(--primary-color);
            color: white;
            padding: 2rem 0;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.8;
        }

        .content-wrapper {
            display: flex;
            gap: 2rem;
        }

        .search-form {
            flex: 0 0 300px;
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid var(--secondary-color);
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn-search {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn-search:hover {
            background-color: var(--secondary-color);
        }

        .venues-grid {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .venue-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .venue-card:hover {
            transform: translateY(-5px);
        }

        .venue-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .venue-details {
            padding: 1.5rem;
        }

        .venue-name {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .venue-info {
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }

        .venue-price {
            font-weight: bold;
            color: var(--secondary-color);
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .btn-details {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-details:hover {
            background-color: var(--secondary-color);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: var(--background-color);
            margin: 10% auto;
            padding: 2rem;
            border: 1px solid var(--primary-color);
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: var(--text-color);
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: var(--primary-color);
            text-decoration: none;
            cursor: pointer;
        }

        .modal-title {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .modal-info {
            margin-bottom: 1rem;
        }

        .modal-info h4 {
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .modal-images {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .modal-images img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .pagination .page-item {
            margin: 0 0.25rem;
        }

        .pagination .page-link {
            color: var(--primary-color);
            background-color: white;
            border: 1px solid var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pagination .page-link:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .pagination .active .page-link {
            background-color: var(--primary-color);
            color: white;
        }
        .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 2rem;
        border: 1px solid #ccc;
        border-radius: 10px;
        width: 90%;
        max-width: 600px;
        max-height: 80vh; /* Maksimum tinggi modal */
        overflow-y: auto;  /* Scroll jika konten melebihi tinggi maksimum */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @include('home.header')
    @include('home.css')
</head>
<body>
    <div class="container">
        <!-- Back Button -->
        <div class="container-fluid py-3">
            <div class="container">
                <a href="{{ route('pelayanan') }}" class="btn btn-outline-primary py-2 px-4">
                    <i class="fa fa-arrow-left me-2"></i>Kembali
                </a>
            </div>
        </div>
            <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-2 text-dark">Vendor Gedung</h1>
                    <p class="lead text-muted">
                        Pilihlah gedung terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak terlupakan.</p>
                </div>
            
        </div>
        <div class="content-wrapper">
            <div class="search-form">
                <form id="searchForm" method="GET" action="{{ route('filter.gedung') }}">  
                    <div class="form-group">
                        <label for="tanggal">Tanggal Acara</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="number" id="kapasitas" name="kapasitas" value="{{ request('kapasitas') }}"  placeholder="Masukan kapasitas anda " class="form-control" style="color: black">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" id="resetButton" class="btn btn-secondary w-50">Reset</button>
                        <button type="submit" class="btn btn-primary w-50 ms-2">Temukan vendor</button>
                    </div>
                </form>
            </div>
            
            <script>
                // Pastikan halaman sudah dimuat sepenuhnya
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById("resetButton").addEventListener("click", function() {
                        // Reset nilai input
                        document.getElementById("tanggal").value = '';
                        document.getElementById("kapasitas").value = '';
                        
                        // Redirect ke halaman awal
                        window.location.href = "{{ route('home.gedung') }}";
                    });
                });
            </script>

            <div class="venues-grid">
                    @if($gedung->count() > 0)
                    @foreach($gedung as $item)
                        <div class="venue-card">
                            <div class="venue-image" style="background-image: url('{{ Storage::url($item->fotoGedung->first()->foto_path ?? 'default.jpg') }}')"></div>
                            <div class="venue-details">
                                <h3 class="venue-name">{{ $item->nama_gedung }}</h3>
                                <p class="venue-info">Kapasitas: {{ $item->kapasitas_gedung }} Orang</p>
                                <p class="venue-price">Rp {{ number_format($item->harga_gedung, 0, ',', '.') }}</p>
                                <button onclick="openModal('modal{{ $item->id_gedung }}')" class="btn-details">Lihat</button>
                            </div>
                        </div> 
            
                    <!-- Modal detail-->
                    <div id="modal{{ $item->id_gedung }}" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('modal{{ $item->id_gedung }}')">&times;</span>
                            <h2 class="modal-title" style="text-align: center">{{ $item->nama_gedung }}</h2>
                            <div class="modal-info">
                                <h4>Tipe Gedung</h4>
                                <p>{{ $item->tipe_gedung }}</p>
                            </div>
                            <div class="modal-info">
                                <h4>Kapasitas</h4>
                                <p>{{ $item->kapasitas_gedung }} orang</p>
                            </div>
                            <div class="modal-info">
                                <h4>Harga</h4>
                                <p>Rp {{ number_format($item->harga_gedung, 0, ',', '.') }}</p>
                            </div>
                            <div class="modal-info">
                                <h4>Status</h4>
                                <p>{{ $item->status_gedung }}</p>
                            </div>
                            <div class="modal-info">
                                <h4>Deskripsi</h4>
                                <p>{{ $item->deskripsi_gedung }}</p>
                            </div>
                            <div class="modal-info">
                                <h4>Foto</h4>
                                <div class="modal-images">
                                    @foreach($item->fotoGedung as $foto)
                                        <img src="{{ Storage::url($foto->foto_path) }}" alt="{{ $item->nama_gedung }}">
                                    @endforeach
                                </div>
                            </div>
                            <div style="display: flex; gap: 10px; margin-bottom: 15px;">
                                <a href="#"
                                    style="flex: 1; padding: 12px 20px; background-color: #007bff; color: white; text-decoration: none; text-align: center; border-radius: 5px; font-weight: 600; transition: all 0.3s ease;">Pesan
                                    Sekarang</a>
                                <button type="button" data-bs-dismiss="modal"
                                    style="flex: 1; padding: 12px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;" onclick="closeModal('modal{{ $item->id_gedung }}')">Batal</button>
                            </div>
                            <form action="{{ route('keranjang.add', $item->id_gedung) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                @csrf
                                <input type="hidden" name="id_gedung" value="{{$item->id_gedung }}">
                                <input type="hidden" name="nama_gedung" value="{{$item->nama_gedung}}">
                                <input type="hidden" name="harga_gedung" value="{{$item->harga_gedung}}">
                                <button type="submit" class="add-to-cart-button"
                                    style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Tambah
                                    ke Keranjang</button>
                            </form>
                        </div>
                    </div>
     
                @endforeach
                @else
                <div class="no-venues-card" style="text-align: center; padding: 30px; background-color: #f8d7da; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); max-width: 500px; margin: 30px auto;">
                    <h3 style="color: #721c24; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 600;">Oops!</h3>
                    <p style="color: #721c24; font-size: 18px; margin-top: 10px;">Tidak ada gedung yang sesuai</p>
                    <p style="color: #721c24; font-size: 16px; font-style: italic; margin-top: 5px;">Coba cari kapasitas atau tanggal acara yang lain...</p>
                </div>                               
            @endif
            </div>            
        </div>

        <!-- Pagination -->
        {{-- <div class="pagination">
            {{ $gedung->links() }}
        </div> --}}
       
    </div>
    
    <script>
        // Initialize price range slider
        var priceSlider = document.getElementById('price-range');
        noUiSlider.create(priceSlider, {
            start: [1000000, 30000000],
            connect: true,
            range: {
                'min': 1000000,
                'max': 30000000
            },
            format: {
                to: function (value) {
                    return Math.round(value);
                },
                from: function (value) {
                    return Number(value);
                }
            }
        });

        var minPriceElement = document.getElementById('min-price');
        var maxPriceElement = document.getElementById('max-price');

        priceSlider.noUiSlider.on('update', function (values, handle) {
            var value = values[handle];
            if (handle) {
                maxPriceElement.innerHTML = 'Rp ' + Number(value).toLocaleString();
            } else {
                minPriceElement.innerHTML = 'Rp ' + Number(value).toLocaleString();
            }
        });

        // Modal functions
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = "none";
            }
        }
    </script>
</body>
@include('home.footer')
</html>




