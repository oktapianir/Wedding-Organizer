<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
</head>
<body>
    <div class="container-fluid gallery position-relative py-5" id="weddingGallery">
        <div class="position-absolute" style="top: -95px; right: 0;">
            <img src="{{asset('img/tamp-bg-1.png')}}" class="img-fluid" alt="">
        </div>
        <div class="position-absolute" style="top: -80px; left: 0; transform: rotate(150deg);">
            <img src="{{asset('img/tamp-bg-1.png')}}" class="img-fluid" alt="">
        </div>
        <div class="container position-relative py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-dark">Selamat datang di Wedding Organizer!</h1>
                <p class="fs-5 text-dark">Pelayanan yang kami hadirkan hanya untuk anda!</p>
            </div>
            <div class="row g-4">
                <!-- Card Gedung -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/gedung.png')}}" alt="Gedung">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/gedung.png" data-lightbox="Gallery-6">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Gedung</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.gedung') }}">Lihat</a>
                        </div>
                    </div>
                </div>
            
                <!-- Card Dekorasi -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/hldekorasi.png')}}" alt="Dekorasi">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/hldekorasi.png" data-lightbox="Gallery-1">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Dekorasi</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.dekorasi') }}">Lihat</a>
                        </div>
                    </div>
                </div>

                <!-- Card Katering -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/hlkatering.png')}}" alt="Katering">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/hlkatering.png" data-lightbox="Gallery-5">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Katering</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.katering') }}">Lihat</a>
                        </div>
                    </div>
                </div>

                <!-- Card Hiburan -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/hlhiburan.png')}}" alt="Hiburan">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/hlhiburan.png" data-lightbox="Gallery-3">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Hiburan</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.hiburan') }}">Lihat</a>
                        </div>
                    </div>
                </div>

                <!-- Card Dokumentasi -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/hldokumentasi.png')}}" alt="Dokumentasi">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/hldokumentasi.png" data-lightbox="Gallery-4">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Dokumentasi</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.dokumentasi') }}">Lihat</a>
                        </div>
                    </div>
                </div>
            
                <!-- Card Tata Rias -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/hlrias.png')}}" alt="Tata Rias">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/hlrias.png" data-lightbox="Gallery-2">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tata Rias</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.bridalstyle') }}">Lihat</a>
                        </div>
                    </div>
                </div>
            
                <!-- Card Souvenir -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/souvenir.png')}}" alt="Souvenir">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/souvenir.png" data-lightbox="Gallery-6">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Souvenir</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.souvenir') }}">Lihat</a>
                        </div>
                    </div>
                </div>
            
                <!-- Card Undangan -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card shadow-lg border-0">
                        <div class="gallery-img position-relative">
                            <img class="card-img-top img-fluid w-100 rounded" src="{{asset('img/gallery-5.jpg')}}" alt="Undangan">
                            <div class="search-icon position-absolute top-50 start-50 translate-middle">
                                <a href="img/gallery-5.jpg" data-lightbox="Gallery-7">
                                    <i class="fas fa-plus btn btn-primary btn-lg p-3 rounded-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Undangan</h5>
                            <a class="btn btn-primary btn-sm" href="{{ route('home.undangan') }}">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    @include('home.footer')
</body>
</html>
