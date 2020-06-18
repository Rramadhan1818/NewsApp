<!-- Tiny MCE -->
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/advcode/plugin.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/powerpaste/plugin.min.js') ?>"></script>
<script>
tinymce.init({
  selector: 'textarea',
  height: 150,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>

<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');
//error upload file
if(isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}
//open Form
echo form_open_multipart(base_url('admin/berita/edit/'.$berita->id_berita));

?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
	<label>Judul Berita</label>
		<input type="text" name="judul" class="form-control" placeholder="Judul Berita" value="<?php echo $berita->judul ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
	<label>Jenis Berita</label>
	<select class="form-control" name="jenis_berita">
		<option value="berita">Berita</option>
		<option value="profile" <?php if($berita->jenis_berita=="profile") { echo  "selected"; } ?> >Profile</option>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	<label>Kategori Berita <sup><a href="<?php echo base_url('admin/kategori_berita') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a></sup></label>
	<select class="form-control" name="id_kategori_berita">
		<?php foreach ($kategori as $kategori) { ?>
		<option value="<?php echo $kategori->id_kategori_berita ?>"
		<?php if($berita->id_kategori_berita == $kategori->id_kategori_berita) { echo "selected"; } ?>
		>
		<?php echo $kategori->nama_kategori_berita ?>	
		</option>
		<?php } ?>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	<label>Status Berita</label>
	<select class="form-control" name="status_berita">
		<option value="publish">Publikasikan</option>
		<option value="draft" <?php if($berita->status_berita=="draft") { echo  "selected"; } ?> >Simpan sebagai draft</option>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	<label>Gambar Berita</label>
		<input type="file" name="gambar" class="form-control">
	</div>
</div>


	<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Isi berita</label>
		<textarea  type="text" name="isi" class="form-control" placeholder="Isi Berita"><?php echo $berita->isi ?></textarea>
	</div>
	</div>


	<div class="form-group form-group-lg">
		<input type="submit" name="submit" class="btn btn-primary btn-lg" value="save">
		<input type="reset" name="reset" class="btn btn-success btn-lg" value="reset">
	</div>

</div>
<?php 
//close form
echo form_close();
?>