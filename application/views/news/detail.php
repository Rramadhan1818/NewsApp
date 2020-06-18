 <div class="clearfix"></div>
  <!-- About Section -->
    <section style="margin-top: 40px;">
      <div class="container">
        <h2 class="text-center text-uppercase "><?php echo $berita->judul ?></h2>
        <hr class="star-light mb-5">
        <hr>
        <div class="row">

          <div class="col-md-12">
            <p><img src="<?php echo base_url('assets/upload/image/thumbs/'.$berita->gambar) ?>" class="img img-responsive" style="width: 99%; height:400px;"></p>
            <p class="lead"">
              <?php 
              //membatasi katakter yang di tambpilkan 
              echo $berita->isi;
               ?>
            </p>
          </div>

          
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="<?php echo base_url('news') ?>">
            <i class="fa fa-newspaper-o "></i>
            See more news..
          </a>
        </div>
      </div>
    </section>
