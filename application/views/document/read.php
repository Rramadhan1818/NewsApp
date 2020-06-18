<!-- About Section -->
    <section  id="about" style="margin-top: 40px;">
      <div class="container">
        <h2 class="text-center text-uppercase " style=" color: #2c3e50;"><?php echo $title ?></h2>
        <hr class="star-light mb-5">
        <hr>
        <div class="row">
        	<div class="col-md-12">

        	<p class="text-right"><a href="<?php echo base_url('document') ?>" class="btn btn-primary btn-lg"><i class="fa fa-backward"></i>  Back to document list</a></p>

        	<table class="table table-striped table-hover table-bordered">
        		<tr>
        			<td width="34%"> Document Title</td>
        			<td width="66%"> : 	<?php echo $dokumen->judul ?></td>
        		</tr>
        		<tr>
        			<td width="34%"> Document category</td>
        			<td width="66%"> : 	<?php echo $dokumen->nama_kategori_dokumen ?></td>
        		</tr>
        		<tr>
        			<td width="34%"> Document Status</td>
        			<td width="66%"> : 	<?php echo $dokumen->status_dokumen ?></td>
        		</tr>
        		<tr>
        			<td width="34%"> Document Jenis</td>
        			<td width="66%">: 	<?php echo $dokumen->jenis_dokumen ?></td>
        		</tr>
        		<tr>
        			<td width="34%"> File Name</td>
        			<td width="66%">
        			<a href="<?php echo base_url('document/download/'.$dokumen->id_dokumen) ?>" target="_blank" class="btn btn-primary" title="download file: <?php echo $dokumen->gambar ?>"><i class="fa fa-download"></i> <?php echo $dokumen->gambar?> </a>

        			</td>
        		</tr>
        		<tr>
        			<td width="34%"> Last Updated</td>
        			<td width="66%"> <?php echo date('d M Y', strtotime($dokumen->tanggal)) ?></td>
        		</tr>
        		<tr>
        			<td colspan="2"> Description</td>
        			
        		</tr>
        		<tr>
        			<td colspan="2"><?php echo $dokumen->isi ?></td>
        		</tr>
        	</table>
       		
       		</div>
   		</div>
		</div>
	</section>