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

                       <!-- form tambah undangan -->
                        {{-- <div id="form-undangan" class="form-container">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Tambah Data Item Vendor Undangan</h6>
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
                        
                                <form action="{{ route('undangan.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                        
                                    <div class="row mb-3">
                                        <label for="bahan_undanganSelect" class="col-sm-2 col-form-label"> Bahan Undangan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="bahan_undanganSelect" name="bahan_undangan" aria-label="bahan_undangan" required>
                                                <option value="">Pilih Bahan Undangan</option>
                                                <option value="Linen" {{ old('bahan_undangan') == 'Linen' ? 'selected' : '' }}>Linen</option>
                                                <option value="Kertas Jasmine" {{ old('bahan_undangan') == 'Kertas Jasmine' ? 'selected' : '' }}>Kertas Jasmine</option>
                                                <option value="Kertas Matt" {{ old('bahan_undangan') == 'Kertas Matt' ? 'selected' : '' }}>Kertas Matt</option>
                                                <option value="Art Paper" {{ old('bahan_undangan') == 'Art Paper' ? 'selected' : '' }}>Art Paper</option>
                                                <option value="Art Carton" {{ old('bahan_undangan') == 'Art Carton' ? 'selected' : '' }}>Art Carton</option>
                                                <option value="Aster" {{ old('bahan_undangan') == 'Aster' ? 'selected' : '' }}>Aster</option>
                                                <option value="Concorde" {{ old('bahan_undangan') == 'Concorde' ? 'selected' : '' }}>Concorde</option>
                                                <option value="Samson Kraft" {{ old('bahan_undangan') == 'Samson Kraft' ? 'selected' : '' }}>Samson Kraft</option>
                                                <option value="Ivory" {{ old('bahan_undangan') == 'Ivory' ? 'selected' : '' }}>Ivory</option>
                                                <option value="Akasia" {{ old('bahan_undangan') == 'Akasia' ? 'selected' : '' }}>Akasia</option>
                                            </select>
                                            @error('bahan_undangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="deskripsi_undangan" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="deskripsi_undangan" name="deskripsi_undangan">{{ old('deskripsi_undangan') }}</textarea>
                                            @error('deskripsi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label for="harga_undangan" class="col-sm-2 col-form-label">Harga Sewa</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="harga_undangan" name="harga_undangan" value="{{ old('harga_undangan') }}">
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="foto_undangan" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="foto_undangan" name="foto_undangan">
                                            @error('foto_undangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="col-sm-12 col-xl-12">
                                        <div class="bg-light rounded h-100 p-4">
                                            <div class="m-n2">
                                                <button class="btn btn-outline-primary w-100 m-2" type="submit">Tambah Item Undangan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div id="form-undangan" class="form-container mx-3">
                            <div class="card shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h6 class="mb-0">Tambah Data Item Vendor Undangan</h6>
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
                        
                                    <form action="{{ route('undangan.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="mb-3">
                                            <label for="nama_undangan" class="form-label">Nama Undangan</label>
                                            <input type="text" class="form-control" id="nama_undangan" name="nama_undangan" value="{{ old('nama_undangan') }}" required>
                                            @error('nama_undangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="bahan_undanganSelect" class="form-label">Bahan Undangan</label>
                                            <select class="form-select" id="bahan_undanganSelect" name="bahan_undangan" aria-label="bahan_undangan" required>
                                                <option value="">Pilih Bahan Undangan</option>
                                                <option value="Linen" {{ old('bahan_undangan') == 'Linen' ? 'selected' : '' }}>Linen</option>
                                                <option value="Kertas Jasmine" {{ old('bahan_undangan') == 'Kertas Jasmine' ? 'selected' : '' }}>Kertas Jasmine</option>
                                                <option value="Kertas Matt" {{ old('bahan_undangan') == 'Kertas Matt' ? 'selected' : '' }}>Kertas Matt</option>
                                                <option value="Art Paper" {{ old('bahan_undangan') == 'Art Paper' ? 'selected' : '' }}>Art Paper</option>
                                                <option value="Art Carton" {{ old('bahan_undangan') == 'Art Carton' ? 'selected' : '' }}>Art Carton</option>
                                                <option value="Aster" {{ old('bahan_undangan') == 'Aster' ? 'selected' : '' }}>Aster</option>
                                                <option value="Concorde" {{ old('bahan_undangan') == 'Concorde' ? 'selected' : '' }}>Concorde</option>
                                                <option value="Samson Kraft" {{ old('bahan_undangan') == 'Samson Kraft' ? 'selected' : '' }}>Samson Kraft</option>
                                                <option value="Ivory" {{ old('bahan_undangan') == 'Ivory' ? 'selected' : '' }}>Ivory</option>
                                                <option value="Akasia" {{ old('bahan_undangan') == 'Akasia' ? 'selected' : '' }}>Akasia</option>
                                            </select>
                                            @error('bahan_undangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                        
                                        <div class="mb-3">
                                            <label for="deskripsi_undangan" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi_undangan" name="deskripsi_undangan">{{ old('deskripsi_undangan') }}</textarea>
                                            @error('deskripsi_undangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="harga_undangan" class="form-label">Harga Sewa</label>
                                            <input type="number" class="form-control" id="harga_undangan" name="harga_undangan" value="{{ old('harga_undangan') }}">
                                            @error('harga_undangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                        
                                        <div class="mb-3">
                                            <label for="foto_undangan" class="form-label">Foto</label>
                                            <input type="file" class="form-control" id="foto_undangan" name="foto_undangan[]" multiple>
                                            @error('foto_undangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                        
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">Tambah Item Undangan</button>
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
                                        <h6>Data Item Undangan</h6>
                                        <form id="searchUndanganForm" action="{{ route('undangan.index') }}" method="GET">
                                            <div class="input-group mb-3">
                                                <input type="text" name="search" class="form-control" placeholder="Cari Nama Undangan" value="{{ request('search') }}">
                                                <div class="input-group-append">
                                                    <!-- Tombol Reset -->
                                                    <button type="button" id="resetButton" class="btn btn-secondary">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                        <!-- Script untuk pengiriman otomatis pada kolom pencarian -->
                                        <script>
                                            // Ambil elemen form dan kolom pencarian
                                            const searchForm = document.getElementById('searchUndanganForm');
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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama Undangan</th>
                                                    <th scope="col">Bahan Undangan</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($undangans as $undangan)
                                                    <tr>
                                                        <td>{{ $undangan->id_undangan }}</td>
                                                        <td>{{ $undangan->nama_undangan }}</td>
                                                        <td>{{ $undangan->bahan_undangan }}</td>
                                                        <td>{{ $undangan->harga_undangan }}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{$undangan->id_undangan }}">
                                                                <i class="fa fa-info-circle"></i> Details
                                                            </button>
                                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{$undangan->id_undangan}}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    
                                                    <!-- Modal Detail -->
                                                    {{-- <div class="modal fade" id="detailModal-{{ $undangan->id_undangan }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $undangan->id_undangan }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="detailModalLabel-{{ $undangan->id_undangan }}">Detail Undangan</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p><strong>ID:</strong> {{ $undangan->id_undangan }}</p>
                                                                    <p><strong>Bahan Undangan:</strong> {{ $undangan->bahan_undangan }}</p>
                                                                    <p><strong>Harga:</strong> {{ $undangan->harga_undangan }}</p>
                                                                    <p><strong>Deskripsi:</strong> {{ $undangan->deskripsi_undangan }}</p>
                                                                    @if($undangan->foto_undangan)
                                                                        <p><strong>Gambar:</strong></p>
                                                                        <img src="{{ asset('storage/images/' . $undangan->foto_undangan) }}" alt="Foto Undangan" style="max-width: 100%; max-height: 300px;">
                                                                    @else
                                                                        <p>No Image</p>
                                                                    @endif
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>s
                                                        </div>
                                                    </div> --}}
                                                    <div class="modal fade" id="detailModal-{{ $undangan->id_undangan }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $undangan->id_undangan }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="detailModalLabel-{{ $undangan->id_undangan }}">
                                                                        <i class="bi bi-info-circle me-2"></i>Detail Undangan
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">ID Undangan</h6>
                                                                            <p>{{ $undangan->id_undangan }}</p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Bahan Undangan</h6>
                                                                            <p>{{ $undangan->bahan_undangan }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Harga</h6>
                                                                            <p>Rp {{ number_format($undangan->harga_undangan, 0, ',', '.') }}</p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Deskripsi</h6>
                                                                            <p>{{ $undangan->deskripsi_undangan }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Gambar</h6>
                                                                        @if($undangan->fotoUndangan && $undangan->fotoUndangan->count() > 0)
                                                                        @foreach($undangan->fotoUndangan as $foto)
                                                                            <img src="{{ asset('storage/undangan/' . str_replace('undangan/', '', $foto->foto_path)) }}" alt="Foto Undangan" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
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
                                                    {{-- <div class="modal fade" id="editModal-{{ $undangan->id_undangan }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $undangan->id_undangan }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel-{{ $undangan->id_undangan }}">Edit Undangan</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{ route('undangan.update', $undangan->id_undangan) }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label for="bahan_undangan" class="form-label">Bahan Undangan</label>
                                                                            <select class="form-select" id="bahan_undangan" name="bahan_undangan" required>
                                                                                <option value="Kain" {{ $undangan->bahan_undangan == 'Kain' ? 'selected' : '' }}>Kain</option>
                                                                                <option value="Kertas" {{ $undangan->bahan_undangan == 'Kertas' ? 'selected' : '' }}>Kertas</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="deskripsi_undangan" class="form-label">Deskripsi</label>
                                                                            <textarea class="form-control" id="deskripsi_undangan" name="deskripsi_undangan" required>{{ $undangan->deskripsi_undangan }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="harga_undangan" class="form-label">Harga Sewa</label>
                                                                            <input type="number" class="form-control" id="harga_undangan" name="harga_undangan" value="{{ $undangan->harga_undangan }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="foto_undangan" class="form-label">Foto</label>
                                                                            <input type="file" class="form-control" id="foto_undangan" name="foto_undangan">
                                                                        </div>
                                                                        @if($undangan->foto_undangan)
                                                                            <div class="mb-3">
                                                                                <img src="{{ asset('storage/images/' . $undangan->foto_undangan) }}" alt="Foto Undangan" style="max-width: 100px; max-height: 100px;">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="modal fade" id="editModal-{{ $undangan->id_undangan }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $undangan->id_undangan }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="editModalLabel-{{ $undangan->id_undangan }}">
                                                                        <i class="bi bi-card-text me-2"></i>Edit Undangan
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form id="updateForm-{{ $undangan->id_undangan }}" action="{{ route('undangan.update', $undangan->id_undangan) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-bahan-{{ $undangan->id_undangan }}" class="form-label">Bahan Undangan</label>
                                                                                <select class="form-select" id="edit-bahan-{{ $undangan->id_undangan }}" name="bahan_undangan">
                                                                                    <option value="Linen" {{ $undangan->bahan_undangan == 'Linen' ? 'selected' : '' }}>Linen</option>
                                                                                    <option value="Kertas Jasmine" {{ $undangan->bahan_undangan == 'Kertas Jasmine' ? 'selected' : '' }}>Kertas Jasmine</option>
                                                                                    <option value="Kertas Matt" {{ $undangan->bahan_undangan == 'Kertas Matt' ? 'selected' : '' }}>Kertas Matt</option>
                                                                                    <option value="Art Paper" {{ $undangan->bahan_undangan == 'Art Paper' ? 'selected' : '' }}>Art Paper</option>
                                                                                    <option value="Art Carton" {{ $undangan->bahan_undangan == 'Art Carton' ? 'selected' : '' }}>Art Carton</option>
                                                                                    <option value="Aster" {{ $undangan->bahan_undangan == 'Aster' ? 'selected' : '' }}>Aster</option>
                                                                                    <option value="Concorde" {{ $undangan->bahan_undangan == 'Concorde' ? 'selected' : '' }}>Concorde</option>
                                                                                    <option value="Samson Kraft" {{ $undangan->bahan_undangan == 'Samson Kraft' ? 'selected' : '' }}>Samson Kraft</option>
                                                                                    <option value="Ivory" {{ $undangan->bahan_undangan == 'Ivory' ? 'selected' : '' }}>Ivory</option>
                                                                                    <option value="Akasia" {{ $undangan->bahan_undangan == 'Akasia' ? 'selected' : '' }}>Akasia</option>
                                                                                    {{-- <option value="Kain" {{ $undangan->bahan_undangan == 'Kain' ? 'selected' : '' }}>Kain</option>
                                                                                    <option value="Kertas" {{ $undangan->bahan_undangan == 'Kertas' ? 'selected' : '' }}>Kertas</option> --}}
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="edit-harga-{{ $undangan->id_undangan }}" class="form-label">Harga Sewa</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">Rp</span>
                                                                                    <input type="number" class="form-control" id="edit-harga-{{ $undangan->id_undangan }}" name="harga_undangan" value="{{ $undangan->harga_undangan }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-deskripsi-{{ $undangan->id_undangan }}" class="form-label">Deskripsi</label>
                                                                            <textarea class="form-control" id="edit-deskripsi-{{ $undangan->id_undangan }}" name="deskripsi_undangan" rows="3">{{ $undangan->deskripsi_undangan }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="edit-foto-{{ $undangan->id_undangan }}" class="form-label">Foto</label>
                                                                            <input type="file" class="form-control" id="edit-foto-{{ $undangan->id_undangan }}" name="foto_undangan" onchange="previewImage(this, '{{ $undangan->id_undangan }}')">
                                                                            <div class="mt-2">
                                                                                @if($undangan->foto_undangan)
                                                                                <img src="{{ asset('storage/' . $undangan->foto_undangan) }}" alt="Foto Undangan" style="max-width: 100px; max-height: 100px;">
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
                                            {{ $undangans->links('pagination::bootstrap-4') }}
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