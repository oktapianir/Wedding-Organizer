<!DOCTYPE html>
<html lang="en">

    <head>
        @include('home.css')
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navBar" id="weddingHome">

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        {{-- @include('home.header') --}}
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl" id="navBar">
                        <a href="index.html" class="navbar-brand">
                            <h4 class="text-primary display-6 fw-bold mb-0">Wedding Organizer</h4>
                        </a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                                <a href="{{route('home.index')}}" class="nav-item nav-link active">Beranda</a>
                                <a href="{{route('tentangkami')}}" class="nav-item nav-link">Tentang</a>
                                <a href="pelayanan.html" class="nav-item nav-link">Pelayanan</a>
                                <a href="contact.html" class="nav-item nav-link">Kontak</a>
                                <a href="pemesanan.html" class="nav-item nav-link">Pemesanan</a>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                    <i class="fas fa-user text-primary me-2"></i> <!-- Tambahkan ikon user -->
                                </div>                                
                                {{-- <a href="{{url('/login')}}" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Login</a>
                                <a href="{{url('/register')}}" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Register</a> --}}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-primary-outline-0 py-2 px-4 ms-4">Logout</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Carousel Start -->
       @include('home.slider')
        <!-- Carousel End -->

          <!-- Gallery Start -->
         
        <!-- RSVP Form End -->

        @include('home.content')

        <!-- Footer Start -->
        @include('home.footer')  
            <!-- Back to Top -->
    <a href="/user/dashboard" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>


    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>  
    </body>

</html>