<link href="<?php echo base_url() ?>assets/owl-carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/owl-carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">


<!-- Kode Slider -->
<div style="background-color: #18bc9c; margin-top: 12px;">
	<div class=" row">
		<div class="col-md-12">
			<div class="owl-carousel owl-theme">
				<?php foreach($slider as $slider) { ?>
				<div class="item">
					<div><img src="<?php echo base_url('assets/upload/image/thumbs/'.$slider->gambar) ?>" alt="<?php echo $slider->judul ?>"
						 tittle="<?php echo $slider->judul ?>"></div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div <!-- Kode Slider -->


<script src="<?php echo base_url() ?>assets/owl-carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
		loop: true,
		items: 3,
		margin: 0,
		center: true,
		autoplay: true,
		dots: true,
		singleitem: true,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2,
				margin: 30
			},
			992: {
				items: 1,
				margin: 30
			}
		}
	});

</script>
