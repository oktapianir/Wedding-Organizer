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
                  
                    <!--form tambah paket maincourse-->
                    {{-- <div id="form-paket-makanan" class="form-container">
                        <div class="bg-light rounded h-100 p-4">
                            
                            <!-- Pills Navigation -->
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-maincourse-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-maincourse" type="button" role="tab" aria-controls="pills-maincourse"
                                        aria-selected="true">Main Course</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-dishes-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-dishes" type="button" role="tab"
                                        aria-controls="pills-dishes" aria-selected="false">Dishes</button>
                                </li>
                            </ul>
                            
                            <!-- Pills Content -->
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-maincourse" role="tabpanel" aria-labelledby="pills-maincourse-tab">
                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

                                <!-- Main Course Form -->
                                <div class="tab-pane fade show active" id="pills-maincourse" role="tabpanel" aria-labelledby="pills-maincourse-tab">
                                    <h6 class="mb-4">Tambah Data Item Paket Makanan - Main Course</h6>
                                    <form action="{{ route('paketmakanan.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                    
                                        <!-- Nama Paket Makanan -->
                                        <div class="row mb-3">
                                            <label for="nama_paket_mainC" class="col-sm-2 col-form-label">Nama Paket Makanan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_paket_mainC" name="nama_paket_mainC" value="{{ old('nama_paket_mainC') }}" required>
                                                @error('nama_paket_mainC')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>    
                    
                                        <!-- Deskripsi -->
                                        <div class="row mb-3">
                                            <label for="deskripsi_mainC" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="deskripsi_mainC" name="deskripsi_mainC">{{ old('deskripsi_mainC') }}</textarea>
                                                @error('deskripsi_mainC')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                    
                                        <!-- Harga Paket Makanan -->
                                        <div class="row mb-3">
                                            <label for="harga_paket_mainC" class="col-sm-2 col-form-label">Harga Paket Makanan</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="harga_paket_mainC" name="harga_paket_mainC" value="{{ old('harga_paket_mainC') }}" required>
                                                @error('harga_paket_mainC')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                    
                                        <!-- Foto Paket Main Course -->
                                        <div class="row mb-3">
                                            <label for="foto_paket_mainC" class="col-sm-2 col-form-label">Foto Paket Main Course</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="foto_paket_mainC" name="foto_paket_mainC" required>
                                                @error('foto_paket_mainC')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                    
                                        <!-- Submit Button -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary w-100" type="submit">Tambah Paket Maincourse</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                    </div>
                                 
                    
                                <!-- Paket Dishes Form (Tambahkan form lain jika perlu) -->
                                    <div class="tab-pane fade" id="pills-dishes" role="tabpanel" aria-labelledby="pills-dishes-tab">
                                    <h6 class="mb-4">Tambah Data Item Paket Makanan - Dishes</h6>
                                    <form action="{{ route('paketmakanan.storeDishes') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <!-- Nama Paket Dishes -->
                                        <div class="row mb-3">
                                            <label for="nama_paket_dish" class="col-sm-2 col-form-label">Nama Paket Dishes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_paket_dish" name="nama_paket_dish" value="{{ old('nama_paket_dish') }}" required>
                                                @error('nama_paket_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Harga Paket Dishes -->
                                        <div class="row mb-3">
                                            <label for="harga_dish" class="col-sm-2 col-form-label">Harga Paket Dishes</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="harga_dish" name="harga_dish" value="{{ old('harga_dish') }}" required>
                                                @error('harga_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Deskripsi -->
                                        <div class="row mb-3">
                                            <label for="deskripsi_dish" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="deskripsi_dish" name="deskripsi_dish">{{ old('deskripsi_dish') }}</textarea>
                                                @error('deskripsi_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Foto Paket Dishes -->
                                        <div class="row mb-3">
                                            <label for="foto_paket_dish" class="col-sm-2 col-form-label">Foto Paket Dishes</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="foto_paket_dish" name="foto_paket_dish" required>
                                                @error('foto_paket_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary w-100" type="submit">Tambah Paket Dishes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Tabel Paket Main Course -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="col-12">
                                <div class="bg-light rounded h-100 p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h6>Data Paket Main Course</h6>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nama Makanan</th>
                                                        <th scope="col">Gambar</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($mainCourse as $mainC)
                                                        <tr>
                                                            <td>{{ $mainC->id_mainC }}</td>
                                                            <td>{{ $mainC->nama_paket_mainC }}</td>
                                                            <td>
                                                                @if($mainC->foto_paket_mainC)
                                                                <img src="{{ asset('storage/' .$mainC->foto_paket_mainC) }}" alt="Foto Makanan" style="max-width: 100px; max-height: 100px;">
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#detailModal-{{$mainC->id_mainC }}">
                                                                    <i class="fa fa-info-circle"></i>
                                                                </a>                                              
                                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#editModal-{{$mainC->id_mainC }}">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        
    
                                        <!-- Pagination links -->
                                        <div class="d-flex justify-content-end mt-4">
                                            {{ $mainCourse->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h6>Data Paket Dishes</h6>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nama Makanan</th>
                                                        <th scope="col">Gambar</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($paketDish as $dish)
                                                        <tr>
                                                            <td>{{ $dish->id_dishes }}</td>
                                                            <td>{{ $dish->nama_paket_dish }}</td>
                                                            <td>
                                                                @if($dish->foto_paket_dish)
                                                                    <img src="{{ asset('storage/' .$dish->foto_paket_dish) }}" alt="Foto Makanan" style="max-width: 100px; max-height: 100px;">
                                                                @else
                                                                    <span class="text-muted">No Image</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#detailModal-{{$dish->id_dishes }}">
                                                                    <i class="fa fa-info-circle"></i>
                                                                </a>
                                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#editModal-{{$dish->id_dishes }}">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        
                    
                                        <!-- Pagination links -->
                                            <div class="d-flex justify-content-end mt-4">
                                                {{ $paketDish->links('pagination::bootstrap-4') }}
                                            </div>                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Pills Navigation -->
                    {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-maincourse-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-maincourse" type="button" role="tab" aria-controls="pills-maincourse"
                                aria-selected="true">Main Course</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-dishes-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-dishes" type="button" role="tab"
                                aria-controls="pills-dishes" aria-selected="false">Dishes</button>
                        </li>
                    </ul>

                    <!--form & table maincourse&dishes -->
                    <!-- Pills Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Main Course Tab -->
                        <div class="tab-pane fade show active" id="pills-maincourse" role="tabpanel" aria-labelledby="pills-maincourse-tab">
                            <h6 class="mb-4">Tambah Data Item Paket Makanan - Main Course</h6>
                            <!-- Alert untuk Main Course -->
                            @if (session('success_maincourse'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('success_maincourse') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <form action="{{ route('paketmakanan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Nama Paket Makanan -->
                                <div class="row mb-3">
                                    <label for="nama_paket_mainC" class="col-sm-2 col-form-label">Nama Paket Makanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_paket_mainC" name="nama_paket_mainC" value="{{ old('nama_paket_mainC') }}" required>
                                        @error('nama_paket_mainC')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            <!-- Deskripsi -->
                            <div class="row mb-3">
                                <label for="deskripsi_mainC" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="deskripsi_mainC" name="deskripsi_mainC">{{ old('deskripsi_mainC') }}</textarea>
                                    @error('deskripsi_mainC')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                </div>

                                <!-- Harga Paket Makanan -->
                                <div class="row mb-3">
                                    <label for="harga_paket_mainC" class="col-sm-2 col-form-label">Harga Paket Makanan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="harga_paket_mainC" name="harga_paket_mainC" value="{{ old('harga_paket_mainC') }}" required>
                                        @error('harga_paket_mainC')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Foto Paket Main Course -->
                                <div class="row mb-3">
                                    <label for="foto_paket_mainC" class="col-sm-2 col-form-label">Foto Paket Main Course</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="foto_paket_mainC" name="foto_paket_mainC" required>
                                        @error('foto_paket_mainC')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary w-100" type="submit">Tambah Paket Maincourse</button>
                                    </div>
                                </div>
                            </form>

                            <!-- Tabel Paket Main Course -->
                            <div class="table-responsive">
                                <table class="table">
                                    <h6 class="mb-4">Tabel Data Maincourse</h6>
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Makanan</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mainCourse as $mainC)
                                        <tr>
                                            <td>{{ $mainC->id_mainC }}</td>
                                            <td>{{ $mainC->nama_paket_mainC }}</td>
                                            <td>
                                                @if($mainC->foto_paket_mainC)
                                                    <img src="{{ asset('storage/' .$mainC->foto_paket_mainC) }}" alt="Foto Makanan" style="max-width: 100px; max-height: 100px;">
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#detailModal-{{$mainC->id_mainC }}">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#editModal-{{$mainC->id_mainC }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination untuk Main Course -->
                            <div class="d-flex justify-content-end mt-4">
                                {{ $mainCourse->links('pagination::bootstrap-4') }}
                            </div>
                        </div>

                        <!-- Dishes Tab -->
                        <div class="tab-pane fade" id="pills-dishes" role="tabpanel" aria-labelledby="pills-dishes-tab">
                            <h6 class="mb-4">Tambah Data Item Paket Makanan - Dishes</h6>
                             <!-- Alert untuk Dishes -->
                            @if (session('success_dishes'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('success_dishes') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <form action="{{ route('paketmakanan.storeDishes') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Form untuk Dishes -->
                                        <!-- Nama Paket Dishes -->
                                        <div class="row mb-3">
                                            <label for="nama_paket_dish" class="col-sm-2 col-form-label">Nama Paket Dishes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_paket_dish" name="nama_paket_dish" value="{{ old('nama_paket_dish') }}" required>
                                                @error('nama_paket_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Harga Paket Dishes -->
                                        <div class="row mb-3">
                                            <label for="harga_dish" class="col-sm-2 col-form-label">Harga Paket Dishes</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="harga_dish" name="harga_dish" value="{{ old('harga_dish') }}" required>
                                                @error('harga_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Deskripsi -->
                                        <div class="row mb-3">
                                            <label for="deskripsi_dish" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="deskripsi_dish" name="deskripsi_dish">{{ old('deskripsi_dish') }}</textarea>
                                                @error('deskripsi_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Foto Paket Dishes -->
                                        <div class="row mb-3">
                                            <label for="foto_paket_dish" class="col-sm-2 col-form-label">Foto Paket Dishes</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="foto_paket_dish" name="foto_paket_dish" required>
                                                @error('foto_paket_dish')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary w-100" type="submit">Tambah Paket Dishes</button>
                                    </div>
                                </div>
                            </form>

                            <!-- Tabel Paket Dishes -->
                            <div class="table-responsive">
                                <h6 class="mb-4">Tabel Data Dishes </h6>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Makanan</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($paketDish as $dish)
                                        <tr>
                                            <td>{{ $dish->id_dishes }}</td>
                                            <td>{{ $dish->nama_paket_dish }}</td>
                                            <td>
                                                @if($dish->foto_paket_dish)
                                                    <img src="{{ asset('storage/' .$dish->foto_paket_dish) }}" alt="Foto Makanan" style="max-width: 100px; max-height: 100px;">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#detailModal-{{$dish->id_dishes }}">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                                <a class="btn btn-square btn-outline-info" data-toggle="modal" data-target="#editModal-{{$dish->id_dishes }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination untuk Dishes -->
                            <div class="d-flex justify-content-end mt-4">
                                {{ $paketDish->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div> --}}

                    <div class="container-fluid py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h2 class="card-title text-center mb-4">Tambah Data Katering</h2>
                                        
                                        <ul class="nav nav-pills nav-fill mb-4" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-maincourse-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-maincourse" type="button" role="tab" aria-controls="pills-maincourse"
                                                    aria-selected="true">Main Course</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-dishes-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-dishes" type="button" role="tab"
                                                    aria-controls="pills-dishes" aria-selected="false">Dishes</button>
                                            </li>
                                        </ul>
                    
                                        <div class="tab-content" id="pills-tabContent">
                                            <!-- Main Course Tab -->
                                            <div class="tab-pane fade show active" id="pills-maincourse" role="tabpanel" aria-labelledby="pills-maincourse-tab">
                                                <h4 class="mb-4">Tambah Data Maincourse</h4>
                                                
                                                @if (session('success_maincourse'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <i class="fa fa-check-circle me-2"></i>{{ session('success_maincourse') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                    
                                                <form action="{{ route('paketmakanan.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                                                    @csrf
                                                    <div class="mb-3 row">
                                                        <label for="nama_paket_mainC" class="col-sm-3 col-form-label">Nama Paket</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="nama_paket_mainC" name="nama_paket_mainC" value="{{ old('nama_paket_mainC') }}" required>
                                                            @error('nama_paket_mainC')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    <div class="mb-3 row">
                                                        <label for="deskripsi_mainC" class="col-sm-3 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" id="deskripsi_mainC" name="deskripsi_mainC" rows="3">{{ old('deskripsi_mainC') }}</textarea>
                                                            @error('deskripsi_mainC')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    <div class="mb-3 row">
                                                        <label for="harga_paket_mainC" class="col-sm-3 col-form-label">Harga</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control" id="harga_paket_mainC" name="harga_paket_mainC" value="{{ old('harga_paket_mainC') }}" required>
                                                            @error('harga_paket_mainC')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    <div class="mb-3 row">
                                                        <label for="foto_paket_mainC" class="col-sm-3 col-form-label">Foto</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" class="form-control" id="foto_paket_mainC" name="foto_paket_mainC[]" multiple required>
                                                            @error('foto_paket_mainC')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-sm-9 offset-sm-3">
                                                            <button class="btn btn-primary" type="submit">Tambah Paket Maincourse</button>
                                                        </div>
                                                    </div>
                                                </form>
                    
                                                <h4 class="mb-4">Tabel Data Maincourse</h4>
                                                <form id="searchMaincourseForm" action="{{ route('paketmakanan.index') }}" method="GET">
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="search" class="form-control" placeholder="Cari Nama Paket" value="{{ request('search') }}">
                                                        <div class="input-group-append">
                                                            <!-- Tombol Reset -->
                                                            <button type="button" id="resetButton" class="btn btn-secondary">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                                <!-- Script untuk pengiriman otomatis pada kolom pencarian -->
                                                <script>
                                                    // Ambil elemen form dan kolom pencarian
                                                    const searchForm = document.getElementById('searchMaincourseForm');
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
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nama paket</th>
                                                                <th>Harga</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($mainCourse as $mainC)
                                                            <tr>
                                                                <td>{{ $mainC->id_mainC }}</td>
                                                                <td>{{ $mainC->nama_paket_mainC }}</td>
                                                                <td>{{ $mainC->harga_paket_mainC}}</td>
                                                                {{-- <td>
                                                                    @if($mainC->foto_paket_mainC && $mainC->foto_paket_mainC->count() > 0)
                                                                    @foreach($mainC->foto_paket_mainC as $foto)
                                                                        <img src="{{ asset('storage/' . $foto->foto_path) }}" alt="Foto Maincourse" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                                                        <img src="{{ asset('storage/paketmakanan/' . str_replace('foto_paket_maincourse/', '', $foto->foto_path)) }}" alt="Foto Maincourse" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                                                    @endforeach
                                                                    @else
                                                                        <p class="text-muted">No Image</p>
                                                                    @endif
                                                                </td> --}}
                                                                {{-- <td>
                                                                    @if($mainC->foto_paket_mainC && $mainC->foto_paket_mainC->count() > 0)
                                                                        @foreach ($mainC->foto_paket_mainC as $foto)
                                                                            <p>{{ $foto->foto_path }}</p> <!-- Debug path -->
                                                                            <img src="{{ asset('storage/' . $foto->foto_path) }}" 
                                                                                alt="Foto Paket Makanan" 
                                                                                style="max-width: 100px;"
                                                                            >
                                                                        @endforeach
                                                                
                                                                    @else
                                                                        <p>Tidak ada foto untuk paket ini.</p>
                                                                    @endif
                                                                </td> --}}
                                                                                                                               
                                                                {{-- <td>
                                                                    @if($mainC->foto_paket_mainC && $mainC->foto_paket_mainC->count() > 0)
                                                                        @foreach ($mainC->foto_paket_mainC as $foto)
                                                                            <img src="{{ asset($foto->foto_path) }}" alt="Foto Paket Makanan" style="max-width: 100px;">
                                                                        @endforeach
                                                                    @else
                                                                        <p>Tidak ada foto untuk paket ini.</p>
                                                                    @endif
                                                                </td>                                                                                                                                                                                                                                                                                                                                                                            --}}
                                                                <td>
                                                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{$mainC->id_mainC }}">
                                                                        <i class="fa fa-info-circle"></i> Details
                                                                    </button>
                                                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{$mainC->id_mainC }}">
                                                                        <i class="fa fa-edit"></i> Edit
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="d-flex justify-content-end mt-4">
                                                    {{ $mainCourse->links('pagination::bootstrap-4') }}
                                                </div>
                                            </div>
                    
                                            <!-- Dishes Tab -->
                                            <div class="tab-pane fade" id="pills-dishes" role="tabpanel" aria-labelledby="pills-dishes-tab">
                                                <h4 class="mb-4">Tambah Paket Dishes</h4>
                                                
                                                @if (session('success_dishes'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <i class="fa fa-check-circle me-2"></i>{{ session('success_dishes') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                    
                                                <form action="{{ route('paketmakanan.storeDishes') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                                                    @csrf
                                                    <div class="mb-3 row">
                                                        <label for="nama_paket_dish" class="col-sm-3 col-form-label">Nama Paket</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="nama_paket_dish" name="nama_paket_dish" value="{{ old('nama_paket_dish') }}" required>
                                                            @error('nama_paket_dish')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    <div class="mb-3 row">
                                                        <label for="deskripsi_dish" class="col-sm-3 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" id="deskripsi_dish" name="deskripsi_dish" rows="3">{{ old('deskripsi_dish') }}</textarea>
                                                            @error('deskripsi_dish')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    <div class="mb-3 row">
                                                        <label for="harga_dish" class="col-sm-3 col-form-label">Harga</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control" id="harga_dish" name="harga_dish" value="{{ old('harga_dish') }}" required>
                                                            @error('harga_dish')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    {{-- <div class="mb-3 row">
                                                        <label for="foto_paket_dish" class="col-sm-3 col-form-label">Foto</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" class="form-control" id="foto_paket_dish" name="foto_paket_dish" required>
                                                            @error('foto_paket_dish')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div> --}}
                                                    <div class="mb-3 row">
                                                        <label for="foto_paket_dish" class="col-sm-3 col-form-label">Foto</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" class="form-control" id="foto_paket_dish" name="foto_paket_dish[]" multiple required>
                                                            @error('foto_paket_dish')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                    
                                                    <div class="row">
                                                        <div class="col-sm-9 offset-sm-3">
                                                            <button class="btn btn-primary" type="submit">Tambah Data Dishes</button>
                                                        </div>
                                                    </div>
                                                </form>
                    
                                                <h4 class="mb-4">Tabel Data Dishes</h4>
                                                <div class="table-responsive">
                                                    <form id="searchDishesForm" action="{{ route('paketmakanan.index') }}" method="GET">
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="search" class="form-control" 
                                                                   placeholder="Cari Nama Paket Dish" 
                                                                   value="{{ request('search') }}">
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-secondary reset-search">Reset</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                    <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        // Ambil elemen form dan kolom pencarian untuk dishes
                                                        const searchForm = document.getElementById('searchDishesForm');
                                                        const searchInput = searchForm.querySelector('input[name="search"]');
                                                        const resetButton = searchForm.querySelector('.reset-search');
                                                    
                                                        // Kirim form setiap kali pengguna mengetik
                                                        let timeout = null;
                                                        searchInput.addEventListener('keyup', function() {
                                                            clearTimeout(timeout);
                                                            timeout = setTimeout(function() {
                                                                searchForm.submit();
                                                            }, 500); // Delay 500ms untuk menghindari terlalu banyak request
                                                        });
                                                    
                                                        // Reset pencarian
                                                        resetButton.addEventListener('click', function() {
                                                            searchInput.value = '';
                                                            searchForm.submit();
                                                        });
                                                    });
                                                    </script>
                                                    
                                                    <table class="table table-hover table-striped">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nama</th>
                                                                <th>harga</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($paketDish as $dish)
                                                            <tr>
                                                                <td>{{ $dish->id_dishes }}</td>
                                                                <td>{{ $dish->nama_paket_dish }}</td>
                                                                <td>{{ $dish->harga_dish }}</td>
                                                                {{-- <td>
                                                                    @if($dish->foto_paket_dish)
                                                                        <img src="{{ asset('storage/' .$dish->foto_paket_dish) }}" alt="Food Photo" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                                                    @else
                                                                        <span class="text-muted">No Image</span>
                                                                    @endif
                                                                </td> --}}
                                                                <td>
                                                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{$dish->id_dishes }}">
                                                                        <i class="fa fa-info-circle"></i> Details
                                                                    </button>
                                                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{$dish->id_dishes }}">
                                                                        <i class="fa fa-edit"></i> Edit
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="d-flex justify-content-end mt-4">
                                                    {{ $paketDish->links('pagination::bootstrap-4') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Detail Modal  maincourse-->
                    {{-- @foreach($mainCourse as $mainC)
                    <div class="modal fade" id="detailModal-{{$mainC->id_mainC}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel-{{$mainC->id_mainC}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="detailModalLabel-{{$mainC->id_mainC}}">
                                        <i class="bi bi-clipboard-check me-2"></i>Detail Paket Main Course
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if($mainC->foto_paket_mainC)
                                            @php
                                                $fotoPaths = json_decode($mainC->foto_paket_mainC, true); 
                                            @endphp
                                            @if(is_array($fotoPaths)) 
                                                @foreach($fotoPaths as $foto)
                                                    <img src="{{ asset('images/' . $foto) }}" alt="Foto" class="img-fluid rounded shadow-sm" 
                                                         style="max-width: 100%; max-height: 250px; object-fit: cover;"/>
                                                @endforeach
                                            @else
                                                <p>Data foto tidak valid.</p>
                                            @endif
                                        @else
                                            <p>Tidak ada foto untuk paket ini.</p>
                                        @endif
                                        
                                        <div class="col-md-6">
                                            <h4 class="mb-3 text-primary">{{$mainC->nama_paket_mainC}}</h4>
                                            <p><strong>ID:</strong> {{$mainC->id_mainC}}</p>
                                            <p><strong>Harga:</strong> 
                                                <span class="text-success fw-bold">Rp{{ number_format($mainC->harga_paket_mainC, 0, ',', '.') }}</span>
                                            </p>
                                            <p><strong>Deskripsi:</strong></p>
                                            <ul>
                                                @foreach(explode("\n", $mainC->deskripsi_mainC) as $line)
                                                    <li>{{ $line }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}

                    {{--bener--}}
                    @foreach($mainCourse as $mainC)
                    <div class="modal fade" id="detailModal-{{$mainC->id_mainC}}" tabindex="-1" aria-labelledby="detailModalLabel-{{$mainC->id_mainC}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title">Detail Paket Main Course</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @php
                                                $photos = json_decode($mainC->foto_paket_mainC, true);
                                            @endphp
                                            @if(is_array($photos))
                                                @foreach($photos as $photo)
                                                    <img src="{{ asset('images/' . $photo) }}" 
                                                         alt="Foto Paket" 
                                                         class="img-fluid mb-2 rounded"
                                                         style="width: 100%; height: 250px; object-fit: cover;">
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="mb-3 text-primary">{{$mainC->nama_paket_mainC}}</h4>
                                            <p><strong>ID:</strong> {{$mainC->id_mainC}}</p>
                                            <p><strong>Harga:</strong> Rp{{ number_format($mainC->harga_paket_mainC, 0, ',', '.') }}</p>
                                            <p><strong>Deskripsi:</strong></p>
                                            <ul>
                                                @foreach(explode("\n", $mainC->deskripsi_mainC) as $line)
                                                    <li>{{ $line }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <!-- Edit Modal maincourse -->
                    {{--bener--}}
                    {{-- @foreach($mainCourse as $mainC)
                        <div class="modal fade" id="editModal-{{$mainC->id_mainC}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{$mainC->id_mainC}}" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content shadow-lg">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editModalLabel-{{$mainC->id_mainC}}">
                                            <i class="bi bi-pencil-square me-2"></i>Edit Paket Main Course
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('paketmakanan.update', $mainC->id_mainC) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="nama_paket_mainC" class="form-label fw-bold">Nama Makanan</label>
                                                        <input type="text" class="form-control" id="nama_paket_mainC" name="nama_paket_mainC" value="{{ $mainC->nama_paket_mainC }}" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="deskripsi_mainC" class="form-label fw-bold">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi_mainC" name="deskripsi_mainC" rows="3">{{ $mainC->deskripsi_mainC }}</textarea>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="harga_paket_mainC" class="form-label fw-bold">Harga</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Rp</span>
                                                            <input type="number" class="form-control" id="harga_paket_mainC" name="harga_paket_mainC" value="{{ $mainC->harga_paket_mainC }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="foto_paket_mainC" class="form-label fw-bold">Gambar</label>
                                                        <input type="file" class="form-control-file" id="foto_paket_mainC" name="foto_paket_mainC[]" multiple>

                                                    @if($mainC->foto_paket_mainC)
                                                    @php
                                                        $foto_paket_mainC = json_decode($mainC->foto_paket_mainC, true); // Mengambil array foto dari JSON
                                                    @endphp
                                                    @if(is_array($foto_paket_mainC) && !empty($foto_paket_mainC))
                                                        <div class="mb-3">
                                                            <h6 class="fw-bold">Gambar</h6>
                                                            <div class="d-flex flex-wrap">
                                                                @foreach($foto_paket_mainC as $foto)
                                                                    <div class="me-3 mb-3" style="max-width: 150px;">
                                                                        <img src="{{ asset('storage/' . $foto) }}" alt="Foto Souvenir" class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 150px;">
                                                                    </div>
                                                                @endforeach
                                                                @foreach(json_decode($mainC->foto_paket_mainC, true) as $foto)
                                                                    <img src="{{ asset('images/' . $foto) }}" alt="Foto" class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 150px;"/>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    @else
                                                        <p class="text-muted">Tidak ada gambar</p>
                                                    @endif
                                                    @else
                                                        <p class="text-muted">Tidak ada gambar</p>
                                                    @endif


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer bg-light">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    @foreach($mainCourse as $mainC)
                        <div class="modal fade" id="editModal-{{$mainC->id_mainC}}" aria-hidden="true" aria-labelledby="editModalLabel-{{$mainC->id_mainC}}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editModalLabel-{{$mainC->id_mainC}}">
                                            <i class="bi bi-pencil-square me-2"></i>Edit Paket Main Course
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('paketmakanan.update', $mainC->id_mainC) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="nama_paket_mainC" class="form-label fw-bold">Nama Makanan</label>
                                                        <input type="text" class="form-control" id="nama_paket_mainC" name="nama_paket_mainC" value="{{ $mainC->nama_paket_mainC }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="deskripsi_mainC" class="form-label fw-bold">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi_mainC" name="deskripsi_mainC" rows="3" required>{{ $mainC->deskripsi_mainC }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga_paket_mainC" class="form-label fw-bold">Harga</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Rp</span>
                                                            <input type="number" class="form-control" id="harga_paket_mainC" name="harga_paket_mainC" value="{{ $mainC->harga_paket_mainC }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="foto_paket_mainC" class="form-label fw-bold">Upload Foto Baru</label>
                                                        <input type="file" class="form-control" id="foto_paket_mainC" name="foto_paket_mainC[]" multiple accept="image/*">
                                                        <small class="text-muted">Dapat memilih lebih dari 1 foto. Upload foto baru akan menggantikan foto lama.</small>
                                                    </div>
                                                    
                                                    @php
                                                    $photos = json_decode($mainC->foto_paket_mainC, true);
                                                @endphp
                                                @if(is_array($photos))
                                                    @foreach($photos as $photo)
                                                        <img src="{{ asset('images/' . $photo) }}" 
                                                            alt="Foto Paket" 
                                                            class="img-fluid mb-2 rounded"
                                                            style="width: 100%; height: 250px; object-fit: cover;">
                                                    @endforeach
                                                @endif
                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- detail modal dishes-->
                    {{-- @foreach($paketDish as $dish)
                    <div class="modal fade" id="detailModal-{{$dish->id_dishes}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel-{{$dish->id_dishes}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="detailModalLabel-{{$dish->id_dishes}}">
                                        <i class="bi bi-clipboard-check me-2"></i>Detail Paket Dishes
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if($dish->foto_paket_dish)
                                            @php
                                                $fotoPaths = explode(',', $dish->foto_paket_dish);
                                            @endphp
                                            @foreach($fotoPaths as $foto)
                                                <img src="{{ asset('storage/' . $foto) }}" alt="Foto Dishes" class="img-fluid rounded shadow-sm"  style="max-width: 100%; max-height: 250px; object-fit: cover;">
                                            @endforeach
                                        @endif
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="mb-3 text-primary">{{$dish->nama_paket_dish}}</h4>
                                            <p><strong>ID:</strong> {{$dish->id_dishes}}</p>
                                            <p><strong>Deskripsi:</strong></p>
                                            <ul>
                                                @foreach(explode(',', $dish->deskripsi_dish) as $deskripsi_item)
                                                    <li>{{ $deskripsi_item }}</li>
                                                @endforeach
                                            </ul>
                                            <p><strong>Harga:</strong> 
                                                <span class="text-success fw-bold">Rp{{ number_format($dish->harga_dish, 0, ',', '.') }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                    @foreach($paketDish as $dish)
                    <div class="modal fade" id="detailModal-{{$dish->id_dishes}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel-{{$dish->id_dishes}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="detailModalLabel-{{$dish->id_dishes}}">
                                        <i class="bi bi-clipboard-check me-2"></i>Detail Paket Dishes
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @php
                                                $fotos = json_decode($dish->foto_paket_dish, true);
                                            @endphp
                                            @if($fotos && count($fotos) > 0)
                                                @foreach($fotos as $foto)
                                                    <img src="{{ asset('storage/' . $foto) }}" alt="Foto Dishes" class="img-fluid rounded shadow-sm mb-2" style="max-width: 100%; max-height: 250px; object-fit: cover;">
                                                @endforeach
                                            @else
                                                <div class="d-flex align-items-center justify-content-center bg-light border rounded" style="height: 250px;">
                                                    <span class="text-muted">No Image Available</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="mb-3 text-primary">{{ $dish->nama_paket_dish }}</h4>
                                            <p><strong>ID:</strong> {{$dish->id_dishes}}</p>
                                            <p><strong>Deskripsi:</strong></p>
                                            <ul>
                                                @foreach(explode("\n", $dish->deskripsi_dish) as $deskripsi_item)
                                                    <li>{{ $deskripsi_item }}</li>
                                                @endforeach
                                            </ul>
                                            <p><strong>Harga:</strong> 
                                                <span class="text-success fw-bold">Rp{{ number_format($dish->harga_dish, 0, ',', '.') }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    
                    <!--edit modal dishes-->
                    {{-- @foreach($paketDish as $dish)
                    <div class="modal fade" id="editModal-{{$dish->id_dishes}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{$dish->id_dishes}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="editModalLabel-{{$dish->id_dishes}}">
                                        <i class="bi bi-pencil-square me-2"></i>Edit Paket Dishes
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('paketmakanan.updateDishes', $dish->id_dishes) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="nama_paket_dish" class="form-label fw-bold">Nama Dishes</label>
                                                    <input type="text" class="form-control" id="nama_paket_dish" name="nama_paket_dish" value="{{ $dish->nama_paket_dish }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="deskripsi_dish" class="form-label fw-bold">Deskripsi</label>
                                                    <textarea class="form-control" id="deskripsi_dish" name="deskripsi_dish" rows="3">{{ $dish->deskripsi_dish }}</textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="harga_dish" class="form-label fw-bold">Harga</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp</span>
                                                        <input type="number" class="form-control" id="harga_dish" name="harga_dish" value="{{ $dish->harga_dish }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="foto_paket_dish" class="form-label fw-bold">Gambar</label>
                                                    <input type="file" class="form-control-file" id="foto_paket_dish" name="foto_paket_dish[]" multiple>
                                                    
                                                    @if($dish->foto_paket_dish)
                                                        <div class="mt-2">
                                                            <h5>Current Photos</h5>
                                                            @foreach(explode(',', $dish->foto_paket_dish) as $foto)
                                                                <div class="mb-2">
                                                                    <img src="{{ asset('storage/' . $foto) }}" alt="Foto Dishes" class="img-fluid rounded shadow-sm" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @else
                                                        <div class="d-flex align-items-center justify-content-center bg-light border rounded" style="height: 250px;">
                                                            <span class="text-muted">No Image Available</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                    @foreach($paketDish as $dish)
                    <div class="modal fade" id="editModal-{{$dish->id_dishes}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{$dish->id_dishes}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="editModalLabel-{{$dish->id_dishes}}">
                                        <i class="bi bi-pencil-square me-2"></i>Edit Paket Dishes
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('paketmakanan.updateDishes', $dish->id_dishes) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="nama_paket_dish" class="form-label fw-bold">Nama Dishes</label>
                                                    <input type="text" class="form-control" id="nama_paket_dish" name="nama_paket_dish" value="{{ $dish->nama_paket_dish }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="deskripsi_dish" class="form-label fw-bold">Deskripsi</label>
                                                    <textarea class="form-control" id="deskripsi_dish" name="deskripsi_dish" rows="3">{{ $dish->deskripsi_dish }}</textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="harga_dish" class="form-label fw-bold">Harga</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp</span>
                                                        <input type="number" class="form-control" id="harga_dish" name="harga_dish" value="{{ $dish->harga_dish }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="foto_paket_dish" class="form-label fw-bold">Upload Foto Baru</label>
                                                    <input type="file" class="form-control" id="foto_paket_dish" name="foto_paket_dish[]" multiple accept="image/*">
                                                    <small class="text-muted">Dapat memilih lebih dari 1 foto. Upload foto baru akan menggantikan foto lama.</small>
                                                </div>
                                                
                                                @if($dish->foto_paket_dish)
                                                    @php
                                                        $photos = json_decode($dish->foto_paket_dish, true);
                                                    @endphp
                                                    @if(is_array($photos))
                                                        <div class="row mt-3">
                                                            <label class="form-label fw-bold">Foto Saat Ini:</label>
                                                            @foreach($photos as $photo)
                                                                <div class="col-md-6 mb-2">
                                                                    <img src="{{ Storage::url($photo) }}" 
                                                                         alt="Foto Dishes" 
                                                                         class="img-fluid rounded"
                                                                         style="width: 100%; height: 200px; object-fit: cover;">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- @section('content')
                        <div id="form-paket-makanan" class="form-container">
                            <div class="bg-light rounded h-100 p-4">
                                <!-- Tampilkan pesan sukses -->
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!-- Pills Navigation -->
                                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-maincourse-tab" data-bs-toggle="pill" data-bs-target="#pills-maincourse" type="button" role="tab" aria-controls="pills-maincourse" aria-selected="true">Paket Main Course</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-dishes-tab" data-bs-toggle="pill" data-bs-target="#pills-dishes" type="button" role="tab" aria-controls="pills-dishes" aria-selected="false">Paket Dishes</button>
                                    </li>
                                </ul>
                                
                                <!-- Pills Content -->
                                <div class="tab-content" id="pills-tabContent">
                                    <!-- Main Course Form -->
                                    <div class="tab-pane fade show active" id="pills-maincourse" role="tabpanel" aria-labelledby="pills-maincourse-tab">
                                        <h6 class="mb-4">Tambah Data Item Paket Makanan - Main Course</h6>
                                        <form action="{{ route('paketmakanan.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                        
                                            <!-- Nama Paket Makanan -->
                                            <div class="row mb-3">
                                                <label for="nama_paket_mainC" class="col-sm-2 col-form-label">Nama Paket Makanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_paket_mainC" name="nama_paket_mainC" value="{{ old('nama_paket_mainC') }}" required>
                                                    @error('nama_paket_mainC')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>    
                        
                                            <!-- Deskripsi -->
                                            <div class="row mb-3">
                                                <label for="deskripsi_mainC" class="col-sm-2 col-form-label">Deskripsi</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="deskripsi_mainC" name="deskripsi_mainC">{{ old('deskripsi_mainC') }}</textarea>
                                                    @error('deskripsi_mainC')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                        
                                            <!-- Harga Paket Makanan -->
                                            <div class="row mb-3">
                                                <label for="harga_paket_mainC" class="col-sm-2 col-form-label">Harga Paket Makanan</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="harga_paket_mainC" name="harga_paket_mainC" value="{{ old('harga_paket_mainC') }}" required>
                                                    @error('harga_paket_mainC')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                        
                                            <!-- Foto Paket Main Course -->
                                            <div class="row mb-3">
                                                <label for="foto_paket_mainC" class="col-sm-2 col-form-label">Foto Paket Main Course</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="foto_paket_mainC" name="foto_paket_mainC" required>
                                                    @error('foto_paket_mainC')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                        
                                            <!-- Submit Button -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-primary w-100" type="submit">Tambah Paket Makanan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                        
                                    <!-- Paket Dishes Form (Tambahkan form lain jika perlu) -->
                                    <div class="tab-pane fade" id="pills-dishes" role="tabpanel" aria-labelledby="pills-dishes-tab">
                                        <h6 class="mb-4">Tambah Data Item Paket Makanan - Dishes</h6>
                                        <!-- Form untuk Paket Dishes dapat ditambahkan di sini -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endsection --}}

                    
            

                    
                    
                    

                     
        

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

{{-- <script>
function showUpdateForm(id, nama, tipe_gedung, alamat, kapasitas, harga, status, deskripsi, image) {
    var form = document.getElementById('updateForm');
    form.action = form.action.replace(':id', id);

    // Isi data ke dalam form
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-nama').value = nama;
    document.getElementById('edit-tipe_gedung').value = tipe_gedung;
    document.getElementById('edit-alamat').value = alamat;
    document.getElementById('edit-kapasitas').value = kapasitas;
    document.getElementById('edit-harga').value = harga;
    document.getElementById('edit-status').value = status;
    document.getElementById('edit-deskripsi').value = deskripsi;

    // Tampilkan gambar jika ada
    var imagePreview = document.getElementById('image-preview');
    if (image) {
        imagePreview.src = "{{ asset('storage/images/') }}/" + image;
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';
    }

    // Tampilkan modal
    var updateModal = new bootstrap.Modal(document.getElementById('updateModal'));
    updateModal.show();
}
</script> --}}