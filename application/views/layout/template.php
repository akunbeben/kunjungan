
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kunjungan Toko | <?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/lightbox/lightbox.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed <?= $this->uri->segment(1) == 'penjualan' ? 'sidebar-collapse' : '' ; ?>">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <button class="btn nav-link" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i></button>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link text-center">
      <span class="brand-text font-weight-light">KUNJUNGAN TOKO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() . 'uploads/' . $this->session->userdata('EDPBMS-foto'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('EDPBMS-nama'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MASTER DATA</li>
          <li class="nav-item">
            <a href="<?= base_url('teknisi/'); ?>" class="nav-link <?= $this->uri->segment(1) == 'teknisi' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Teknisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('spareparts/'); ?>" class="nav-link <?= $this->uri->segment(1) == 'spareparts' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Spareparts
              </p>
            </a>
          </li>
          <li class="nav-header">COMPLAINT MENU</li>
          <li class="nav-item">
            <a href="<?= base_url('complaint/'); ?>" class="nav-link <?= $this->uri->segment(1) == 'complaint' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-paste"></i>
              <p>
                Complaint
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('follow-up/'); ?>" class="nav-link <?= $this->uri->segment(1) == 'follow-up' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Follow-up Complaint
              </p>
            </a>
          </li>
          <li class="nav-header">KUNJUNGAN EDP</li>
          <li class="nav-item">
            <a href="<?= base_url('kunjungan/'); ?>" class="nav-link <?= $this->uri->segment(1) == 'kunjungan' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-paste"></i>
              <p>
                Kunjungan
              </p>
            </a>
          </li>
          <li class="nav-header">REPORTS</li>
          <li class="nav-item">
            <a href="<?= base_url('laporan/laporan-spareparts'); ?>" class="nav-link <?= $this->uri->segment(2) == 'laporan-spareparts' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Laporan Spareparts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('laporan/laporan-spareparts-masuk'); ?>" class="nav-link <?= $this->uri->segment(2) == 'laporan-spareparts-masuk' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Stok Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('laporan/laporan-spareparts-keluar'); ?>" class="nav-link <?= $this->uri->segment(2) == 'laporan-spareparts-keluar' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Stok Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('laporan/laporan-complaint-pending'); ?>" class="nav-link <?= $this->uri->segment(2) == 'laporan-complaint-pending' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Complaint Pending
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('laporan/laporan-complaint-selesai'); ?>" class="nav-link <?= $this->uri->segment(2) == 'laporan-complaint-selesai' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Complaint Selesai
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('laporan/laporan-kunjungan'); ?>" class="nav-link <?= $this->uri->segment(2) == 'laporan-kunjungan' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Kunjungan
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url('laporan/inventori'); ?>" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Laporan Inventori
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?= $contents; ?>
  </div>
  <!-- /.content-wrapper -->
<!-- Modal logout -->
  <div class="modal fade" id="logoutModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Logout confirm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure want to logout?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="window.location.href='<?= base_url('auth/logout/'); ?>'">Logout</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Logout -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/'); ?>plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/lightbox/lightbox.css"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>

<script src="<?= base_url('assets/'); ?>master.js"></script>

</body>
</html>
