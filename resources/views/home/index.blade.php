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
        @include('home.header')
        <!-- Navbar End -->
        <!-- Modal Alert untuk complete_profile -->
        @if(session()->has('complete_profile'))
        <div class="modal fade show" id="successModal" tabindex="-1" role="dialog" style="display: block; background-color: rgba(0,0,0,0.5);">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="alert alert-success mb-0" style="border-radius: 4px; background-color: #e7f9e7; border: none;">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle fa-2x mr-3" style="color: #fd5d5d;"></i>
                            <div class="flex-grow-1">
                                <h5 class="alert-heading" style="color: #fd5d5d;">Sukses!</h5>
                                <p class="mb-0" style="color: #373737;">{{ session('complete_profile') }}</p>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" onclick="this.closest('.modal').style.display='none';" style="color: #fd5d5d; opacity: 0.8;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Tombol Menuju Halaman Akun -->
                        <div class="modal-footer">
                            <a href="{{ route('home.profil') }}" class="btn btn-success" style="background-color: #fd5d5d; border: none;">Ke Halaman Akun</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

       <!-- Modal Structure -->
        <div id="successModal" hidden style="display: flex; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); align-items: center; justify-content: center; z-index: 1000;">
            <div style="background: white; padding: 20px; border-radius: 10px; max-width: 500px; width: 90%; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transform: scale(0.8); opacity: 0; animation: fadeInScale 0.3s forwards;">
                <h2>Pemberitahuan</h2>
                <p>{{ session('success_message') }}</p>
                <button onclick="closeModal()" style="background-color: #fd5d5d; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 15px;">Tutup</button>
            </div>
        </div>

        <!-- Inline CSS for Modal Animation -->
        <style>
            /* Fade-in and scale animation */
            @keyframes fadeInScale {
                to {
                    transform: scale(1);
                    opacity: 1;
                }
            }
        </style>

        <!-- JavaScript to Control Modal Display -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                @if(session('success_message'))
                    document.getElementById("successModal").hidden = false;
                @endif
            });

            function closeModal() {
                document.getElementById("successModal").hidden = true;
            }
        </script>


        

        <!-- Carousel Start -->
       @include('home.slider')
        <!-- Carousel End -->
       

          <!-- Gallery Start -->
         
        <!-- RSVP Form End -->

        @include('home.content')

        <!-- Footer Start -->
        @include('home.footer')  
            <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   


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