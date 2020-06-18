 <!-- About Section -->
    <section  id="about" style="margin-top: 40px;">
      <div class="container">
        <h2 class="text-center text-uppercase text-primary"><?php echo $title ?></h2>
        <hr class="star-light mb-5">
        <hr>
        <div class="row">
        	<div class="col-md-12">
        	<?php 
        	if (count($dokumen) < 1 ) {
        	?>
        	<div class="alert alert-success text-center">
        	<p>Tidak ada dokumen , Dokumen belum diisi</p>
        	<?php }else{ ?>
        	
        		<table class="table table-striped table-hover table-bordered">
        			<thead>
        				<tr>
        					<th>#</th>
        					<th>File</th>
        					<th>Document Title</th>
        					<th>Category</th>
        					<th>Type</th>
        				</tr>
        			</thead>
        			<tbody>
        			<?php $i= 1; foreach($dokumen as $dokumen) { ?>
        				<tr>
        					<td><?php echo $i ?>.</td>
        					<td>
        					<a href="<?php echo base_url('document/download/'.$dokumen->id_dokumen) ?>" target="_blank" class="btn btn-primary btn-sm" title="download file: <?php echo $dokumen->gambar ?>"><i class="fa fa-download"></i> Download</a>
        					</td>
        					<td>
        					<a href="<?php echo base_url('document/read/'.$dokumen->slug_dokumen) ?>">
        					<?php echo $dokumen->judul ?> <sup><i class="fa fa-link"></i></sup>
        					</a>
        					</td>
        					<td>
        					<a href="<?php echo base_url('document/category/'.$dokumen->id_kategori_dokumen) ?>">
        					<?php echo $dokumen->nama_kategori_dokumen ?>
        					<sup><i class="fa fa-link"></i></sup></a>
        					</td>
        					<td><?php echo $dokumen->jenis_dokumen ?></td>
        				</tr>
        			<?php $i++; } ?>
        			</tbody>
        		</table>
        	<?php } ?>
        	</div>
        </div>
  	  </div>
	</section>