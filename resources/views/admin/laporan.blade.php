<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <form action="{{ route('admin.laporanOmzet') }}" method="GET" style="margin-bottom: 20px;">
        <label for="start_date">Tanggal Mulai:</label>
        <input type="date" name="start_date" id="start_date" required>
        
        <label for="end_date">Tanggal Akhir:</label>
        <input type="date" name="end_date" id="end_date" required>
        
        <button type="submit" style="margin-left: 10px;">Tampilkan</button>
    </form>    
    <h2>Laporan Omzet</h2>
<p>Periode: {{ \Carbon\Carbon::parse($start_date)->format('d M Y') }} - {{ \Carbon\Carbon::parse($end_date)->format('d M Y') }}</p> --}}

<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">ID Pemesanan</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Nama Pemesan</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Tanggal Pemesanan</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total Harga</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($pemesanan as $data)
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $data->id_pemesanan }}</td>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $data->nama }}</td>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ \Carbon\Carbon::parse($data->tanggal_pemesanan)->format('d M Y') }}</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Rp {{ number_format($data->harga_pemesanan, 0, ',', '.') }}</td>
        </tr>
        @endforeach --}}
    </tbody>
</table>

{{-- <h3 style="margin-top: 20px;">Total Omzet: Rp {{ number_format($total_omzet, 0, ',', '.') }}</h3> --}}

</body>
</html>