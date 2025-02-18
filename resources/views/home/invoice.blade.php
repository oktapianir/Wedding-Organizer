<!DOCTYPE html>
<html lang="id">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
</head>
<body>
    <div class="container" style="max-width: 900px; margin: 30px auto; background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);">
        <div class="invoice-header" style="text-align: center; margin-bottom: 20px;">
            <h2 style="color: #e74c3c;">Invoice Pembayaran Pemesanan</h2>

            <p><strong>ID Invoice:</strong> {{ $id_inv ?? 'Tidak Ada' }}</p>
            <p><strong>Nomor Pemesanan:</strong> {{ $pemesanan->id_pemesanan }}</p>
            <p><strong>Nama Pemesan:</strong> {{ $pemesanan->nama }}</p>
            <p><strong>Tanggal Pemesanan:</strong> {{ \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d M Y') }}</p>
        </div>

        @php
        $total = 0;
        @endphp
    
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="padding: 8px 12px; border: 1px solid #ddd; background-color: #f2f2f2; text-align: left;">No</th>
                    <th style="padding: 8px 12px; border: 1px solid #ddd; background-color: #f2f2f2; text-align: left;">Kategori</th>
                    <th style="padding: 8px 12px; border: 1px solid #ddd; background-color: #f2f2f2; text-align: left;">Deskripsi</th>
                    <th style="padding: 8px 12px; border: 1px solid #ddd; background-color: #f2f2f2; text-align: left;">Harga</th>
                </tr>
            </thead>
            <tbody>
                @php $counter = 1; @endphp
                
                @if($pemesanan->id_dekorasi)
                    @php $total += $dekorasi->harga_dekorasi; @endphp
                    <tr>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $counter++ }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Dekorasi</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $dekorasi->nama_dekorasi }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Rp {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</td>
                    </tr>
                @endif
        
                @if($pemesanan->id_dokumentasi)
                    @php $total += $dokumentasi->harga_dokumentasi; @endphp
                    <tr>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $counter++ }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Dokumentasi</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $dokumentasi->nama_dokumentasi }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Rp {{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</td>
                    </tr>
                @endif
        
                @if($pemesanan->id_hiburan)
                    @php $total += $hiburan->harga_hiburan; @endphp
                    <tr>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $counter++ }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Hiburan</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $hiburan->nama_hiburan }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Rp {{ number_format($hiburan->harga_hiburan, 0, ',', '.') }}</td>
                    </tr>
                @endif
        
                @if($pemesanan->id_undangan)
                    @php $total += $undangan->harga_undangan; @endphp
                    <tr>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $counter++ }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Undangan</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $undangan->nama_undangan }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Rp {{ number_format($undangan->harga_undangan, 0, ',', '.') }}</td>
                    </tr>
                @endif
        
                @if($pemesanan->id_main_course)
                    @php $total += $mainCourse->harga_main_course; @endphp
                    <tr>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $counter++ }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Main Course</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $mainCourse->nama_main_course }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Rp {{ number_format($mainCourse->harga_main_course, 0, ',', '.') }}</td>
                    </tr>
                @endif

                @if($pemesanan->id_gedung)
                    @php $total += $gedung->harga_gedung; @endphp
                    <tr>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $counter++ }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Gedung</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">{{ $gedung->nama_gedung }}</td>
                        <td style="padding: 8px 12px; border: 1px solid #ddd;">Rp {{ number_format($gedung->harga_gedung, 0, ',', '.') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
        
        <!-- Total Pembayaran -->
        <div style="font-size: 20px; font-weight: bold; text-align: right; margin-top: 20px;">
            <p><strong>Total Pembayaran: </strong>Rp {{ number_format($total, 0, ',', '.') }}</p>
        </div>
    
        
        <div style="text-align: center; margin-top: 20px; font-size: 14px;">
            <a href="{{ route('invoice.download', ['id' => $pemesanan->id_pemesanan]) }}" 
                style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
                Download Invoice
            </a>
                         {{-- <button onclick="window.print()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 15px;">Cetak Invoice</button> --}}
            {{-- <a href="{{ route('home.testimoni') }}" style="background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; cursor: pointer; margin-top: 15px; display: inline-block;">Next</a> --}}
            <a href="{{ route('home.pembayaran', ['id_pemesanan' => $pemesanan->id_pemesanan]) }}" style="background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; cursor: pointer; margin-top: 15px; display: inline-block;">Next</a>

        </div>
    </div>

    @include('home.footer')
</body>
</html>
