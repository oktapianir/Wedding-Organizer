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
                    <!-- Message Dropdown -->
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
                            <!-- Repeat message items -->
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
        
                    <!-- Notification Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <!-- Repeat notification items -->
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
        
                    <!-- Profile Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        
            <!-- Tabel 1 -->
            <div class="container-fluid px-4">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Data Testimoni</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">id customer</th>
                                    <th scope="col">id Pemesanan</th>
                                    <th scope="col">Testimoni</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testimonis as $testi)
                                <tr>
                                    <td>{{ $testi->id }}</td>
                                    <td>{{$testi->id_cust }}</td>
                                    <td>{{$testi->id_pemesanan }}</td>
                                    <td>{{$testi->testimoni }}</td>
                                    <td>{{$testi->rating }}</td>
                                    <td>
                                        <a class="btn btn-square btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $testi->id }}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="pagination-wrapper" style="display: flex; align-items: center;">
                            {{ $testimonis->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <!-- Modal Delete -->
        @foreach($testimonis as $testi)
        <div class="modal fade" id="deleteModal-{{ $testi->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $testi->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteModalLabel-{{ $testi->id }}">
                            <i class="fa fa-exclamation-triangle me-2"></i>Informasi Data Yang di Hapus
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-4">Anda yakin akan menghapus data ini?</p>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Detail Testimoni</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>ID:</strong> {{ $testi->id }}</li>
                                    <li class="list-group-item"><strong>Customer ID:</strong> {{ $testi->id_cust }}</li>
                                    <li class="list-group-item"><strong>Order ID:</strong> {{ $testi->id_pemesanan }}</li>
                                    <li class="list-group-item"><strong>Testimonial:</strong> {{ $testi->testimoni }}</li>
                                    <li class="list-group-item"><strong>Rating:</strong> {{ $testi->rating }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('testimoni.destroy', $testi->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash me-2"></i>Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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