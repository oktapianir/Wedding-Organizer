<!DOCTYPE html>
<html lang="en">

<head>
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
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
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
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            {{-- <div class="container-fluid pt-4 px-4">
                <nav class="navbar navbar-expand navbar-light bg-white shadow-sm rounded mb-4">
                    <div class="container-fluid px-0">
                        <div class="navbar-nav flex-row flex-nowrap overflow-auto pb-2" style="scrollbar-width: none; -ms-overflow-style: none;">
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('gedung.index') }}" onclick="showForm('gedung')">
                                <i class="bi bi-building me-1"></i> Gedung
                            </a>
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('dekorasi.index') }}" onclick="showForm('dekorasi')">
                                <i class="bi bi-brush me-1"></i> Dekorasi
                            </a>
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('paketmakanan.index') }}" onclick="showForm('katering')">
                                <i class="bi bi-egg-fried me-1"></i> Katering
                            </a>
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('dokumentasi.index') }}" onclick="showForm('dokumentasi')">
                                <i class="bi bi-camera me-1"></i> Dokumentasi
                            </a>
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('hiburan.index') }}" onclick="showForm('hiburan')">
                                <i class="bi bi-music-note-beamed me-1"></i> Hiburan
                            </a>
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('bridalstyle.index') }}" onclick="showForm('bridalstyle')">
                                <i class="bi bi-gem me-1"></i> Bridalstyle
                            </a>
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('paketsouvenir.index') }}" onclick="showForm('souvenir')">
                                <i class="bi bi-gift me-1"></i> Souvenir
                            </a>
                            <a class="nav-link d-flex align-items-center py-1 px-2 mx-1 rounded-pill" href="{{ route('undangan.index') }}" onclick="showForm('undangan')">
                                <i class="bi bi-envelope me-1"></i> Undangan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <style>
                .navbar-nav::-webkit-scrollbar {
                    display: none;
                }
            
                .nav-link {
                    font-size: 0.875rem; /* Menurunkan ukuran font untuk tampilan yang lebih kompak */
                    padding: 0.5rem 0.75rem; /* Mengurangi padding untuk menghemat ruang */
                    margin: 0.25rem; /* Mengurangi jarak antar elemen */
                    color: #333; /* Warna teks default */
                    text-decoration: none; /* Menghilangkan garis bawah default pada link */
                    transition: background-color 0.3s ease, color 0.3s ease;
                }
            
                .nav-link:hover {
                    background-color: #e9ecef; /* Warna latar belakang saat hover */
                    color: #007bff; /* Warna teks saat hover */
                }
            
                .nav-link i {
                    font-size: 1.25rem; /* Ukuran ikon */
                }
            </style> --}}
            <div class="container-fluid py-4 px-4">
                <nav class="navbar navbar-expand navbar-light bg-light shadow rounded-pill mb-4">
                    <div class="container-fluid px-2">
                        <div class="navbar-nav flex-row flex-nowrap overflow-auto py-2" style="scrollbar-width: none; -ms-overflow-style: none;">
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('gedung.index') }}" onclick="showForm('gedung')">
                                <i class="bi bi-building me-2"></i> Gedung
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('dekorasi.index') }}" onclick="showForm('dekorasi')">
                                <i class="bi bi-brush me-2"></i> Dekorasi
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('paketmakanan.index') }}" onclick="showForm('katering')">
                                <i class="bi bi-egg-fried me-2"></i> Katering
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('dokumentasi.index') }}" onclick="showForm('dokumentasi')">
                                <i class="bi bi-camera me-2"></i> Dokumentasi
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('hiburan.index') }}" onclick="showForm('hiburan')">
                                <i class="bi bi-music-note-beamed me-2"></i> Hiburan
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('bridalstyle.index') }}" onclick="showForm('bridalstyle')">
                                <i class="bi bi-gem me-2"></i> Bridalstyle
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('paketsouvenir.index') }}" onclick="showForm('souvenir')">
                                <i class="bi bi-gift me-2"></i> Souvenir
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('undangan.index') }}" onclick="showForm('undangan')">
                                <i class="bi bi-envelope me-2"></i> Undangan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

                       <!-- form tambah dekorasi -->
                        {{-- <div id="form-dekorasi" class="form-container">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Tambah Data Item Vendor Dekorasi
                                </h6>
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                        
                                <form action="{{ route('dekorasi.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="nama_dekorasi" class="col-sm-2 col-form-label">Nama Vendor</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama_dekorasi" name="nama_dekorasi" value="{{ old('nama_dekorasi') }}" required>
                                            @error('nama')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="deskripsi_dekorasi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="deskripsi_dekorasi" name="deskripsi_dekorasi">{{ old('deskripsi_dekorasi') }}</textarea>
                                            @error('deskripsi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label for="harga_dekorasi" class="col-sm-2 col-form-label">Harga Sewa</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="harga_dekorasi" name="harga_dekorasi" value="{{ old('harga_dekorasi') }}">
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="row mb-3">
                                        <label for="foto_dekorasi" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="foto_dekorasi" name="foto_dekorasi">
                                            @error('foto_dekorasi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="col-sm-12 col-xl-12">
                                        <div class="bg-light rounded h-100 p-4">
                                            <div class="m-n2">
                                                <button class="btn btn-outline-primary w-100 m-2" type="submit">Tambah Item Dekorasi</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div id="form-dekorasi" class="form-container mx-3">
                            <div class="card shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h6 class="mb-0">Tambah Data Item Vendor Dekorasi</h6>
                                </div>
                                <div class="card-body">
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                        
                                    <form action="{{ route('dekorasi.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                        
                                        <div class="mb-3">
                                            <label for="nama_dekorasi" class="form-label">Nama Vendor</label>
                                            <input type="text" class="form-control" id="nama_dekorasi" name="nama_dekorasi" value="{{ old('nama_dekorasi') }}" required>
                                            @error('nama')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                        
                                        <div class="mb-3">
                                            <label for="deskripsi_dekorasi" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi_dekorasi" name="deskripsi_dekorasi">{{ old('deskripsi_dekorasi') }}</textarea>
                                            @error('deskripsi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                        
                                        <div class="mb-3">
                                            <label for="harga_dekorasi" class="form-label">Harga Sewa</label>
                                            <input type="number" class="form-control" id="harga_dekorasi" name="harga_dekorasi" value="{{ old('harga_dekorasi') }}">
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                        
                                        <div class="mb-3">
                                            <label for="foto_dekorasi" class="form-label">Foto</label>
                                            <input type="file" class="form-control" id="foto_dekorasi" name="foto_dekorasi[]" multiple>
                                            @error('foto_dekorasi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                        
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">Tambah Item Dekorasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        

                        <!--daftar item-->
                        {{-- <div class="container-fluid pt-4 px-4">
                            <div class="col-12">
                                <div class="bg-light rounded h-100 p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Data Item Dekorasi</h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama Dekorasi</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($dekorasis as $dekorasi)
                                                    <tr>
                                                        <td>{{ $dekorasi->id_dekorasi }}</td>
                                                        <td>{{ $dekorasi->nama_dekorasi }}</td>
                                                        <td>{{ $dekorasi->harga_dekorasi }}</td>
                                                        <td>{{ $dekorasi->deskripsi_dekorasi }}</td>
                                                        <td>
                                                            @if($dekorasi->foto_dekorasi)
                                                                <img src="{{ asset('storage/images/' . $dekorasi->foto_dekorasi) }}" alt="Foto Dekorasi" style="max-width: 100px; max-height: 100px;">
                                                            @else
                                                                <p>No Image</p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#detailModal-{{ $dekorasi->id_dekorasi }}">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                            <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#editModal-{{ $dekorasi->id_dekorasi }}">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <!-- Modal Detail -->
                                                    <div class="modal fade" id="detailModal-{{ $dekorasi->id_dekorasi }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $dekorasi->id_dekorasi }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="detailModalLabel-{{ $dekorasi->id_dekorasi }}">Detail Dekorasi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p><strong>ID:</strong> {{ $dekorasi->id_dekorasi }}</p>
                                                                    <p><strong>Nama Dekorasi:</strong> {{ $dekorasi->nama_dekorasi }}</p>
                                                                    <p><strong>Harga:</strong> {{ $dekorasi->harga_dekorasi }}</p>
                                                                    <p><strong>Deskripsi:</strong> {{ $dekorasi->deskripsi_dekorasi }}</p>
                                                                    @if($dekorasi->foto_dekorasi)
                                                                        <p><strong>Gambar:</strong></p>
                                                                        <img src="{{ asset('storage/images/' . $dekorasi->foto_dekorasi) }}" alt="Foto Dekorasi" style="max-width: 100%; max-height: 300px;">
                                                                    @else
                                                                        <p>No Image</p>
                                                                    @endif
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                        
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- Pagination links -->
                                        <div class="d-flex justify-content-end mt-4">
                                            {{ $dekorasis->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="container-fluid pt-4 px-4">
                                <div class="col-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h6>Data Item Dekorasi</h6>
                                            <!-- Form pencarian di halaman dekorasi -->
                                            <form id="searchDekorasiForm" action="{{ route('dekorasi.index') }}" method="GET">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="search" class="form-control" placeholder="Cari Nama Dekorasi" value="{{ request('search') }}">
                                                    <div class="input-group-append">
                                                        <!-- Tombol Reset -->
                                                        <button type="button" id="resetButton" class="btn btn-secondary">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                            <!-- Script untuk pengiriman otomatis pada kolom pencarian -->
                                            <script>
                                                // Ambil elemen form dan kolom pencarian
                                                const searchForm = document.getElementById('searchDekorasiForm');
                                                const searchInput = searchForm.querySelector('input[name="search"]');
                                                const resetButton = document.getElementById('resetButton');
                                            
                                                // Kirim form setiap kali pengguna mengetik pada kolom pencarian
                                                searchInput.addEventListener('keyup', () => {
                                                    searchForm.submit();
                                                });
                                            
                                                // Fungsi untuk reset pencarian
                                                resetButton.addEventListener('click', () => {
                                                    searchInput.value = '';  // Kosongkan input pencarian
                                                    searchForm.submit();     // Kirim form tanpa parameter pencarian
                                                });
                                            </script>
                                            
                                           
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nama Dekorasi</th>
                                                        <th>Gambar</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($dekorasis as $dekorasi)
                                                    <tr>
                                                        <td>{{ $dekorasi->id_dekorasi }}</td>
                                                        <td>{{ $dekorasi->nama_dekorasi }}</td>
                                                        <td>
                                                            @if($dekorasi->fotoDekorasi && $dekorasi->fotoDekorasi->count() > 0)
                                                                @foreach($dekorasi->fotoDekorasi as $foto)
                                                                    <img src="{{ asset('storage/dekorasi/' . str_replace('dekorasi/', '', $foto->foto_path)) }}" alt="Foto Dekorasi" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                                                @endforeach
                                                            @else
                                                                <p class="text-muted">No Image</p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{$dekorasi->id_dekorasi}}">
                                                                <i class="fa fa-info-circle"></i> Details
                                                            </button>
                                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{$dekorasi->id_dekorasi}}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                                        
                                                    <!--detail modal-->
                                                    <div class="modal fade" id="detailModal-{{ $dekorasi->id_dekorasi }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $dekorasi->id_dekorasi }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="detailModalLabel-{{ $dekorasi->id_dekorasi }}">
                                                                        <i class="bi bi-flower1 me-2"></i>Detail Dekorasi
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Nama Dekorasi</h6>
                                                                            <p>{{ $dekorasi->nama_dekorasi }}</p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Harga</h6>
                                                                            <p>Rp {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <h6 class="fw-bold">Deskripsi</h6>
                                                                            <p>{{ $dekorasi->deskripsi_dekorasi }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Gambar</h6>
                                                                        @if($dekorasi->fotoDekorasi && $dekorasi->fotoDekorasi->count() > 0)
                                                                        @foreach($dekorasi->fotoDekorasi as $foto)
                                                                            <img src="{{ asset('storage/dekorasi/' . str_replace('dekorasi/', '', $foto->foto_path)) }}" alt="Foto Dekorasi" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                                                        @endforeach
                                                                        @else
                                                                            <p class="text-muted">No Image</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                        
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="editModal-{{ $dekorasi->id_dekorasi }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $dekorasi->id_dekorasi }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="editModalLabel-{{ $dekorasi->id_dekorasi }}">
                                                                        <i class="bi bi-flower3 me-2"></i>Edit Dekorasi
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form id="updateForm-{{ $dekorasi->id_dekorasi }}" action="{{ route('dekorasi.update', $dekorasi->id_dekorasi) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-nama_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Nama Dekorasi</label>
                                                                                <input type="text" class="form-control" id="edit-nama_dekorasi-{{ $dekorasi->id_dekorasi }}" name="nama_dekorasi" value="{{ $dekorasi->nama_dekorasi }}">
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-harga_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Harga Dekorasi</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">Rp</span>
                                                                                    <input type="number" class="form-control" id="edit-harga_dekorasi-{{ $dekorasi->id_dekorasi }}" name="harga_dekorasi" value="{{ $dekorasi->harga_dekorasi }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-deskripsi_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Deskripsi Dekorasi</label>
                                                                            <textarea class="form-control" id="edit-deskripsi_dekorasi-{{ $dekorasi->id_dekorasi }}" name="deskripsi_dekorasi" rows="3">{{ $dekorasi->deskripsi_dekorasi }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-foto_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Gambar Dekorasi (Pilih lebih dari satu jika perlu)</label>
                                                                            <input type="file" class="form-control" id="edit-foto_dekorasi-{{ $dekorasi->id_dekorasi }}" name="foto_dekorasi[]" multiple onchange="previewImages(this, '{{ $dekorasi->id_dekorasi }}')">
                                                                            <div class="mt-2">
                                                                                @if($dekorasi->fotoDekorasi && $dekorasi->fotoDekorasi->count() > 0)
                                                                                    @foreach($dekorasi->fotoDekorasi as $foto)
                                                                                        <img id="image-preview-{{ $dekorasi->id_dekorasi }}" src="{{ asset('storage/dekorasi/' . str_replace('dekorasi/', '', $foto->foto_path)) }}" alt="Preview Image" class="img-thumbnail" style="max-height: 200px;">
                                                                                    @endforeach
                                                                                @else
                                                                                    <img id="image-preview-{{ $dekorasi->id_dekorasi }}" src="#" alt="Preview Image" class="img-thumbnail" style="display: none; max-height: 200px;">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end mt-4">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                            <button type="submit" class="btn btn-primary ms-2">
                                                                                <i class="bi bi-save me-1"></i>Simpan
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end mt-4">
                                            {{ $dekorasis->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        {{-- <div class="container-fluid pt-4 px-4">
                            <div class="col-12">
                                <div class="bg-light rounded h-100 p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Data Item Dekorasi</h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama Dekorasi</th>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($dekorasis as $dekorasi)
                                                    <tr>
                                                        <td>{{ $dekorasi->id_dekorasi }}</td>
                                                        <td>{{ $dekorasi->nama_dekorasi }}</td>
                                                        <td>
                                                            @if($dekorasi->foto_dekorasi)
                                                                <img src="{{ asset('storage/images/' . $dekorasi->foto_dekorasi) }}" alt="Foto Dekorasi" style="max-width: 100px; max-height: 100px;">
                                                            @else
                                                                <p>No Image</p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{$dekorasi->id_dekorasi }}">
                                                                <i class="fa fa-info-circle"></i> Details
                                                            </button>
                                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{$dekorasi->id_dekorasi}}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                                    
                                                    <!--detail modal-->
                                                    <div class="modal fade" id="detailModal-{{ $dekorasi->id_dekorasi }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $dekorasi->id_dekorasi }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="detailModalLabel-{{ $dekorasi->id_dekorasi }}">
                                                                        <i class="bi bi-flower1 me-2"></i>Detail Dekorasi
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Nama Dekorasi</h6>
                                                                            <p>{{ $dekorasi->nama_dekorasi }}</p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Harga</h6>
                                                                            <p>Rp {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <h6 class="fw-bold">Deskripsi</h6>
                                                                            <p>{{ $dekorasi->deskripsi_dekorasi }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Gambar</h6>
                                                                        @if($dekorasi->foto_dekorasi)
                                                                            <img src="{{ asset('storage/images/' . $dekorasi->foto_dekorasi) }}" alt="Foto Dekorasi" class="img-fluid rounded" style="max-height: 300px;">
                                                                        @else
                                                                            <p class="text-muted">Tidak ada gambar</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                        
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="editModal-{{ $dekorasi->id_dekorasi }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $dekorasi->id_dekorasi }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="editModalLabel-{{ $dekorasi->id_dekorasi }}">
                                                                        <i class="bi bi-flower3 me-2"></i>Edit Dekorasi
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form id="updateForm-{{ $dekorasi->id_dekorasi }}" action="{{ route('dekorasi.update', $dekorasi->id_dekorasi) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-nama_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Nama Dekorasi</label>
                                                                                <input type="text" class="form-control" id="edit-nama_dekorasi-{{ $dekorasi->id_dekorasi }}" name="nama_dekorasi" value="{{ $dekorasi->nama_dekorasi }}">
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-harga_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Harga Dekorasi</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">Rp</span>
                                                                                    <input type="number" class="form-control" id="edit-harga_dekorasi-{{ $dekorasi->id_dekorasi }}" name="harga_dekorasi" value="{{ $dekorasi->harga_dekorasi }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-deskripsi_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Deskripsi Dekorasi</label>
                                                                            <textarea class="form-control" id="edit-deskripsi_dekorasi-{{ $dekorasi->id_dekorasi }}" name="deskripsi_dekorasi" rows="3">{{ $dekorasi->deskripsi_dekorasi }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-foto_dekorasi-{{ $dekorasi->id_dekorasi }}" class="form-label">Gambar Dekorasi</label>
                                                                            <input type="file" class="form-control" id="edit-foto_dekorasi-{{ $dekorasi->id_dekorasi }}" name="foto_dekorasi" onchange="previewImage(this, '{{ $dekorasi->id_dekorasi }}')">
                                                                            <div class="mt-2">
                                                                                @if($dekorasi->foto_dekorasi)
                                                                                    <img id="image-preview-{{ $dekorasi->id_dekorasi }}" src="{{ asset('storage/images/' . $dekorasi->foto_dekorasi) }}" alt="Preview Image" class="img-thumbnail" style="max-height: 200px;">
                                                                                @else
                                                                                    <img id="image-preview-{{ $dekorasi->id_dekorasi }}" src="#" alt="Preview Image" class="img-thumbnail" style="display: none; max-height: 200px;">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end mt-4">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                            <button type="submit" class="btn btn-primary ms-2">
                                                                                <i class="bi bi-save me-1"></i>Simpan
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                        
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- Pagination links -->
                                        <div class="d-flex justify-content-end mt-4">
                                            {{ $dekorasis->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        
                        
                        
                        {{-- <script>
                            function previewImage(input, id) {
                                var file = input.files[0];
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    document.getElementById('image-preview-' + id).src = e.target.result;
                                    document.getElementById('image-preview-' + id).style.display = 'block';
                                };
                                reader.readAsDataURL(file);
                            }
                        </script>    --}}

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/admin/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('/admin/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/admin/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('/admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/admin/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('/admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/admin/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




              
</body>

</html>
<script>
    function previewImages(input, id) {
        var previewContainer = document.getElementById('image-preview-' + id);
        previewContainer.innerHTML = '';
        if (input.files) {
            Array.from(input.files).forEach(file => {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('img-thumbnail');
                    img.style.maxHeight = '200px';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        }
    }
    </script>
    