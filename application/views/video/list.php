<br/>
<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Latest Video</h2>
        <hr class="star-dark mb-5">
        <div class="row">

              <?php foreach($video as $video) { ?>
              <div class="col-md-6"> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video->video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
                <?php } ?>
          
         
        </div>
      </div>
    </section>
 