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

                       <!-- form tambah bridalstyle -->
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <!-- Tab Navigation -->
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-bridal-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-bridal" type="button" role="tab" aria-controls="pills-bridal"
                                        aria-selected="true">Bridal</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-style-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-style" type="button" role="tab"
                                        aria-controls="pills-style" aria-selected="false">Style</button>
                                </li>
                            </ul>
                    
                            <!-- Tab Content -->
                            <div class="tab-content" id="pills-tabContent">
                                <!-- Form Bridal -->
                                <div class="tab-pane fade show active" id="pills-bridal" role="tabpanel" aria-labelledby="pills-bridal-tab">
                                    <div class="form-container mx-3">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-primary text-white">
                                                <h6 class="mb-0">Tambah Data Item Vendor Bridalstyle</h6>
                                            </div>
                                            <div class="card-body">
                                                @if(session('success_bridal'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <i class="fa fa-exclamation-circle me-2"></i>{{ session('success_bridal') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                    
                                                <form action="{{ route('bridalstyle.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                    
                                                    <div class="mb-3">
                                                        <label for="nama_paket_bridalstyle" class="form-label">Nama Paket Bridalstyle</label>
                                                        <input type="text" class="form-control" id="nama_paket_bridalstyle" name="nama_paket_bridalstyle" value="{{ old('nama_paket_bridalstyle') }}" required>
                                                        @error('nama_paket_bridalstyle')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                    
                                                    <div class="mb-3">
                                                        <label for="deskripsi_paket" class="form-label">Deskripsi Paket</label>
                                                        <textarea class="form-control" id="deskripsi_paket" name="deskripsi_paket">{{ old('deskripsi_paket') }}</textarea>
                                                        @error('deskripsi_paket')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                    
                                                    <div class="mb-3">
                                                        <label for="harga_paket" class="form-label">Harga Paket</label>
                                                        <input type="number" class="form-control" id="harga_paket" name="harga_paket" value="{{ old('harga_paket') }}" required>
                                                        @error('harga_paket')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                    
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary" type="submit">Tambah Item Bridalstyle</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                    
                                        <!-- Tabel Bridalstyle -->
                                        <div class="bg-light rounded h-100 p-4 mt-4">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h6>Data Item Bridalstyle</h6>
                                                <form id="searchBridalStyleForm" action="{{ route('bridalstyle.index') }}" method="GET">
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="search" class="form-control" placeholder="Cari Nama Paket BridalStyle" value="{{ request('search') }}">
                                                        <div class="input-group-append">
                                                            <!-- Tombol Reset -->
                                                            <button type="button" id="resetBridalStyleButton" class="btn btn-secondary">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                                <!-- Script untuk pengiriman otomatis pada kolom pencarian -->
                                                <script>
                                                    // Ambil elemen form dan kolom pencarian
                                                    const searchBridalStyleForm = document.getElementById('searchBridalStyleForm');
                                                    const searchBridalStyleInput = searchBridalStyleForm.querySelector('input[name="search"]');
                                                    const resetBridalStyleButton = document.getElementById('resetBridalStyleButton');
                                                    
                                                    // Kirim form setiap kali pengguna mengetik pada kolom pencarian
                                                    searchBridalStyleInput.addEventListener('keyup', () => {
                                                        searchBridalStyleForm.submit();
                                                    });
                                                    
                                                    // Fungsi untuk reset pencarian
                                                    resetBridalStyleButton.addEventListener('click', () => {
                                                        searchBridalStyleInput.value = '';  // Kosongkan input pencarian
                                                        searchBridalStyleForm.submit();     // Kirim form tanpa parameter pencarian
                                                    });
                                                </script>
                                                
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Nama Paket</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($bridalstyles as $bridalstyle)
                                                            <tr>
                                                                <td>{{ $bridalstyle->id_bridalstyle }}</td>
                                                                <td>{{ $bridalstyle->nama_paket_bridalstyle }}</td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{ $bridalstyle->id_bridalstyle }}">
                                                                        <i class="fa fa-info-circle"></i> Details
                                                                    </button>
                                                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{ $bridalstyle->id_bridalstyle }}">
                                                                        <i class="fa fa-edit"></i> Edit
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal Detail -->
                                                            <div class="modal fade" id="detailModal-{{ $bridalstyle->id_bridalstyle }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $bridalstyle->id_bridalstyle }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content border-0 shadow">
                                                                        <div class="modal-header bg-primary text-white">
                                                                            <h5 class="modal-title" id="detailModalLabel-{{ $bridalstyle->id_bridalstyle }}">
                                                                                <i class="bi bi-info-circle me-2"></i>Detail Bridalstyle
                                                                            </h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body p-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6 mb-3">
                                                                                    <h6 class="fw-bold">Nama Paket</h6>
                                                                                    <p>{{ $bridalstyle->nama_paket_bridalstyle }}</p>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <h6 class="fw-bold">Deskripsi</h6>
                                                                                    <p>{{ $bridalstyle->deskripsi_paket }}</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6 mb-3">
                                                                                    <h6 class="fw-bold">Harga</h6>
                                                                                    <p>Rp {{ number_format($bridalstyle->harga_paket, 0, ',', '.') }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <!-- Modal Edit -->
                                                            <div class="modal fade" id="editModal-{{ $bridalstyle->id_bridalstyle }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $bridalstyle->id_bridalstyle }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content border-0 shadow">
                                                                        <div class="modal-header bg-primary text-white">
                                                                            <h5 class="modal-title" id="editModalLabel-{{ $bridalstyle->id_bridalstyle }}">
                                                                                <i class="bi bi-heart me-2"></i>Edit Bridalstyle
                                                                            </h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body p-4">
                                                                            <form action="{{ route('bridalstyle.update', $bridalstyle->id_bridalstyle) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="row">
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label for="edit-nama_paket_bridalstyle-{{ $bridalstyle->id_bridalstyle }}" class="form-label">Nama Paket</label>
                                                                                        <input type="text" class="form-control" id="edit-nama_paket_bridalstyle-{{ $bridalstyle->id_bridalstyle }}" name="nama_paket_bridalstyle" value="{{ $bridalstyle->nama_paket_bridalstyle }}" required>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label for="edit-harga_paket-{{ $bridalstyle->id_bridalstyle }}" class="form-label">Harga</label>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-text">Rp</span>
                                                                                            <input type="number" class="form-control" id="edit-harga_paket-{{ $bridalstyle->id_bridalstyle }}" name="harga_paket" value="{{ $bridalstyle->harga_paket }}" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="edit-deskripsi_paket-{{ $bridalstyle->id_bridalstyle }}" class="form-label">Deskripsi</label>
                                                                                    <textarea class="form-control" id="edit-deskripsi_paket-{{ $bridalstyle->id_bridalstyle }}" name="deskripsi_paket" rows="3" required>{{ $bridalstyle->deskripsi_paket }}</textarea>
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
                                             <!-- Pagination -->
                                             <div class="d-flex justify-content-end mt-4">
                                                {{ $bridalstyles->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- Form Style -->
                                <div class="tab-pane fade" id="pills-style" role="tabpanel" aria-labelledby="pills-style-tab">
                                    <div class="form-container mx-3">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-primary text-white">
                                                <h6 class="mb-0">Tambah Data Item Style</h6>
                                            </div>
                                            <div class="card-body">
                                                @if(session('success_style'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <i class="fa fa-exclamation-circle me-2"></i>{{ session('success_style') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                                
                                                <form action="{{ route('bridalstyle.storeStyle') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nama_style" class="form-label">Nama Style</label>
                                                        <input type="text" class="form-control" id="nama_style" name="nama_style" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="foto_styles" class="form-label">Upload Foto</label>
                                                        <input type="file" class="form-control" id="foto_styles" name="foto_styles[]" multiple required>
                                                        <small class="form-text text-muted">Pilih beberapa foto (JPEG, PNG, JPG, GIF) dengan ukuran maksimal 2MB.</small>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>
                                                
                                            </div>
                                        </div>
                                         <!-- Tabel Style -->
                                         <div class="bg-light rounded h-100 p-4 mt-4">   
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h6>Data Item Style</h6>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Nama Style</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($styles as $style)
                                                            <tr>
                                                                <td>{{ $style->id_style }}</td>
                                                                <td>{{ $style->nama_style }}</td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{ $style->id_style }}">
                                                                        <i class="fa fa-info-circle"></i> Details
                                                                    </button>
                                                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{ $style->id_style }}">
                                                                        <i class="fa fa-edit"></i> Edit
                                                                    </button>
                                                                </td>
                                                            </tr>
                                
                                                            <!-- Modal Detail -->
                                                            <div class="modal fade" id="detailModal-{{ $style->id_style }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $style->id_style }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content border-0 shadow">
                                                                        <div class="modal-header bg-primary text-white">
                                                                            <h5 class="modal-title" id="detailModalLabel-{{ $style->id_style }}">
                                                                                <i class="bi bi-info-circle me-2"></i>Detail Style
                                                                            </h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body p-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6 mb-3">
                                                                                    <h6 class="fw-bold">Nama Style</h6>
                                                                                    <p>{{ $style->nama_style }}</p>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <h6 class="fw-bold">Foto Style</h6>
                                                                                    @if($style->foto_styles)
                                                                                        @php
                                                                                            $fileNames = json_decode($style->foto_styles, true);
                                                                                        @endphp
                                                                                        @foreach($fileNames as $fileName)
                                                                                            <img src="{{ asset('storage/styles/' . $fileName) }}" class="img-fluid mb-2" alt="Foto Style" style="max-width: 100px; max-height: 100px;">
                                                                                        @endforeach
                                                                                    @else
                                                                                        <p>Tidak ada foto tersedia</p>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal Edit -->
                                                            <div class="modal fade" id="editModal-{{ $style->id_style }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $style->id_style }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content border-0 shadow">
                                                                        <div class="modal-header bg-primary text-white">
                                                                            <h5 class="modal-title" id="editModalLabel-{{ $style->id_style }}">
                                                                                <i class="bi bi-heart me-2"></i>Edit Style
                                                                            </h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body p-4">
                                                                            <form action="{{ route('bridalstyle.updateStyle', $style->id_style) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="mb-3">
                                                                                    <label for="edit-nama_style-{{ $style->id_style }}" class="form-label">Nama Style</label>
                                                                                    <input type="text" class="form-control" id="edit-nama_style-{{ $style->id_style }}" name="nama_style" value="{{ $style->nama_style }}" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <h6 class="fw-bold">Foto Style</h6>
                                                                                    @if($style->foto_styles)
                                                                                        @php
                                                                                            $fileNames = json_decode($style->foto_styles, true);
                                                                                        @endphp
                                                                                        @foreach($fileNames as $fileName)
                                                                                            <img src="{{ asset('storage/styles/' . $fileName) }}" class="img-fluid mb-2" alt="Foto Style" style="max-width: 100px; max-height: 100px;">
                                                                                        @endforeach
                                                                                    @endif
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="edit-foto_styles-{{ $style->id_style }}" class="form-label">Upload Foto Baru</label>
                                                                                    <input type="file" class="form-control" id="edit-foto_styles-{{ $style->id_style }}" name="foto_styles[]" multiple>
                                                                                    <small class="form-text text-muted">Pilih beberapa foto (JPEG, PNG, JPG, GIF) dengan ukuran maksimal 2MB.</small>
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
                                            <!-- Pagination -->
                                            <div class="d-flex justify-content-end mt-4">
                                                {{ $styles->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                    
                                        {{-- <!-- Tabel Style -->
                                        <div class="bg-light rounded h-100 p-4 mt-4">   
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h6>Data Item Style</h6>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Nama Style</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($styles as $style)
                                                            <tr>
                                                                <td>{{ $style->id_style }}</td>
                                                                <td>{{ $style->nama_style }}</td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{ $style->id_style }}">
                                                                        <i class="fa fa-info-circle"></i> Details
                                                                    </button>
                                                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{ $style->id_style }}">
                                                                        <i class="fa fa-edit"></i> Edit
                                                                    </button>
                                                                </td>
                                                            </tr>
                                
                                                            <!-- Modal Detail -->
                                                            <div class="modal fade" id="detailModal-{{ $style->id_style }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $style->id_style }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content border-0 shadow">
                                                                        <div class="modal-header bg-primary text-white">
                                                                            <h5 class="modal-title" id="detailModalLabel-{{ $style->id_style }}">
                                                                                <i class="bi bi-info-circle me-2"></i>Detail Style
                                                                            </h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body p-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6 mb-3">
                                                                                    <h6 class="fw-bold">Nama Style</h6>
                                                                                    <p>{{ $style->nama_style }}</p>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <h6 class="fw-bold">Foto Style</h6>
                                                                                    @if($style->foto_styles)
                                                                                        @php
                                                                                            $fileNames = json_decode($style->foto_styles, true);
                                                                                        @endphp
                                                                                        @foreach($fileNames as $fileName)
                                                                                            <img src="{{ asset('storage/styles/' . $fileName) }}" class="img-fluid mb-2" alt="Foto Style" style="max-width: 100px; max-height: 100px;">
                                                                                        @endforeach
                                                                                    @else
                                                                                        <p>Tidak ada foto tersedia</p>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal Edit -->
                                                            <div class="modal fade" id="editModal-{{ $style->id_style }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $style->id_style }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content border-0 shadow">
                                                                        <div class="modal-header bg-primary text-white">
                                                                            <h5 class="modal-title" id="editModalLabel-{{ $style->id_style }}">
                                                                                <i class="bi bi-heart me-2"></i>Edit Style
                                                                            </h5>
                                                                            <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body p-4">
                                                                            <form action="{{ route('bridalstyle.updateStyle', $style->id_style) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="mb-3">
                                                                                    <label for="edit-nama_style-{{ $style->id_style }}" class="form-label">Nama Style</label>
                                                                                    <input type="text" class="form-control" id="edit-nama_style-{{ $style->id_style }}" name="nama_style" value="{{ $style->nama_style }}" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <h6 class="fw-bold">Foto Style</h6>
                                                                                    @if($style->foto_styles)
                                                                                        @php
                                                                                            $fileNames = json_decode($style->foto_styles, true);
                                                                                        @endphp
                                                                                        @foreach($fileNames as $fileName)
                                                                                            <img src="{{ asset('storage/styles/' . $fileName) }}" class="img-fluid mb-2" alt="Foto Style" style="max-width: 100px; max-height: 100px;">
                                                                                        @endforeach
                                                                                    @endif
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="edit-foto_styles-{{ $style->id_style }}" class="form-label">Upload Foto Baru</label>
                                                                                    <input type="file" class="form-control" id="edit-foto_styles-{{ $style->id_style }}" name="foto_styles[]" multiple>
                                                                                    <small class="form-text text-muted">Pilih beberapa foto (JPEG, PNG, JPG, GIF) dengan ukuran maksimal 2MB.</small>
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
                                            <!-- Pagination -->
                                            <div class="d-flex justify-content-end mt-4">
                                                {{ $styles->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                        
                        <script>
                            function previewImage(input, id) {
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