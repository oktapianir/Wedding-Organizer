<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .testimonial-card {
            background-color: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        .testimonial-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .view-more-btn {
            background-color: #fd5d5d; /* Pastel pink */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .view-more-btn:hover {
            background-color: #FFA0B0; /* Slightly darker pastel pink for hover */
        }
        .hidden {
            display: none;
        }
        .rating-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .testimonial-text {
            text-align: center;
            font-style: italic;
        }
        .star-pink {
            color: #fd5d5d; 
        }
        /* Style untuk form */
        .testimonial-form-container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .testimonial-form-container label {
            font-weight: bold;
        }
        .testimonial-form-container input, .testimonial-form-container textarea, .testimonial-form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .testimonial-form-container button {
            background-color: #fd5d5d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .testimonial-form-container button:hover {
            background-color: #FFA0B0;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-5" style="  font-family: 'Great Vibes', cursive; font-size: 48px; text-align: center; margin-bottom: 20px; color: #2f2f2f ;">Berikan Testimoni Anda</h2>

        <!-- Form untuk memberikan Testimoni -->
        <div class="testimonial-form-container">
            {{-- <form action="{{ route('testimoni.storeTestimoni') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_cust">ID Customer</label>
                    <input type="number" name="id_cust" id="id_cust" class="form-control" value="{{ Auth::user()->id }}" readonly required>
                </div>
            
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <!-- Kolom Nama, data ini akan masuk ke database -->
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required style="color: black">
                </div>
            
                <div class="form-group">
                    <label for="id_pemesanan">ID Pemesanan</label>
                    @if($lastPemesanan)
                        <input type="text" name="id_pemesanan" id="id_pemesanan" 
                               class="form-control" value="{{ $lastPemesanan->id_pemesanan }}" readonly required>
                    @else
                        <input type="text" name="id_pemesanan" id="id_pemesanan" 
                               class="form-control" value="Tidak Ada Pemesanan" readonly disabled>
                    @endif
                </div>
            
                <div class="form-group">
                    <label for="testimoni">Testimoni</label>
                    <textarea name="testimoni" id="testimoni" class="form-control" required style="color: black"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required style="color: black">
                </div>
            
                <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
            </form>--}}
            <form action="{{ route('testimoni.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_cust">ID Customer</label>
                    <input type="number" name="id_cust" id="id_cust" class="form-control" value="{{ Auth::user()->id }}" readonly required>
                </div>
            
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required style="color: black">
                </div>
            
                {{-- <div class="form-group">
                    <label for="id_pemesanan">ID Pemesanan</label>
                    @if($lastPemesanan)
                        <input type="text" name="id_pemesanan" id="id_pemesanan" class="form-control" value="{{ $lastPemesanan->id_pemesanan }}" readonly required>
                    @else
                        <input type="text" name="id_pemesanan" id="id_pemesanan" class="form-control" value="Tidak Ada Pemesanan" readonly disabled>
                    @endif
                </div> --}}
                <div class="form-group">
                    <label for="id_pemesanan">ID Pemesanan</label>
                    <input type="text" name="id_pemesanan" id="id_pemesanan" class="form-control" value="{{ $id_pemesanan }}" readonly required>
                </div>
            
                <div class="form-group">
                    <label for="testimoni">Testimoni</label>
                    <textarea name="testimoni" id="testimoni" class="form-control" required style="color: black"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required placeholder="Rating 1-5" style="color: black">
                </div>
            
                <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
            </form>
            @if(session('success'))
            <script>
                console.log("Sukses session ada!"); // Debug log
            </script>
        @else
            <script>
                console.log("Sukses session tidak ada!"); // Jika session tidak ada
            </script>
        @endif
         
        @if(session('success'))
        <script>
            console.log("Sukses session ada!"); // Debug log
            $(document).ready(function() {
                console.log("Menampilkan modal...");
                $('#successModal').modal('show');  // Menampilkan modal
                setTimeout(function() {
                    console.log("Redirecting...");
                    window.location.href = '{{ route('home.index') }}';  // Redirect ke home.index setelah 2 detik
                }, 2000);
            });
        </script>
         @endif
    
        

                    <!-- Modal Success -->
                <div id="successModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" style="border-radius: 1rem; border: none; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                            <!-- Modal Header -->
                            <div class="modal-header border-0 bg-success text-white" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; padding: 1rem 1.5rem;">
                                <h5 class="modal-title d-flex align-items-center gap-2" id="successModalLabel">
                                    <i class="fas fa-check-circle"></i>
                                    Sukses
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <!-- Modal Body -->
                            <div class="modal-body text-center p-4">
                                <div class="mb-3">
                                    <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                                </div>
                                <p class="mb-0 text-dark">{{ session('success') }}</p>
                            </div>
                            
                            <!-- Modal Footer -->
                            <div class="modal-footer border-0 px-4 pb-3">
                                <button type="button" class="btn btn-success px-4" 
                                        style="border-radius: 0.5rem; transition: all 0.2s;" 
                                        onmouseover="this.style.backgroundColor='#146c43'" 
                                        onmouseout="this.style.backgroundColor='#198754'"
                                        data-bs-dismiss="modal">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script to auto-show modal if session has success message -->
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    if ("{{ session('success') }}") {
                        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                        
                        // Auto close after 3 seconds
                        setTimeout(function() {
                            successModal.hide();
                        }, 3000);
                    }
                });
                </script>            
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const viewMoreBtn = document.getElementById('view-more-btn');
            const testimonials = document.querySelectorAll('.testimonial-item');
            let visibleCount = 3;

            viewMoreBtn.addEventListener('click', function() {
                for (let i = visibleCount; i < visibleCount + 3 && i < testimonials.length; i++) {
                    testimonials[i].classList.remove('hidden');
                }
                visibleCount += 3;

                if (visibleCount >= testimonials.length) {
                    viewMoreBtn.style.display = 'none';
                }
            });
        });
    </script>

@include('home.footer')
</body>
</html>
