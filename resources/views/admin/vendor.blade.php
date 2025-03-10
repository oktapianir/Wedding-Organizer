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
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                            {{-- @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                        <form action="{{ route('vendors.tambah') }}" method="POST"> --}}
                        {{-- {{-- @csrf --}}
                        <form action="{{ route('vendors.store') }}" method="post" enctype="multipart/form-data">
                              @csrf 
                              <div class="row mb-3">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <label for="pilih_vendor" class="col-sm-2 col-form-label">Pilih Vendor</label>
                                        <div class="col-sm-10">
                                            {{-- <input type="text" class="form-control" id="pilih_vendor"> --}}
                                            <select class="form-select" id="VendorSelect"  name="vendor_type" aria-label="Vendor label select example">
                                                {{-- @foreach($vendors as $vendor)
                                                    <option value="{{ $vendor->id }}">{{ $vendor->vendor }}</option>
                                                @endforeach --}}
                                                <option></option>
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
                                </div>
                            </div>

                            
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_telepon" class="col-sm-2 col-form-label">No.Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="penanggung_jawab" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab"> 
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label for="harga" class="col-sm-2 col-form-label">Harga Sewa</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="harga" name="harga">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="deskripsi" name=deskripsi></textarea>
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="image">    
                                </div>
                            </div>

                            {{-- <div class="row mb-3" id="kapasitasRow">
                                <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kapasitas" name="kapasitas">
                                </div>
                            </div>
                            
                            <div class="row mb-3" id="statusRow">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="statusSelect" name="status" aria-label="Status label select example">
                                        <option></option>
                                        <option value="tersedia">Tersedia</option>
                                        <option value="tidak tersedia">Tidak Tersedia</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3" id="jenisDokumentasiRow">
                                <label for="jenisDokumentasi" class="col-sm-2 col-form-label">Jenis Dokumentasi</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisDokumentasi" name="jenis_dokumentasi" aria-label="Status label select example">
                                        <option></option>
                                        <option value="Foto">Foto</option>
                                        <option value="Video">Video</option>
                                        <option value="Foto & Video">Foto & Video</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3" id="jenisUndanganRow">
                                <label for="jenisUndanganRow" class="col-sm-2 col-form-label">Jenis Undangan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisUndangan" name="jenis_undangan" aria-label="Status label select example">
                                        <option></option>
                                        <option value="Cetak"> Cetak</option>
                                        <option value=" Digital"> Digital</option>
                                        <option value=" Cetak&Digital"> Cetak & Digital</option>
                                    </select>
                                </div>
                            </div> --}}

                            {{-- <div class="row mb-3" id="bahanUndanganRow">
                                <label for="bahanUndanganRow" class="col-sm-2 col-form-label">Bahan Undangan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="bahanUndangan" name="bahan_undangan" aria-label="Status label select example">
                                        <option></option>
                                        <option value="Akrilik">Bahan Akrilik</option>
                                        <option value="Kertas Linen">Bahan Kertas Linen</option>
                                    </select>
                                </div>
                            </div> --}}

                            {{-- <div class="row mb-3">
                                <div id="inputContainer" class="col-sm-10 offset-sm-2 input-container">
                                    <div class="col-sm-10">
                                        <label for="inputContainer" class="col-sm-2 col-form-label">Kapasitas</label>
                                    <input type="text" class="form-control" id="newData" name="newData">
                                    </div>
                                </div>
                            </div> 
            
                            <div class="row mb-3">
                                <div id="inputContainer1" class="col-sm-10 offset-sm-2 inputContainer1">
                                    <div class="col-sm-10">
                                        <label for="newData" class="col-sm-2 col-form-label">Status Gedung </label>
                                            <select class="form-select" id="VendorSelect" aria-label="Vendor label select example">
                                                <option></option>
                                                <option value="tersedia">Tersedia</option>
                                                <option value="tidak tersedia">Tidak Tersedia</option>
                                            </select>
                                    </div>
                                </div>
                            </div>

                             --}}

                            {{-- <div class="row mb-3">
                                <div id="inputContainer" class="col-sm-10 offset-sm-2 input-container">
                                    <label for="newData" class="col-form-label">Masukkan data baru:</label>
                                    <input type="text" class="form-control" id="newData" name="newData">
                                </div>
                            </div>
                

                            <div id="inputContainer1" class="input-container1">
                                <label for="newData">jseghouwebnvskzj</label>
                                <input type="text" id="newData" name="newData">
                            </div>

                            <div id="inputContaine2" class="input-container2">
                                <label for="newData">Ohayou</label>
                                <input type="text" id="newData" name="newData">
                            </div> --}}
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <div class="m-n2">
                                            <a href="{{route('vendors.create')}}">
                                            <button class="btn btn-outline-primary w-100 m-2" type="submit">Tambah Data</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            {{-- <div class="container-fluid pt-4 px-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Vendor </h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id_vendor</th>
                                        <th scope="col">vendor</th>
                                        <th scope="col">nama</th>
                                        <th scope="col">alamat</th>
                                        <th scope="col">email</th>
                                        <th scope="col">no_telepon</th>
                                        <th scope="col">penanggung_jawab</th>
                                        <th scope="col">harga</th>
                                        <th scope="col">deskripsi</th>
                                        <th scope="col">image</th>
                                        <th scope="col">kapasitas</th>
                                        <th scope="col">status</th>
                                        <th scope="col">jenis_dokumentasi</th>
                                        <th scope="col">jenis_undangan</th> --}}
                                        {{-- <th scope="col">bahan_undangan</th> --}}
                                        {{-- <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendors as $vendor)
                                        <tr>
                                            <th scope="row">{{($vendor->id)}}</th>
                                            <td>{{($vendor->vendor_type)}}</td>
                                            <td>{{($vendor->nama)}}</td>
                                            <td>{{($vendor->alamat)}}</td>
                                            <td>{{($vendor->email)}}</td>
                                            <td>{{($vendor->no_telepon)}}</td>
                                            <td>{{($vendor->penanggung_jawab)}}</td>
                                            <td>{{($vendor->harga)}}</td>
                                            <td>{{($vendor->deskripsi)}}</td>
                                            <td>   @if($vendor->image)
                                        <img src="{{ asset($vendor->image) }}" alt="Vendor Image" style="width: 100px; height: auto;">
                                    @else
                                        No Image
                                    @endif</td>
                                            <td>{{($vendor->kapasitas)}}</td>
                                            <td>{{($vendor->status)}}</td>
                                            <td>{{($vendor->jenis_dokumentasi)}}</td>
                                            <td>{{($vendor->jenis_undangan)}}</td> --}}
                                            {{-- <td>{{($vendor->bahan_undangan)}}</td> --}}
                                            {{-- <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('vendors.edit', $vendor->id) }}" class="btn btn-square btn-outline-primary mr-2">
                                                        <i class="fa fa-edit"></i>
                                                    </a> --}}
                                                    {{-- <button type="button" class="btn btn-square btn-outline-primary mr-2"><i class="fa fa-edit"></i></button> --}}
                                                    {{-- <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this vendor?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-square btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                                                    </form> --}}
                                                    {{-- <button type="button" class="btn btn-square btn-outline-danger"><i class="fa fa-trash-alt"></i></button> --}}
                                                {{-- </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mt-4">
                                {{ $vendors->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="container-fluid pt-4 px-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6>Data Vendor</h6>
                            <form id="search-form" class="d-none d-md-flex ms-4">
                                <input id="search-input" class="form-control border-0" type="search" name="query" placeholder="Search">
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id_vendor</th>
                                        <th scope="col">vendor</th>
                                        <th scope="col">nama</th>
                                        <th scope="col">alamat</th>
                                        <th scope="col">email</th>
                                        <th scope="col">no_telepon</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody id="vendor-table-body">
                                    @foreach ($vendors as $vendor)
                                        <tr>
                                            <th scope="row">{{ $vendor->custom_id }}</th>
                                            <td>{{ $vendor->vendor_type }}</td>
                                            <td>{{ $vendor->nama }}</td>
                                            <td>{{ $vendor->alamat }}</td>
                                            <td>{{ $vendor->email }}</td>
                                            <td>{{ $vendor->no_telepon }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('vendors.edit', $vendor->custom_id)}}" class="btn btn-square btn-outline-primary mr-2">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('vendors.show', $vendor->custom_id)}}" class="btn btn-square btn-outline-primary mr-2">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a> 
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mt-4">
                                {{ $vendors->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- <div class="container-fluid pt-4 px-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6>Data Vendor</h6>
                            <form id="search-form" class="d-none d-md-flex ms-4" action="{{ route('vendors.ajaxSearch') }}" method="GET">
                                <input id="search-input" class="form-control border-0" type="search" name="query" placeholder="Search">
                            </form> --}}
                            {{-- <form class="d-none d-md-flex ms-4" action="{{ route('vendors.search') }}" method="GET">
                                <input class="form-control border-0" type="search" name="query" placeholder="Search" value="{{ request('query') }}">
                            </form>                              --}}
                        {{-- </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id_vendor</th>
                                        <th scope="col">vendor</th>
                                        <th scope="col">nama</th>
                                        <th scope="col">alamat</th>
                                        <th scope="col">email</th>
                                        <th scope="col">no_telepon</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendors as $vendor)
                                        <tr>
                                            <th scope="row">{{ $vendor->custom_id }}</th>
                                            <td>{{ $vendor->vendor_type }}</td>
                                            <td>{{ $vendor->nama }}</td>
                                            <td>{{ $vendor->alamat }}</td>
                                            <td>{{ $vendor->email }}</td>
                                            <td>{{ $vendor->no_telepon }}</td>
                                            <td>
                                                <div class="d-flex"> --}}
                                                    {{-- <a href="{{ route('vendors.edit', $vendor->id) }}" class="btn btn-square btn-outline-primary mr-2"> --}}                                                     
                                                        {{-- <a href="{{ route('vendors.edit', $vendor->custom_id)}}" class="btn btn-square btn-outline-primary mr-2">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('vendors.show', $vendor->custom_id)}}" class="btn btn-square btn-outline-primary mr-2">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a> --}}
                                                    {{-- <button type="button" class="btn btn-square btn-outline-info mr-2" data-bs-toggle="modal" data-bs-target="#vendorDetailModal" data-vendor="{{ json_encode($vendor) }}">
                                                        <i class="fa fa-info-circle"></i>
                                                    </button> --}}
                                                    {{-- <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this vendor?');"> --}}
                                                        {{-- <form action="{{ url('vendors.destroy', ['custom_id' => $vendor->custom_id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this vendor?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-square btn-outline-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </form> --}}
                                                {{-- </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mt-4">
                                {{ $vendors->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div> --}}
    
    {{-- <div class="modal fade" id="vendorDetailModal" tabindex="-1" aria-labelledby="vendorDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vendorDetailModalLabel">Vendor Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td id="modalNama"></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td id="modalAlamat"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td id="modalEmail"></td>
                        </tr>
                        <tr>
                            <th>No Telepon</th>
                            <td id="modalNoTelepon"></td>
                        </tr>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <td id="modalPenanggungJawab"></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td id="modalHarga"></td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td id="modalDeskripsi"></td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td id="modalImage"></td>
                        </tr>
                        <tr>
                            <th>Kapasitas</th>
                            <td id="modalKapasitas"></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td id="modalStatus"></td>
                        </tr>
                        <tr>
                            <th>Jenis Dokumentasi</th>
                            <td id="modalJenisDokumentasi"></td>
                        </tr>
                        <tr>
                            <th>Jenis Undangan</th>
                            <td id="modalJenisUndangan"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>  
      --}}
    
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

        <!--js untuk kolom form vendor tambahan--> 
            <!-- <script>
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
            <!--js untuk search pada data vendor--> 
            <script>-->
                $(document).ready(function() {
                    $('#search-input').on('input', function() {
                        var query = $(this).val();
                        $.ajax({
                            url: "{{ route('vendors.ajaxSearch') }}",
                            type: "GET",
                            data: { query: query },
                            success: function(data) {
                                $('#vendor-table-body').empty();
            
                                if (data.vendors.length > 0) {
                                    data.vendors.forEach(function(vendor) {
                                        $('#vendor-table-body').append(`
                                            <tr>
                                                <th scope="row">${vendor.custom_id}</th>
                                                <td>${vendor.vendor_type}</td>
                                                <td>${vendor.nama}</td>
                                                <td>${vendor.alamat}</td>
                                                <td>${vendor.email}</td>
                                                <td>${vendor.no_telepon}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/vendors/${vendor.custom_id}/edit" class="btn btn-square btn-outline-primary mr-2">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="/vendors/${vendor.custom_id}" class="btn btn-square btn-outline-primary mr-2">
                                                            <i class="fa fa-info-circle"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        `);
                                    });
                                } else {
                                    $('#vendor-table-body').append(`
                                        <tr>
                                            <td colspan="7">Tidak ada data vendor yang sesuai dengan pencarian.</td>
                                        </tr>
                                    `);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("Terjadi kesalahan: ", error);
                            }
                        });
                    });
                });
            </script>
              
</body>

</html>








