<p>
<?php
//tambah kategori pop up modal
    include ('tambah.php');
?>
</p>

<?php
//cetak notifikasi
//cetak notivikasi berhasil tambah
if($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kategori Berita</th>
                                            <th>Keterangan</th>
                                            <th>Urutan</th>
                                            <th>Slug</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; foreach ($kategori_berita as $kategori_berita) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $kategori_berita->nama_kategori_berita ?></td>
                                            <td><?php echo $kategori_berita->keterangan ?></td>
                                            <td><?php echo $kategori_berita->urutan ?></td>
                                            <td><?php echo $kategori_berita->slug_kategori_berita ?></td>
                                            <td>
                                            	<a href="<?php echo base_url('admin/kategori_berita/edit/'.$kategori_berita->id_kategori_berita) ?>" class="btn btn-success  btn-sm" title="Edit Kategori btnerita"><i class="fa fa-edit" ></i></a>

                                            <!-- Delete -->
                                            <?php
                                            include 'delete.php';
                                            ?>

                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
</table>
