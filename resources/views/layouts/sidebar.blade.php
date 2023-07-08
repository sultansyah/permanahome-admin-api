<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PermanaHome</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dasboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.permana-home-number.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Permana Home Number
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.berita.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Berita
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.formulir-instalasi.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Formulir Instalasi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.masukan.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Masukan PermanaHome App
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.berita.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Paket Layanan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.berita.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Pengaduan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.berita.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Permintaan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.berita.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Tagihan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.berita.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              User PermanaHome App
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.berita.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              User App PermanaHomeNumber
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.auth.logout') }}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Log Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>