<?php 
//Validasi Input
echo validation_errors('<div class="alert alert-danger">','</div>');

//open Form
echo form_open(base_url('admin/user/edit/'.$user->id_user));
?>

<div class="col-md-6">
<div class="form-group form-group-lg">
	<label>User untuk site ?</label>
	<select name="id_site" class="form-control">
		<?php foreach($site as $site) { ?>
		<option value="<?php echo $site->id_site ?>"
		<?php if($user->id_site==$site->id_site) { echo "selected"; } ?>
		>
		<?php echo $site->nama_site. ' - '.$site->kota ?>
		</option>
		<?php } ?>
	</select>
</div>

<div class="form-group"> 
	<label>Username</label>
	<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user->username ?>" readonly>
</div>

<div class="form-group"> 
	<label>Password ( minimal 6 karakter maksimal 32 karakter) </label>
	<input type="password" name="password" class="form-control" placeholder="Password">
</div>



</div>

<div class="col-md-6">
<div class="form-group form-group-lg">
	<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>" required>
</div>

<div class="form-group"> 
	<label>E-mail</label>
	<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $user->email ?>">
</div>

<div class="form-group"> 
	<label>Level hak akses</label>
	<select name="level" class="form-control">
	<option value="admin">Administrator</option>	
	<option value="user" <?php if($user->level=="user") { echo "selected"; } ?> >User Site/Staff</option>	
	<option value="bloked" <?php if($user->level=="bloked") { echo "selected"; } ?> >Bloked</option>	
	</select>
</div>

</div>


<div class="col-md-12">
<div class="form-group">
<input type="submit" name="submit" class="btn btn-success" value="Save data">
<input type="reset" name="reset" class="btn btn-primary" value="reset">	
</div>	
</div>


<?php
echo form_close();
?>