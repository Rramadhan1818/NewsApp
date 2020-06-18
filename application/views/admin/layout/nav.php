
           <!-- /. NAV TOP  -->
         <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				
                  <!-- Modul Berita -->
                <li>
                        <a href="#"><i class="fa fa-newspaper-o "></i> Berita<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                              <li>  <a href="<?php echo base_url('admin/berita') ?>">Data Berita</a></li>
                               <li> <a href="<?php echo base_url('admin/berita/tambah') ?>">Tambah Berita</a></li>
                               <li> <a href="<?php echo base_url('admin/kategori_berita') ?>">Kategori Berita</a></li>
                        </ul>     
                </li>

                 <!-- Modul Galeri -->
                <li>
                        <a href="#"><i class="fa fa-image "></i> Galeri/Video<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                              <li>  <a href="<?php echo base_url('admin/galeri') ?>">Data Galeri</a></li>
                               <li> <a href="<?php echo base_url('admin/galeri/tambah') ?>">Tambah Galeri</a></li>
                               <li> <a href="<?php echo base_url('admin/video') ?>">Data video</a></li>
                        </ul>     
                </li>


                 <!-- Modul dokumen -->
                <li>
                        <a href="#"><i class="fa fa-book "></i> Dokumen<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                              <li>  <a href="<?php echo base_url('admin/dokumen') ?>">Data Dokumen</a></li>
                               <li> <a href="<?php echo base_url('admin/dokumen/tambah') ?>">Tambah Dokumen</a></li>
                               <li> <a href="<?php echo base_url('admin/kategori_dokumen') ?>">Kategori Dokumen</a></li>
                        </ul>     
                </li>


                    <!-- Modul Site -->
			         	<li>
                        <a href="#"><i class="fa fa-home "></i>Site<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                              <li>  <a href="<?php echo base_url('admin/site') ?>">Data Site</a></li>
                               <li> <a href="<?php echo base_url('admin/site/tambah') ?>">Tambah Site</a></li>
                        </ul>     
                </li>
                
                 <!-- Modul User  -->
                    <li>
                        <a href="#"><i class="fa fa-user "></i>Administrator<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li><a href="<?php echo base_url('admin/user') ?>">Data Admin</a></li>
                            <li><a href="<?php echo base_url('admin/user/tambah') ?>">Tambah Admin</a></li>
                                
                        </ul>
                    </li>  	


                <!-- Modul Konfigurasi  -->
                    <li>
                        <a href="#"><i class="fa fa-wrench "></i>Konfigurasi Web<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li><a href="<?php echo base_url('admin/dashbor/konfigurasi') ?>">Konfigurasi Website</a></li>
                            <li><a href="<?php echo base_url('admin/dashbor/logo') ?>">Ganti Logo</a></li>
                            <li><a href="<?php echo base_url('admin/dashbor/icon') ?>">Ganti Icon</a></li>
                                
                        </ul>
                    </li>   




                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?php echo $title ?></h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
