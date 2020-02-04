        <div class="col-lg-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                        <body style="background:url(template/tampilan/images/5.jpg) no-repeat; background-size: cover; opacity: 0.8;"></body>
                                        </div>
                                        <div class="panel-body">
                                        <?php
                                        if ($this->session->flashdata('Pesan')) {
                                        echo'<div class="alert alert-success alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                        echo $this->session->flashdata('Pesan');
                                        echo' </div>';
                                    }?>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>No Identitas</th>
                                                            <th>Kode Tiket</th>
                                                            <th>Tanggal Berangkat</th>
                                                            <th>Waktu Berangkat</th>
                                                            <th>Kode Tujuan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; foreach ($tiket as $key => $value){ ?>
                                                        <tr>
                                                        <td> <?= $no++ ?> </td>
                                                        <td> <?= $value->kode_tiket ?> </td>
                                                        <td> <?= $value->tgl_berangkat ?> </td>
                                                        <td> <?= $value->waktu_berangkat ?> </td>
                                                        <td> <?= $value->kode_tujuan ?> </td>
                                                        <td>
                                                        <a href="<?php echo base_url('tiket/edit/'.$value->no_identitas)?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                        <a href="<?php echo base_url('tiket/delete/'.$value->no_identitas) ?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Delete</button>
                                                        </td>
                                                        </tr>
                                                    <?php } ?>
                                                        
                                                </table>    
                                            
                                        </div>
                                    </div>
                                </div>