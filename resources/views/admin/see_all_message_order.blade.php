<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.css')
</head>
<body>
    @include('admin.sidebar')

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4" style="margin-left: 250px;">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Semua Pesanan Masuk</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">ID Pesanan</th>
                            <th scope="col">Tanggal Acara</th>
                            <th scope="col">Tanggal Pesan</th>
                            <th scope="col">Total Biaya</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pesananBaru as $pesanan)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>{{ $pesanan->id_pemesanan }}</td>
                                <td>{{ $pesanan->tanggal_acara }}</td>
                                <td>{{ $pesanan->created_at->format('d M Y') }}</td>
                                <td>Rp {{ number_format($pesanan->total_biaya, 0, ',', '.') }}</td>
                                <td>
                                    <span class="badge 
                                        @switch($pesanan->status)
                                            @case('Pending')
                                                bg-warning
                                            @break
                                            @case('Confirmed')
                                                bg-success
                                            @break
                                            @case('Completed')
                                                bg-primary
                                            @break
                                            @default
                                                bg-secondary
                                        @endswitch
                                    ">
                                        {{ $pesanan->status ?? 'Belum Diproses' }}
                                    </span>
                                </td>
                                <td>
                                    {{-- <a class="btn btn-sm btn-primary" href="{{ route('admin.pesanan.detail', $pesanan->id) }}">Detail</a> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada pesanan masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3 d-flex justify-content-center">
                    {{ $pesananBaru->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
</body>
</html>