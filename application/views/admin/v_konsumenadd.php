<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo $this->session->flashdata('Pesan') ?>
        </div>
        <div class="panel-body">
            <form action="<?php echo $action ?>" method="post">
                <input type="text" name="no_identitas" value="<?php echo $no_identitas ?>" readonly hidden>
                <label>Nama Konsumen</label>
                <input type="text" name="nama_konsumen" class="form-control" value="<?php echo $nama_konsumen ?>">
                <label>Alamat Konsumen</label>
                <input type="text" name="alamat_konsumen" class="form-control" value="<?php echo $alamat_konsumen ?>">
                <label>Telepon</label>
                <input type="text" name="telp" class="form-control" value="<?php echo $telp ?>">
                <label>Umur</label>
                <input type="text" name="umur" class="form-control" value="<?php echo $umur?>">
                <label>Jenis Kelamin</label>
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
                </select>
                <label>Tempat Lahir</label>
                <input type="text" name="tmpt_lahir" class="form-control" value="<?php echo $tmpt_lahir ?>">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $tanggal ?>">
                <div style="margin: 10px;"></div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
</div>