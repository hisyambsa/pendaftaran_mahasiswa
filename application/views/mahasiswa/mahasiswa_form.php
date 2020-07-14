<?php
/*
<!-- .................................. -->
<!-- ...........COPYRIGHT ............. -->
<!-- Authors : Hisyam Husein .......... -->
<!-- Email : hisyam.husein@gmail.com .. -->
<!-- About : hisyambsa.github.io/ ..... -->
<!-- Instagram : @hisyambsa............ -->
<!-- .................................. -->
*/
?>
<div class="container">
    <h2 class="text-center" style="margin-top:0px">Form Pendaftaran</h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Nama Lengkap <?php echo form_error('nama_lengkap') ?></label>
            <input type="text" class="form-control" name="nama_lengkap" id="id_nama_lengkap" placeholder="Masukan Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempat_lahir') ?></label>
            <input type="text" class="form-control" name="tempat_lahir" id="id_tempat_lahir" placeholder="Masukan Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></label>
            <input type="date" class="form-control" name="tanggal_lahir" id="id_tanggal_lahir" placeholder="Masukan Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="id_alamat" placeholder="Masukan Alamat" value="<?php echo $alamat; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kota <?php echo form_error('kota') ?></label>
            <input type="text" class="form-control" name="kota" id="id_kota" placeholder="Masukan Kota" value="<?php echo $kota; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Negara <?php echo form_error('negara') ?></label>
            <input type="text" class="form-control" name="negara" id="id_negara" placeholder="Masukan Negara" value="<?php echo $negara; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kode Pos <?php echo form_error('kode_pos') ?></label>
            <input type="text" class="form-control" name="kode_pos" id="id_kode_pos" placeholder="Masukan Kode Pos" value="<?php echo $kode_pos; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">No Hp <?php echo form_error('no_hp') ?></label>
            <input type="number" class="form-control" name="no_hp" id="id_no_hp" placeholder="Masukan No Hp" value="<?php echo $no_hp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="email" class="form-control" name="email" id="id_email" placeholder="Masukan Email" value="<?php echo $email; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Tinggi Badan <?php echo form_error('tinggi_badan') ?></label>
            <input type="number" class="form-control" name="tinggi_badan" id="id_tinggi_badan" placeholder="Masukan Tinggi Badan" value="<?php echo $tinggi_badan; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Berat Badan <?php echo form_error('berat_badan') ?></label>
            <input type="number" class="form-control" name="berat_badan" id="id_berat_badan" placeholder="Masukan Berat Badan" value="<?php echo $berat_badan; ?>" />
        </div>
        <input type="hidden" name="ID" value="<?php echo $ID; ?>" />
        <button type="submit" class="btn btn-primary btn-rounded"><?php echo $button ?></button>
        <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-danger btn-rounded">Batal</a>
    </form>
</div>