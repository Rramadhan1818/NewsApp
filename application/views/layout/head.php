<?php
$site_konfigurasi = $this->konfigurasi_model->listing();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $title ?>">
    <meta name="author" content="<?php echo $title ?>">

    <title><?php echo $title ?></title>
    <!-- Icon -->
    <link href="<?php echo base_url('assets/upload/image/thumbs/'.$site_konfigurasi->icon) ?>" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/front/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>assets/front/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/front/css/freelancer.min.css" rel="stylesheet">

   
        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo base_url() ?>assets/front/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap core java script -->
    <script src="<?php echo base_url() ?>assets/front/vendor/bootstrap/jquery/jquery.js"></script>


    
  </head>

  <body id="page-top">