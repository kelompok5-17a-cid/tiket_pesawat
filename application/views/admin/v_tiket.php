    <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                    
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
                                                    <a href="" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>Edit</a>
                                                    <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                                                    </td>
                                                    </tr>
                                                <?php } ?>
                                                    
                                            </table>    
                                    </div>
                                </div>
                            </div>