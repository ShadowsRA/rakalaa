<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
  <title><?= $title ?></title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?> " />
  <link rel="stylesheet" href="<?= base_url('assets/css/lineicons.css') ?> " />
  <link rel="stylesheet" href="<?= base_url('assets/css/materialdesignicons.min.css') ?> " />
  <link rel="stylesheet" href="<?= base_url('assets/css/fullcalendar.css') ?> " />
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?> " />

  <!-- ======== Data Tables ========= -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

  <!-- ======== Tabler Icon ========= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.26.0/tabler-icons.min.css" integrity="sha512-k9iJhTcDc/0fp2XLBweIJjHuQasnXicVPXbUG0hr5bB0/JqoTYEFeCdQj4aJTg50Gw6rBJiHfWJ8Y+AeF1Pd3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- ======== Leaflet CSS ========= -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin="" />

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

</head>

<body>
  <!-- ======== Preloader =========== -->
  <div id="preloader">
    <div class="spinner"></div>
  </div>
  <!-- ======== Preloader =========== -->

  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="<?= base_url('pegawai/home') ?>">
        <img style="width: 110%" src="<?= base_url('assets/images/logo/rsi.png') ?>" alt="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>


        <li class="nav-item">
          <a href="<?= base_url('pegawai/home') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
            </svg>
            <span class="text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('pegawai/rekap_presensi') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-list">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
              <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
              <path d="M9 12l.01 0" />
              <path d="M13 12l2 0" />
              <path d="M9 16l.01 0" />
              <path d="M13 16l2 0" />
            </svg>
            <span class="text">Rekap Presensi</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('pegawai/ketidakhadiran') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-x">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
              <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" />
              <path d="M22 22l-5 -5" />
              <path d="M17 22l5 -5" />
            </svg>
            <span class="text">Ketidakhadiran</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('logout') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
              <path d="M9 12h12l-3 -3" />
              <path d="M18 15l3 -3" />
            </svg>
            <span class="text">Logout</span>
          </a>
        </li>


      </ul>
    </nav>

  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->

  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-6">
            <div class="header-left d-flex align-items-center">
              <div class="menu-toggle-btn mr-15">
                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                  <i class="lni lni-chevron-left me-2"></i> Menu
                </button>
              </div>

            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">

              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">
                      <div class="image">
                        <img src="<?= base_url('assets/images/profile/profile-image.png') ?>" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-500 text-uppercase"><?= session()->get('username') ?></h6>
                        <p><?= session()->get('role_id') ?></p>
                      </div>
                    </div>
                  </div>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <div class="author-info flex items-center !p-1">
                      <div class="content">
                        <h4 class="text-sm"></h4>
                        <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                          href="#"></a>
                      </div>
                    </div>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#0">
                      <i></i> View Profile
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <i></i> Ubah Password
                    </a>
                  </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    <section class="section">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title">
                <h2><?= $title ?></h2>
              </div>
            </div>
            <!-- end col -->

          </div>
          <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->


        <?= $this->renderSection('content') ?>
      </div>

      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 order-last order-md-first">

          </div>
          <!-- end col-->
          <div class="col-md-6">

          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </footer>
    <!-- ========== footer end =========== -->
  </main>
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?> "></script>
  <script src="<?= base_url('assets/js/jvectormap.min.js') ?> "></script>
  <script src="<?= base_url('assets/js/polyfill.js') ?> "></script>
  <script src="<?= base_url('assets/js/main.js') ?> "></script>

  <!-- ========= jquery cdn ======== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- ======== Data Tables ======== -->
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

  <!-- ======== Sweert alert ======== -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    // datatables
    $(document).ready(function() {
      $('#datatables').DataTable();
    });

    //sweetalert berhasil
    $(function() {
      <?php if (session()->has('gagal')) { ?>
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "<?= session()->get('gagal') ?>",
        });
      <?php } ?>
    });

    // sweetalert konfirmasi hapus
    $('.tombol-hapus').on('click', function() {
      var getLink = $(this).attr('href');

      Swal.fire({
        title: "Yakin Hapus?",
        text: "Data yang sudah dihapus tidak bisa dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = getLink
        }
      });
      return false;

    });
  </script>

</body>

</html>