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
                    <!-- Tambahkan Dropdown Jika Perlu -->
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Tabel Invoice -->
            <div class="container-fluid px-4">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Data Invoice</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id Invoice</th>
                                    <th scope="col">Id Pemesanan</th>
                                    <th scope="col">Id Customer</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{ $invoice->id_inv }}</td>
                                    <td>{{ $invoice->id_pemesanan }}</td>
                                    <td>{{ $invoice->id_customer }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-sm btn-info d-inline-flex align-items-center text-white" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#detailModal-{{ $invoice->id_inv }}">
                                                <i class="fa fa-info-circle text-white me-1"></i>
                                                Detail
                                            </a>
                                            <a class="btn btn-sm btn-danger d-inline-flex align-items-center text-white" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#deleteModal-{{ $invoice->id_inv }}">
                                                <i class="fa fa-trash text-white me-1"></i>
                                                Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="pagination-wrapper" style="display: flex; align-items: center;">
                    {{ $invoices->links('pagination::bootstrap-4') }}
                </div>
            </div>
            <!-- Tabel Invoice End -->

            <!-- Modal Detail -->
            @foreach($invoices as $invoice)
            <div class="modal fade" id="detailModal-{{ $invoice->id_inv }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $invoice->id_inv }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-info text-white">
                            <h5 class="modal-title" id="detailModalLabel-{{ $invoice->id_inv }}">
                                <i class="fa fa-info-circle me-2"></i>Detail Invoice Pemesanan
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Id Invoice:</strong> {{ $invoice->id_inv }}</p>
                            <p><strong>Id Pemesanan:</strong> {{ $invoice->id_pemesanan }}</p>
                            <p><strong>Id Customer:</strong> {{ $invoice->id_customer }}</p>
            
                            <h6 class="mt-4 mb-3">Detail Pesanan Vendor</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Nama Vendor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $pemesanan = \App\Models\Pemesanan::with(['dekorasi', 'hiburan', 'dokumentasi'])
                                                ->where('id_pemesanan', $invoice->id_pemesanan)
                                                ->first();
                                        @endphp
            
                                        @if($pemesanan && $pemesanan->dekorasi)
                                        <tr>
                                            <td><span class="badge bg-primary">Dekorasi</span></td>
                                            <td>{{ $pemesanan->dekorasi->nama_dekorasi }}</td>
                                        </tr>
                                        @endif
            
                                        @if($pemesanan && $pemesanan->hiburan)
                                        <tr>
                                            <td><span class="badge bg-warning">Hiburan</span></td>
                                            <td>{{ $pemesanan->hiburan->nama_hiburan }}</td>
                                        </tr>
                                        @endif
            
                                        @if($pemesanan && $pemesanan->dokumentasi)
                                        <tr>
                                            <td><span class="badge bg-success">Dokumentasi</span></td>
                                            <td>{{ $pemesanan->dokumentasi->nama_paket_dokumentasi }}</td>
                                        </tr>
                                        @endif

                                        {{-- @if($pemesanan && $pemesanan->undangan)
                                        <tr>
                                            <td><span class="badge bg-success">Undangan</span></td>
                                            <td>{{ $pemesanan->undangan->nama_paket_undangan }}</td>
                                        </tr>
                                        @endif --}}
            
                                        @if(!$pemesanan || (!$pemesanan->dekorasi && !$pemesanan->hiburan && !$pemesanan->dokumentasi))
                                        <tr>
                                            <td colspan="2" class="text-center">Tidak ada data vendor</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
            
                            @if($pemesanan)
                            <div class="mt-3">
                                <p><strong>Total Biaya:</strong> Rp {{ number_format($pemesanan->total_biaya, 0, ',', '.') }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <!-- Modal Delete -->
            @foreach($invoices as $invoice)
            <div class="modal fade" id="deleteModal-{{ $invoice->id_inv }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $invoice->id_inv }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="deleteModalLabel-{{ $invoice->id_inv }}">
                                <i class="fa fa-exclamation-triangle me-2"></i>Konfirmasi Hapus
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin ingin menghapus data invoice ini?</p>
                            <ul>
                                <li><strong>Id Invoice:</strong> {{ $invoice->id_inv }}</li>
                                <li><strong>Id Pemesanan:</strong> {{ $invoice->id_pemesanan }}</li>
                                <li><strong>Id Customer:</strong> {{ $invoice->id_customer }}</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('invoices.destroy', $invoice->id_inv) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/admin/js/main.js')}}"></script>
</body>

</html>
