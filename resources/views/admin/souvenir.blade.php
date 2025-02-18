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

                       <!-- form tambah paket souvenir -->
                    <div id="form-paket-souvenir" class="form-container mx-3">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Tambah Data Item Paket Souvenir</h6>
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
                    
                                <form action="{{ route('paketsouvenir.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                    
                                    <div class="mb-3">
                                        <label for="nama_paket_souvenir" class="form-label">Nama Paket Souvenir</label>
                                        <input type="text" class="form-control" id="nama_paket_souvenir" name="nama_paket_souvenir" value="{{ old('nama_paket_souvenir') }}" required>
                                        @error('nama_paket_souvenir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="deskripsi_souvenir" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi_souvenir" name="deskripsi_souvenir">{{ old('deskripsi_souvenir') }}</textarea>
                                        @error('deskripsi_souvenir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="harga_souvenir" class="form-label">Harga Souvenir</label>
                                        <input type="number" class="form-control" id="harga_souvenir" name="harga_souvenir" value="{{ old('harga_souvenir') }}" required>
                                        @error('harga_souvenir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="foto_souvenir" class="form-label">Foto</label>
                                        <input type="file" class="form-control" id="foto_souvenir" name="foto_souvenir[]" multiple>
                                        @error('foto_souvenir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                    
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Tambah Paket Souvenir</button>
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
                                        <h6>Data Paket Souvenir</h6>
                                        <form id="searchSouvenirForm" action="{{ route('paketsouvenir.index') }}" method="GET">
                                            <div class="input-group mb-3">
                                                <input type="text" name="search" class="form-control" placeholder="Cari Nama Souvenir" value="{{ request('search') }}">
                                                <div class="input-group-append">
                                                    <!-- Tombol Reset -->
                                                    <button type="button" id="resetSouvenirButton" class="btn btn-secondary">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                        <!-- Script untuk pengiriman otomatis pada kolom pencarian -->
                                        <script>
                                            // Ambil elemen form dan kolom pencarian
                                            const searchSouvenirForm = document.getElementById('searchSouvenirForm');
                                            const searchSouvenirInput = searchSouvenirForm.querySelector('input[name="search"]');
                                            const resetSouvenirButton = document.getElementById('resetSouvenirButton');
                                            
                                            // Kirim form setiap kali pengguna mengetik pada kolom pencarian
                                            searchSouvenirInput.addEventListener('keyup', () => {
                                                searchSouvenirForm.submit();
                                            });
                                            
                                            // Fungsi untuk reset pencarian
                                            resetSouvenirButton.addEventListener('click', () => {
                                                searchSouvenirInput.value = '';  // Kosongkan input pencarian
                                                searchSouvenirForm.submit();     // Kirim form tanpa parameter pencarian
                                            });
                                        </script>
                                        
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama Souvenir</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($paketSouvenirs as $souvenir)
                                                    <tr>
                                                        <td>{{ $souvenir->id_paket_souvenir }}</td>
                                                        <td>{{ $souvenir->nama_paket_souvenir }}</td>
                                                        <td>{{ $souvenir->harga_souvenir }}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal-{{$souvenir->id_paket_souvenir }}">
                                                                <i class="fa fa-info-circle"></i> Details
                                                            </button>
                                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{$souvenir->id_paket_souvenir}}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                        
                                                    <!-- Modal Detail -->
                                                    <div class="modal fade" id="detailModal-{{ $souvenir->id_paket_souvenir }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $souvenir->id_paket_souvenir }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="detailModalLabel-{{ $souvenir->id_paket_souvenir }}">
                                                                        <i class="bi bi-info-circle me-2"></i>Detail Souvenir
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Nama Souvenir</h6>
                                                                            <p>{{ $souvenir->nama_paket_souvenir }}</p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <h6 class="fw-bold">Harga</h6>
                                                                            <p>Rp {{ number_format($souvenir->harga_souvenir, 0, ',', '.') }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <h6 class="fw-bold">Deskripsi</h6>
                                                                        <p>{{ $souvenir->deskripsi_souvenir }}</p>
                                                                    </div>
                                                    
                                                                    {{-- Menampilkan gambar-gambar secara horizontal jika ada --}}
                                                                    @if($souvenir->foto_souvenir)
                                                                        @php
                                                                            $fotoSouvenir = json_decode($souvenir->foto_souvenir, true); // Mengambil array foto dari JSON
                                                                        @endphp
                                                                        @if(is_array($fotoSouvenir) && !empty($fotoSouvenir))
                                                                            <div class="mb-3">
                                                                                <h6 class="fw-bold">Gambar</h6>
                                                                                <div class="d-flex flex-wrap">
                                                                                    @foreach($fotoSouvenir as $foto)
                                                                                        <div class="me-3 mb-3" style="max-width: 150px;">
                                                                                            <img src="{{ asset('storage/' . $foto) }}" alt="Foto Souvenir" class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 150px;">
                                                                                        </div>
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
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                        
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="editModal-{{ $souvenir->id_paket_souvenir }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $souvenir->id_paket_souvenir }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content border-0 shadow">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="editModalLabel-{{ $souvenir->id_paket_souvenir }}">
                                                                        <i class="bi bi-gift me-2"></i>Edit Souvenir
                                                                    </h5>
                                                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form action="{{ route('paketsouvenir.update', $souvenir->id_paket_souvenir) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="nama_paket_souvenir" class="form-label">Nama Souvenir</label>
                                                                                <input type="text" class="form-control" id="nama_paket_souvenir" name="nama_paket_souvenir" value="{{ $souvenir->nama_paket_souvenir }}" required>
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="harga_souvenir" class="form-label">Harga</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">Rp</span>
                                                                                    <input type="text" class="form-control" id="harga_souvenir" name="harga_souvenir" value="{{ $souvenir->harga_souvenir }}" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="deskripsi_souvenir" class="form-label">Deskripsi</label>
                                                                            <textarea class="form-control" id="deskripsi_souvenir" name="deskripsi_souvenir">{{ $souvenir->deskripsi_souvenir }}</textarea>
                                                                        </div>   
                                                                        <div class="mb-3">
                                                                            <label for="foto_souvenir" class="form-label">Tambah Foto Baru</label>
                                                                            <input type="file" class="form-control" id="foto_souvenir" name="foto_souvenir[]" accept="image/*" multiple>
                                                                            <small class="text-muted">Unggah satu atau lebih foto baru jika ingin menambahkan.</small>
                                                                        </div>
                                                                        @if($souvenir->foto_souvenir)
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Foto Saat Ini</label>
                                                                            <div class="mb-2">
                                                                                @php
                                                                                    $fotoSouvenir = json_decode($souvenir->foto_souvenir, true) ?? [];
                                                                                @endphp
                                                                                @foreach($fotoSouvenir as $foto)
                                                                                    <img src="{{ asset('storage/' . $foto) }}" alt="Foto Souvenir" class="img-fluid rounded mb-2" style="max-height: 150px;">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" name="delete_foto[]" value="{{ $foto }}" id="delete_{{ $loop->index }}">
                                                                                        <label class="form-check-label" for="delete_{{ $loop->index }}">Hapus foto ini</label>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        @endif
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
                                            {{ $paketSouvenirs->links('pagination::bootstrap-4') }}
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