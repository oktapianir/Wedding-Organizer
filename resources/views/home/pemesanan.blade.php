<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pemesanan</title>
    @include('home.header')
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --custom-primary: #fd5d5d;
        }
        body {
            background-color: #f8f9fa;
        }
        .order-container {
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            padding: 2rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
        .order-title {
            color: var(--custom-primary);
            font-weight: bold;
            margin-bottom: 1.5rem;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control:focus {
            border-color: var(--custom-primary);
            box-shadow: 0 0 0 0.25rem rgba(253, 93, 93, 0.25);
        }
        .btn-custom-primary {
            background-color: var(--custom-primary);
            border-color: var(--custom-primary);
            color: white;
        }
        .btn-custom-primary:hover {
            background-color: #e54949;
            border-color: #e54949;
            color: white;
        }
        .item-card {
            background-color: #f8f9fa;
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            border: 1px solid #dee2e6;
        }
        .item-card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transform: translateY(-0.25rem);
        }
        .item-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #212529;
        }
        .item-details {
            color: #6c757d;
        }
        .item-price {
            font-size: 1.1rem;
            font-weight: bold;
            color: var(--custom-primary);
        }
    </style>
</head>
<body>
    <div class="container order-container">
        <h2 class="order-title text-center">Form Pemesanan</h2>
        
        <!-- Pesan Error Validasi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Form Pemesanan -->
        <form action="{{ route('pemesanan.store') }}" method="POST">
            @csrf
            
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="id_pemesanan" class="form-label">ID Pemesanan:</label>
                    <input type="text" name="id_pemesanan" class="form-control" value="{{ $id_pemesanan ?? '' }}" readonly>
                </div>
                
                <div class="col-md-6">
                    @if (Auth::check())
                        <label for="id_customer" class="form-label">ID Customer:</label>
                        <input type="text" name="id_customer" class="form-control" value="{{ Auth::user()->id }}" readonly>
                    @else
                        <p class="text-danger">User is not logged in.</p>
                    @endif
                </div>

                <!-- Field id_dekorasi -->
                <input type="hidden" name="id_dekorasi" value="{{ $dekorasi->id_dekorasi }}">
                
                <div class="col-md-6">
                    <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan:</label>
                    <input type="date" name="tanggal_pemesanan" class="form-control" required>
                </div>
                
                <div class="col-md-6">
                    <label for="tanggal_acara" class="form-label">Tanggal Acara:</label>
                    <input type="date" name="tanggal_acara" class="form-control" required>
                </div>
                
                <!-- Tambahkan Field Nama Pengantin -->
                <div class="col-md-6">
                    <label for="nama_pengantin" class="form-label">Nama Pemesan:</label>
                    <input type="text" name="nama_pengantin" class="form-control" style="color: black;" required>
                </div>

                <div class="col-md-6">
                    <label for="status_pemesanan" class="form-label">Status Pemesanan:</label>
                    <select name="status_pemesanan" class="form-select" style="color: black;" required>
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="canceled">Canceled</option>
                    </select>
                </div>
                
                
                <div class="col-md-6">
                    <label for="total_biaya" class="form-label">Total Biaya:</label>
                    <input type="number" name="total_biaya" class="form-control" id="total_biaya" required>
                    {{-- <input type="number" name="total_biaya" class="form-control" required> --}}
                </div>
            </div>
            
            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-custom-primary">Buat Pemesanan</button>
            </div>
        </form>
        
        <!-- Daftar Item yang Dipesan -->
        <h4 class="mt-5 mb-4" style="text-align: center">Item yang Dipesan</h4>
        @if(isset($dekorasi))
            <div class="item-card">
                <div class="item-title">{{ $dekorasi->nama_dekorasi }}</div>
                <div class="item-details">ID Dekorasi: {{ $dekorasi->id_dekorasi }}</div>
                <div class="item-price" id="harga_item">Rp {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</div>
                {{-- <div class="item-price">Rp {{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</div> --}}
            </div>
        @endif
    </div>
    
    @include('home.footer')
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

<!-- otomatis mengisi total biaya-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil elemen harga item
        var hargaItemElement = document.getElementById('harga_item');
        // Ambil elemen input total biaya
        var totalBiayaInput = document.getElementById('total_biaya');
        
        // Ambil harga item dalam format angka
        var hargaItem = {{ $dekorasi->harga_dekorasi ?? 0 }};
        
        // Setel total biaya dengan nilai harga item
        totalBiayaInput.value = hargaItem;
    });
</script>
