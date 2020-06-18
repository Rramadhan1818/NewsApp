<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/assets/css/bootstrap.css " rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/assets/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-primary login">
  <div class="panel-heading">
    <strong><?php echo $title ?></strong>
  </div>
  <div class="panel-body">
  <?php
  echo validation_errors('<div class="alert alert-warning">', '</div>');

  if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
  }
  ?>
    <form class="form-group" action="<?php echo base_url('login') ?>" method="post">
    
      <div class="form-group">
      <label>Username   :</label>
      <input type="text" name="username" class="form-control" placeholder="Username">
      </div>

      <div class="form-group">
      <label>Password   :</label>
      <input type="password" name="password" class="form-control" placeholder="password">
      </div>

      <div class="form-group">
      <input type="submit" name="submit" class="btn btn-primary" value="Login" >
      <a href="<?php echo base_url('home') ?>" class="btn btn-default">Home</a>
      </div>

    </form>
  </div>
</div>
</div>
</div>
</div>
     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/admin/assets/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/admin/assets/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/admin/assets/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/admin/assets/assets/js/custom.js"></script>
   
</body>
</html>
