<?php
$site_konfigurasi = $this->konfigurasi_model->listing();
?>

   <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Our Office</h4>
            <p class="lead mb-0">
              
            <?php
              echo nl2br($site_konfigurasi->alamat)
            ?>

            </p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="http://facabook.com/smkn2purwakarta/">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="http://instagram.com/smkn2purwakarta/">
                  <i class="fab fa-fw fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="http://facabook.com/smkn2purwakarta/">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About <?php echo $site_konfigurasi->namaweb ?> </h4>
            <p class="lead mb-0"><?php echo $site_konfigurasi->tagline ?>.Visit our website
              <a href="<?php echo $site_konfigurasi->website ?>"><?php echo $site_konfigurasi->website ?></a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; <?php echo $site_konfigurasi->namaweb ?> <?php echo date('Y'); ?></small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- jquery -->
    <script src="<?php echo base_url() ?>assets/front/vendor/bootstrap/jquery/jquery.js"></script>

    <!-- Bootstrap core java script -->
    <script src="<?php echo base_url() ?>assets/front/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- java script -->
    <script src="<?php echo base_url() ?>assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/front/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/front/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url() ?>assets/front/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url() ?>assets/front/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/front/js/freelancer.min.js"></script>

</body>
</html>