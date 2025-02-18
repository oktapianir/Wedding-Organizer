{{-- <!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
</head>
<body>
    <div class="container" style="max-width: 800px; margin: 20px auto; background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #e74c3c; font-family: Georgia, serif; margin-bottom: 20px;">Ringkasan Pemesanan</h2>

        <div class="container">
            <h3>Pembayaran Pemesanan</h3>

            <!-- Form Upload Bukti Pembayaran -->
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
                    <input type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bukti_pembayaran">Upload Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload Bukti Pembayaran</button>
            </form>
            
        </div>

        <!-- Modal Struktur untuk Success -->
        <div id="successModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); align-items: center; justify-content: center; z-index: 1000;">
            <div style="background: white; padding: 20px; border-radius: 10px; max-width: 500px; width: 90%; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transform: scale(0.8); opacity: 0; animation: fadeInScale 0.3s forwards;">
                <h2>Berhasil</h2>
                <p>{{ session('success_message') }}</p>
                <button onclick="closeModal('successModal')" style="background-color: #fd5d5d; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 15px;">Tutup</button>
            </div>
        </div>

        <!-- Modal Struktur untuk Peringatan -->
        <div id="warningModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); align-items: center; justify-content: center; z-index: 1000;">
            <div style="background: white; padding: 20px; border-radius: 10px; max-width: 500px; width: 90%; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transform: scale(0.8); opacity: 0; animation: fadeInScale 0.3s forwards;">
                <h2>Peringatan</h2>
                <p>Belum bisa mengupload bukti pembayaran karena status pemesanan masih <strong>pending</strong>.</p>
                <button onclick="closeModal('warningModal')" style="background-color: #fd5d5d; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 15px;">Tutup</button>
            </div>
        </div>

        <!-- Inline CSS untuk Animasi Modal -->
        <style>
            /* Fade-in and scale animation */
            @keyframes fadeInScale {
                to {
                    transform: scale(1);
                    opacity: 1;
                }
            }
        </style>

        <!-- JavaScript untuk Mengontrol Tampilan Modal dan Validasi Status -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Tampilkan modal sukses jika ada pesan sukses
                @if(session('success_message'))
                    document.getElementById("successModal").style.display = "flex";
                @endif

                // Cek status pemesanan
                let statusPemesanan = "{{ $pemesanan->status_pemesanan ?? '' }}";
                
                // Tambahkan event listener pada form submit
                document.getElementById("uploadForm").addEventListener("submit", function(event) {
                    if (statusPemesanan === "pending") {
                        event.preventDefault();  // Mencegah submit
                        document.getElementById("warningModal").style.display = "flex";  // Tampilkan modal warning
                    }
                });
            });

            function closeModal(modalId) {
                document.getElementById(modalId).style.display = "none";
            }
        </script>
    </div>

    @include('home.footer')
</body>
</html> 

 --}}


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
    <div class="container" style="max-width: 800px; margin: 20px auto; background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #e74c3c; font-family: Georgia, serif; margin-bottom: 20px;">Ringkasan Pemesanan</h2>

        <div class="container">
            <h3>Pembayaran Pemesanan</h3>

            <!-- Form Upload Bukti Pembayaran -->
            {{-- <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($pemesanan))
                <input type="hidden" name="pemesanan_id" value="{{ $pemesanan->id_pemesanan }}">
                @else
                    <p>Pemesanan tidak ditemukan</p>
                @endif
                <input type="hidden" name="pemesanan_id" value="{{ isset($pemesanan) ? $pemesanan->id_pemesanan : '' }}">
                <input type="hidden" name="pemesanan_id" value="{{ old('pemesanan_id', isset($pemesanan) ? $pemesanan->id_pemesanan : '') }}">
                <input type="hidden" name="pemesanan_id" value="{{ $pemesanan->id_pemesanan ?? '' }}">
                <div class="form-group">
                    <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
                    <input type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bukti_pembayaran">Upload Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload Bukti Pembayaran</button>
                <script>
                    console.log('Pemesanan ID:', document.querySelector('input[name="pemesanan_id"]').value);
                </script>
            </form> --}}
            <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="pemesanan_id" value="{{ $pemesanan->id_pemesanan }}">
            
                <div class="form-group mb-3">
                    <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
                    <input type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" class="form-control" required style="color: black">
                </div>
            
                <div class="form-group mb-3">
                    <label for="bukti_pembayaran">Upload Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" required>
                </div>
            
                <button type="submit" class="btn btn-primary">Upload Bukti Pembayaran</button>
            </form> 
            <a href="{{ route('home.index') }}" class="btn btn-secondary" onclick="showSuccessAlert()">Next</a>

        </div>

        <!-- Modal Struktur untuk Success -->
        <div id="successModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); align-items: center; justify-content: center; z-index: 1000;">
            <div style="background: white; padding: 20px; border-radius: 10px; max-width: 500px; width: 90%; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transform: scale(0.8); opacity: 0; animation: fadeInScale 0.3s forwards;">
                <h2>Berhasil</h2>
                <p>{{ session('success_message') }}</p>
                <button onclick="closeModal('successModal')" style="background-color: #fd5d5d; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 15px;">Tutup</button>
            </div>
        </div>

        <!-- Modal Struktur untuk Peringatan -->
        <div id="warningModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); align-items: center; justify-content: center; z-index: 1000;">
            <div style="background: white; padding: 20px; border-radius: 10px; max-width: 500px; width: 90%; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transform: scale(0.8); opacity: 0; animation: fadeInScale 0.3s forwards;">
                <h2>Peringatan</h2>
                <p>Belum bisa mengupload bukti pembayaran karena status pemesanan masih <strong>pending</strong>.</p>
                <button onclick="closeModal('warningModal')" style="background-color: #fd5d5d; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 15px;">Tutup</button>
            </div>
        </div>

        <!-- Inline CSS untuk Animasi Modal -->
        <style>
            /* Fade-in dan animasi scale */
            @keyframes fadeInScale {
                to {
                    transform: scale(1);
                    opacity: 1;
                }
            }
        </style>

        <script>
            function showSuccessAlert() {
                alert("Pembayaran berhasil! Terima kasih sudah menggunakan jasa kami.");
            }
        </script>

        <!-- JavaScript untuk Mengontrol Tampilan Modal dan Validasi Status -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
            // Tampilkan modal sukses jika ada pesan sukses
            @if(session('success_message'))
                document.getElementById("successModal").style.display = "flex";
            @endif

            // Cek status pemesanan
            let statusPemesanan = "{{ $pemesanan->status_pemesanan ?? '' }}";
            
            // Jika status pemesanan pending, tampilkan modal warning
            if (statusPemesanan === "pending") {
                document.getElementById("warningModal").style.display = "flex";  // Tampilkan modal warning
            }
        });
            function closeModal(modalId) {
                document.getElementById(modalId).style.display = "none";
            }
        </script>
    </div>

    @include('home.footer')
</body>
</html>

