            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <?php echo $this->session->flashdata('Pesan')?>
                        </div>
                        <div class="panel-body">


                <form action="<?php echo $action ?>" method="post">
                    <input type="text" name="id_pembayaran" value="<?php echo $id_pembayaran ?>" readonly hidden>
                        <label>Kode Pembayaran</label>
                        <input type="text" name="kode_pembayaran" class="form-control" value="<?php echo $kode_pembayaran ?>">
                        <label>Kode Tiket</label>
                        <input type="text" name="kode_tiket" class="form-control" value="<?php echo $kode_tiket ?>">
                        <label>Tanggal Pembayaran</label>
                        <input type="text" name="tgl_pembayaran" class="form-control" value="<?php echo $tgl_pembayaran ?>">
                        <label>Jumlah Tiket</label>
                        <input type="text" name="jumlah_tiket" class="form-control" value="<?php echo $jumlah_tiket?>">
<!--                         <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <?php 
                            switch ($jenis_kelamin) {
                                case 'L': ?>
                                <option value="L" selected>Laki - Laki</option>
                                <option value="P">Perempuan</option>
                                <?php break;
                                case 'P': ?>
                                <option value="L">Laki - Laki</option>
                                <option value="P" selected>Perempuan</option>
                                <?php break; 
                                default: ?>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                                <?php break;
                            } ?>
                        </select> -->
                        <label>Harga Tiket</label>
                        <input type="text" name="harga_tiket" class="form-control" value="<?php echo $harga_tiket ?>">
                        <label>Total Pembayaran</label>
                        <input type="date" name="total_pembayaran" class="form-control" value="<?php echo $total_pembayaran ?>">
                        <div style="margin: 10px;"></div>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>