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
                                            <th>Nama Kategori Dokumen</th>
                                            <th>Keterangan</th>
                                            <th>Urutan</th>
                                            <th>Slug</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; foreach ($kategori_dokumen as $kategori_dokumen) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $kategori_dokumen->nama_kategori_dokumen ?></td>
                                            <td><?php echo $kategori_dokumen->keterangan ?></td>
                                            <td><?php echo $kategori_dokumen->urutan ?></td>
                                            <td><?php echo $kategori_dokumen->slug_kategori_dokumen ?></td>
                                            <td>
                                            	<a href="<?php echo base_url('admin/kategori_dokumen/edit/'.$kategori_dokumen->id_kategori_dokumen) ?>" class="btn btn-success  btn-sm" title="Edit Kategori btnerita"><i class="fa fa-edit" ></i></a>

                                            <!-- Delete -->
                                            <?php
                                            include 'delete.php';
                                            ?>

                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
</table>
