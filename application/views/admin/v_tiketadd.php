                <body style="background:url(template/tampilan/images/5.jpg) no-repeat; background-size: cover; opacity: 0.8;"></body>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('Pesan')?>
                            </div>
                            <div class="panel-body">
                    <form action="<?php echo $action ?>" method="post">
                        <input type="text" name="no_identitas" value="<?php echo $no_identitas ?>" readonly hidden>
                            <label>Kode Tiket</label>
                             <?php
                            if(empty($kode_tiket)){
                                $kode_tiket = $this->db->query("select concat('D',lpad(max(no_identitas)+1,4,'0')) as kode from tbl_tiket;")->row()->kode;
                            }
                            ?>
                            <input type="text" name="kode_tiket" class="form-control" value="<?php echo $kode_tiket ?>">
                            <label>Tanggal Berangkat</label>
                            <input type="date" name="tgl_berangkat" class="form-control" value="<?php echo $tgl_berangkat ?>">
                            <label>Waktu Berangkat</label>
                            <input type="time" name="waktu_berangkat" class="form-control" value="<?php echo $waktu_berangkat ?>">
                            <label>Kode Tujuan</label>
                            <div class="input-group"></div>
                            <input type="text" placeholder="Di Isi Manual" name="kode_tujuan" class="form-control" value="<?php echo $kode_tujuan?>"></div>
                            <!-- <label>Jenis Kelamin</label>
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
                                } ?> -->
                            <!-- </select>
                            <label>Tempat Lahir</label>
                            <input type="text" name="tmpt_lahir" class="form-control" value="<?php echo $tmpt_lahir ?>">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal" class="form-control" value="<?php echo $tanggal ?>"> -->
                            <div style="margin: 10px;"></div>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>