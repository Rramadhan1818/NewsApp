 <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo $site->id_site ?>" title="Delete Site"><i class="fa fa-trash-o"></i></button>

                            <div class="modal fade" id="myModal<?php echo $site->id_site ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Hapus Data Site</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                        	Yakin anda akan menghapus data site ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url('admin/site/delete/'.$site->id_site) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>Ya, Hapus Data Ini</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
<!-- 
<button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $site->id_site ?>" title="delete site"><i class="fa fa-trash-o"></i></button>

        <div class="modal fade" id="myModal<?php echo $site->id_site ?>">
            <div class="modal-dialog">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus data</h4>
                </div>
                <div class="modal-body">
                    yakin akan menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> close</button>
                    <a href="<?php echo base_url('admin/site/delete'.$site->id_site) ?>" class="btn btn-danger">Ya hapus data ini</a>
                </div>
            </div>            
        </div>


<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo $site->id_site ?>" title="data delete"><i class="fa fa-trash-o"></i></button>
    
    <div class="modal fade" id="myModal<?php echo $site->id_site ?>">
        <div class="modal-dialog">
            <div class="modal-header">
                <div class="modal-titlet">Hapus data</div>
            </div>
            <div class="modal-body">
                yakin nih datanya mau di apus? :(
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismis="modal">keluar</button>
                <a href="<?php echo base_url('admin/site/delete'.$site->id_site) ?>">ya hapus data ini</a>                
            </div>
        </div>
        
    </div> -->