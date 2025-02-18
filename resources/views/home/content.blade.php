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
<!-- Gallery end -->

 <!-- About Start -->
 <div class="container-fluid position-relative overflow-hidden bg-secondary py-5">
    <img src="{{asset('img/bg-flower.png')}}" class="img-fluid position-absolute top-0" style="right: -15px; transform: rotate(270deg); opacity: 0.5;" alt="">
    <img src="{{asset('img/bg-flower.png')}}" class="img-fluid position-absolute" style="bottom: 10px; left: -15px; transform: rotate(90deg); opacity: 0.5;" alt="">
    <div class="container py-5 position-relative">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="border-white bg-primary" style="border-style: double;">
                    <img src="{{asset('img/about-1.jpg')}}" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-5 text-white mb-4">Kami Mewujudkan Setiap Momen Anda</h1>
                    <p class="text-white fs-5 mb-4">Aplikasi yang dirancang khusus untuk rencana pernikahan Anda. Beberapa fitur tersedia untuk memudahkan anda dalam mengatur pernikahan yang Anda impikan.
                    </p>
                    <div class="tab-class bg-primary p-4">
                        <ul class="nav d-flex mb-4">
                            <li class="nav-item">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">Bride Info</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 150px;">Groom info</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <img src="{{asset('img/bride.jpg')}}" class="img-fluid w-100 img-border" alt="">
                                            </div>
                                            <div class="text-start my-auto">
                                                <h5 class="text-white fw-bold">Wedding Organizer</h5>
                                                <p class="text-white mb-3">
                                                    Make your wedding festive by joining us at Teman Wedding 
                                                </p>
                                                <div class="d-flex">
                                                    <a href="https://www.facebook.com/TheKnot" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-2" target="_blank">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a href="https://www.youtube.com/watch?v=WGjeUO38-Uo" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-2" target="_blank">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                    <a href="https://www.instagram.com/bridestory" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-2" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                    <a href="https://www.linkedin.com/company/orami" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-0" target="_blank">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <img src="{{asset('img/Groom.jpg')}}" class="img-fluid w-100 img-border" alt="">
                                            </div>
                                            <div class="text-start my-auto">
                                                <h5 class="text-white fw-bold">Anthony</h5>
                                                <p class="text-white mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <div class="d-flex">
                                                    <a href="" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-2"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-2"><i class="fab fa-twitter"></i></a>
                                                    <a href="" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                                    <a href="" class="btn btn-primary btn-primary-outline-0 btn-sm-square me-0"><i class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0">
                            <a href="/tentangkami" class="btn btn-primary btn-primary-outline-0 py-3 px-4">Read More</a>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-inline-block ms-4 me-3">
                                <i class="fa fa-phone fa-2x text-success border border-2 border-white p-2"></i>
                            </div>
                            <div class="d-flex flex-column flex-nowrap">
                                <h5 class="text-dark fw-bold mb-2">Call Us Anytime</h5>
                                <h4 class="text-primary mb-0">+123 456 7890</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

 <!-- Hello! Start -->
 <div class="container-fluid position-relative py-5" id="weddingAbout">
    <div class="position-absolute" style="top: -35px; right: 0;">
        <img src="{{asset('img/tamp-bg-1.png')}}" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="top: -10px; left: 0; transform: rotate(150deg);">
        <img src="{{asset('img/tamp-bg-1.png')}}" class="img-fluid" alt="">
    </div>
    {{-- <section style="color: #000; background-color: #f3f2f2;">
        <div class="container py-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h3 class="fw-bold mb-4">Testimoni Pelanggan Kami</h3>
            </div>
          </div>
      
          <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="card">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h5 class="font-weight-bold">Teresa May</h5>
                  <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                  <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star-half-alt fa-sm text-info"></i>
                    </li>
                  </ul>
                  <p class="mb-2">
                    <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                    ad velit ab hic tenetur.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="card">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h5 class="font-weight-bold">Maggie McLoan</h5>
                  <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
                  <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                  </ul>
                  <p class="mb-2">
                    <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                    sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                    labore laboriosam.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-0">
              <div class="card">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h5 class="font-weight-bold">Alexa Horwitz</h5>
                  <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
                  <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-info"></i>
                    </li>
                    <li>
                      <i class="far fa-star fa-sm text-info"></i>
                    </li>
                  </ul>
                  <p class="mb-2">
                    <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                    nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                    vestibulum in tempus viverra turpis.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <div class="container position-relative py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    </div>
                    <div class="col-lg-2 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa fa-heart fa-5x text-primary"></i>
                       </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- Hello! End -->

<!-- - Bridesmaids & Groomsmen start -->
<!-- <div class="container-fluid team position-relative py-5">
    <div class="position-absolute" style="bottom: -80px; right: 0;">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="bottom: -90px; left: 0; transform: rotate(150deg);">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="top: -100px; right: 0;">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="top: -80px; left: 0; transform: rotate(150deg);">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="container py-5">
        <div class="mb-5 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-2 text-dark">Selamat datang di Wedding Organizer!</h1>
            <p class="fs-5 text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <div class="team-img-main">
                            <img src="img/bridesmaid-1.png" class="img-fluid w-100" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -30px; left: -100px; transform: rotate(50deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -40px; right: -120px; transform: rotate(-30deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="d-flex flex-column p-4">
                            <h5 class="text-white display-6 mb-1">Amelia Alex</h5>
                            <h5 class="text-white fs-5 mb-0">Bridesmaid</h5>
                        </div>
                    </div>
                    <div class="team-social d-flex flex-column">
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <div class="team-img-main">
                            <img src="img/bridesmaid-team-2.png" class="img-fluid w-100" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -30px; left: -100px; transform: rotate(50deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -40px; right: -120px; transform: rotate(-30deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="d-flex flex-column p-4">
                            <h5 class="text-white display-6 mb-1">Amelia Alex</h5>
                            <h5 class="text-white fs-5 mb-0">Bridesmaid</h5>
                        </div>
                    </div>
                    <div class="team-social d-flex flex-column">
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <div class="team-img-main">
                            <img src="img/bridesmaid-3.png" class="img-fluid w-100" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -30px; left: -100px; transform: rotate(50deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -40px; right: -120px; transform: rotate(-30deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="d-flex flex-column p-4">
                            <h5 class="text-white display-6 mb-1">Amelia Alex</h5>
                            <h5 class="text-white fs-5 mb-0">Bridesmaid</h5>
                        </div>
                    </div>
                    <div class="team-social d-flex flex-column">
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <div class="team-img-main">
                            <img src="img/bridesmaid-4.png" class="img-fluid w-100" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -30px; left: -100px; transform: rotate(50deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-img-bg position-absolute" style="bottom: -40px; right: -120px; transform: rotate(-30deg); z-index: 1;">
                            <img src="img/team-1-bg.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="d-flex flex-column p-4">
                            <h5 class="text-white display-6 mb-1">Amelia Alex</h5>
                            <h5 class="text-white fs-5 mb-0">Bridesmaid</h5>
                        </div>
                    </div>
                    <div class="team-social d-flex flex-column">
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Bridesmaids & Groomsmen End -->

<!-- Story Start -->
<!-- <div class="container-fluid story position-relative py-5" id="weddingStory">
    <div class="position-absolute" style="top: -35px; right: 0;">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="top: -15px; left: 0; transform: rotate(150deg);">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="container position-relative py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-uppercase text-primary fw-bold mb-4"></h5>
            <h1 class="display-4">Paket yang kami hadirkan</h1>
        </div>
        <div class="story-timeline">
            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-6 text-end border-0 border-top border-end border-secondary p-4">
                    <div class="d-inline-flex align-items-center h-100">
                        <img src="img/story-1.jpg" class="img-fluid w-100 img-border" alt="">
                    </div>
                </div>
                <div class="col-md-6 border-start border-top border-secondary p-4 pe-0">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                        <h4 class="mb-2 text-dark">Paket Silver Wedding </h4>
                        <!-- <p class="text-uppercase text-primary mb-2" style="letter-spacing: 3px;">01 Jan 2050</p> -->
                        <!-- <p class="mb-2 fs-5">
                            Paket hemat dan minimalis yang dihadirkan wedding organizer untuk pernikahan Anda.</p>
                        <a href="silver.html" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-md-6 text-end border-end border-top border-secondary p-4 ps-0">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                        <h4 class="text-dark mb-2">Paket Gold Wedding</h4> -->
                        <!-- <p class="text-uppercase text-primary mb-2" style="letter-spacing: 3px;">01 Jan 2050</p> -->
                        <!-- <p class="mb-2 fs-5">
                            Paket standar dan medium yang dihadirkan wedding organizer untuk pernikahan Anda.</p>
                        <a href="gold.html" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-6 border-start border-top border-secondary p-4">
                    <div class="d-inline-flex align-items-center h-100">
                        <img src="img/story-2.jpg" class="img-fluid w-100 img-border" alt="">
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-6 text-end border-end border-top border-secondary p-4 ps-0">
                    <div class="d-inline-flex align-items-center h-100">
                        <img src="img/story-3.jpg" class="img-fluid w-100 img-border" alt="">
                    </div>
                </div>
                <div class="col-md-6 border-start border-top border-secondary p-4 pe-0">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                        <h4 class="text-dark mb-2">Paket Platinum Wedding </h4> -->
                        <!-- <p class="text-uppercase text-primary mb-2" style="letter-spacing: 3px;">01 Jan 2050</p> -->
                        <!-- <p class="mb-2 fs-5">Paket lengkap dan berkelas tinggi yang dihadirkan wedding organizer untuk pernikahan Anda.</p>
                        <a href="platinum.html" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-md-6 text-end border border-start-0 border-secondary p-4 ps-0">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                        <h4 class="text-dark mb-2">Paket Custom Wedding</h4> -->
                        <!-- <p class="text-uppercase text-primary mb-2" style="letter-spacing: 3px;">01 Jan 2050</p> -->
                        <!-- <p class="mb-2 fs-5">
                            Paket custom sesuai kebutuhan dan keinginan pelanggan yang dihadirkan wedding organizer untuk pernikahan Anda</p>
                        <a href="custom.html" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-6 border border-end-0 border-secondary p-4">
                    <div class="d-inline-flex align-items-center h-100">
                        <img src="img/story-4.jpg" class="img-fluid w-100 img-border" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Story End -->









<!--- Wedding Date -->
<!-- <div class="container-fluid wedding-date-bg position-relative py-5">
    <div class="position-absolute" style="top: -100px; right: 0;">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="top: -80px; left: 0; transform: rotate(150deg);">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="container py-5 wow zoomIn" data-wow-delay="0.1s">
        <div class="wedding-date text-center bg-light p-5" style="border-style: double !important; border: 15px solid rgba(253, 93, 93, 0.5);">
            <div class="wedding-date-content">
                <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4" style="border-style: double;">
                    <h4 class="text-dark text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">June 28, 2024</h4>
                </div>
                <h1 class="display-4">We Are Getting Married</h1>
                <p class="text-dark fs-5">Niloy Hotel New York , 123 West 23th Street, NY</p>
                <div class="d-flex align-items-center justify-content-center mb-5">
                    <div class="text-dark fs-2 me-4">
                        <div>00</div>
                        <span>Days</span>
                    </div>
                    <div class="text-dark fs-2 me-4">
                        <div>00</div>
                        <span>Hours</span>
                    </div>
                    <div class="text-dark fs-2 me-4">
                        <div>00</div>
                        <span>Mins</span>
                    </div>
                    <div class="text-dark fs-2 me-0">
                        <div>00</div>
                        <span>Secs</span>
                    </div>
                </div>
                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="#">Book Your Attendance</a>
            </div>
            <div class="position-absolute" style="top: 15%; right: -30px; transform: rotate(320deg); opacity: 0.5; z-index: 1;">
                <img src="img/attendance-bg.png" class="img-fluid" alt="">
            </div>
            <div class="position-absolute" style="top: 15%; left: -10px; transform: rotate(-320deg); opacity: 0.5; z-index: 1;">
                <img src="img/attendance-bg.png" class="img-fluid" alt="">
            </div>
        </div>
    </div> -->
<!-- </div> -->
<!-- Wedding Date -->


<!-- Wedding Timeline start -->
<!-- <div class="container-fluid wedding-timeline bg-secondary position-relative overflow-hidden py-5" id="weddingTimeline">
    <div class="position-absolute" style="top: 50%; left: -100px; transform: translateY(-50%); opacity: 0.5;">
        <img src="img/wedding-bg.png" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="top: 50%; right: -160px; transform: translateY(-50%); opacity: 0.5; rotate: 335deg;">
        <img src="img/wedding-bg.png" class="img-fluid" alt="">
    </div>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 text-white">Wedding Planing Timeline</h1>
        </div>
        <div class="position-relative wedding-content">
            <div class="row g-4">
                <div class="col-6 col-md-6 col-xl-3 border border-bottom-0">
                    <div class="text-center p-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="mb-4 p-3 d-inline-flex">
                            <i class="fas fa-menorah text-primary fa-3x"></i>
                        </div>
                        <p class="text-primary">10:00AM - 11:00AM</p>
                        <h3 class="text-dark">Dinner</h3>
                        <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-xl-3 border border-top-0 border-start-0">
                    <div class="text-center p-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="mb-4 p-3 d-inline-flex">
                            <i class="fas fa-photo-video text-primary fa-3x"></i>
                        </div>
                        <p class="text-primary">10:00AM - 11:00AM</p>
                        <h3 class="text-dark">Photoshoot</h3>
                        <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-xl-3 border border-bottom-0 border-end-0">
                    <div class="text-center p-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="mb-4 p-3 d-inline-flex">
                            <i class="fas fa-dungeon text-primary fa-3x"></i>
                        </div>
                        <p class="text-primary">10:00AM - 11:00AM</p>
                        <h3 class="text-dark">Reception</h3>
                        <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-xl-3 border border-top-0">
                    <div class="text-center p-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="mb-4 p-3 d-inline-flex">
                            <i class="fas fa-ring text-primary fa-3x"></i>
                        </div>
                        <p class="text-primary">10:00AM - 11:00AM</p>
                        <h3 class="text-dark">Ceremony</h3>
                        <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
            </div>
            <div class="position-absolute heart-circle " style="bottom: 0; left: -18px;">
                <div class="border border-2 border-primary rounded-circle p-1 bg-secondary"></div>
            </div>
            <div class="position-absolute heart-circle" style="top: 18px; right: -17px;">
                <div class="border border-2 border-primary rounded-circle p-1 bg-secondary"></div>
            </div>
        </div>
    </div>
</div> -->
<!-- Wedding Timeline End -->


 <!-- RSVP Form Start -->
 <div class="container-fluid RSVP-form py-5" id="weddingRsvp">
    <div class="container py-5">
        <h1 align="center">Lokasi Kami</h1>
        <div class="mt-5">
        <div class="row g-5 justify-content-center text-center">
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-4 border-secondary" style="border-style: double;">
                    <h4>Hubungi Kami</h4>
                    <a href="#" class="text-dark">+123 456 7890</a>
                </div>
            </div>
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="p-4 border-secondary" style="border-style: double;">
                    <h4>Jam Operasional</h4>
                    <p class="mb-0 text-dark">
                        Senin - Jumat
                    </p>
                    <p class="mb-0 text-dark">
                        08.00-15.00 WIB
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-4 border-secondary" style="border-style: double;">
                    <h4>Lokasi</h4>
                    <p class="mb-0 text-dark">
                        Smkn 11 Bandung, Jl. Budi Jl. Raya Cilember, RT.01/RW.04, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40153. 
                    </p>
                </div>
            </div>
            <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                <div class="border-secondary" style="border-style: double;">
                    <iframe class="w-100" 
                    style="height: 450px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>