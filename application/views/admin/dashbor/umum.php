<?php

echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('admin/dashbor/konfigurasi'));

?>

<div class="col-md-5">

<div class="form-group">
<label>Nama organisasi/aplikasi</label>
<input type="text" name="namaweb" class="form-control" placeholder="Nama web" value="<?php echo $konfigurasi->namaweb ?>" >
</div>

<div class="form-group">
<label>Tagline/Motto</label>
<input type="text" name="tagline" class="form-control" placeholder="Tagline/Motto" value="<?php echo $konfigurasi->tagline ?>" >
</div>

<div class="form-group">
<label>Website</label>
<input type="url" name="website" class="form-control" placeholder="http://website.com" value="<?php echo $konfigurasi->website ?>" >
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="Email resmi" value="<?php echo $konfigurasi->email ?>" >
</div>

<div class="form-group">
<label>Alamat</label>
<input name="alamat" class="form-control" placeholder="Alamat lengkap" value="<?php echo $konfigurasi->alamat ?>" >
</div>


<div class="form-group">
<label>Telepon</label>
<input type="text" name="telepon" class="form-control" placeholder="Nomer Telepon" value="<?php echo $konfigurasi->telepon ?>" >
</div>

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan Konfigurasi">
<input type="reset" name="reset" class="btn btn-default" value="Reset Konfigurasi">
</div>

</div>


<div class="col-md-7">

<div class="form-group">
<label>Keywords (untuk pencarian google)</label>
<input name="keywords" class="form-control" placeholder="Keywords" value="<?php echo $konfigurasi->keywords ?>" >
</div>

<div class="form-group">
<label>Deskripsi Website</label>
<input name="description" class="form-control" placeholder="Description" value="<?php echo $konfigurasi->description ?>" >
</div>

<div class="form-group">
<label>Metatext (Kode google webmaster)</label>
<input name="metatext" class="form-control" placeholder="Metatext (Kode google webmaster)" value="<?php echo $konfigurasi->metatext ?>" >
</div>

<div class="form-group form-group-lg">
<label>Google Map</label>
<input name="google_map" class="form-control" placeholder="Kode iframe google map" value="<?php echo $konfigurasi->google_map ?>">
</div>

<hr>
<style>
iframe {
	width: 100%;
	height: 100px;
}
</style>
<?php echo $konfigurasi->google_map ?>
</div>



<?php
echo form_close();
?>