<p>
<?php
//tambah vidio pop up modal
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
                                            <th>Judul Video</th>
                                            <th>Keterangan</th>
                                            <th>Posisi</th>
                                            <th>Video</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; foreach ($video as $video) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $video->judul ?></td>
                                            <td><?php echo $video->keterangan ?></td>
                                            <td><?php echo $video->posisi ?></td>
                                            <td><iframe width="200" height="113" src="https://www.youtube.com/embed/<?php echo $video->video ?>" frameborder="0" allowfullscreen></iframe></td>
                                            <td>
                                            	<a href="<?php echo base_url('admin/video/edit/'.$video->id_video) ?>" class="btn btn-success  btn-sm" title="Edit video "><i class="fa fa-edit" ></i></a>

                                            <!-- Delete -->
                                            <?php
                                            include 'delete.php';
                                            ?>

                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
</table>
