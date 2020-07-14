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
<?php if ($this->session->userdata('pesan') <> '') : ?>
    <?php $pesan = $this->session->userdata('pesan'); ?>
    <script>
        alert('<?php echo $pesan ?>');
    </script>
<?php endif ?>
<div class="container my-4 ">
    <div class="row">
        <div class="col-md-4 text-center mt-2">
            <p><a class="btn btn-danger" href="<?= base_url('auth/logout') ?>">LOGOUT</a></p>
        </div>
        <div class="col-md-4 text-center">
            <h2 class="pb-4">Daftar Mahasiswa</h2>

        </div>
        <div id="" class="col-md-4 text-center h6">

        </div>
    </div>
    <div class="table-responsive">
        <table class="dataTableRun table-hover text-center text-nowrap display" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">No</th>
                    <th class="th-sm">Nama</th>
                    <th class="th-sm">Tempat</th>
                    <th class="th-sm">Tanggal </th>
                    <th class="th-sm">Alamat</th>
                    <th class="th-sm">Kota</th>
                    <th class="th-sm">No Hp</th>
                    <th class="th-sm">Email</th>
                    <th class="th-sm">Aksi</th>
                </tr>
            </thead><?php
                    foreach ($mahasiswa_data as $mahasiswa) {
                    ?>
                <tr>
                    <td><?php echo ++$start ?></td>
                    <td><?php echo $mahasiswa->nama_lengkap ?></td>
                    <td><?php echo $mahasiswa->tempat_lahir ?></td>
                    <td><?php echo $mahasiswa->tanggal_lahir ?></td>
                    <td><?php echo $mahasiswa->alamat ?></td>
                    <td><?php echo $mahasiswa->kota ?></td>
                    <td><?php echo $mahasiswa->no_hp ?></td>
                    <td><?php echo $mahasiswa->email ?></td>

                    <td style="text-align:center">
                        <a href="<?php echo base_url() . 'mahasiswa/read/' . $mahasiswa->ID ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Lihat">
                            <span class="fa fa-eye"></span>
                        </a>
                        <a onclick="alert('Anda akan diarahkan ke form Ubah data')" href="<?php echo base_url() . 'mahasiswa/update/' . $mahasiswa->ID ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Ubah">
                            <span class="fa fa-edit"></span>
                        </a>
                        <a onclick="return confirm('anda yakin akan menghapus data?')" href="<?php echo 'mahasiswa/delete/' . $mahasiswa->ID ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            <?php
                    }
            ?>
        </table>
    </div>
</div>