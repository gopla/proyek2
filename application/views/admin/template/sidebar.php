<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-warning">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url("assets/dist/img/wri.png") ?>" alt="AdminLTE Logo" class="brand-image img elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">E-Vote WRI</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url("admin/dashboard") ?>" class="nav-link" id="navDash">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url("admin/admin") ?>" class="nav-link" id="navAdmin">
            <i class="nav-icon fa fa-code" aria-hidden="true"></i>
            <p>
              Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url("admin/calon") ?>" class="nav-link" id="navCalon">
            <i class="nav-icon fas fa-user-check    "></i>
            <p>
              Calon
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url("admin/pemilih") ?>" class="nav-link" id="navPemilih">
            <i class="nav-icon fas fa-users    "></i>
            <p>
              Pemilih
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="<?= base_url("admin/hasil") ?>" class="nav-link" id="navHasil">
            <i class="nav-icon fas fa-chart-pie    "></i>
            <p>
              Hasil Pemilihan
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>