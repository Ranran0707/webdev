<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="<?= base_url('/assets/css/styles.css'); ?>" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Perpustakaan</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">

      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-warning"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?= base_url('pengguna'); ?>">Pengguna</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="<?= base_url('/logout'); ?>">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="<?= base_url('/dashboard'); ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-white"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link" href="<?= base_url('/buku'); ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-book text-white"></i></i></div>
              Daftar Buku
            </a>

            <a class="nav-link" href="<?= base_url('/penerbit'); ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-user-tie text-white"></i></div>
              Daftar Penerbit
            </a>
            <a class="nav-link" href="<?= base_url('/penulis'); ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-user-edit text-white"></i></div>
              Daftar Penulis
            </a>



          </div>
        </div>
        <!-- <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          Start Bootstrap
        </div> -->
      </nav>
    </div>

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <?= $this->renderSection('content'); ?>
        </div>
      </main>
    </div>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <script src="<?= base_url('assets/js/scripts.js'); ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/assets/demo/chart-area-demo.js'); ?>"></script>
  <script src="<?= base_url('assets/assets/demo/chart-bar-demo.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/js/datatables-simple-demo.js'); ?>"></script>
</body>

</html>