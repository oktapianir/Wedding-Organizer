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
            {{-- <div class="container-fluid py-4 px-4">
                <nav class="navbar navbar-expand navbar-light bg-light shadow rounded-pill mb-4">
                    <div class="container-fluid px-2">
                        <div class="navbar-nav flex-row flex-nowrap overflow-auto py-2" style="scrollbar-width: none; -ms-overflow-style: none;">
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('gedung.index') }}" onclick="showForm('gedung')">
                                <i class="bi bi-building me-2"></i> Gedung
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-info btn-sm" href="{{ route('dekorasi.index') }}" onclick="showForm('dekorasi')">
                                <i class="bi bi-brush me-2"></i> Dekorasi
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-warning btn-sm" href="{{ route('paketmakanan.index') }}" onclick="showForm('katering')">
                                <i class="bi bi-egg-fried me-2"></i> Katering
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-danger btn-sm" href="{{ route('dokumentasi.index') }}" onclick="showForm('dokumentasi')">
                                <i class="bi bi-camera me-2"></i> Dokumentasi
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-success btn-sm" href="{{ route('hiburan.index') }}" onclick="showForm('hiburan')">
                                <i class="bi bi-music-note-beamed me-2"></i> Hiburan
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-secondary btn-sm" href="{{ route('bridalstyle.index') }}" onclick="showForm('bridalstyle')">
                                <i class="bi bi-gem me-2"></i> Bridalstyle
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-dark btn-sm" href="{{ route('paketsouvenir.index') }}" onclick="showForm('souvenir')">
                                <i class="bi bi-gift me-2"></i> Souvenir
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm" href="{{ route('undangan.index') }}" onclick="showForm('undangan')">
                                <i class="bi bi-envelope me-2"></i> Undangan
                            </a>
                        </div>
                    </div>
                </nav>
            </div> --}}
            <div class="container-fluid py-4 px-4">
                <nav class="navbar navbar-expand navbar-light bg-light shadow rounded-pill mb-4">
                    <div class="container-fluid px-2">
                        <div class="navbar-nav flex-row flex-nowrap overflow-auto py-2"
                            style="scrollbar-width: none; -ms-overflow-style: none;">
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('gedung.index') }}" onclick="showForm('gedung')">
                                <i class="bi bi-building me-2"></i> Gedung
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('dekorasi.index') }}" onclick="showForm('dekorasi')">
                                <i class="bi bi-brush me-2"></i> Dekorasi
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('paketmakanan.index') }}" onclick="showForm('katering')">
                                <i class="bi bi-egg-fried me-2"></i> Katering
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('dokumentasi.index') }}" onclick="showForm('dokumentasi')">
                                <i class="bi bi-camera me-2"></i> Dokumentasi
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('hiburan.index') }}" onclick="showForm('hiburan')">
                                <i class="bi bi-music-note-beamed me-2"></i> Hiburan
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('bridalstyle.index') }}" onclick="showForm('bridalstyle')">
                                <i class="bi bi-gem me-2"></i> Bridalstyle
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('paketsouvenir.index') }}" onclick="showForm('souvenir')">
                                <i class="bi bi-gift me-2"></i> Souvenir
                            </a>
                            <a class="nav-item nav-link d-flex align-items-center py-2 px-3 mx-1 rounded-pill btn btn-outline-primary btn-sm"
                                href="{{ route('undangan.index') }}" onclick="showForm('undangan')">
                                <i class="bi bi-envelope me-2"></i> Undangan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>


            <!-- form tambah gedung -->
            <div id="form-gedung" class="form-container mx-3">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0">Tambah Data Item Vendor Gedung</h6>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('gedung.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_gedung" class="form-label">Nama Vendor</label>
                                <input type="text" class="form-control" id="nama_gedung" name="nama_gedung"
                                    value="{{ old('nama_gedung') }}" required>
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tipeGedungSelect" class="form-label">Tipe Gedung</label>
                                <select class="form-select" id="tipeGedungSelect" name="tipe_gedung"
                                    aria-label="Tipe Gedung" required>
                                    <option value="">Pilih Tipe Gedung</option>
                                    <option value="indoor" {{ old('tipe_gedung') == 'indoor' ? 'selected' : '' }}>
                                        Indoor</option>
                                    <option value="outdoor" {{ old('tipe_gedung') == 'outdoor' ? 'selected' : '' }}>
                                        Outdoor</option>
                                </select>
                                @error('tipe_gedung')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alamat_gedung" class="form-label">Alamat Vendor</label>
                                <input type="text" class="form-control" id="alamat_gedung" name="alamat_gedung"
                                    value="{{ old('alamat_gedung') }}" required>
                                @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kapasitas_gedung" class="form-label">Kapasitas</label>
                                <input type="number" class="form-control" id="kapasitas_gedung"
                                    name="kapasitas_gedung" value="{{ old('kapasitas_gedung') }}" required>
                                @error('kapasitas_gedung')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="harga_gedung" class="form-label">Harga Sewa</label>
                                <input type="number" class="form-control" id="harga_gedung" name="harga_gedung"
                                    value="{{ old('harga_gedung') }}">
                                @error('harga')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status_gedung" class="form-label">Status</label>
                                <select class="form-select" id="status_gedung" name="status_gedung"
                                    aria-label="Status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="tersedia"
                                        {{ old('status_gedung') == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                                    <option value="tidak tersedia"
                                        {{ old('status_gedung') == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia
                                    </option>
                                </select>
                                @error('status_gedung')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi_gedung" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi_gedung" name="deskripsi_gedung">{{ old('deskripsi_gedung') }}</textarea>
                                @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="foto_gedung" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto_gedung" name="foto_gedung[]"
                                    multiple>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Tambah Item Gedung</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!--daftar item-->
            <div class="container-fluid pt-4 px-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6>Data Item Gedung</h6>
                            <form id="searchGedungForm" action="{{ route('gedung.index') }}" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Nama Gedung" value="{{ request('search') }}">
                                    <div class="input-group-append">
                                        <!-- Tombol Reset -->
                                        <button type="button" id="resetButton" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </form>
                            
                            <!-- Script untuk pengiriman otomatis pada kolom pencarian -->
                            <script>
                                // Ambil elemen form dan kolom pencarian
                                const searchForm = document.getElementById('searchGedungForm');
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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <table class="table table-hover table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Gedung</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gedung as $item)
                                        <tr>
                                            <td>{{ $item->id_gedung }}</td>
                                            <td>{{ $item->nama_gedung }}</td>
                                            <td>{{ $item->status_gedung }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-info" data-toggle="modal"
                                                    data-target="#detailModal-{{ $item->id_gedung }}">
                                                    <i class="fa fa-info-circle"></i> Details
                                                </button>
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#editModal-{{ $item->id_gedung }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="editModal-{{ $item->id_gedung }}" tabindex="-1"
                                            aria-labelledby="editModal-{{ $item->id_gedung }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 shadow">
                                                    <div class="modal-header bg-primary text-white">
                                                        <h5 class="modal-title"
                                                            id="updateModalLabel-{{ $item->id_gedung }}">
                                                            <i class="bi bi-building me-2"></i>Edit Gedung
                                                        </h5>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-4">
                                                        <form id="updateForm-{{ $item->id_gedung }}"
                                                            action="{{ route('gedung.update', $item->id_gedung) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="edit-nama-{{ $item->id_gedung }}"
                                                                        class="form-label">Nama Gedung</label>
                                                                    <input type="text" class="form-control"
                                                                        id="edit-nama-{{ $item->id_gedung }}"
                                                                        name="nama_gedung"
                                                                        value="{{ $item->nama_gedung }}">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label
                                                                        for="edit-tipe_gedung-{{ $item->id_gedung }}"
                                                                        class="form-label">Tipe Gedung</label>
                                                                    <select class="form-select"
                                                                        id="edit-tipe_gedung-{{ $item->id_gedung }}"
                                                                        name="tipe_gedung">
                                                                        <option value="Indoor"
                                                                            {{ $item->tipe_gedung == 'Indoor' ? 'selected' : '' }}>
                                                                            Indoor</option>
                                                                        <option value="Outdoor"
                                                                            {{ $item->tipe_gedung == 'Outdoor' ? 'selected' : '' }}>
                                                                            Outdoor</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="edit-kapasitas-{{ $item->id_gedung }}"
                                                                        class="form-label">Kapasitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="edit-kapasitas-{{ $item->id_gedung }}"
                                                                        name="kapasitas_gedung"
                                                                        value="{{ $item->kapasitas_gedung }}">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="edit-harga-{{ $item->id_gedung }}"
                                                                        class="form-label">Harga</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text">Rp</span>
                                                                        <input type="text" class="form-control"
                                                                            id="edit-harga-{{ $item->id_gedung }}"
                                                                            name="harga_gedung"
                                                                            value="{{ $item->harga_gedung }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="edit-alamat-{{ $item->id_gedung }}"
                                                                    class="form-label">Alamat</label>
                                                                <textarea class="form-control" id="edit-alamat-{{ $item->id_gedung }}" name="alamat_gedung" rows="2">{{ $item->alamat_gedung }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="edit-status-{{ $item->id_gedung }}"
                                                                    class="form-label">Status</label>
                                                                <select class="form-select"
                                                                    id="edit-status-{{ $item->id_gedung }}"
                                                                    name="status_gedung">
                                                                    <option value="Tersedia"
                                                                        {{ $item->status_gedung == 'Tersedia' ? 'selected' : '' }}>
                                                                        Tersedia</option>
                                                                    <option value="Tidak Tersedia"
                                                                        {{ $item->status_gedung == 'Tidak Tersedia' ? 'selected' : '' }}>
                                                                        Tidak Tersedia</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="edit-deskripsi-{{ $item->id_gedung }}"
                                                                    class="form-label">Deskripsi</label>
                                                                <textarea class="form-control" id="edit-deskripsi-{{ $item->id_gedung }}" name="deskripsi_gedung" rows="3">{{ $item->deskripsi_gedung }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="edit-foto_gedung-{{ $item->id_gedung }}"
                                                                    class="form-label">Gambar</label>
                                                                {{-- @if ($item->fotoGedung->isNotEmpty())
                                                                            <div class="row">
                                                                                @foreach ($item->fotoGedung as $foto)
                                                                                    <div class="col-md-4 mb-3">
                                                                                        <img src="{{ Storage::url(str_replace('public/', '', $foto->foto_path)) }}" 
                                                                                             alt="Foto Gedung {{ $item->nama_gedung }}" 
                                                                                             class="img-fluid rounded" 
                                                                                             style="width: 100%; height: 150px; object-fit: cover;"
                                                                                             onerror="this.onerror=null; this.src='{{ asset('path/to/placeholder-image.jpg') }}';">
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                                @else
                                                                                    <p class="text-muted">Tidak ada gambar untuk gedung ini.</p>
                                                                                @endif
                                                                            <input type="file" name="foto_gedung[]" multiple> --}}

                                                                @foreach ($item->fotoGedung as $foto)
                                                                    <div class="col-md-4 mb-3">
                                                                        <img src="{{ Storage::url(str_replace('public/', '', $foto->foto_path)) }}"
                                                                            alt="Foto Gedung {{ $item->nama_gedung }}"
                                                                            class="img-fluid rounded"
                                                                            style="width: 100%; height: 150px; object-fit: cover;"
                                                                            onerror="this.onerror=null; this.src='{{ asset('path/to/placeholder-image.jpg') }}';">
                                                                        <input type="checkbox" name="remove_foto[]"
                                                                            value="{{ $foto->id_foto_gedung }}"> Hapus
                                                                    </div>
                                                                    <input type="file" name="foto_gedung[]" multiple>
                                                                @endforeach
                                                                {{-- @if ($item->fotoGedung->isNotEmpty())
                                                                                <div class="row">
                                                                                    @foreach ($item->fotoGedung as $foto)
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <img src="{{ Storage::url(str_replace('public/', '', $foto->foto_path)) }}" 
                                                                                                alt="Foto Gedung {{ $item->nama_gedung }}" 
                                                                                                class="img-fluid rounded" 
                                                                                                style="width: 100%; height: 150px; object-fit: cover;"
                                                                                                onerror="this.onerror=null; this.src='{{ asset('path/to/placeholder-image.jpg') }}';">
                                                                                            <input type="checkbox" name="remove_foto[]" value="{{ $foto->id }}"> Hapus
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            @else
                                                                                <p class="text-muted">Tidak ada gambar untuk gedung ini.</p>
                                                                            @endif
                                                                            <input type="file" name="foto_gedung[]" multiple> --}}

                                                                {{-- @foreach ($gedung->fotoGedung as $foto)
                                                                                <div class="foto-gedung">
                                                                                    <img src="{{ asset('storage/' . $foto->foto_path) }}" alt="Foto Gedung" style="max-width: 100px; max-height: 100px;">
                                                                                    <input type="checkbox" name="remove_foto[]" value="{{ $foto->id }}"> Hapus
                                                                                </div>
                                                                            @endforeach
                                                                            <input type="file" name="foto_gedung[]" multiple> --}}
                                                                {{-- <input type="file" class="form-control" id="edit-foto_gedung-{{ $item->id_gedung }}" name="foto_gedung" onchange="previewImage(this, '{{ $item->id_gedung }}')">
                                                                            <div class="mt-2">
                                                                                @if ($item->foto_gedung)
                                                                                <img src="{{ asset('storage/' .$item->foto_gedung) }}" alt="Foto Gedung" style="max-width: 100px; max-height: 100px;">
                                                                                @endif                    
                                                                            </div> --}}
                                                            </div>

                                                            <div class="text-end mt-4">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary ms-2">
                                                                    <i class="bi bi-save me-1"></i>Simpan
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="detailModal-{{ $item->id_gedung }}"
                                            tabindex="-1" aria-labelledby="detailModalLabel-{{ $item->id_gedung }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 shadow">
                                                    <div class="modal-header bg-primary text-white">
                                                        <h5 class="modal-title"
                                                            id="detailModalLabel-{{ $item->id_gedung }}">
                                                            <i class="bi bi-info-circle me-2"></i>Detail Gedung
                                                        </h5>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-4">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="fw-bold">Nama Gedung</h6>
                                                                <p>{{ $item->nama_gedung }}</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="fw-bold">Tipe Gedung</h6>
                                                                <p>{{ $item->tipe_gedung }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="fw-bold">Kapasitas</h6>
                                                                <p>{{ $item->kapasitas_gedung }}</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="fw-bold">Harga</h6>
                                                                <p>Rp
                                                                    {{ number_format($item->harga_gedung, 0, ',', '.') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <h6 class="fw-bold">Alamat</h6>
                                                            <p>{{ $item->alamat_gedung }}</p>
                                                        </div>
                                                        <div class="mb-3">
                                                            <h6 class="fw-bold">Status</h6>
                                                            <span
                                                                class="badge {{ trim(strtolower($item->status_gedung)) == 'tersedia' ? 'bg-success' : 'bg-danger' }}">
                                                                {{ $item->status_gedung }}
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <h6 class="fw-bold">Deskripsi</h6>
                                                            <ul>
                                                                @foreach (explode("\n", $item->deskripsi_gedung) as $line)
                                                                    <li>{{ $line }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="mb-3">
                                                            <h6 class="fw-bold">Gambar</h6>
                                                            @if ($item->fotoGedung->isNotEmpty())
                                                                <div class="row">
                                                                    @foreach ($item->fotoGedung as $foto)
                                                                        <div class="col-md-4 mb-3">
                                                                            <img src="{{ Storage::url(str_replace('public/', '', $foto->foto_path)) }}"
                                                                                alt="Foto Gedung {{ $item->nama_gedung }}"
                                                                                class="img-fluid rounded"
                                                                                style="width: 100%; height: 150px; object-fit: cover;"
                                                                                onerror="this.onerror=null; this.src='{{ asset('path/to/placeholder-image.jpg') }}';">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @else
                                                                <p class="text-muted">Tidak ada gambar untuk gedung
                                                                    ini.</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            {{ $gedung->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

            <!--daftar item-->
            {{-- <div class="container-fluid pt-4 px-4">
                            <div class="col-12">
                                <div class="bg-light rounded h-100 p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Data Item Gedung</h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($gedung as $item)
                                                    <tr>
                                                        <td>{{ $item->id_gedung }}</td>
                                                        <td>{{ $item->nama_gedung }}</td>
                                                        <td>{{ $item->status_gedung }}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{$item->id_gedung }}">
                                                                <i class="fa fa-info-circle"></i> Details
                                                            </button>
                                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{$item->id_gedung}}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                        
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="editModal-{{ $item->id_gedung }}" tabindex="-1" aria-labelledby="editModal-{{ $item->id_gedung }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="updateModalLabel-{{ $item->id_gedung }}">
                                                                        <i class="bi bi-building me-2"></i>Edit Gedung
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form id="updateForm-{{ $item->id_gedung }}" action="{{ route('gedung.update', $item->id_gedung) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-nama-{{ $item->id_gedung }}" class="form-label">Nama Gedung</label>
                                                                                <input type="text" class="form-control" id="edit-nama-{{ $item->id_gedung }}" name="nama_gedung" value="{{ $item->nama_gedung }}">
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-tipe_gedung-{{ $item->id_gedung }}" class="form-label">Tipe Gedung</label>
                                                                                <select class="form-select" id="edit-tipe_gedung-{{ $item->id_gedung }}" name="tipe_gedung">
                                                                                    <option value="Indoor" {{ $item->tipe_gedung == 'Indoor' ? 'selected' : '' }}>Indoor</option>
                                                                                    <option value="Outdoor" {{ $item->tipe_gedung == 'Outdoor' ? 'selected' : '' }}>Outdoor</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-kapasitas-{{ $item->id_gedung }}" class="form-label">Kapasitas</label>
                                                                                <input type="text" class="form-control" id="edit-kapasitas-{{ $item->id_gedung }}" name="kapasitas_gedung" value="{{ $item->kapasitas_gedung }}">
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-harga-{{ $item->id_gedung }}" class="form-label">Harga</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">Rp</span>
                                                                                    <input type="text" class="form-control" id="edit-harga-{{ $item->id_gedung }}" name="harga_gedung" value="{{ $item->harga_gedung }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-alamat-{{ $item->id_gedung }}" class="form-label">Alamat</label>
                                                                            <textarea class="form-control" id="edit-alamat-{{ $item->id_gedung }}" name="alamat_gedung" rows="2">{{ $item->alamat_gedung }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-status-{{ $item->id_gedung }}" class="form-label">Status</label>
                                                                            <select class="form-select" id="edit-status-{{ $item->id_gedung }}" name="status_gedung">
                                                                                <option value="Tersedia" {{ $item->status_gedung == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                                                                                <option value="Tidak Tersedia" {{ $item->status_gedung == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-deskripsi-{{ $item->id_gedung }}" class="form-label">Deskripsi</label>
                                                                            <textarea class="form-control" id="edit-deskripsi-{{ $item->id_gedung }}" name="deskripsi_gedung" rows="3">{{ $item->deskripsi_gedung }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-foto_gedung-{{ $item->id_gedung }}" class="form-label">Gambar</label>
                                                                            <input type="file" class="form-control" id="edit-foto_gedung-{{ $item->id_gedung }}" name="foto_gedung" onchange="previewImage(this, '{{ $item->id_gedung }}')">
                                                                            <div class="mt-2">
                                                                                @if ($item->foto_gedung)
                                                                                <img src="{{ asset('storage/' .$item->foto_gedung) }}" alt="Foto Gedung" style="max-width: 100px; max-height: 100px;">
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
                                                    
                        
                                                    <!-- Modal Detail -->
                                                    <div class="modal fade" id="detailModal-{{ $item->id_gedung }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $item->id_gedung }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="detailModalLabel-{{ $item->id_gedung }}">
                                                                        <i class="bi bi-info-circle me-2"></i>Detail Gedung
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Nama Gedung</h6>
                                                                            <p>{{ $item->nama_gedung }}</p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Tipe Gedung</h6>
                                                                            <p>{{ $item->tipe_gedung }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Kapasitas</h6>
                                                                            <p>{{ $item->kapasitas_gedung }}</p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Harga</h6>
                                                                            <p>Rp {{ number_format($item->harga_gedung, 0, ',', '.') }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Alamat</h6>
                                                                        <p>{{ $item->alamat_gedung }}</p>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Status</h6>
                                                                        <span class="badge {{ trim(strtolower($item->status_gedung)) == 'tersedia' ? 'bg-success' : 'bg-danger' }}">
                                                                            {{ $item->status_gedung }}
                                                                        </span>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Deskripsi</h6>
                                                                        <ul>
                                                                            @foreach (explode("\n", $item->deskripsi_gedung) as $line)
                                                                                <li>{{ $line }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Gambar</h6>
                                                                        @if ($item->foto_gedung)
                                                                            <img src="{{ asset('storage/' .$item->foto_gedung) }}" alt="Foto Gedung" style="max-width: 100px; max-height: 100px;">
                                                                        @endif
                                                                    </div>
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
                                            {{ $gedung->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


            <script>
                function previewImage(input, id_gedung) {
                    var file = input.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('image-preview-' + id).src = e.target.result;
                        document.getElementById('image-preview-' + id).style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            </script>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>





</body>

</html>

<script>
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
</script>
