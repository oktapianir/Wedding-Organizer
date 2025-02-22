 {{-- <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">Weddeven</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin/dashboard" class="nav-item nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }} "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i> Vendor</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('/items')}}" class="dropdown-item">Item vendor</a>
                </div>
            </div>
            <a href="{{url('/admin/booking')}}" class="nav-item nav-link {{ request()->is('booking') ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i></i>Pemesanan</a>
            <a href="{{url('/admin/pembayaran')}}" class="nav-item nav-link  {{ request()->is('pembayaran') ? 'active' : '' }} "><i class="fa fa-chart-bar me-2"></i></i>Pembayaran</a>
            <a href="{{url('/admin/histori')}}" class="nav-item nav-link  {{ request()->is('histori') ? 'active' : '' }} "><i class="fa fa-history"></i>Histori</a>
            <a href="{{url('/admin/invoice')}}" class="nav-item nav-link  {{ request()->is('invoice') ? 'active' : '' }} "><i class="fa fa-info"></i></i>Invoice</a>
            <a href="{{url('/admin/laporan')}}" class="nav-item nav-link  {{ request()->is('laporan') ? 'active' : '' }} "><i class="far fa-file-alt me-2"></i></i>Laporan</a>
            <a href="{{url('testimoni')}}" class="nav-item nav-link {{ request()->is('testimoni') ? 'active' : '' }}" ><i class="fa fa-comment"></i>Testimoni</a>
        </div>
    </nav>
</div>
<!-- Sidebar End --> --}}

<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3" style="width: 250px; height: 100vh; position: fixed; overflow-y: auto; background: #F3F6F9;">
    <nav class="navbar bg-light navbar-light" style="padding: 0;">
        <!-- Logo/Brand -->
        <a href="index.html" class="navbar-brand mx-4 mb-3" style="padding-top: 20px; display: block;">
            <h3 class="text-primary">Weddeven</h3>
        </a>

        <!-- Fixed Profile Section -->
        <div style="padding: 15px 20px; margin-bottom: 20px; display: flex; align-items: center;">
            <!-- Profile Image Container -->
            <div style="position: relative; min-width: 32px; margin-right: 10px;">
                <img src="img/user.jpg" alt="User Profile" 
                     style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover; display: block;">
                <!-- Online Status Indicator -->
                <span style="position: absolute; bottom: 0; right: 0; 
                            width: 8px; height: 8px; 
                            background-color: #28a745; 
                            border: 1.5px solid #fff; 
                            border-radius: 50%;"></span>
            </div>
            
            <!-- Profile Text Container -->
            <div style="line-height: 1.2;">
                <div style="font-weight: 600; font-size: 14px; color: #333;">Jhon Doe</div>
                <div style="font-size: 12px; color: #666;">Admin</div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <div class="navbar-nav w-100">
            <!-- Dashboard -->
            <a href="/admin/dashboard" class="nav-item nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" 
               style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                <i class="fa fa-tachometer-alt me-2" style="width: 20px; text-align: center;"></i>
                <span>Dashboard</span>
            </a>

            <!-- Vendor Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" 
                   style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                    <i class="fa fa-laptop me-2" style="width: 20px; text-align: center;"></i>
                    <span>Vendor</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0" 
                     style="padding: 0; margin: 0; position: static; width: 100%; background: #f8f9fa !important;">
                    <a href="{{url('/items')}}" class="dropdown-item" 
                       style="padding: 10px 20px 10px 55px; transition: all 0.3s ease;">
                        <i class="fa fa-store me-2" style="width: 20px; text-align: center;"></i>
                        <span>Item vendor</span>
                    </a>
                </div>
            </div>

            <!-- Menu Items -->
            <a href="{{url('/admin/booking')}}" class="nav-item nav-link {{ request()->is('booking') ? 'active' : '' }}"
               style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                <i class="fa fa-keyboard me-2" style="width: 20px; text-align: center;"></i>
                <span>Pemesanan</span>
            </a>

            <a href="{{url('/admin/pembayaran')}}" class="nav-item nav-link {{ request()->is('pembayaran') ? 'active' : '' }}"
               style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                <i class="fa fa-chart-bar me-2" style="width: 20px; text-align: center;"></i>
                <span>Pembayaran</span>
            </a>

            <a href="{{url('/admin/histori')}}" class="nav-item nav-link {{ request()->is('histori') ? 'active' : '' }}"
               style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                <i class="fa fa-history me-2" style="width: 20px; text-align: center;"></i>
                <span>Histori</span>
            </a>

            <a href="{{url('/admin/invoice')}}" class="nav-item nav-link {{ request()->is('invoice') ? 'active' : '' }}"
               style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                <i class="fa fa-info me-2" style="width: 20px; text-align: center;"></i>
                <span>Invoice</span>
            </a>

            <a href="{{url('/admin/laporan')}}" class="nav-item nav-link {{ request()->is('laporan') ? 'active' : '' }}"
               style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                <i class="far fa-file-alt me-2" style="width: 20px; text-align: center;"></i>
                <span>Laporan</span>
            </a>

            <a href="{{url('testimoni')}}" class="nav-item nav-link {{ request()->is('testimoni') ? 'active' : '' }}"
               style="padding: 12px 20px; border-left: 3px solid transparent; transition: all 0.3s ease;">
                <i class="fa fa-comment me-2" style="width: 20px; text-align: center;"></i>
                <span>Testimoni</span>
            </a>
        </div>
    </nav>
</div>