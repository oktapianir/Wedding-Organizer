<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        canvas {
            max-height: 400px;
            /* Atur tinggi maksimum untuk canvas */
            width: 100%;
            /* Sesuaikan lebar canvas dengan lebar container */
        }
    </style>
    @include('admin.css')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('admin.sidebar')


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            {{-- <a href="#" class="dropdown-item">Log Out</a> --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Acara</p>
                                <h6 class="mb-0">{{ $totalAcara }}</h6>
                                {{-- <div style="font-size: 1.5em; font-weight: bold; color: #333; margin-bottom: 20px;">
                                    Total Acara: <span style="color: #fd5d5d;">{{ $totalAcara ?? 0 }}</span>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pengguna</p>
                                <h6 class="mb-0">{{ $totalPengguna }}</h6> <!-- Menampilkan jumlah pengguna -->
                            </div>
                        </div>
                    </div>                    
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Close Venue</p>
                                <h6 class="mb-0">{{ $closeVenue }} Acara</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pendapatan Pertahun</p>
                                <h6 class="mb-0">Rp {{ number_format($pendapatanTahunan->total ?? 0, 0, ',', '.') }} </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!--grafik pendapatan bulanan-->
            {{-- <div class="col-sm-6 col-xl-6">
                <div class="bg-light rounded p-4">
                    <h5 class="mb-4">Pendapatan Bulanan</h5>
                    <canvas id="pendapatanChart"></canvas>
                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                // Ambil data pendapatan dari PHP
                const pendapatanData = @json($pendapatanBulanan);
            
                // Menyiapkan label untuk sumbu X (Bulan-Tahun)
                const labels = pendapatanData.map(p => `${p.year}-${String(p.month).padStart(2, '0')}`);
            
                // Menyiapkan data untuk sumbu Y (Pendapatan)
                const data = pendapatanData.map(p => p.total);
            
                // Membuat grafik batang
                const ctx = document.getElementById('pendapatanChart').getContext('2d');
                const pendapatanChart = new Chart(ctx, {
                    type: 'bar', // Jenis grafik bar (batang)
                    data: {
                        labels: labels, // Label untuk sumbu X (Bulan-Tahun)
                        datasets: [{
                            label: 'Pendapatan Bulanan (IDR)', // Label untuk grafik
                            data: data, // Data untuk sumbu Y (Pendapatan)
                            backgroundColor: 'rgba(75, 192, 192, 0.5)', // Warna batang grafik
                            borderColor: 'rgba(75, 192, 192, 1)', // Warna batas batang
                            borderWidth: 1 // Lebar batas batang
                        }]
                    },
                    options: {
                        responsive: true, // Responsif untuk berbagai ukuran layar
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Bulan-Tahun' // Label untuk sumbu X
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Pendapatan (IDR)' // Label untuk sumbu Y
                                },
                                beginAtZero: true // Mulai dari angka 0 pada sumbu Y
                            }
                        }
                    }
                });
            </script>
            
             
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <!-- Multiple Bar Chart -->
                    <div class="col-sm-12 col-xl-8 mb-4">
                        <!-- HTML: Container untuk canvas -->
                        <div class="bg-light rounded h-100 p-4 chart-container" style="position: relative; height:40vh; width:100%;">
                            <h6 class="mb-4">Rating Kepuasan Pelanggan</h6>
                            <canvas id="rating-chart"></canvas>
                        </div>
                    </div>

                    <!-- Komponen Pesanan Masuk -->
                    <div class="col-sm-12 col-xl-4 mb-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Pesanan Masuk</h6>
                                <a href="#" class="btn btn-link">Lihat Semua</a>
                            </div>
                    
                            <div id="pesanan-list">
                                @if($pesananBaru->isNotEmpty())
                                    @foreach($pesananBaru as $pesanan)
                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="User" style="width: 40px; height: 40px;">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-0">{{ $pesanan->id_pemesanan }}</h6>
                                                    <small class="text-muted">{{ $pesanan->created_at->diffForHumans() }}</small>
                                                </div>
                                                <span>Tanggal Acara: <strong>{{ $pesanan->tanggal_acara }}</strong></span>
                                                <!-- Tombol untuk membuka dropdown status -->
                                                <button class="btn btn-sm btn-primary mt-2" onclick="toggleDropdown({{ $pesanan->id }})">Ubah Status</button>

                                                <!-- Dropdown pilihan status -->
                                                <div class="dropdown mt-2" id="status-dropdown-{{ $pesanan->id }}" style="display: none;">
                                                    <select class="form-select form-select-sm" onchange="updateStatus({{ $pesanan->id }}, this.value)">
                                                        <option value="">Pilih Status</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-info mt-3">Tidak ada pesanan baru.</div>
                                @endif
                            </div>
                            <script>
                                function toggleDropdown(pesananId) {
                                    const dropdown = document.getElementById(`status-dropdown-${pesananId}`);
                                    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
                                }
                            
                                function updateStatus(pesananId, newStatus) {
                                    if (!newStatus) return;
                            
                                    $.ajax({
                                        url: `/ubah-status-pesanan/${pesananId}`, // Sesuaikan route di sini
                                        method: 'POST',
                                        data: {
                                            _token: '{{ csrf_token() }}', // Token CSRF untuk keamanan
                                            status: newStatus
                                        },
                                        success: function(response) {
                                            if (response.success) {
                                                // Update status di tampilan
                                                $(`#status-${pesananId}`).text(response.newStatus);
                                                alert('Status berhasil diubah');
                                            } else {
                                                alert('Gagal mengubah status');
                                            }
                                        },
                                        error: function() {
                                            alert('Terjadi kesalahan, coba lagi nanti.');
                                        }
                                    });
                                }
                            </script>                            
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <!-- Grafik Pendapatan Bulanan -->
                    <div class="col-sm-12 col-md-6 col-xl-6 mb-4">
                        <div class="bg-light rounded p-4">
                            <h5 class="mb-4">Pendapatan Bulanan</h5>
                            <canvas id="pendapatanChart"></canvas>
                        </div>
                    </div>
            
                    <!-- Komponen Pesanan Masuk -->
                    <div class="col-sm-12 col-md-6 col-xl-6 mb-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Pesanan Masuk</h6>
                                <a href="#" class="btn btn-link">Lihat Semua</a>
                            </div>
            
                            <div id="pesanan-list">
                                @if($pesananBaru->isNotEmpty())
                                    @foreach($pesananBaru as $pesanan)
                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="User" style="width: 40px; height: 40px;">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-0">{{ $pesanan->id_pemesanan }}</h6>
                                                    <small class="text-muted">{{ $pesanan->created_at->diffForHumans() }}</small>
                                                </div>
                                                <span>Tanggal Acara: <strong>{{ $pesanan->tanggal_acara }}</strong></span>
                                                {{-- <button class="btn btn-sm btn-primary mt-2" onclick="toggleDropdown({{ $pesanan->id }})">Ubah Status</button> --}}
            
                                                <!-- Dropdown pilihan status -->
                                                <div class="dropdown mt-2" id="status-dropdown-{{ $pesanan->id }}" style="display: none;">
                                                    <select class="form-select form-select-sm" onchange="updateStatus({{ $pesanan->id }}, this.value)">
                                                        <option value="">Pilih Status</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="mt-3 d-flex justify-content-center">
                                        {{ $pesananBaru->links('pagination::bootstrap-4') }}
                                    </div>                                     
                                @else
                                    <div class="alert alert-info mt-3">Tidak ada pesanan baru.</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                // Ambil data pendapatan dari PHP
                const pendapatanData = @json($pendapatanBulanan);
            
                // Menyiapkan label untuk sumbu X (Bulan-Tahun)
                const labels = pendapatanData.map(p => `${p.year}-${String(p.month).padStart(2, '0')}`);
            
                // Menyiapkan data untuk sumbu Y (Pendapatan)
                const data = pendapatanData.map(p => p.total);
            
                // Membuat grafik batang
                const ctx = document.getElementById('pendapatanChart').getContext('2d');
                const pendapatanChart = new Chart(ctx, {
                    type: 'bar', // Jenis grafik bar (batang)
                    data: {
                        labels: labels, // Label untuk sumbu X (Bulan-Tahun)
                        datasets: [{
                            label: 'Pendapatan Bulanan (IDR)', // Label untuk grafik
                            data: data, // Data untuk sumbu Y (Pendapatan)
                            backgroundColor: 'rgba(75, 192, 192, 0.5)', // Warna batang grafik
                            borderColor: 'rgba(75, 192, 192, 1)', // Warna batas batang
                            borderWidth: 1 // Lebar batas batang
                        }]
                    },
                    options: {
                        responsive: true, // Responsif untuk berbagai ukuran layar
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Bulan-Tahun' // Label untuk sumbu X
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Pendapatan (IDR)' // Label untuk sumbu Y
                                },
                                beginAtZero: true // Mulai dari angka 0 pada sumbu Y
                            }
                        }
                    }
                });
            
                function toggleDropdown(pesananId) {
                    const dropdown = document.getElementById(`status-dropdown-${pesananId}`);
                    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
                }
            
                function updateStatus(pesananId, newStatus) {
                    if (!newStatus) return;
            
                    $.ajax({
                        url: `/ubah-status-pesanan/${pesananId}`,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}', // Token CSRF untuk keamanan
                            status: newStatus
                        },
                        success: function(response) {
                            if (response.success) {
                                $(`#status-${pesananId}`).text(response.newStatus);
                                alert('Status berhasil diubah');
                            } else {
                                alert('Gagal mengubah status');
                            }
                        },
                        error: function() {
                            alert('Terjadi kesalahan, coba lagi nanti.');
                        }
                    });
                }
            </script>
            

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            </br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com"
                                target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/admin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/admin/js/main.js') }}"></script>
    <!-- JavaScript Libraries grafik testimoni -->
    {{-- <script>
        // Contoh data rating testimoni
        const ratings = [1, 2, 3, 4, 5]; // Rating yang mungkin diterima
        const testimonialCounts = [10, 15, 30, 25, 20]; // Jumlah testimoni untuk setiap rating

        // Konfigurasi Chart.js
        var ctx = document.getElementById('rating-chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', // Jenis grafik
            data: {
                labels: ratings.map(rating => `${rating} Star`), // Label pada sumbu X
                datasets: [{
                    label: 'Jumlah Testimoni',
                    data: testimonialCounts, // Data untuk grafik
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar belakang batang
                    borderColor: 'rgba(54, 162, 235, 1)', // Warna batas batang
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Mulai sumbu Y dari 0
                    }
                }
            }
        });
    </script>
    <script>
        // Mengambil data dari server
        fetch('/api/testimonis/ratings')
            .then(response => response.json())
            .then(data => {
                const ratings = data.ratings; // Rating yang diterima
                const testimonialCounts = data.counts; // Jumlah testimoni untuk setiap rating

                // Konfigurasi Chart.js
                var ctx = document.getElementById('rating-chart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar', // Jenis grafik
                    data: {
                        labels: ratings.map(rating => `${rating} Star`), // Label pada sumbu X
                        datasets: [{
                            label: 'Jumlah Testimoni',
                            data: testimonialCounts, // Data untuk grafik
                            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar belakang batang
                            borderColor: 'rgba(54, 162, 235, 1)', // Warna batas batang
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true // Mulai sumbu Y dari 0
                            }
                        }
                    }
                });
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    </script> --}}
    {{-- 
    <script>
        // Mengambil konteks grafik
        var ctx = document.getElementById("rating-chart").getContext("2d");

        // Mendapatkan data dari Blade
        var ratings = @json($data['ratings']);
        var counts = @json($data['counts']);

        // Membuat grafik bar dengan Chart.js
        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ratings, // Set label berdasarkan rating
                datasets: [{
                    label: "Jumlah Rating",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(54, 162, 235, 0.8)",
                    data: counts, // Data jumlah rating
                    maxBarThickness: 50
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: '#000',
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            stepSize: 1,
                            beginAtZero: true,
                            padding: 1,
                            color: "#000"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 1
                        }
                    },
                },
            },
        });
    </script> --}}


    {{-- <script>
        // Variabel untuk menyimpan instance chart
        var myChart;

        function createChart() {
            // Hapus grafik sebelumnya jika ada
            if (myChart) {
                myChart.destroy();
            }

            // Hapus elemen canvas yang ada dan buat yang baru
            var chartContainer = document.querySelector('.chart-container');
            chartContainer.innerHTML = '<canvas id="rating-chart"></canvas>';

            // Ambil konteks grafik dari canvas baru
            var ctx = document.getElementById("rating-chart").getContext("2d");

            var dataRating = ["1", "2", "3", "4", "5"];



            // Mendapatkan data dari Blade
            var ratings = @json($data['ratings']);
            var counts = @json($data['counts']);

            // Buat grafik bar baru
            myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ratings, // Set label berdasarkan rating
                    datasets: [{
                        label: "Jumlah Rating",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "rgba(54, 162, 235, 0.8)", // Warna biru
                        data: counts, // Data jumlah rating
                        maxBarThickness: 50
                    }],
                },

                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#000',
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                stepSize: 1, // Ubah stepSize menjadi 1 agar ticks lebih rapat
                                beginAtZero: true,
                                padding: 1,
                                color: "#000"
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#000', // Ubah warna label menjadi hitam agar terlihat
                                padding: 10 // Sesuaikan jarak antara label dan bar
                            }
                        },
                    },
                },

            });
        }

        // Panggil fungsi createChart saat data dimuat
        createChart();
    </script> --}}

    <script>
        var ctx = document.getElementById('rating-chart').getContext('2d');
        var ratingChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($data['labels']), // Menyertakan label rating 1-5
                datasets: [{
                    label: 'Jumlah Rating',
                    data: @json($data['counts']), // Menyertakan jumlah rating
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>
