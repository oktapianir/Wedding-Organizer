<div class="container-fluid sticky-top px-0">
    <div class="container-fluid">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl" id="navBar">
                <a href="index.html" class="navbar-brand">
                    <h4 class="text-primary display-6 fw-bold mb-0">Wedding Organizer</h4>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="{{ route('home.index') }}"
                            class="nav-item nav-link {{ Request::is('user/dashboard') ? 'active' : '' }}">Beranda</a>
                        <a href="{{ route('tentangkami') }}"
                            class="nav-item nav-link {{ Request::is('tentangkami') ? 'active' : '' }}">Tentang</a>
                        <a href="{{ route('pelayanan') }}"
                            class="nav-item nav-link {{ Request::is('pelayanan') ? 'active' : '' }}">Pelayanan</a>
                        <a href="{{ route('kontak') }}"
                            class="nav-item nav-link {{ Request::is('kontak') ? 'active' : '' }}">Kontak</a>
                        <a href="{{ route('home.testimonigeneral') }}"
                            class="nav-item nav-link {{ Request::is('testimoni/general') ? 'active' : '' }}">Testimoni</a>
                        <a href="{{ route('home.histori') }}"
                            class="nav-item nav-link {{ Request::is('histori') ? 'active' : '' }}">Histori</a>
                    </div>

                    <!-- Untuk User yang belum login -->
                    @guest
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <a href="{{ route('login') }}"
                                class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Login</a>
                        </div>
                    @endguest

                    <!-- Untuk User yang sudah login -->
                    @auth
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <!-- Ikon Profil di Navbar -->
                            <a href="#" class="text-primary ms-4 position-relative" data-bs-toggle="modal"
                                data-bs-target="#profileModal">
                                <i class="fas fa-user" style="font-size: 24px;"></i> <!-- Ikon Profil -->
                            </a>
                            <a href="{{ route('home.keranjang') }}" class="text-primary ms-4 position-relative">
                                <i class="fas fa-shopping-cart" style="font-size: 24px;"></i> <!-- Ikon Keranjang -->
                                <span id="cart-count" class="badge bg-danger rounded-pill position-absolute" style="top: -10px; right: -10px;">0</span>
                            </a>
                            
                            {{-- <button class="text-primary ms-4 position-relative border-0 bg-transparent" data-bs-toggle="modal" onclick="showCart()">
                            <i class="fas fa-shopping-cart" style="font-size: 24px;"></i> <!-- Ikon Keranjang -->
                            <span id="cart-count" class="badge bg-danger rounded-pill position-absolute" style="top: -10px; right: -10px;">0</span>
                            </button> --}}
                            <!-- Button untuk menampilkan modal keranjang -->
                            {{-- <button class="text-primary ms-4 position-relative border-0 bg-transparent"
                                data-bs-toggle="modal" data-bs-target="#cartModal" onclick="showCart()">
                                <i class="fas fa-shopping-cart" style="font-size: 24px;"></i> <!-- Ikon Keranjang -->
                                <span id="cart-count" class="badge bg-danger rounded-pill position-absolute"
                                    style="top: -10px; right: -10px;">0</span>
                            </button> --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit"
                                    class="btn btn-danger btn-primary-outline-0 py-2 px-4 ms-4">Logout</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </nav>
        </div>
    </div>
</div>



<!-- Tambahkan Modal di Bawah Navbar -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Profil Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <!-- Sidebar/Profile Navigation -->
                        <div class="col-md-3">
                            <div class="list-group">
                                <a href="#dataDiri" class="list-group-item list-group-item-action active"
                                    data-bs-toggle="tab">Data Diri</a>
                                {{-- <a href="#historiPemesanan" class="list-group-item list-group-item-action"
                                    data-bs-toggle="tab">Histori Pemesanan</a> --}}
                            </div>
                        </div>

                        <!-- Tab Content -->
                        <div class="col-md-9">
                            <div class="tab-content">
                                <!-- Tab Data Diri -->
                                <div class="tab-pane fade show active" id="dataDiri">
                                    <h5>Data Diri</h5>
                                    <div class="modal-body">
                                        @if (Auth::check())
                                            <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
                                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                            <p><strong>No. Telepon:</strong> {{ Auth::user()->no_handphone }}</p>
                                            <p><strong>Alamat:</strong> {{ Auth::user()->alamat }}</p>
                                        @else
                                            <p>Silakan login untuk melihat informasi profil Anda.</p>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        @if (Auth::check())
                                            <a href="{{ route('home.profil') }}" class="btn btn-primary">Edit Profil</a>
                                        @endif
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>

                                <!-- Tab Histori Pemesanan -->
                                {{-- <div class="tab-pane fade" id="historiPemesanan">
                                    <h5>Histori Pemesanan</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="color: black; border-color: black;">
                                            <thead>
                                                <tr style="border-color: black;">
                                                    <th>ID Histori</th>
                                                    <th>ID Customer</th>
                                                    <th>ID Pemesanan</th>
                                                    <th>Tanggal Pemesanan</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($historis as $histori)
                                                <tr style="border-color: black;">
                                                    <td>{{ $histori->id_histori }}</td>
                                                    <td>{{ $histori->id_customer }}</td>
                                                    <td>{{ $histori->id_pemesanan }}</td>
                                                    <td>{{ $histori->tanggal_pemesanan }}</td>
                                                    <td>{{ $histori->status_pemesanan }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>                                            
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>                            --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Keranjang -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Keranjang Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="cartModalBody">
                <!-- Item keranjang akan ditampilkan di sini -->
            </div>
            <div class="modal-footer">
                <p>Total: <span id="cartTotal">Rp 0</span></p>
                <button type="button" class="btn btn-primary" id="checkoutButton">Checkout</button>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        updateCartCount();
    
        window.addToCart = function (id_dekorasi, nama_dekorasi, harga_dekorasi, gambar_url) {
            cartItems.push({ id: id_dekorasi, name: nama_dekorasi, price: harga_dekorasi, image: gambar_url });
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            updateCartCount();
            
            // Tampilkan notifikasi modal
            var notificationModal = new bootstrap.Modal(document.getElementById('notificationModal'));
            notificationModal.show();
            
            // Perbarui tampilan keranjang di modal
            updateCartModal();
        };
    
        function updateCartCount() {
            const cartCount = cartItems.length;
            document.getElementById('cart-count').textContent = cartCount > 0 ? cartCount : '';
        }
    
        function updateCartModal() {
            const cartModalBody = document.getElementById('cartModalBody');
            cartModalBody.innerHTML = ''; 
    
            if (cartItems.length === 0) {
                cartModalBody.innerHTML = '<p style="text-align: center; margin: 2rem 0;">Keranjang Anda kosong.</p>';
                return;
            }
    
            cartItems.forEach((item, index) => {
                const itemDiv = document.createElement('div');
                itemDiv.classList.add('cart-item');
                itemDiv.style.cssText = 'display: flex; align-items: center; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #dee2e6;';
                itemDiv.innerHTML = `
                    <div style="margin-right: 1rem;">
                        <input type="checkbox" id="item-${index}" class="form-check-input" data-price="${item.price}">
                    </div>
                    <img src="${item.image || 'placeholder.jpg'}" alt="${item.name}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; margin-right: 1rem;">
                    <div style="flex-grow: 1;">
                        <h6 style="margin-bottom: 0.25rem;">${item.name}</h6>
                        <p style="margin-bottom: 0; color: #6c757d;">Rp ${item.price.toLocaleString()}</p>
                    </div>
                    <button class="btn btn-sm text-danger" onclick="removeItem(${index})" style="background: none; border: none;">
                        <i class="fas fa-trash"></i>
                    </button>
                `;
                cartModalBody.appendChild(itemDiv);
            });
    
            updateTotalPrice();
        }
    
        window.showCart = function () {
            updateCartModal();
            var cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
            cartModal.show();
        };
    
        window.removeItem = function (index) {
            cartItems.splice(index, 1);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            updateCartCount();
            updateCartModal();
        };
    
        function updateTotalPrice() {
            let total = 0;
            const checkboxes = document.querySelectorAll('.form-check-input');
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    total += parseFloat(checkbox.getAttribute('data-price'));
                }
            });
            document.getElementById('cartTotal').textContent = `Rp ${total.toLocaleString()}`;
        }
    
        document.getElementById('checkoutButton').addEventListener('click', function () {
            console.log('Proceeding to checkout');
        });
    
        function reattachCartIconListener() {
            const cartIcon = document.getElementById('cart-icon');
            if (cartIcon) {
                cartIcon.addEventListener('click', function () {
                    showCart();
                });
            }
        }
    
        reattachCartIconListener();
    });
</script> --}}


