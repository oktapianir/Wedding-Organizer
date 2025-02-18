<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 8px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f2f2f2; }
        .text-right { text-align: right; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Invoice Pembayaran</h2>
    <p><strong>ID Invoice:</strong> {{ $id_inv }}</p>
    <p><strong>Nomor Pemesanan:</strong> {{ $pemesanan->id_pemesanan }}</p>
    <p><strong>Nama Pemesan:</strong> {{ $pemesanan->nama }}</p>
    <p><strong>Tanggal Pemesanan:</strong> {{ \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d M Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; $counter = 1; @endphp
            @if($pemesanan->id_dekorasi)
                @php $total += $dekorasi->harga_dekorasi; @endphp
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>Dekorasi</td>
                    <td>{{ $dekorasi->nama_dekorasi }}</td>
                    <td>Rp {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</td>
                </tr>
            @endif
            @if($pemesanan->id_dokumentasi)
                @php $total += $dokumentasi->harga_dokumentasi; @endphp
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>Dokumentasi</td>
                    <td>{{ $dokumentasi->nama_dokumentasi }}</td>
                    <td>Rp {{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</td>
                </tr>
            @endif
            @if($pemesanan->id_hiburan)
                @php $total += $hiburan->harga_hiburan; @endphp
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>Hiburan</td>
                    <td>{{ $hiburan->nama_hiburan }}</td>
                    <td>Rp {{ number_format($hiburan->harga_hiburan, 0, ',', '.') }}</td>
                </tr>
            @endif
            @if($pemesanan->id_undangan)
                @php $total += $undangan->harga_undangan; @endphp
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>Undangan</td>
                    <td>{{ $undangan->nama_undangan }}</td>
                    <td>Rp {{ number_format($undangan->harga_undangan, 0, ',', '.') }}</td>
                </tr>
            @endif
            @if($pemesanan->id_main_course)
                @php $total += $mainCourse->harga_main_course; @endphp
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>Main Course</td>
                    <td>{{ $mainCourse->nama_main_course }}</td>
                    <td>Rp {{ number_format($mainCourse->harga_main_course, 0, ',', '.') }}</td>
                </tr>
            @endif
            @if($pemesanan->id_gedung && $gedung)
                @php $total += $gedung->harga_gedung; @endphp
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>Gedung</td>
                    <td>{{ $gedung->nama_gedung }}</td>
                    <td>Rp {{ number_format($gedung->harga_gedung, 0, ',', '.') }}</td>
                </tr>
            @endif
        </tbody>
    </table>

    <p class="text-right" style="font-size: 18px; font-weight: bold;">Total Pembayaran: Rp {{ number_format($total, 0, ',', '.') }}</p>
</body>
</html>
