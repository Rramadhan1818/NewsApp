<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');

//open Form
echo form_open(base_url('admin/video/edit/'.$video->id_video));
?>

<div class="col-md-8">
  <div class="form-group">
    <label>Judul Video</label>
    <input type="text" name="judul" class="form-control" placeholder="Nama kategori berita" value="<?php echo $video->judul ?>" required>  
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
    <label>Posisi</label>
    <select name="posisi" class="form-control">
      <option value="video">Galeri Video</option>
      <option value="homepage" <?php if($video->posisi=="homepage") { echo "selected"; } ?> >Homepage Video</option>
    </select>
  </div>
</div>

<div class="col-md-12">
<label>Link Youtube</label>
<div class="form-group input-group">
  <span class="input-group-addon">http://youtube.com/watch?v=</span>
  <input type="text" name="video" class="form-control" placeholder="URL code terakhir video yutube seletah sama dengan(=)" value="<?php echo $video->video ?>">
</div>
  <div class="form-group">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $video->keterangan ?></textarea>
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