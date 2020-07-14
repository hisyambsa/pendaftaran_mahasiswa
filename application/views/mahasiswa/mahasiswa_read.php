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
	<h2 style="margin-top:0px">Lihat Mahasiswa</h2>
	<table class="table">
		<tr>
			<td>Nama Lengkap</td>
			<td><?php echo $nama_lengkap; ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><?php echo $tempat_lahir; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $tanggal_lahir; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>Kota</td>
			<td><?php echo $kota; ?></td>
		</tr>
		<tr>
			<td>Negara</td>
			<td><?php echo $negara; ?></td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td><?php echo $kode_pos; ?></td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td><?php echo $no_hp; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Tinggi Badan</td>
			<td><?php echo $tinggi_badan; ?></td>
		</tr>
		<tr>
			<td>Berat Badan</td>
			<td><?php echo $berat_badan; ?></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-danger btn-rounded">Kembali</a></td>
		</tr>
	</table>
</div>