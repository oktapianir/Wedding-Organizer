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
         
            <div class="container-fluid pt-4 px-4">
                <!-- Form Pertama -->
                <div class="col-sm-12 col-xl-12 mb-4">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Edit Data Vendor</h6>
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
                            <form action="{{ route('vendors.update', $vendor->custom_id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="row mb-3">
                                            <label for="pilih_vendor" class="col-sm-2 col-form-label">Pilihan Vendor</label>
                                            <div class="col-sm-10">
                                                {{-- <input type="text" class="form-control" id="pilih_vendor"> --}}
                                                <select class="form-select" id="VendorSelect"  name="vendor_type" aria-label="Vendor label select example">
                                                    {{-- @foreach($vendors as $vendor)
                                                        <option value="{{ $vendor->id }}">{{ $vendor->vendor }}</option>
                                                    @endforeach --}}
                                                    <option></option>
                                                    <option value="Gedung"{{ $vendor->vendor_type == 'Gedung' ? 'selected' : '' }}>Gedung</option>
                                                    <option value="Dekorasi"{{ $vendor->vendor_type == 'Dekorasi' ? 'selected' : '' }}>Dekorasi</option>
                                                    <option value="Katering"{{ $vendor->vendor_type == 'Katering' ? 'selected' : '' }}>Katering</option>
                                                    <option value="Hiburan"{{ $vendor->vendor_type == 'Hiburan' ? 'selected' : '' }}>Hiburan</option>
                                                    <option value="Dokumentasi"{{ $vendor->vendor_type == 'Dokumentasi' ? 'selected' : '' }}>Dokumentasi</option>
                                                    <option value="Make Up"{{ $vendor->vendor_type == 'Make Up' ? 'selected' : '' }}>Make Up</option>
                                                    <option value="Souvenir"{{ $vendor->vendor_type == 'Souvenir' ? 'selected' : '' }}>Souvenir</option>
                                                    <option value="Undangan"{{ $vendor->vendor_type == 'Undangan' ? 'selected' : '' }}>Undangan</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $vendor->nama }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $vendor->alamat }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $vendor->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_telepon" class="col-sm-2 col-form-label">No.Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $vendor->no_telepon }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="penanggung_jawab" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" value="{{ $vendor->penanggung_jawab }}"> 
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga" class="col-sm-2 col-form-label">Harga Sewa</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $vendor->harga }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="deskripsi" name=deskripsi value="{{ $vendor->deskripsi }}"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="image" >
                                    @if ($vendor->image)
                                        <img src="{{ asset('images/' . $vendor->image) }}" alt="{{ $vendor->image }}" class="img-thumbnail mt-2" width="100">
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3" id="kapasitasRow">
                                <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kapasitas" name="kapasitas"  value="{{ $vendor->kapasitas }}">
                                </div>
                            </div>
                            
                            <div class="row mb-3" id="statusRow">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="statusSelect" name="status" aria-label="Status label select example">
                                        <option></option>
                                        <option value="tersedia" {{ $vendor->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                                        <option value="tidak tersedia" {{ $vendor->status == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3" id="jenisDokumentasiRow">
                                <label for="jenisDokumentasi" class="col-sm-2 col-form-label">Jenis Dokumentasi</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisDokumentasi" name="jenis_dokumentasi" aria-label="Status label select example">
                                        <option></option>
                                        <option value="Foto"{{ $vendor->jenis_dokumentasi == 'Foto' ? 'selected' : '' }}>Foto</option>
                                        <option value="Video"{{ $vendor->jenis_dokumentasi == 'Video' ? 'selected' : '' }}>Video</option>
                                        <option value="Foto & Video"{{ $vendor->jenis_dokumentasi == 'Foto & Video' ? 'selected' : '' }}>Foto & Video</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3" id="jenisUndanganRow">
                                <label for="jenisUndanganRow" class="col-sm-2 col-form-label">Jenis Undangan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisUndangan" name="jenis_undangan" aria-label="Status label select example">
                                        <option></option>
                                        <option value="Cetak" {{ $vendor->jenis_undangan == 'Cetak' ? 'selected' : '' }}> Cetak</option>
                                        <option value=" Digital" {{ $vendor->jenis_undangan == 'Digital' ? 'selected' : '' }}> Digital</option>
                                        <option value=" Cetak & Digital" {{ $vendor->jenis_undangan == 'Cetak & Digital' ? 'selected' : '' }}> Cetak & Digital</option>
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="row mb-3" id="bahanUndanganRow">
                                <label for="bahanUndanganRow" class="col-sm-2 col-form-label">Bahan Undangan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="bahanUndangan" name="bahan_undangan" aria-label="Status label select example">
                                        <option></option>
                                        <option value="Akrilik"{{ $vendor->bahan_undangan == 'Akrilik' ? 'selected' : '' }}>Bahan Akrilik</option>
                                        <option value="Kertas Linen"{{ $vendor->bahan_undangan == 'Kertas Linen' ? 'selected' : '' }}>Bahan Kertas Linen</option>
                                    </select>
                                </div>
                            </div> --}}

                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <div class="m-n2">
                                            <a href="{{route('vendors.create')}}">
                                            <button class="btn btn-outline-primary w-100 m-2" type="submit">Edit Data Vendor</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
        <!-- Content End -->


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

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const vendorSelect = document.getElementById('VendorSelect');
                const kapasitasRow = document.getElementById('kapasitasRow');
                const statusRow = document.getElementById('statusRow');
                const jenisDokumentasiRow = document.getElementById('jenisDokumentasiRow');
                const jenisUndanganRow = document.getElementById('jenisUndanganRow');
            
                vendorSelect.addEventListener('change', function() {
                    const value = this.value;
            
                    // Reset display settings
                    kapasitasRow.style.display = 'none';
                    statusRow.style.display = 'none';
                    jenisDokumentasiRow.style.display = 'none';
                    jenisUndanganRow.style.display = 'none';
                    // bahanUndanganRow.style.display = 'none';

                    if (value === 'Gedung') {
                        kapasitasRow.style.display = 'flex';
                        statusRow.style.display = 'flex';
                    } else if (value === 'Dokumentasi') {
                        jenisDokumentasiRow.style.display = 'flex';
                    } else if (value === 'Undangan') {
                        jenisUndanganRow.style.display = 'flex';
                        // bahanUndanganRow.style.display = 'flex';
                    }
                });
            
                // Trigger change event to set the initial state based on selected value
                vendorSelect.dispatchEvent(new Event('change'));
            });
            </script>
</body>

</html>








