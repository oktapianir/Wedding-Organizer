<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style>
        .carousel-item img {
            max-height: 200px;
            /* Set height to fit the frame */
            object-fit: cover;
            /* Ensure the image covers the frame without stretching */
        }

        .carousel-inner {
            max-height: 200px;
            /* Ensure the carousel container is not too large */
        }

        .carousel-control-prev,
        .carousel-control-next {
            filter: invert(100%);
            /* Optionally make controls more visible */
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    @include('home.header')

</head>

<body data-bs-spy="scroll" data-bs-target="#navBar" id="weddingHome">

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>
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
                <h1 class="display-2 text-dark">Vendor Dekorasi</h1>
                <p class="lead text-muted">
                    Pilihlah dekorasi terbaik dari vendor-vendor terpercaya untuk menciptakan momen yang tidak
                    terlupakan.</p>
            </div>
            <div class="row">


                <div class="container py-5">
                    <div class="row">
                        @foreach ($dekorasis as $dekorasi)
                            <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="card h-100 shadow-sm">
                                    <div class="card-img-top">
                                        @if ($dekorasi->fotoDekorasi && $dekorasi->fotoDekorasi->count() > 0)
                                            <img src="{{ asset('storage/dekorasi/' . str_replace('dekorasi/', '', $dekorasi->fotoDekorasi->first()->foto_path)) }}"
                                                class="d-block w-100" alt="Foto Dekorasi"
                                                style="height: 200px; object-fit: cover;">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center bg-light"
                                                style="height: 200px;">
                                                <p class="text-muted">No Image Available</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $dekorasi->nama_dekorasi }}</h5>
                                        <p class="card-text text-muted">Harga: Rp
                                            {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</p>
                                        <button type="button" class="btn btn-outline-primary w-100"
                                            data-bs-toggle="modal"
                                            data-bs-target="#detailModal-{{ $dekorasi->id_dekorasi }}">
                                            Detail Vendor
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $dekorasis->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Detail Dekorasi -->
    @foreach ($dekorasis as $dekorasi)
        <div class="modal fade" id="detailModal-{{ $dekorasi->id_dekorasi }}" tabindex="-1"
            aria-labelledby="detailModalLabel-{{ $dekorasi->id_dekorasi }}" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 1000px;">
                <div class="modal-content"
                    style="border-radius: 20px; overflow: hidden; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <div class="modal-header"
                        style="background-color: #f8f9fa; border-bottom: 1px solid #e9ecef; padding: 20px 30px;">
                        <h5 class="modal-title" id="detailModalLabel-{{ $dekorasi->id_dekorasi }}"
                            style="color: #333; font-size: 24px; font-weight: 600;">
                            {{ $dekorasi->nama_dekorasi }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            style="background-color: #333;"></button>
                    </div>
                    <div class="modal-body" style="padding: 0;">
                        <div class="row" style="margin: 0;">
                            <div class="col-md-7" style="padding: 20px; background-color: #ffffff;">
                                <div
                                    style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <div id="imageGallery-{{ $dekorasi->id_dekorasi }}"
                                        style="display: flex; overflow-x: auto; scroll-behavior: smooth; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;">
                                        @forelse($dekorasi->fotoDekorasi as $index => $foto)
                                            <img src="{{ asset('storage/dekorasi/' . str_replace('dekorasi/', '', $foto->foto_path)) }}"
                                                style="flex: 0 0 100%; width: 100%; height: 450px; object-fit: cover; scroll-snap-align: start;"
                                                alt="Foto Dekorasi">
                                        @empty
                                            <div
                                                style="display: flex; align-items: center; justify-content: center; width: 100%; height: 450px; background-color: #f8f9fa;">
                                                <p style="color: #6c757d;">Tidak ada gambar tersedia</p>
                                            </div>
                                        @endforelse
                                    </div>
                                    @if ($dekorasi->fotoDekorasi->count() > 1)
                                        <button onclick="scrollGallery('{{ $dekorasi->id_dekorasi }}', -1)"
                                            style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); background-color: rgba(255,255,255,0.7); border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 20px; display: flex; align-items: center; justify-content: center; cursor: pointer;">&#10094;</button>
                                        <button onclick="scrollGallery('{{ $dekorasi->id_dekorasi }}', 1)"
                                            style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background-color: rgba(255,255,255,0.7); border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 20px; display: flex; align-items: center; justify-content: center; cursor: pointer;">&#10095;</button>
                                    @endif
                                </div>
                                <div style="display: flex; overflow-x: auto; margin-top: 15px; padding-bottom: 10px;">
                                    @foreach ($dekorasi->fotoDekorasi as $index => $foto)
                                        <img src="{{ asset('storage/dekorasi/' . str_replace('dekorasi/', '', $foto->foto_path)) }}"
                                            style="width: 80px; height: 80px; object-fit: cover; margin-right: 10px; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;"
                                            onclick="scrollToImage('{{ $dekorasi->id_dekorasi }}', {{ $index }})"
                                            onmouseover="this.style.transform='scale(1.05)'"
                                            onmouseout="this.style.transform='scale(1)'"
                                            alt="Thumbnail {{ $index + 1 }}">
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-5" style="padding: 30px; background-color: #f8f9fa;">
                                <h3 style="font-size: 28px; font-weight: 700; color: #333; margin-bottom: 15px;">
                                    {{ $dekorasi->nama_dekorasi }}</h3>
                                <h4 style="font-size: 24px; font-weight: 600; color: #fd5d5d; margin-bottom: 20px;">Rp
                                    {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</h4>
                                <h6 style="font-size: 18px; font-weight: 600; color: #555; margin-bottom: 10px;">
                                    Deskripsi</h6>
                                <p style="font-size: 16px; color: #666; line-height: 1.6; margin-bottom: 25px;">
                                    {{ $dekorasi->deskripsi_dekorasi }}</p>
                                <input type="hidden" id="id_dekorasi_hidden" value="">
                                <div style="display: flex; gap: 10px; margin-bottom: 15px;">
                                    <a href="{{ route('pemesanan.create', ['id_dekorasi' => $dekorasi->id_dekorasi]) }}"
                                        style="flex: 1; padding: 12px 20px; background-color: #007bff; color: white; text-decoration: none; text-align: center; border-radius: 5px; font-weight: 600; transition: all 0.3s ease;">Pesan
                                        Sekarang</a>
                                    <button type="button" data-bs-dismiss="modal"
                                        style="flex: 1; padding: 12px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Batal</button>
                                </div>
                                {{-- <button type="button"
                                    onclick="addToCart('{{ $dekorasi->id_dekorasi }}', '{{ $dekorasi->nama_dekorasi }}', '{{ $dekorasi->harga_dekorasi }}', '{{ $dekorasi->gambar_url }}')"
                                    style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Tambah
                                    ke Keranjang</button> --}}
                                {{-- <form action="{{ route('keranjang.add', $dekorasi->id_dekorasi) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_dekorasi" value="{{ $dekorasi->id_dekorasi }}">
                                    <input type="hidden" name="nama_dekorasi"
                                        value="{{ $dekorasi->nama_dekorasi }}">
                                    <input type="hidden" name="harga_dekorasi"
                                        value="{{ $dekorasi->harga_dekorasi }}">
                                    <button type="submit"
                                        style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Tambah
                                        ke Keranjang</button>
                                </form> --}}

                                <form action="{{ route('keranjang.add', $dekorasi->id_dekorasi) }}" method="POST" class="add-to-cart-form" onsubmit="disableOtherButtons(this);">
                                    @csrf
                                    <input type="hidden" name="id_dekorasi" value="{{ $dekorasi->id_dekorasi }}">
                                    <input type="hidden" name="nama_dekorasi" value="{{ $dekorasi->nama_dekorasi }}">
                                    <input type="hidden" name="harga_dekorasi" value="{{ $dekorasi->harga_dekorasi }}">
                                    <button type="submit" class="add-to-cart-button"
                                        style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Tambah
                                        ke Keranjang</button>
                                </form>
                                
                                {{-- <button type="button" onclick="addToCart('{{ $dekorasi->id_dekorasi }}', '{{ $dekorasi->nama_dekorasi }}', '{{ $dekorasi->harga_dekorasi }}')" style="width: 100%; padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Tambah ke Keranjang</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function disableOtherButtons(form) {
            // Nonaktifkan semua tombol 'Tambah ke Keranjang' ketika satu item sudah diproses
            const forms = document.querySelectorAll('.add-to-cart-form');
            forms.forEach(f => {
                const button = f.querySelector('.add-to-cart-button');
                button.disabled = true; // Nonaktifkan semua tombol
                button.style.backgroundColor = '#ccc'; // Ubah warna tombol agar terlihat nonaktif
                button.style.cursor = 'not-allowed'; // Ubah kursor untuk menunjukkan tombol nonaktif
                button.innerText = 'Tidak Dapat Ditambahkan'; // Ubah teks tombol
            });
    
            // Kirim form yang di-submit
            form.submit();
        }
    </script>

   @include('home.footer')


</body>

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

    function scrollToImage(id, index) {
        const gallery = document.getElementById(`imageGallery-${id}`);
        const scrollAmount = gallery.clientWidth * index;
        gallery.scrollTo({
            left: scrollAmount,
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
</script>

<!-- Script untuk mengisi hidden field saat modal terbuka -->
<script>
    function showModal(id_dekorasi, nama, harga) {
        document.getElementById('id_dekorasi_hidden').value = id_dekorasi;
        document.getElementById('namaDekorasi').innerText = nama;
        document.getElementById('hargaDekorasi').innerText = "Harga: " + harga;
        $('#detailModal').modal('show');
    }

    document.getElementById('pesanSekarangBtn').addEventListener('click', function() {
        var idDekorasi = document.getElementById('id_dekorasi_hidden').value;
        window.location.href = "/pemesanan/create?id_dekorasi=" + idDekorasi;
    });
</script>

<!--untuk scroll gamabr pada modal detail-->
<script>
    function scrollGallery(id, direction) {
        const gallery = document.getElementById(`imageGallery-${id}`);
        const scrollAmount = gallery.offsetWidth;
        gallery.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }

    function scrollToImage(id, index) {
        const gallery = document.getElementById(`imageGallery-${id}`);
        const scrollAmount = gallery.offsetWidth * index;
        gallery.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
    }

    function addToCart(id_dekorasi) {
        // Implementasi fungsi addToCart di sini
        console.log('Dekorasi dengan ID: ' + id_dekorasi + ' ditambahkan ke keranjang.');
        // Tambahkan logika untuk menampilkan modal notifikasi di sini
    }
</script>
