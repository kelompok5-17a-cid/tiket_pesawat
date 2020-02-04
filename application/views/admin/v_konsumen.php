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
                                                            <th>Nama Konsumen</th>
                                                            <th>Alamat Konsumen</th>
                                                            <th>Telp</th>
                                                            <th>Umur</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Tempat Lahir</th>
                                                            <th>Tanggal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; foreach ($konsumen as $key => $value){ ?>
                                                        <tr>
                                                        <td> <?= $no++ ?> </td>
                                                        <td> <?= $value->nama_konsumen ?> </td>
                                                        <td> <?= $value->alamat_konsumen ?> </td>
                                                        <td> <?= $value->telp ?> </td>
                                                        <td> <?= $value->umur ?> </td>
                                                        <td> <?= $value->jenis_kelamin ?> </td>
                                                        <td> <?= $value->tmpt_lahir ?> </td>
                                                        <td> <?= $value->tanggal ?> </td>
                                                        <td>
                                                        <a href="<?php echo base_url('konsumen/edit/'.$value->no_identitas)?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                        <a href="<?php echo base_url('konsumen/delete/'.$value->no_identitas) ?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Delete</button>
                                                        </td>
                                                        </tr>
                                                    <?php } ?>
                                                        
                                                </table>    
                                                <body style="background:url(template/tampilan/images/indo.jpg) no-repeat; background-size: cover; opacity: 0.8;"></body>
                                        </div>
                                    </div>
                                </div>