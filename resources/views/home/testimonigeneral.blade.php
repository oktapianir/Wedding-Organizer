<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .highlight-name {
            color: #fd5d5d;
            font-weight: 700;
        }
        .testimonial-item:hover .card {
            transform: translateY(-10px);
        }
        .testimonial-item .card {
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>
    <section class="py-5" style="background-color: #fff5f5;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Apa Kata Mereka?</h2>
                <p class="text-muted">Testimoni dari pelanggan kami yang puas</p>
            </div>

            <div class="row testimonials-container">
                @foreach($testimonis as $index => $testimoni)
                <div class="col-md-4 mb-4 testimonial-item {{ $index >= 3 ? 'd-none' : '' }}">
                    <div class="card border-0 h-100" 
                         style="border-radius: 15px; box-shadow: 0 4px 15px rgba(253, 93, 93, 0.2); background: white;">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                @if($testimoni->photo)
                                    <img src="{{ $testimoni->photo }}" 
                                         style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff; box-shadow: 0 2px 10px rgba(253, 93, 93, 0.2);" 
                                         class="rounded-circle" 
                                         alt="{{ $testimoni->nama }}">
                                @else
                                    <div style="width: 100px; height: 100px; background-color: #fd5d5d; border: 3px solid #fff; box-shadow: 0 2px 10px rgba(253, 93, 93, 0.2); display: flex; align-items: center; justify-content: center;" 
                                         class="rounded-circle mx-auto">
                                        <i class="fas fa-user" style="font-size: 40px; color: white;"></i>
                                    </div>
                                @endif
                            </div>

                            <h5 class="text-center mb-3 highlight-name">
                                {{ $testimoni->nama }}
                            </h5>

                            <div class="text-center p-3 mb-3" style="background-color: rgba(253, 93, 93, 0.1); border-radius: 10px;">
                                <h6 class="mb-2" style="color: #fd5d5d; font-weight: 600;">
                                    Rating: {{ $testimoni->rating }}
                                </h6>
                                <div class="d-flex justify-content-center">
                                    @for($i = 0; $i < 5; $i++)
                                        @if($i < floor($testimoni->rating))
                                            <i class="fas fa-star me-1" style="color: #fd5d5d; font-size: 0.9rem;"></i>
                                        @elseif($i < ceil($testimoni->rating))
                                            <i class="fas fa-star-half-alt me-1" style="color: #fd5d5d; font-size: 0.9rem;"></i>
                                        @else
                                            <i class="fas fa-star me-1" style="color: #ddd; font-size: 0.9rem;"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>

                            <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                                <i class="fas fa-quote-left me-2" style="color: #fd5d5d; opacity: 0.7;"></i>
                                {{ $testimoni->testimoni }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <button id="view-more-btn" 
                        class="btn px-4 py-2" 
                        style="background-color: #fd5d5d; color: white; border-radius: 25px; font-weight: 600; transition: all 0.3s ease;">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById('view-more-btn').addEventListener('click', function() {
            const hiddenItems = document.querySelectorAll('.testimonial-item.d-none');
            hiddenItems.forEach(item => {
                item.classList.remove('d-none');
            });
            this.style.display = 'none';
        });
    </script>

    @include('home.footer')
</body>
</html>
