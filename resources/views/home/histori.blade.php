<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Histori Pemesanan</title>
    @include('home.header')
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; color: #333;">
    <div style="max-width: 1000px; margin: 0 auto; background-color: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 30px;">
        <h1 style="color: #fd5d5d; text-align: center; margin-bottom: 30px; font-size: 2.5em;">Histori Pemesanan</h1>

        @if(count($historis) > 0)
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
            <thead style="background-color: #fd5d5d; color: white;">
                <tr>
                    <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">ID Histori</th>
                    <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">ID Customer</th>
                    <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">ID Pemesanan</th>
                    <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">Tanggal Pemesanan</th>
                    <th style="padding: 15px; text-align: center; border-bottom: 1px solid #e0e0e0;">Status</th>
                    <th style="padding: 15px; text-align: center; border-bottom: 1px solid #e0e0e0;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historis as $histori)
                <tr style="border-bottom: 1px solid #e0e0e0;">
                    <td style="padding: 15px;">{{ $histori->id_histori }}</td>
                    <td style="padding: 15px;">{{ $histori->id_customer }}</td>
                    <td style="padding: 15px;">{{ $histori->id_pemesanan }}</td>
                    <td style="padding: 15px;">{{ $histori->tanggal_pemesanan }}</td>
                    <td style="padding: 15px; text-align: center;">
                        @if($histori->status_pemesanan === 'completed')
                            <span style="color: green; font-weight: bold;">{{ $histori->status_pemesanan }}</span>
                        @else
                            <span style="color: red; font-weight: bold;">{{ $histori->status_pemesanan }}</span>
                        @endif
                    </td>
                    <td style="padding: 15px; text-align: center;">
                        @if($histori->status_pemesanan === 'completed')
                            <a href="{{ route('home.testimoni', ['id_pemesanan' => $histori->id_pemesanan]) }}" 
                               style="background-color: #28a745; color: white; text-decoration: none; padding: 10px 20px; border-radius: 4px; font-weight: bold;">
                                Beri Testimoni
                            </a>
                        @else
                            <span style="color: gray; font-weight: bold;">Tidak Tersedia</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p style="text-align: center; color: #666; font-size: 18px; margin-top: 50px;">Tidak ada histori pemesanan.</p>
        @endif

        <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
            <a href="{{ route('home.index') }}" 
               style="background-color: #fd5d5d; color: white; text-decoration: none; padding: 12px 25px; border-radius: 4px; font-weight: bold;">
                Back
            </a>
        </div>
    </div>

    @include('home.footer')
</body>
</html>

