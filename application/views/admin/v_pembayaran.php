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
                                                                <th>Id Pembayaran</th>
                                                                <th>Kode Pembayaran</th>
                                                                <th>Kode Tiket</th>
                                                                <th>Tanggal Boking</th>
                                                                <th>Jumlah Tiket</th>
                                                                <th>Harga Tiket</th>
                                                                <th>Total Pembayaran</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $no=1; foreach ($pembayaran as $key => $value){ ?>
                                                            <tr>
                                                            <td> <?= $no++ ?> </td>
                                                            <td> <?= $value->kode_pembayaran ?> </td>
                                                            <td> <?= $value->kode_tiket ?> </td>
                                                            <td> <?= $value->tgl_boking ?> </td>
                                                            <td> <?= $value->jumlah_tiket ?> </td>
                                                            <td> <?= $value->harga_tiket ?> </td>
                                                            <td> <?= $value->total_pembayaran ?> </td>
                                                            <td>
                                                            <a href="<?php echo base_url('pembayaran/edit/'.$value->id_pembayaran)?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                            <a href="<?php echo base_url('pembayaran/delete/'.$value->id_pembayaran) ?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Delete</button>
                                                            

                                                            </td>
                                                            </tr>
                                                        <?php } ?>    
                                                            
                                                    </table>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <button class="print" onclick="PrintPreview()"><img src="img/file.png">Print Preview</button>

        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
            /*--This JavaScript method for Print command--*/
            // function PrintDoc() {
            //     var toPrint = document.getElementById('tabel');
            //     var popupWin = window.open('');
            //     popupWin.document.open();
            //     popupWin.document.write('<html><title>::Print Data::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
            //     popupWin.document.write(toPrint.outerHTML);
            //     popupWin.document.write('</html>');
            //     popupWin.document.close();
            // }
            /*--This JavaScript method for Print Preview command--*/
            function PrintPreview() {
                var toPrint = document.getElementById('tabel');
                var popupWin = window.open('');
                popupWin.document.open();
                popupWin.document.write('<html><title>::Printpreview Data::</title><link rel="tbl_pembayaran" type="text/css" href="print.css" media="screen"/></head><body">')
                popupWin.document.write(toPrint.outerHTML);
                popupWin.document.write('</html>');
                popupWin.document.close();
            }
        </script>

                                    