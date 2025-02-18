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
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded h-100 p-4">
                    <h6>Vendor Detail</h6>
                    <table class="table">
                        @if($vendor->custom_id)
                        <tr>
                            <th scope="row">ID Vendor</th>
                            <td>{{ $vendor->custom_id }}</td>
                        </tr>
                        @endif

                        @if($vendor->vendor_type)
                        <tr>
                            <th scope="row">Vendor Type</th>
                            <td>{{ $vendor->vendor_type }}</td>
                        </tr>
                        @endif

                        @if($vendor->nama)
                        <tr>
                            <th scope="row">Nama</th>
                            <td>{{ $vendor->nama }}</td>
                        </tr>
                        @endif

                        @if($vendor->alamat)
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>{{ $vendor->alamat }}</td>
                        </tr>
                        @endif

                        @if($vendor->email)
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $vendor->email }}</td>
                        </tr>
                        @endif

                        @if($vendor->no_telepon)
                        <tr>
                            <th scope="row">No Telepon</th>
                            <td>{{ $vendor->no_telepon }}</td>
                        </tr>
                        @endif

                        @if($vendor->penanggung_jawab)
                        <tr>
                            <th scope="row">Penanggung Jawab</th>
                            <td>{{ $vendor->penanggung_jawab }}</td>
                        </tr>
                        @endif

                        @if($vendor->harga)
                        <tr>
                            <th scope="row">Harga</th>
                            <td>{{ $vendor->harga }}</td>
                        </tr>
                        @endif

                        @if($vendor->deskripsi)
                        <tr>
                            <th scope="row">Deskripsi</th>
                            <td>{{ $vendor->deskripsi }}</td>
                        </tr>
                        @endif

                        @if($vendor->image)
                        <tr>
                            <th scope="row">Image</th>
                            <td><img src="{{ asset('/' . $vendor->image) }}" alt="{{ $vendor->nama }}" style="max-width: 100px;"></td>
                        </tr>
                        @endif

                        @if($vendor->kapasitas)
                        <tr>
                            <th scope="row">Kapasitas</th>
                            <td>{{ $vendor->kapasitas }}</td>
                        </tr>
                        @endif

                        @if($vendor->status)
                        <tr>
                            <th scope="row">Status</th>
                            <td>{{ $vendor->status }}</td>
                        </tr>
                        @endif

                        @if($vendor->jenis_dokumentasi)
                        <tr>
                            <th scope="row">Jenis Dokumentasi</th>
                            <td>{{ $vendor->jenis_dokumentasi }}</td>
                        </tr>
                        @endif

                        @if($vendor->jenis_undangan)
                        <tr>
                            <th scope="row">Jenis Undangan</th>
                            <td>{{ $vendor->jenis_undangan }}</td>
                        </tr>
                        @endif
                    </table>
                    <a href="{{ route('vendors.index') }}" class="btn btn-primary">Kembali pada list data vendor</a>
                </div>
            </div>
        </div>
        <!-- Content End -->

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
