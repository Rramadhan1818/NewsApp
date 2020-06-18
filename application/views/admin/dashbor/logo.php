<?php
echo validation_errors('<div class="alert alert-warning">','</div>');
if(isset($error)) {
	echo '<div class="alert alert-warning" >';
	echo $error;
	echo '</div>';
}
echo form_open_multipart(base_url('admin/dashbor/logo'));
?>
<input type="hidden" name="id_konfigurasi" value="<?php echo $konfigurasi->id_konfigurasi ?>">
<div class="col-md-4">
<h3>Upload Logo</h3><hr>
<div class="form-group">
<label>Upload logo baru</label>
<input type="file" name="logo" class="form-control" required>	
</div>

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary" value="Simpan Konfigurasi">
<input type="reset" name="reset" class="btn btn-default" value="Reset Konfigurasi">
</div>
</div>


<div class="col-md-8">
<h3>Logo saat ini</h3><hr>
<p><img src="<?php echo base_url('assets/upload/image/thumbs/'.$konfigurasi->logo) ?>" class="img img-responsive" "></p>
</div>


<?php
echo form_close();
?>