 <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo $kategori_dokumen->id_kategori_dokumen ?>" title="Delete Site"><i class="fa fa-trash-o"></i></button>

                            <div class="modal fade" id="myModal<?php echo $kategori_dokumen->id_kategori_dokumen ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Hapus Data kategori dokumen</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                        	Yakin anda akan menghapus data kategori dokumen ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url('admin/kategori_dokumen/delete/'.$kategori_dokumen->id_kategori_dokumen) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>Ya, Hapus Data Ini</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
