<aside class="main-sidebar sidebar-light-danger elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center bg-pink">

    <span class="brand-text font-weight-light ">Pemesanan Bunga</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url(); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrator - <?= session()->get('username'); ?></a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">MAIN NAVIGASI</li>
        <li class="nav-item">
          <a href="/admin" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            Beranda Utama
          </a>
        </li>
        <li class="nav-item active">
          <a href="/admin/pegawai" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            Pegawai
          </a>
        </li>
        <li class="nav-item">
          <a href="/datauser" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            Data Pelanggan
          </a>
        </li>
        <li class="nav-item">
          <a href="/bunga" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            Data Bunga
          </a>
        </li>
        <li class="nav-header">Main Features.</li>
        <li class="nav-item">
          <a href="/Pesanan" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            Pesanan
          </a>
        </li>
        <li class="nav-item">
          <a href="/transaksi" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            Pembayaran
          </a>
        </li>
        <li class="nav-header">LAINNYA.</li>
        <li class="nav-item">
          <a href="/login/logout" class="nav-link" data-toggle="modal" data-target="#logoutModal">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            Keluar
          </a>
        </li>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>