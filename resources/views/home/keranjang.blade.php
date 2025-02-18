{{-- <!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('home.header')
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; color: #333;">
    <div style="max-width: 1000px; margin: 0 auto; background-color: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 30px;">
        <h1 style="color: #fd5d5d; text-align: center; margin-bottom: 30px; font-size: 2.5em;">Keranjang Belanja</h1>
        
        <nav style="background-color: #f0f0f0; padding: 10px; border-radius: 6px; margin-bottom: 30px; display: flex; justify-content: space-between; overflow-x: auto; scrollbar-width: none; -ms-overflow-style: none;">
            <a href="/user/gedung" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Gedung</a>
            <a href="/user/dekorasi" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Dekorasi</a>
            <a href="/user/katering" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Katering</a>
            <a href="/user/hiburan" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Hiburan</a>
            <a href="/user/dokumentasi" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Dokumentasi</a>
            <a href="/user/tatarias" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Tata Rias</a>
            <a href="/user/souvenir" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Souvenir</a>
            <a href="/user/undangan" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Undangan</a>
        </nav>

        @if(count($cart) > 0)
            <form>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                    <thead style="background-color: #fd5d5d; color: white;">
                        <tr>
                            <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">Pilih</th>
                            <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">Nama Item</th>
                            <th style="padding: 15px; text-align: right; border-bottom: 1px solid #e0e0e0;">Harga</th>
                            <th style="padding: 15px; text-align: center; border-bottom: 1px solid #e0e0e0;">Kuantitas</th>
                            <th style="padding: 15px; text-align: center; border-bottom: 1px solid #e0e0e0;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $index => $item)
                            <tr style="border-bottom: 1px solid #e0e0e0;">
                                <td style="padding: 15px;">
                                    <input type="checkbox" id="item{{ $index }}" name="selectedItems[]" value="{{ $index }}" onchange="updateTotal()" style="transform: scale(1.5); margin-right: 10px;">
                                </td>
                                <td style="padding: 15px;">
                                    <label for="item{{ $index }}">
                                        {{ $item['nama_dekorasi'] ?? $item['bahan_undangan'] ?? $item['nama_hiburan'] ?? $item['nama_paket_dokumentasi'] ?? $item['nama_paket_mainC'] ?? 'Unknown Item' }}
                                    </label>
                                </td>
                                <td style="padding: 15px; text-align: right;">
                                    Rp {{ number_format($item['harga_dekorasi'] ?? $item['harga_undangan'] ?? $item['harga_hiburan'] ?? $item['harga_dokumentasi'] ?? $item['harga_paket_mainC'], 0, ',', '.') }}
                                </td>
                                <td style="padding: 15px; text-align: center;">
                                    <input type="number" name="quantity[{{ $index }}]" value="{{ $item['kuantitas'] ?? 1 }}" min="1" style="width: 50px; text-align: center;" onchange="updateTotal()">
                                </td>
                                <td style="padding: 15px; text-align: center;">
                                    <form method="POST" action="{{ route('cart.remove', $index) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; cursor: pointer; color: #fd5d5d; font-size: 20px;">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>                                    
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>

                <form action="{{ route('checkout.showCheckout') }}" method="GET">
                    @csrf
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 30px; padding-top: 20px; border-top: 2px solid #e0e0e0;">
                        <p>Total: <span id="total" style="font-size: 24px; font-weight: bold; color: #fd5d5d;">Rp 0</span></p>
                        <button type="submit" id="checkoutBtn" style="background-color: #fd5d5d; color: white; border: none; padding: 12px 25px; border-radius: 4px; cursor: pointer; font-size: 18px;" disabled>Pesan Sekarang</button>
                    </div>
                </form>              
                
            </form>
        @else
            <p style="text-align: center; color: #666; font-size: 18px; margin-top: 50px;">Keranjang Anda kosong.</p>
        @endif

    </div>

    <script>
        function updateTotal() {
            let total = 0;
            const checkboxes = document.querySelectorAll('input[name="selectedItems[]"]');
            let anyChecked = false;

            checkboxes.forEach((checkbox, index) => {
                if (checkbox.checked) {
                    anyChecked = true;
                    const priceElement = checkbox.closest('tr').querySelector('td:nth-child(3)');
                    const quantityElement = checkbox.closest('tr').querySelector('input[type="number"]');
                    const price = parseInt(priceElement.textContent.replace(/\D/g, ''));
                    const quantity = parseInt(quantityElement.value);
                    total += price * quantity;
                }
            });

            document.getElementById('total').textContent = 'Rp ' + total.toLocaleString('id-ID');
            document.getElementById('checkoutBtn').disabled = !anyChecked;
        }

        updateTotal();
    </script>

    @include('home.footer')
</body>
</html> --}}

<!-- Form untuk memilih item yang akan dikirim ke halaman checkout -->
{{-- <form action="{{ route('cart.checkout') }}" method="POST">
    @csrf
    @foreach ($cart as $index => $item)
        <div>
            <h4>{{ $item['nama_dekorasi'] ?? $item['bahan_undangan'] ?? $item['nama_hiburan'] ?? $item['nama_paket_dokumentasi'] ?? $item['nama_paket_mainC'] }}</h4>
            <p>{{ $item['harga_dekorasi'] ?? $item['harga_undangan'] ?? $item['harga_hiburan'] ?? $item['harga_dokumentasi'] ?? $item['harga_paket_mainC'] }}</p>

            <!-- Checkbox untuk memilih item -->
            <input type="checkbox" name="selected_items[]" value="{{ $index }}" id="item-{{ $index }}">
            <label for="item-{{ $index }}">Pilih untuk checkout</label>
        </div>
    @endforeach
    <!-- Tombol untuk melanjutkan ke halaman checkout -->
    <button type="submit">Lanjutkan ke Checkout</button>
</form> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('home.header')
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; color: #333;">
    <div style="max-width: 1000px; margin: 0 auto; background-color: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 30px;">
        <h1 style="color: #fd5d5d; text-align: center; margin-bottom: 30px; font-size: 2.5em;">Keranjang Belanja</h1>
        
        <nav style="background-color: #f0f0f0; padding: 10px; border-radius: 6px; margin-bottom: 30px; display: flex; justify-content: space-between; overflow-x: auto; scrollbar-width: none; -ms-overflow-style: none;">
            <a href="/user/gedung" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Gedung</a>
            <a href="/user/dekorasi" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Dekorasi</a>
            <a href="/user/katering" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Katering</a>
            <a href="/user/hiburan" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Hiburan</a>
            <a href="/user/dokumentasi" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Dokumentasi</a>
            <a href="/user/tatarias" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Tata Rias</a>
            <a href="/user/souvenir" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Souvenir</a>
            <a href="/user/undangan" style="color: #fd5d5d; font-weight: bold; text-decoration: none; white-space: nowrap; padding: 5px 10px; font-size: 0.9em;">Undangan</a>
        </nav>

        @if(count($cart) > 0)
            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                    <thead style="background-color: #fd5d5d; color: white;">
                        <tr>
                            <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">Pilih</th>
                            <th style="padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0;">Nama Item</th>
                            <th style="padding: 15px; text-align: right; border-bottom: 1px solid #e0e0e0;">Harga</th>
                            <th style="padding: 15px; text-align: center; border-bottom: 1px solid #e0e0e0;">Kuantitas</th>
                            <th style="padding: 15px; text-align: center; border-bottom: 1px solid #e0e0e0;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $index => $item)
                            <tr style="border-bottom: 1px solid #e0e0e0;">
                                <td style="padding: 15px;">
                                    <input type="checkbox" 
                                           id="item-{{ $index }}" 
                                           name="selected_items[]" 
                                           value="{{ $index }}" 
                                           onchange="updateTotal()"
                                           style="transform: scale(1.5); margin-right: 10px;">
                                </td>
                                <td style="padding: 15px;">
                                    {{--bener--}}
                                    {{-- <label for="item-{{ $index }}">
                                        {{ $item['nama_dekorasi'] ?? $item['bahan_undangan'] ?? $item['nama_hiburan'] ?? $item['nama_paket_dokumentasi'] ?? $item['nama_paket_mainC'] ?? 'Unknown Item' }}
                                    </label> --}}
                                    <label for="item-{{ $index }}">
                                        {{ $item['nama_dekorasi'] ?? $item['bahan_undangan'] ?? $item['nama_hiburan'] ?? $item['nama_paket_dokumentasi'] ?? $item['nama_paket_mainC'] ?? $item['nama_gedung'] ?? 'Unknown Item' }}
                                    </label>
                                </td>
                                <td style="padding: 15px; text-align: right;">
                                    {{-- Rp {{ number_format($item['harga_dekorasi'] ?? $item['harga_undangan'] ?? $item['harga_hiburan'] ?? $item['harga_dokumentasi'] ?? $item['harga_paket_mainC'], 0, ',', '.') }} --}}
                                    Rp {{ number_format($item['harga_dekorasi'] ?? $item['harga_undangan'] ?? $item['harga_hiburan'] ?? $item['harga_dokumentasi'] ?? $item['harga_paket_mainC'] ?? $item['harga_gedung'], 0, ',', '.') }}
                                </td>
                                {{--bener--}}
                                {{-- <td style="padding: 15px; text-align: center;">
                                    <input type="number" 
                                           name="quantity[{{ $index }}]" 
                                           value="{{ $item['kuantitas'] ?? 1 }}" 
                                           min="1" 
                                           style="width: 50px; text-align: center;" 
                                           onchange="updateTotal()">
                                </td> --}}
                                <td style="padding: 15px; text-align: center;">
                                    @if(isset($item['kapasitas_gedung']) && $item['kapasitas_gedung'] > 0)
                                        <input type="number" 
                                               name="quantity[{{ $index }}]" 
                                               value="{{ $item['kapasitas_gedung'] }}" 
                                               min="1" 
                                               style="width: 50px; text-align: center;" 
                                               onchange="updateTotal()">
                                    @else
                                        <input type="number" 
                                               name="quantity[{{ $index }}]" 
                                               value="{{ $item['kuantitas'] ?? 1 }}" 
                                               min="1" 
                                               style="width: 50px; text-align: center;" 
                                               onchange="updateTotal()">
                                    @endif
                                </td>                                
                                <td style="padding: 15px; text-align: center;">
                                    <form method="POST" action="{{ route('cart.remove', $index) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; cursor: pointer; color: #fd5d5d; font-size: 20px;">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 30px; padding-top: 20px; border-top: 2px solid #e0e0e0;">
                    <p>Total: <span id="total" style="font-size: 24px; font-weight: bold; color: #fd5d5d;">Rp 0</span></p>
                    <button type="submit" 
                            id="checkoutBtn" 
                            style="background-color: #fd5d5d; color: white; border: none; padding: 12px 25px; border-radius: 4px; cursor: pointer; font-size: 18px;" 
                            disabled>
                        Lanjutkan ke Checkout
                    </button>
                </div>
            </form>
        @else
            <p style="text-align: center; color: #666; font-size: 18px; margin-top: 50px;">Keranjang Anda kosong.</p>
        @endif
    </div>

    <script>
        function updateTotal() {
            let total = 0;
            const checkboxes = document.querySelectorAll('input[name="selected_items[]"]');
            let anyChecked = false;

            checkboxes.forEach((checkbox, index) => {
                if (checkbox.checked) {
                    anyChecked = true;
                    const priceElement = checkbox.closest('tr').querySelector('td:nth-child(3)');
                    const quantityElement = checkbox.closest('tr').querySelector('input[type="number"]');
                    const price = parseInt(priceElement.textContent.replace(/\D/g, ''));
                    const quantity = parseInt(quantityElement.value);
                    total += price * quantity;
                }
            });

            document.getElementById('total').textContent = 'Rp ' + total.toLocaleString('id-ID');
            document.getElementById('checkoutBtn').disabled = !anyChecked;
        }

        updateTotal();
    </script>

    @include('home.footer')
</body>
</html>
