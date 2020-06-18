<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');

//open Form
echo form_open(base_url('admin/kategori_dokumen/edit/'.$kategori_dokumen->id_kategori_dokumen));
?>

<div class="col-md-8">
	<div class="form-group">
		<label>Kategori dokumen</label>
		<input type="text" name="nama_kategori_dokumen" class="form-control" placeholder="Nama kategori dokumen" value="<?php echo $kategori_dokumen->nama_kategori_dokumen ?>" required>	
	</div>
</div>

<div class="col-md-4">
  <div class="form-group">
    <label>Urutan</label>
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $kategori_dokumen->urutan ?>" required>  
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $kategori_dokumen->keterangan ?></textarea>
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