{{-- <!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
</head>
<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 20px; line-height: 1.6;">
    <div style="max-width: 1200px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <h1 style="text-align: center; color: #fd5d5d; font-size: 2.2em; margin-bottom: 30px; font-weight: 600;">Checkout</h1>

        <div style="display: flex; gap: 30px;">
            <!-- Left Column - Order Summary -->
            <div style="flex: 1; padding-right: 30px; border-right: 1px solid #e0e0e0;">
                <h2 style="font-size: 1.5em; color: #333; border-bottom: 2px solid #fd5d5d; padding-bottom: 10px; margin-bottom: 20px;">Item yang dipesan:</h2>
                
                @php $total = 0; @endphp <!-- Initialize total -->

                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($items as $item)
                        <li style="padding: 15px; border-bottom: 1px solid #e0e0e0; display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                            <!-- Dekorasi -->
                            @if(isset($item['nama_dekorasi']))
                                <div>
                                    <strong style="color: #333;">Dekorasi:</strong> 
                                    <span style="color: #666;">{{ $item['nama_dekorasi'] }}</span>
                                    @if(isset($item['kuantitas']))
                                        <span style="color: #666;">(Kuantitas: {{ $item['kuantitas'] }})</span>
                                    @endif
                                </div>
                                <span style="color: #fd5d5d; font-weight: 600;">Rp {{ number_format($item['harga_dekorasi'], 0, ',', '.') }}</span>
                                @php $total += $item['harga_dekorasi']; @endphp <!-- Add to total -->

                            <!-- Undangan -->
                            @elseif(isset($item['bahan_undangan']))
                                <div>
                                    <strong style="color: #333;">Undangan:</strong>
                                    <span style="color: #666;">{{ $item['bahan_undangan'] }}</span>
                                    @if(isset($item['kuantitas']))
                                        <span style="color: #666;">(Kuantitas: {{ $item['kuantitas'] }})</span>
                                    @endif
                                </div>
                                <span style="color: #fd5d5d; font-weight: 600;">Rp {{ number_format($item['harga_undangan'], 0, ',', '.') }}</span>
                                @php $total += $item['harga_undangan']; @endphp <!-- Add to total -->

                            <!-- Hiburan -->
                            @elseif(isset($item['nama_hiburan']))
                                <div>
                                    <strong style="color: #333;">Hiburan:</strong>
                                    <span style="color: #666;">{{ $item['nama_hiburan'] }}</span>
                                    @if(isset($item['kuantitas']))
                                        <span style="color: #666;">(Kuantitas: {{ $item['kuantitas'] }})</span>
                                    @endif
                                </div>
                                <span style="color: #fd5d5d; font-weight: 600;">Rp {{ number_format($item['harga_hiburan'], 0, ',', '.') }}</span>
                                @php $total += $item['harga_hiburan']; @endphp <!-- Add to total -->

                            <!-- Dokumentasi -->
                            @elseif(isset($item['nama_paket_dokumentasi']))
                                <div>
                                    <strong style="color: #333;">Dokumentasi:</strong>
                                    <span style="color: #666;">{{ $item['nama_paket_dokumentasi'] }}</span>
                                    @if(isset($item['kuantitas']))
                                        <span style="color: #666;">(Kuantitas: {{ $item['kuantitas'] }})</span>
                                    @endif
                                </div>
                                <span style="color: #fd5d5d; font-weight: 600;">Rp {{ number_format($item['harga_dokumentasi'], 0, ',', '.') }}</span>
                                @php $total += $item['harga_dokumentasi']; @endphp <!-- Add to total -->

                            <!-- Main Course -->
                            @elseif(isset($item['nama_paket_mainC']))
                                <div>
                                    <strong style="color: #333;">Main Course:</strong>
                                    <span style="color: #666;">{{ $item['nama_paket_mainC'] }}</span>
                                    @if(isset($item['kuantitas']))
                                        <span style="color: #666;">(Kuantitas: {{ $item['kuantitas'] }})</span>
                                    @endif
                                </div>
                                <span style="color: #fd5d5d; font-weight: 600;">Rp {{ number_format($item['harga_paket_mainC'], 0, ',', '.') }}</span>
                                @php $total += $item['harga_paket_mainC']; @endphp <!-- Add to total -->
                            @endif
                        </li>
                    @endforeach
                </ul>

                <!-- Display Total -->
                <div style="text-align: right; font-size: 1.2em; font-weight: 600; color: #fd5d5d; margin-top: 20px;">
                    Total: Rp {{ number_format($total, 0, ',', '.') }}
                </div>
            </div>


            <!-- Right Column - Form -->
            <div style="flex: 1; padding-left: 30px;">
                <h2 style="font-size: 1.5em; color: #333; border-bottom: 2px solid #fd5d5d; padding-bottom: 10px; margin-bottom: 20px;">Informasi Pemesan:</h2>
                <!-- Form -->
                <form method="POST" action="{{ route('checkout.processCheckout') }}" style="display: flex; flex-direction: column; gap: 20px;">
                    @csrf
                    
                    <!-- ID Pemesanan -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="id_pemesanan" style="font-size: 1.1em; color: #333; font-weight: 500;">ID Pemesanan</label>
                        <input type="text" 
                            id="id_pemesanan" 
                            name="id_pemesanan" 
                            value="{{ $id_pemesanan }}"  <!-- Gunakan variable yang dikirim dari controller -->
                    </div>

                    <!-- ID Customer -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="id_customer" style="font-size: 1.1em; color: #333; font-weight: 500;">ID Customer</label>
                        <input type="text" id="id_customer" name="id_customer" value="{{ Auth::id() }}" readonly 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em; background-color: #f0f0f0;">
                    </div>


                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="nama" style="font-size: 1.1em; color: #333; font-weight: 500;">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ Auth::user()->name ?? '' }}" required 
                               style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>

                    
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="no_telepon" style="font-size: 1.1em; color: #333; font-weight: 500;">Nomor Telepon</label>
                        <input type="tel" id="no_telepon" name="no_telepon" value="{{ Auth::user()->no_handphone ?? '' }}" required 
                               style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>
                    
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="alamat" style="font-size: 1.1em; color: #333; font-weight: 500;">Alamat Lengkap</label>
                        <textarea id="alamat" name="alamat" rows="3" required 
                                  style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em; resize: vertical;">{{ Auth::user()->alamat ?? '' }}</textarea>
                    </div>
                    

                    <!-- Tanggal Acara -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="tanggal_acara" style="font-size: 1.1em; color: #333; font-weight: 500;">Tanggal Acara</label>
                        <input type="date" id="tanggal_acara" name="tanggal_acara" required 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>

                    <!-- Tanggal Pemesanan -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="tanggal_pemesanan" style="font-size: 1.1em; color: #333; font-weight: 500;">Tanggal Pemesanan</label>
                        <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan" required 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>

                    <!-- Total Biaya -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="total_biaya" style="font-size: 1.1em; color: #333; font-weight: 500;">Total Biaya</label>
                        <input type="text" id="total_biaya_display" value="{{ number_format($total, 0, ',', '.') }}" readonly 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em; color: #fd5d5d; font-weight: 600;">
                    </div>

                    <!-- Input Hidden untuk Total Biaya yang Dikirim ke Database -->
                    <input type="hidden" name="total_biaya" value="{{ $total }}">



                    
                    <button type="submit" style="background-color: #fd5d5d; color: white; border: none; padding: 15px 30px; border-radius: 6px; cursor: pointer; font-size: 1.1em; font-weight: 600; margin-top: 20px; width: 100%;">
                        Lanjutkan Pembayaran
                    </button>
                </form>
            </div>
        </div>
    </div>
    @include('home.footer')
</body>
</html> --}}

{{-- <h1>Checkout</h1>
@foreach ($cart as $item)
    <div>
        <h4>{{ $item['nama_dekorasi'] ?? $item['bahan_undangan'] ?? $item['nama_hiburan'] ?? $item['nama_paket_dokumentasi'] ?? $item['nama_paket_mainC'] }}</h4>
        <p>{{ $item['harga_dekorasi'] ?? $item['harga_undangan'] ?? $item['harga_hiburan'] ?? $item['harga_dokumentasi'] ?? $item['harga_paket_mainC'] }}</p>
    </div>
@endforeach
<!-- Tombol untuk menyelesaikan pembelian -->
<form action="{{ route('cart.complete') }}" method="POST"> 
    @csrf
    <button type="submit">Selesaikan Pembelian</button>
</form> --}}

{{-- yg bener --}}
<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
</head>
<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 20px; line-height: 1.6;">
    <div style="max-width: 1200px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <h1 style="text-align: center; color: #fd5d5d; font-size: 2.2em; margin-bottom: 30px; font-weight: 600;">Checkout</h1>

        <div style="display: flex; gap: 30px;">
            <!-- Left Column - Order Summary -->
            <div style="flex: 1; padding-right: 30px; border-right: 1px solid #e0e0e0;">
                <h2 style="font-size: 1.5em; color: #333; border-bottom: 2px solid #fd5d5d; padding-bottom: 10px; margin-bottom: 20px;">Item yang dipesan:</h2>
                
                @php $total = 0; @endphp

                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($cart as $item)
                        <li style="padding: 15px; border-bottom: 1px solid #e0e0e0; display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                            <div>
                                <strong style="color: #333;">
                                    @if(isset($item['nama_dekorasi']))
                                        Dekorasi: 
                                        <span style="color: #666;">{{ $item['nama_dekorasi'] }}</span>
                                        @php $price = $item['harga_dekorasi']; @endphp
                                    @elseif(isset($item['bahan_undangan']))
                                        Undangan: 
                                        <span style="color: #666;">{{ $item['bahan_undangan'] }}</span>
                                        @php $price = $item['harga_undangan']; @endphp
                                    @elseif(isset($item['nama_hiburan']))
                                        Hiburan: 
                                        <span style="color: #666;">{{ $item['nama_hiburan'] }}</span>
                                        @php $price = $item['harga_hiburan']; @endphp
                                    @elseif(isset($item['nama_paket_dokumentasi']))
                                        Dokumentasi: 
                                        <span style="color: #666;">{{ $item['nama_paket_dokumentasi'] }}</span>
                                        @php $price = $item['harga_dokumentasi']; @endphp
                                    @elseif(isset($item['nama_paket_mainC']))
                                        Main Course: 
                                        <span style="color: #666;">{{ $item['nama_paket_mainC'] }}</span>
                                        @php $price = $item['harga_paket_mainC']; @endphp
                                    @elseif(isset($item['nama_gedung']))
                                        Gedung: 
                                        <span style="color: #666;">{{ $item['nama_gedung'] }}</span>
                                        @php $price = $item['harga_gedung']; @endphp
                                    @endif
                                </strong>
                            </div>
                            <span style="color: #fd5d5d; font-weight: 600;">Rp {{ number_format($price, 0, ',', '.') }}</span>
                            @php $total += $price; @endphp
                        </li>
                    @endforeach
                </ul>

                <!-- Display Total -->
                <div style="text-align: right; font-size: 1.2em; font-weight: 600; color: #fd5d5d; margin-top: 20px;">
                    Total: Rp {{ number_format($total, 0, ',', '.') }}
                </div>
            </div>

            <!-- Right Column - Form -->
            <div style="flex: 1; padding-left: 30px;">
                <h2 style="font-size: 1.5em; color: #333; border-bottom: 2px solid #fd5d5d; padding-bottom: 10px; margin-bottom: 20px;">Informasi Pemesan:</h2>
                
                <!-- Form -->
                 <form method="POST" action="{{ route('checkout.processCheckout') }}" style="display: flex; flex-direction: column; gap: 20px;">
                    @csrf

                     <!-- Tambahkan input hidden untuk selected_items -->
                    @foreach($cart as $item)
                    @if(isset($item['id_dekorasi']))
                        <input type="hidden" name="selected_items[]" value="{{ $item['id_dekorasi'] }}">
                    @elseif(isset($item['id_dokumentasi']))
                        <input type="hidden" name="selected_items[]" value="{{ $item['id_dokumentasi'] }}">
                    @endif
                    @endforeach
                    
                    <!-- ID Pemesanan -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="id_pemesanan" style="font-size: 1.1em; color: #333; font-weight: 500;">ID Pemesanan</label>
                        <input type="text" 
                            id="id_pemesanan" 
                            name="id_pemesanan" 
                            value="{{ $id_pemesanan }}" 
                    </div>

                    <!-- ID Customer -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="id_customer" style="font-size: 1.1em; color: #333; font-weight: 500;">ID Customer</label>
                        <input type="text" id="id_customer" name="id_customer" value="{{ Auth::id() }}" readonly 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em; background-color: #f0f0f0;">
                    </div>


                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="nama" style="font-size: 1.1em; color: #333; font-weight: 500;">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ Auth::user()->name ?? '' }}" required 
                               style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>

                    
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="no_telepon" style="font-size: 1.1em; color: #333; font-weight: 500;">Nomor Telepon</label>
                        <input type="tel" id="no_telepon" name="no_telepon" value="{{ Auth::user()->no_handphone ?? '' }}" required 
                               style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>
                    
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="alamat" style="font-size: 1.1em; color: #333; font-weight: 500;">Alamat Lengkap</label>
                        <textarea id="alamat" name="alamat" rows="3" required 
                                  style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em; resize: vertical;">{{ Auth::user()->alamat ?? '' }}</textarea>
                    </div>
                    

                    <!-- Tanggal Acara -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="tanggal_acara" style="font-size: 1.1em; color: #333; font-weight: 500;">Tanggal Acara</label>
                        <input type="date" id="tanggal_acara" name="tanggal_acara" required 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>

                    <!-- Tanggal Pemesanan -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="tanggal_pemesanan" style="font-size: 1.1em; color: #333; font-weight: 500;">Tanggal Pemesanan</label>
                        <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan" required 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em;">
                    </div>

                    <!-- Total Biaya -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label for="total_biaya" style="font-size: 1.1em; color: #333; font-weight: 500;">Total Biaya</label>
                        <input type="text" id="total_biaya_display" value="{{ number_format($total, 0, ',', '.') }}" readonly 
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 6px; font-size: 1em; color: #fd5d5d; font-weight: 600;">
                    </div>

                    <!-- Input Hidden untuk Total Biaya yang Dikirim ke Database -->
                    <input type="hidden" name="total_biaya" value="{{ $total }}">



                    
                    <button type="submit" style="background-color: #fd5d5d; color: white; border: none; padding: 15px 30px; border-radius: 6px; cursor: pointer; font-size: 1.1em; font-weight: 600; margin-top: 20px; width: 100%;">
                        Lanjutkan Pembayaran
                    </button>
                </form>
            </div>
        </div>
    </div>
    @include('home.footer')
</body>
</html>

