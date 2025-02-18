<div class="container-fluid carousel-header px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{asset('img/carousel-1.jpg')}}" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                        <h1 class="display-1 text-capitalize text-white mb-3">
                            PernikahanMu Kebahagiaan kami bersama</h1> 
                        <div class="d-flex align-items-center justify-content-center">
                            @auth
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="{{ route('pelayanan') }}">AYO PESAN</a>
                            @else
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="{{ route('login') }}">AYO PESAN</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/carousel02.jpg')}}" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                        <h1 class="display-1 text-capitalize text-white mb-3">PernikahanMu Kebahagiaan kami bersama</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            @auth
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="{{ route('pelayanan') }}">AYO PESAN</a>
                            @else
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="{{ route('login') }}">AYO PESAN</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/carousel00.jpg')}}" class="img-fluid bg-secondary" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                        <h1 class="display-1 text-capitalize text-white mb-3">PernikahanMu Kebahagiaan kami bersama</h1>
                        <div class="d-flex align-items-center justify-content-center">
                            @auth
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="{{ route('pelayanan') }}">AYO PESAN</a>
                            @else
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="{{ route('login') }}">AYO PESAN</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>