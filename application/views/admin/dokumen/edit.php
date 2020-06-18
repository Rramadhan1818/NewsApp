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
echo form_open_multipart(base_url('admin/dokumen/edit/'.$dokumen->id_dokumen));

?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
	<label>Judul Dokumen</label>
		<input type="text" name="judul" class="form-control" placeholder="Judul Dokumen" value="<?php echo $dokumen->judul ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
	<label>Jenis Dokumen</label>
	<select class="form-control" name="jenis_dokumen">
		<option value="internal">Internal</option>
		<option value="external" <?php if($dokumen->jenis_dokumen=="external") { echo  "selected"; } ?> >External</option>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	<label>Kategori Dokumen <sup><a href="<?php echo base_url('admin/kategori_dokumen') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a></sup></label>
	<select class="form-control" name="id_kategori_dokumen">
		<?php foreach ($kategori as $kategori) { ?>
		<option value="<?php echo $kategori->id_kategori_dokumen ?>"
		<?php if($dokumen->id_kategori_dokumen == $kategori->id_kategori_dokumen) { echo "selected"; } ?>
		>
		<?php echo $kategori->nama_kategori_dokumen ?>	
		</option>
		<?php } ?>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	<label>Status Dokumen</label>
	<select class="form-control" name="status_dokumen">
		<option value="publish">Publikasikan</option>
		<option value="draft" <?php if($dokumen->status_dokumen=="draft") { echo  "selected"; } ?> >Simpan sebagai draft</option>
	</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	<label>Upload Dokumen</label>
		<input type="file" name="gambar" class="form-control">
	</div>
</div>


	<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Isi dokumen</label>
		<textarea  type="text" name="isi" class="form-control" placeholder="Isi dokumen"><?php echo $dokumen->isi ?></textarea>
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