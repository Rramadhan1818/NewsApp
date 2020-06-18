 <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah video"><i class="fa fa-plus"></i> Tambah</button>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Tambah video</h4>
         </div>
         <div class="modal-body">
                                           
<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');

//open Form
echo form_open(base_url('admin/video'));
?>

<div class="col-md-8">
	<div class="form-group">
		<label>Judul Video</label>
		<input type="text" name="judul" class="form-control" placeholder="Nama kategori berita" value="<?php echo set_value('judul') ?>" required>	
	</div>
</div>

<div class="col-md-4">
  <div class="form-group">
    <label>Posisi</label>
    <select name="posisi" class="form-control">
      <option value="video">Galeri Video</option>
      <option value="homepage">Homepage Video</option>
    </select>
  </div>
</div>

<div class="col-md-12">
<label>Link Youtube</label>
<div class="form-group input-group">
  <span class="input-group-addon">http://youtube.com/watch?v=</span>
  http://youtube.com/watch?v=<input type="text" name="video" class="form-control" placeholder="URL code terakhir video yutube seletah sama dengan(=)" value="<?php echo set_value('video') ?>">
</div>
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








