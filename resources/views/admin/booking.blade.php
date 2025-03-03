<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
       @include('admin.sidebar')

       <style>
        .modal-body {
            overflow-x: auto;
        }
        </style>


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

            <!-- Recent Sales End -->
            {{-- <div class="container-fluid pt-4 px-4">
                <h6 class="mb-4">Pemesanan</h6>

                <div class="container mt-5">
                    <div style="overflow-x: auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID Pemesanan</th>
                                    <th scope="col">ID Customer</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Tanggal Acara</th>
                                    <th scope="col">Total Biaya</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pemesanans as $pemesanan)
                                    <tr>
                                        <td>{{ $pemesanan->id_pemesanan }}</td>
                                        <td>{{ $pemesanan->id_customer }}</td>
                                        <td>{{ $pemesanan->status_pemesanan }}</td>
                                        <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_acara)->format('d/m/Y') }}</td>
                                        <td>Rp. {{ number_format($pemesanan->total_biaya, 0, ',', '.') }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{$pemesanan->id_pemesanan}}">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                        </td>
                                    </tr>
                
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal-{{ $pemesanan->id_pemesanan }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $pemesanan->id_pemesanan }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content border-0 shadow">
                                                <div class="modal-header bg-primary text-white">
                                                    <h5 class="modal-title" id="editModalLabel-{{ $pemesanan->id_pemesanan }}">
                                                        Edit Pemesanan
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="status_pemesanan-{{ $pemesanan->id_pemesanan }}" class="form-label">Status Pemesanan</label>
                                                        <select class="form-select" id="status_pemesanan-{{ $pemesanan->id_pemesanan }}" name="status_pemesanan">
                                                            <option value="pending" {{ $pemesanan->status_pemesanan == 'pending' ? 'selected' : '' }}>Pending</option>
                                                            <option value="confirmed" {{ $pemesanan->status_pemesanan == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                            <option value="cancelled" {{ $pemesanan->status_pemesanan == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                            <option value="completed" {{ $pemesanan->status_pemesanan == 'completed' ? 'selected' : '' }}>Completed</option>
                                                        </select>
                                                    </div>
                                                    <div class="text-end mt-4">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary ms-2">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                
                    <!-- Paginasi -->
                    <div class="d-flex justify-content-center mt-4">
                        <div class="pagination-wrapper" style="display: flex; align-items: center;">
                            {{ $pemesanans->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                </div>
                
                
                

                
                
            </div> --}}

            <div class="container-fluid pt-4 px-4">
                <h6 class="mb-4">Pemesanan</h6>
            
                <div class="container mt-5">
                    <div class="d-flex justify-content-end mb-3">
                       <!-- Form Pencarian Berdasarkan Status -->
                       <form method="GET" action="{{ route('pemesanan.index') }}" class="d-flex flex-wrap gap-3 align-items-center">
                        <!-- Date Filter Group -->
                        <div class="d-flex align-items-center bg-light rounded p-2">
                            <span class="text-muted me-2"><i class="fa fa-calendar"></i></span>
                            <div class="d-flex align-items-center">
                                <input 
                                    type="date" 
                                    name="start_date" 
                                    class="form-control form-control-sm me-2" 
                                    value="{{ request()->get('start_date') }}"
                                    style="min-width: 140px;"
                                >
                                <span class="text-muted mx-2">s/d</span>
                                <input 
                                    type="date" 
                                    name="end_date" 
                                    class="form-control form-control-sm" 
                                    value="{{ request()->get('end_date') }}"
                                    style="min-width: 140px;"
                                >
                            </div>
                        </div>
            
                        <!-- Status Filter -->
                        <select class="form-select form-select-sm" name="status" style="width: 150px;">
                            <option value="">Pilih Status</option>
                            <option value="pending" {{ request()->get('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ request()->get('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="cancelled" {{ request()->get('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            <option value="completed" {{ request()->get('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
            
                        <!-- Buttons -->
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-primary px-3" type="submit">
                                <i class="fa fa-search me-1"></i> Cari
                            </button>
                            <a href="{{ route('admin.booking') }}" class="btn btn-sm btn-secondary px-3">
                                <i class="fa fa-refresh me-1"></i> Reset
                            </a>
                        </div>
                    </form>
                    </div>
            
                    <div style="overflow-x: auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID Pemesanan</th>
                                    <th scope="col">ID Customer</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Tanggal Acara</th>
                                    <th scope="col">Total Biaya</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pemesanans as $pemesanan)
                                    <tr>
                                        <td>{{ $pemesanan->id_pemesanan }}</td>
                                        <td>{{ $pemesanan->id_customer }}</td>
                                        <td>{{ $pemesanan->status_pemesanan }}</td>
                                        <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_acara)->format('d/m/Y') }}</td>
                                        <td>Rp. {{ number_format($pemesanan->total_biaya, 0, ',', '.') }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{$pemesanan->id_pemesanan}}">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#detailModal-{{$pemesanan->id_pemesanan}}">
                                                <i class="fa fa-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal Detail -->
                                    <div class="modal fade" id="detailModal-{{ $pemesanan->id_pemesanan }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $pemesanan->id_pemesanan }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content border-0 shadow">
                                                <div class="modal-header bg-warning text-white">
                                                    <h5 class="modal-title" id="detailModalLabel-{{ $pemesanan->id_pemesanan }}">
                                                        Detail Pemesanan #{{ $pemesanan->id_pemesanan }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <ul class="list-unstyled">
                                                        <li><strong>ID Pemesanan:</strong> {{ $pemesanan->id_pemesanan }}</li>
                                                        <li><strong>ID Customer:</strong> {{ $pemesanan->id_customer }}</li>
                                                        <li><strong>Status:</strong> {{ $pemesanan->status_pemesanan }}</li>
                                                        <li><strong>Tanggal Pemesanan:</strong> {{ \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d/m/Y') }}</li>
                                                        <li><strong>Tanggal Acara:</strong> {{ \Carbon\Carbon::parse($pemesanan->tanggal_acara)->format('d/m/Y') }}</li>
                                                        <li><strong>Total Biaya:</strong> Rp. {{ number_format($pemesanan->total_biaya, 0, ',', '.') }}</li>
                                                    
                                                        <!-- Menampilkan informasi dekorasi, hiburan, dokumentasi -->
                                                        <li><strong>ID Dekorasi:</strong> {{ $pemesanan->id_dekorasi }}</li>
                                                        <li><strong>Nama Dekorasi:</strong> {{ $pemesanan->dekorasi->nama_dekorasi ?? 'N/A' }}</li>
                                    
                                                        <li><strong>ID Hiburan:</strong> {{ $pemesanan->id_hiburan }}</li>
                                                        <li><strong>Nama Hiburan:</strong> {{ $pemesanan->hiburan->nama_hiburan ?? 'N/A' }}</li>
                                    
                                                        <li><strong>ID Dokumentasi:</strong> {{ $pemesanan->id_dokumentasi }}</li>
                                                        <li><strong>Nama Dokumentasi:</strong> {{ $pemesanan->dokumentasi->nama_paket_dokumentasi ?? 'N/A' }}</li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
            
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal-{{ $pemesanan->id_pemesanan }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $pemesanan->id_pemesanan }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content border-0 shadow">
                                                <div class="modal-header bg-primary text-white">
                                                    <h5 class="modal-title" id="editModalLabel-{{ $pemesanan->id_pemesanan }}">
                                                        Edit Pemesanan
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <form action="{{ route('pemesanan.update', $pemesanan->id_pemesanan) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="status_pemesanan-{{ $pemesanan->id_pemesanan }}" class="form-label">Status Pemesanan</label>
                                                            <select class="form-select" id="status_pemesanan-{{ $pemesanan->id_pemesanan }}" name="status_pemesanan">
                                                                <option value="pending" {{ $pemesanan->status_pemesanan == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                <option value="confirmed" {{ $pemesanan->status_pemesanan == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                                <option value="cancelled" {{ $pemesanan->status_pemesanan == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                                <option value="completed" {{ $pemesanan->status_pemesanan == 'completed' ? 'selected' : '' }}>Completed</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-end mt-4">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary ms-2">Simpan</button>
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
                    {{-- <tbody>
                        @foreach($pemesanans as $pemesanan)
                            <tr>
                                <td>{{ $pemesanan->id_pemesanan }}</td>
                                <td>{{ $pemesanan->id_customer }}</td>
                                <td>{{ $pemesanan->status_pemesanan }}</td>
                                <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d/m/Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_acara)->format('d/m/Y') }}</td>
                                <td>Rp. {{ number_format($pemesanan->total_biaya, 0, ',', '.') }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{$pemesanan->id_pemesanan}}">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                </td>
                            </tr>
                    
                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal-{{ $pemesanan->id_pemesanan }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $pemesanan->id_pemesanan }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content border-0 shadow">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="editModalLabel-{{ $pemesanan->id_pemesanan }}">
                                                Edit Pemesanan
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form action="{{ route('pemesanan.update', $pemesanan->id_pemesanan) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="status_pemesanan-{{ $pemesanan->id_pemesanan }}" class="form-label">Status Pemesanan</label>
                                                    <select class="form-select" id="status_pemesanan-{{ $pemesanan->id_pemesanan }}" name="status_pemesanan">
                                                        <option value="pending" {{ $pemesanan->status_pemesanan == 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="confirmed" {{ $pemesanan->status_pemesanan == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                        <option value="cancelled" {{ $pemesanan->status_pemesanan == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                        <option value="completed" {{ $pemesanan->status_pemesanan == 'completed' ? 'selected' : '' }}>Completed</option>
                                                    </select>
                                                </div>
                                                <div class="text-end mt-4">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary ms-2">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody> --}}
                    
            
                    <!-- Paginasi -->
                    <div class="d-flex justify-content-center mt-4">
                        <div class="pagination-wrapper" style="display: flex; align-items: center;">
                            {{ $pemesanans->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
            
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                </div>
            </div>
            
            <!-- Modal Success -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow">
                        <div class="modal-header text-white" style="background-color: rgb(85, 147, 255)">
                            <h5 class="modal-title">Berhasil!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Status pemesanan berhasil diperbarui!.</p>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" style="background-color: rgb(85, 147, 255) ">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                    });
                </script>
            @endif


            


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
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
<script>
    $(document).ready(function() {
        // Example button with class `btn-outline-success` (info button)
        $('.btn-outline-success').click(function() {
            // For this example, assume the details are static or need to be fetched dynamically
            var bookingId = $(this).closest('tr').find('td:eq(0)').text();
            var customerId = $(this).closest('tr').find('td:eq(1)').text();
            var status = $(this).closest('tr').find('td:eq(2)').text();
            var bookingDate = $(this).closest('tr').find('td:eq(3)').text();
            var eventDate = $(this).closest('tr').find('td:eq(4)').text();

            // Update modal content
            $('#modalBody').html(
                '<tr>' +
                '<td>' + bookingId + '</td>' +
                '<td>' + customerId + '</td>' +
                '<td>Convention</td>' + // Replace with actual data if needed
                '<td>farah dekor</td>' + // Replace with actual data if needed
                '<td>resep bunda katering</td>' + // Replace with actual data if needed
                '<td>maliq</td>' + // Replace with actual data if needed
                '<td>jonas</td>' + // Replace with actual data if needed
                '<td>tyas_wedding</td>' + // Replace with actual data if needed
                '<td>fajar souvenir</td>' + // Replace with actual data if needed
                '<td>cimahi printing</td>' + // Replace with actual data if needed
                '<td>' + bookingDate + '</td>' +
                '<td>' + eventDate + '</td>' +
                '<td>150.000.000</td>' + // Replace with actual data if needed
                '<td>pending</td>' + // Replace with actual data if needed
                '</tr>'
            );

            // Show modal
            $('#detailModal').modal('show');
        });

        // Make modal draggable
        $(".modal-dialog").draggable({
            handle: ".modal-header"
        });
    });
</script>

</html>

