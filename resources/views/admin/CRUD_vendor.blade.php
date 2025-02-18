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


            <!-- Sale & Revenue Start -->
            {{-- <div class="container-fluid pt-4 px-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah Data Vendor</h6>
                        <form>
                            <div class="row mb-3">
                                <select class="form-select" id="VendorSelect"
                                aria-label="Vendor label select example">
                                <option selected>Pilih Vendor</option>
                                <option value="Gedung">Gedung</option>
                                <option value="Dekorasi">Dekorasi</option>
                                <option value="Katering">Katering</option>
                                <option value="Hiburan">Hiburan</option>
                                <option value="Dokumentasi">Dokumentasi</option>
                                <option value="Make Up">Make Up </option>
                                <option value="Souvenir">Souvenir</option>
                                <option value="Undangan">Undangan</option>
                            </select>
                            <div class="row mb-3">
                                <label for="namavendor" class="col-sm-2 col-form-label">Nama vendor</label>
                                <div class="col-sm-10">
                                    <input type="namavendor" class="form-control" id="namavendor">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamatvendor" class="col-sm-2 col-form-label">Alamat Vendor</label>
                                <div class="col-sm-10">
                                    <input type="alamatvendor" class="form-control" id="alamatvendor">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            --}}
    {{-- 
                <div class="container-fluid pt-4 px-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Data Vendor</h6>
                            <form>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <select class="form-select" id="VendorSelect" aria-label="Vendor label select example">
                                            <option selected>Pilih Vendor</option>
                                            <option value="Gedung">Gedung</option>
                                            <option value="Dekorasi">Dekorasi</option>
                                            <option value="Katering">Katering</option>
                                            <option value="Hiburan">Hiburan</option>
                                            <option value="Dokumentasi">Dokumentasi</option>
                                            <option value="Make Up">Make Up</option>
                                            <option value="Souvenir">Souvenir</option>
                                            <option value="Undangan">Undangan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputnamavendor" class="col-sm-2 col-form-label">Nama Vendor</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputnamavendor">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamatvendor" class="col-sm-2 col-form-label">Alamat Vendor</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamatvendor">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="hargasewa" class="col-sm-2 col-form-label">Harga Sewa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="hargasewa">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kapasitas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah Data Vendor</h6>
                        <form>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <select class="form-select" id="VendorSelect" aria-label="Vendor label select example">
                                        <option selected>Pilih Vendor</option>
                                        <option value="Gedung">Gedung</option>
                                        <option value="Dekorasi">Dekorasi</option>
                                        <option value="Katering">Katering</option>
                                        <option value="Hiburan">Hiburan</option>
                                        <option value="Dokumentasi">Dokumentasi</option>
                                        <option value="Make Up">Make Up</option>
                                        <option value="Souvenir">Souvenir</option>
                                        <option value="Undangan">Undangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputnamavendor" class="col-sm-2 col-form-label">Nama Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputnamavendor">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamatvendor" class="col-sm-2 col-form-label">Alamat Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamatvendor">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hargasewa" class="col-sm-2 col-form-label">Harga Sewa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hargasewa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kapasitas">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
         
            <div class="container-fluid pt-4 px-4">
                <!-- Form Pertama -->
                <div class="col-sm-12 col-xl-12 mb-4">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah Data Vendor</h6>
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                            {{-- @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                        <form action="{{ route('vendors.tambah') }}" method="POST"> --}}
                        {{-- {{-- @csrf --}}
                        <form action="{{url('vendor.tambah')}}" method="post">
                              @csrf 
                              <div class="row mb-3">
                                <div class="col-12">
                                    <select class="form-select" id="VendorSelect" aria-label="Vendor label select example">
                                        <option selected>Pilih Vendor</option>
                                        @foreach($vendors as $vendor)
                                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <div class="col-12">
                                    <select class="form-select" id="VendorSelect" aria-label="Vendor label select example">
                                        <option selected>Pilih Vendor</option>
                                        <option value="Gedung">Gedung</option>
                                        <option value="Dekorasi">Dekorasi</option>
                                        <option value="Katering">Katering</option>
                                        <option value="Hiburan">Hiburan</option>
                                        <option value="Dokumentasi">Dokumentasi</option>
                                        <option value="Make Up">Make Up</option>
                                        <option value="Souvenir">Souvenir</option>
                                        <option value="Undangan">Undangan</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga_sewa" class="col-sm-2 col-form-label">Harga Sewa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga_sewa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kapasitas">
                                </div>
                            </div>
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <div class="m-n2">
                                            <button class="btn btn-outline-primary w-100 m-2" type="button">Tambah Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Vendor </h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">id_vendor</th>
                                        <th scope="col">Nama vendor</th>
                                        <th scope="col">Kapasitas</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Kontak</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status vendor</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                        <td>Member</td>
                                        <td>Tersedia</td>
                                        <td><button type="button" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                        <td>Member</td>
                                        <td>Tersedia</td>
                                        <td><button type="button" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                        <td>Member</td>
                                        <td>Tersedia</td>
                                        <td><button type="button" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
</body>

</html>








