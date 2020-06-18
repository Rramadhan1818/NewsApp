<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');

//open Form

echo form_open(base_url('admin/site/edit/'.$site->id_site));

?>

<div class="col-md-6">
	
	<div class="form-group form-group-lg">
		<label>Nama Site</label>
		<input type="text" name="nama_site" class="form-control" placeholder="Nama Site" value="<?php echo $site->nama_site ?>">	
	</div>

	<div class="form-group form-group-lg">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $site->alamat ?>">	
	</div>

	<div class="form-group form-group-lg">
		<label>Telepon</label>
		<input type="text" name="telepon" class="form-control" placeholder="telepon" value="<?php echo $site->telepon ?>">	
	</div>

	<div class="form-group form-group-lg">
		<label>Nomor Hp</label>
		<input type="text" name="hp" class="form-control" placeholder="Nomor Hp" value="<?php echo $site->hp ?>">	
	</div>

	<div class="form-group form-group-lg">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo $site->email ?>">	
	</div>

	<div class="form-group form-group-lg">
		<label>Kota</label>
		<input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo $site->kota ?>">	
	</div>

</div>


<div class="col-md-6">

	<div class="form-group form-group-lg">
	<label>Nama Contact Person</label>
		<input type="text" name="contact_person" class="form-control" placeholder="Contact Person" value="<?php echo $site->contact_person ?>">
	</div>

	<div class="form-group form-group-lg">
		<label>Keterangan Lainnya</label>
		<textarea  type="text" name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $site->keterangan ?></textarea> 	
	</div>

	<div class="form-group form-group-lg">
		<input type="submit" name="submit" class="btn btn-primary" value="save">
		<input type="reset" name="reset" class="btn btn-success" value="reset">
	</div>

</div>
<?php 
//close form
echo form_close();
?>