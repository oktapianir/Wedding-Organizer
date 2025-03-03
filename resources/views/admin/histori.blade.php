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

            <div class="container-fluid pt-4 px-4">
                <h6 class="mb-4">Histori</h6>
            
                <div class="container mt-5">
                    <div class="d-flex justify-content-end mb-3">
                    </div>
            
                    <div style="overflow-x: auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID Histori</th>
                                    <th scope="col">ID Pemesanan</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Status Pemesanan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($historis as $histori)
                                    <tr>
                                        <td>{{ $histori->id_histori }}</td>
                                        <td>{{ $histori->id_pemesanan }}</td>
                                        <td>{{ \Carbon\Carbon::parse($histori->tanggal_pemesanan)->format('d/m/Y') }}</td>
                                        <td>{{ $histori->status_pemesanan }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{$histori->id_histori}}">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                            
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="pagination-wrapper" style="display: flex; align-items: center;">
                            {{ $historis->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    
                    <!-- Modal Edit -->
                    @foreach($historis as $histori)
                    <div class="modal fade" id="editModal-{{$histori->id_histori}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Histori - {{$histori->id_histori}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('historis.update', $histori->id_histori) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="id_pemesanan" class="form-label">ID Pemesanan</label>
                                            <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" value="{{ $histori->id_pemesanan }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                                            <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" value="{{ \Carbon\Carbon::parse($histori->tanggal_pemesanan)->format('Y-m-d') }}" required>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="status_pemesanan" class="form-label">Status Pemesanan</label>
                                            <input type="text" class="form-control" id="status_pemesanan" name="status_pemesanan" value="{{ $histori->status_pemesanan }}" required>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="status_pemesanan" class="form-label">Status Pemesanan</label>
                                            <select class="form-control" id="status_pemesanan" name="status_pemesanan" required>
                                                <option value="confirmed" {{ $histori->status_pemesanan == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                <option value="completed" {{ $histori->status_pemesanan == 'completed' ? 'selected' : '' }}>Completed</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

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



                 
          
            
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                </div>
            </div>
            
            


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

</html>

