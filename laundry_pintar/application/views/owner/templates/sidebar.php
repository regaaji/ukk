<!--Main Navigation-->
<header>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="<?= base_url('owner/owner/'); ?>">
          <strong class="blue-text"><?= $title ?></strong>
        </a>


      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons ml-auto">
           

            <li class="nav-item">
              <a href="<?= base_url('owner/owner/') ?>" class="nav-link waves-effect">
                <i class="fas fa-shopping-cart"></i> <span class='badge badge-xs badge-danger'><?= $total_order ?></span> 
              </a>
            </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <strong><?= $this->session->userdata('username') ?></strong> <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url('owner/profil/') ?>"><i class="fas fa-user-circle"></i> Edit Profil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('login/logout/') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Sidebar -->
  <div class="sidebar-fixed position-fixed">

    <a class="logo-wrapper waves-effect">
      <img src="<?= base_url() ?>assets/img/admin.png" class="img-fluid rou rounded" alt="">
    </a>

      <div class="list-group list-group-flush">


      <a href="<?= base_url('owner/owner/') ?>" class="list-group-item list-group-item-action waves-effect">
        <i class="fas fa-chart-pie mr-3"></i> Dashboard</a>

        <a href="<?= base_url('owner/laporan/') ?>" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-book mr-3"></i>Laporan</a>

        <a href="<?= base_url('login/logout/') ?>" class="list-group-item list-group-item-action waves-effect tombol-logout">
          <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>


    </div>

     </div>
  <!-- Sidebar -->


</header>
<!--Main Navigation-->