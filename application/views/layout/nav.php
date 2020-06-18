<?php
$site_konfigurasi = $this->konfigurasi_model->listing();
?>

<style>
img.logoku {
  max-height: 60px;
  width: auto;
  position: absolute;
  margin-top: -30px !important;
  border-radius: 4px;

}
</style>


 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">

        <?php if ($site_konfigurasi->logo != "") { ?>
          <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url() ?>" title="<?php echo $site_konfigurasi->namaweb ?>">
            <img src="<?php echo base_url('assets/upload/image/thumbs/'.$site_konfigurasi->logo) ?>" class="logoku" title="<?php echo $site_konfigurasi->namaweb ?>" alt="<?php echo $site_konfigurasi->namaweb ?>"> 
          </a>
        <?php }else{ ?>
          <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url() ?>" title="<?php echo $site_konfigurasi->namaweb ?>"><?php echo $site_konfigurasi->namaweb ?></a>
        <?php } ?>


        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('home') ?>">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('news') ?>">News</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('document') ?>">Document</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('galeri') ?>">Galeri</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('video') ?>">Video</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('kontak') ?>">Contact</a>
            </li>
            <?php if($this->session->userdata('username') != "") { ?>

              <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn btn-primary" href="<?php echo base_url('admin/dashbor') ?>" target="_blank"><i class="fa fa-user"></i> <?php ucfirst($this->session->userdata('username')) ?></a>
              </li>

               <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn btn-primary" href="<?php echo base_url('login/logout') ?>" target="_blank"><i class="fa fa-sign-out"></i> Logout</a>
              </li>

            <?php }else{ ?>
              <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn btn-primary" href="<?php echo base_url('login') ?>" target="_blank"><i class="fa fa-key"></i> Login</a>
              </li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </nav>
