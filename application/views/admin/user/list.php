<p><a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a></p>

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
                                            <th>Nama / Site</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach ($user as $user) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $user->nama ?><br>
                                              <small>Site : <?php echo $user->nama_site ?></small>
                                            </td>
                                            <td><?php echo $user->username ?></td>
                                            <td><?php echo $user->email ?></td>
                                            <td><?php echo $user->level ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>" class="btn btn-success  btn-sm" title="Edit Site"><i class="fa fa-edit" ></i></a>

                                            <!-- Delete -->
                                            <?php
                                            include 'delete.php';
                                            ?>

                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
</table>
