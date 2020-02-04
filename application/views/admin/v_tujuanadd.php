                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('Pesan')?>
                            </div>
                            <div class="panel-body">
                    <form action="<?php echo $action ?>" method="post">
                        <input type="text" name="no_identitas" value="<?php echo $no_identitas ?>" readonly hidden>

                            <label>Kode Tujuan</label>
                            <div class="input group">
                            <input type="text" placeholder="Di Isi Manual Contoh: BANDUNG(BDG)" name="kode_tujuan" class="form-control" value="<?php echo $kode_tujuan ?>"></div>
                            <label>Kota Tujuan</label>
                            <div class="input group">
                            <input type="text" placeholder="Di Isi Manual Dengan Nama Kota Tujuan Anda" name="kota_tujuan" class="form-control" value="<?php echo $kota_tujuan ?>"></div>
    <!--                         <label>Telepon</label>
                            <input type="text" name="telp" class="form-control" value="<?php echo $telp ?>">
                            <label>Umur</label>
                            <input type="text" name="umur" class="form-control" value="<?php echo $umur?>">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control"> -->
    <!--                             <?php 
                                switch ($no_tujuan) {
                                    case 'D': ?>
                                    <option value="D" selected>D001</option>
                                    <option value="D">D001</option>
                                    <?php break;
                                    case 'D': ?>
                                    <option value="D">D002</option>
                                    <option value="D" selected>D002</option>
                                    <?php break; 
                                    default: ?>
                                    <option value="D">D001</option>
                                    <option value="D">D002</option>
                                    <?php break;
                                } ?> -->
                           <!--  <label>Kota Tujuan</label>
                            <input type="text" name="kota_tujuan" class="form-control" value="<?php echo $kota_tujuan ?>"> -->
    <!--                         </select>
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