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
echo form_open_multipart(base_url('admin/galeri/tambah'));

?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
	<label>Judul Galeri</label>
		<input type="text" name="judul" class="form-control" placeholder="Judul Galeri" value="<?php echo set_value('judul') ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
	<label>Posisi Galeri</label>
	<select class="form-control" name="posisi">
		<option value="galeri">Galeri</option>
		<option value="homepage">Homepage Slider</option>
	</select>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
	<label>Gambar Galeri</label>
		<input type="file" name="gambar" class="form-control">
	</div>
</div>


<div class="col-md-6">
	<div class="form-group">
	<label>Link Gambar (website)</label>
		<input type="url" name="website" class="form-control" placeholder="http://website.com" value="<?php echo set_value('website') ?>">
	</div>
</div>

	<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Keterangan Galeri</label>
		<textarea  type="text" name="keterangan" class="form-control" placeholder="Keterangan Galeri"><?php echo set_value('keterangan') ?></textarea>
	</div>
	</div>


	<div class="col-md-12">
		<input type="submit" name="submit" class="btn btn-primary btn-lg" value="save">
		<input type="reset" name="reset" class="btn btn-success btn-lg" value="reset">
	</div>

</div>
<?php 
//close form
echo form_close();
?>