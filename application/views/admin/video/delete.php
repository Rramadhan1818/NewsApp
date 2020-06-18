 <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo $video->id_video ?>" title="Delete Site"><i class="fa fa-trash-o"></i></button>

                            <div class="modal fade" id="myModal<?php echo $video->id_video ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Hapus Video</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                        	Yakin anda akan menghapus data video ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url('admin/video/delete/'.$video->id_video) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>Ya, Hapus Data Ini</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
