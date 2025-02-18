<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
       @include('admin.sidebar')
       <!-- Include Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
       <style>
        .modal-body {
            overflow-x: auto;
        }
        .modal-content {
            max-width: 800px;
            margin: auto;
        }
        </style>

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <!-- Navbar content here -->
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <h3 class="mb-4">Pembayaran</h3>
            
                <div class="container mt-5">
                    <div class="d-flex justify-content-end mb-3">
                        <div class="d-flex justify-content-end mb-3">
                            <form method="GET" action="{{ route('admin.pembayaran') }}" class="d-flex" id="filterForm">
                                <select class="form-select border-0 me-2" name="status" style="width: 200px;" onchange="document.getElementById('filterForm').submit();">
                                    <option value="">Pilih Status</option>
                                    <option value="belum lunas" {{ request()->get('status') == 'belum lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                    <option value="lunas" {{ request()->get('status') == 'lunas' ? 'selected' : '' }}>Lunas</option>
                                </select>
                                <a href="{{ route('admin.pembayaran') }}" class="btn btn-secondary">Reset</a>
                            </form>
                        </div>
                        
                    </div>                    
            
                    <div style="overflow-x: auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID Pembayaran</th>
                                    <th scope="col">ID Pemesanan</th>
                                    <th scope="col">Jumlah Pembayaran</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($pembayarans as $pembayaran)
                                    <tr>
                                        <td>{{ $pembayaran->id_pembayaran }}</td>
                                        <td>{{ $pembayaran->pemesanan_id }}</td> <!-- Accessing related Pemesanan -->
                                        <td>{{ $pembayaran->jumlah_pembayaran }}</td>
                                        <td>
                                            @if($pembayaran->bukti_pembayaran)
                                                <a href="{{ asset('storage/' . $pembayaran->bukti_pembayaran) }}" target="_blank">Lihat Bukti</a>
                                            @else
                                                Tidak ada bukti
                                            @endif
                                        </td>
                                        <td>{{ ucfirst($pembayaran->status_pembayaran) }}</td>
                                        <td>
                                            <!-- Button to open modal -->
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $pembayaran->id_pembayaran }}">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tbody>
                                @foreach($pembayarans as $pembayaran)
                                <tr>
                                    <td>{{ $pembayaran->id_pembayaran }}</td>
                                    <td>{{ $pembayaran->pemesanan_id }}</td>
                                    <td>{{ $pembayaran->jumlah_pembayaran }}</td>
                                    <td>{{ ucfirst($pembayaran->status_pembayaran) }}</td>
                                    <td>
                                        <!-- Button to open the detail modal -->
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $pembayaran->id_pembayaran }}">
                                            Detail
                                        </button>
                                        <!-- Button to open the edit status modal -->
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editStatusModal{{ $pembayaran->id_pembayaran }}">
                                            Edit Status
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
            
                        <!-- Pagination -->
                        <div class="d-flex justify-content-center">
                            {{ $pembayarans->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
            
                </div>
            
            </div>

            <!-- Modal Detail Pembayaran -->
            @foreach($pembayarans as $pembayaran)
            <div class="modal fade" id="detailModal{{ $pembayaran->id_pembayaran }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $pembayaran->id_pembayaran }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabel{{ $pembayaran->id_pembayaran }}">Detail Pembayaran - ID {{ $pembayaran->id_pembayaran }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <tr>
                                    <th>ID Pembayaran</th>
                                    <td>{{ $pembayaran->id_pembayaran }}</td>
                                </tr>
                                <tr>
                                    <th>ID Pemesanan</th>
                                    <td>{{ $pembayaran->pemesanan_id }}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Pembayaran</th>
                                    <td>{{ $pembayaran->jumlah_pembayaran }}</td>
                                </tr>
                                <tr>
                                    <th>Status Pembayaran</th>
                                    <td>{{ ucfirst($pembayaran->status_pembayaran) }}</td>
                                </tr>
                                <tr>
                                    <th>Bukti Pembayaran</th>
                                    <td>
                                        @if($pembayaran->bukti_pembayaran)
                                            <!-- Menampilkan gambar bukti pembayaran -->
                                            <img src="{{ asset('storage/' . $pembayaran->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="img-fluid" style="max-height: 300px; width: auto;">
                                        @else
                                            Tidak ada bukti
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        

            <!-- Modal Edit Status Pembayaran -->
            @foreach($pembayarans as $pembayaran)
                <div class="modal fade" id="editStatusModal{{ $pembayaran->id_pembayaran }}" tabindex="-1" aria-labelledby="editStatusModalLabel{{ $pembayaran->id_pembayaran }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editStatusModalLabel{{ $pembayaran->id_pembayaran }}">Edit Status Pembayaran - ID {{ $pembayaran->id_pembayaran }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form untuk mengupdate status pembayaran -->
                                <form action="{{ route('pembayaran.updateStatus', $pembayaran->id_pembayaran) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Method spoofing untuk PUT -->
                                    <div class="mb-3">
                                        <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                        <select name="status_pembayaran" class="form-select" required>
                                            <option value="lunas" {{ $pembayaran->status_pembayaran == 'lunas' ? 'selected' : '' }}>Lunas</option>
                                            <option value="belum lunas" {{ $pembayaran->status_pembayaran == 'belum lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(session('success'))
            <script>
                $(document).ready(function() {
                    $('#successModal').modal('show');  // Menampilkan modal
                    setTimeout(function() {
                        window.location.href = '{{ route('admin.pembayaran') }}';  // Redirect ke halaman admin pembayaran setelah 2 detik
                    }, 2000);
                });
            </script>
            @endif
        
            <!-- Modal Sukses -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="successModalLabel">
                                <i class="fas fa-check-circle"></i> Sukses
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-0 text-center">{{ session('success') }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
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
