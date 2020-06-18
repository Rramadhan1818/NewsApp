<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');

//open Form
echo form_open(base_url('admin/kategori_berita/edit/'.$kategori_berita->id_kategori_berita));
?>

<div class="col-md-8">
	<div class="form-group">
		<label>Kategori Berita</label>
		<input type="text" name="nama_kategori_berita" class="form-control" placeholder="Nama kategori berita" value="<?php echo $kategori_berita->nama_kategori_berita ?>" required>	
	</div>
</div>

<div class="col-md-4">
  <div class="form-group">
    <label>Urutan</label>
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $kategori_berita->urutan ?>" required>  
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $kategori_berita->keterangan ?></textarea>
  </div>
</div>

<br>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-primary" value="save">
    <input type="reset" name="reset" class="btn btn-success" value="reset">
</div>



<?php 
//close form
echo form_close();