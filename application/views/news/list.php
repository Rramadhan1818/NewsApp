 <div class="clearfix"></div>
  <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about" style="margin-top: 40px;">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Latest News</h2>
        <hr class="star-light mb-5">
        <hr>
        <div class="row">

          <?php foreach($berita as $berita) { ?>
          <div class="col-md-4 kiri">
            <h3><a href="<?php echo base_url('news/read/'.$berita->slug_berita) ?>" style="color: #fff;"><?php echo $berita->judul ?></a></h3>
            <p><img src="<?php echo base_url('assets/upload/image/thumbs/'.$berita->gambar) ?>" class="img img-responsive" style="width: 350px; height:180px;"></p>
            <p class="lead"">
              <?php 
              //membatasi katakter yang di tambpilkan 
              echo character_limiter($berita->isi, 200);
               ?>
            <p><a href="<?php echo base_url('news/read/'.$berita->slug_berita) ?>" class="btn btn-success">Read more...</a></p>
            </p>
          </div>
          <?php } ?>

          
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="<?php echo base_url('news') ?>">
            <i class="fa fa-newspaper-o "></i>
            See more news..
          </a>
        </div>
      </div>
    </section>
