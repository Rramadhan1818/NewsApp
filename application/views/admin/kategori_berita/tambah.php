 <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Kategori Berita"><i class="fa fa-plus"></i> Tambah</button>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Tambah kategori berita</h4>
         </div>
         <div class="modal-body">
                                           
<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');

//open Form
echo form_open(base_url('admin/kategori_berita'));
?>

<div class="col-md-8">
	<div class="form-group">
		<label>Kategori Berita</label>
		<input type="text" name="nama_kategori_berita" class="form-control" placeholder="Nama kategori berita" value="<?php echo set_value('nama_kategori_berita') ?>" required>	
	</div>
</div>

<div class="col-md-4">
  <div class="form-group">
    <label>Urutan</label>
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo set_value('urutan') ?>" required>  
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>
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
?>
<div class="clearfix"></div>

          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>








