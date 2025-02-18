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
    <div class="container-fluid RSVP-form py-5" id="profileForm">
        <div class="container py-5">
            <div class="mb-5 text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-primary">Profil</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="p-5 border-secondary position-relative" style="border-style: double;">
                         <form action="{{ route('profile.update') }}" method="POST"> <!-- Ganti dengan route yang sesuai -->
                            @csrf
                            <div class="row gx-4 gy-3">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="name" class="form-label text-dark">Nama</label>
                                        <input type="text" class="form-control py-3 border-0" id="name" name="name" placeholder="Masukkan nama" required style="color: black;">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="email" class="form-label text-dark">Email</label>
                                        <input type="email" class="form-control py-3 border-0" id="email" name="email" placeholder="Masukkan email" required style="color: black;">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="phone" class="form-label text-dark">No. Telepon</label>
                                        <input type="tel" class="form-control py-3 border-0" id="phone" name="phone" placeholder="Masukkan nomor telepon" required style="color: black;">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="address" class="form-label text-dark">Alamat</label>
                                        <textarea class="form-control py-3 border-0" id="address" name="address" rows="3" placeholder="Masukkan alamat" required style="color: black;"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                                    <button type="submit" class="btn btn-primary btn-primary-outline-0 py-3 px-5">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan Bootstrap JS untuk interaksi (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('home.footer')
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.header')
</head>
<body>
    <div class="container-fluid RSVP-form py-5" id="profileForm">
        <div class="container py-5">
            <div class="mb-5 text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-primary">Profil</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="p-5 border-secondary position-relative" style="border-style: double;">
                        <form action="{{ route('profile.update') }}" method="POST"> <!-- Ganti dengan route yang sesuai -->
                            @csrf
                            <div class="row gx-4 gy-3">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="name" class="form-label text-dark">Nama</label>
                                        <input type="text" class="form-control py-3 border-0" id="name" name="name" 
                                               placeholder="Masukkan nama" value="{{ old('name', $user->name) }}" required style="color: black;">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="email" class="form-label text-dark">Email</label>
                                        <input type="email" class="form-control py-3 border-0" id="email" name="email" 
                                               placeholder="Masukkan email" value="{{ old('email', $user->email) }}" required style="color: black;">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="phone" class="form-label text-dark">No. Telepon</label>
                                        <input type="tel" class="form-control py-3 border-0" id="phone" name="phone" 
                                               placeholder="Masukkan nomor telepon" value="{{ old('no_handphone', $user->no_handphone) }}" required style="color: black;">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="form-group">
                                        <label for="address" class="form-label text-dark">Alamat</label>
                                        <textarea class="form-control py-3 border-0" id="address" name="address" rows="3" 
                                                  placeholder="Masukkan alamat" required style="color: black;">{{ old('alamat', $user->alamat) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                                    <button type="submit" class="btn btn-primary btn-primary-outline-0 py-3 px-5">Simpan</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan Bootstrap JS untuk interaksi (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('home.footer')
</body>
</html>
