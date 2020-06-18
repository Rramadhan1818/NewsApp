<br/>
<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0"><?php echo $title ?></h2>
        <hr class="star-dark mb-5">
        <div class="row">
        <?php foreach($galeri as $galeri) { ?>  
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php echo $galeri->id_galeri ?>">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/upload/image/thumbs/'.$galeri->gambar) ?>" alt="<?php echo $galeri->judul ?>">
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>


    <!-- Portfolio Modals -->
<?php foreach($modal as $modal) { ?>
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php echo $modal->id_galeri ?>">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"><?php echo $modal->judul ?></h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="<?php echo base_url('assets/upload/image/thumbs/'.$modal->gambar) ?>" alt="<?php echo $modal->judul ?>">
              <p class="mb-5"><?php echo $modal->keterangan ?></p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
    