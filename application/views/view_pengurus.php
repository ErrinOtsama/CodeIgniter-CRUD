<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2><?php echo $isi; ?></h2>
	<?php echo form_open('pengurus/addpengurus'); ?>
	<table border="0">
		<tr>
			<td>ID</td>
			<td><?php echo form_input('id'); ?></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><?php echo form_input('nama'); ?></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td><input type="radio" name="gender" value="L">Laki-Laki</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="radio" name="gender" value="P">Perempuan</td>
		</tr>
		<tr>
			<td valign="top">ALAMAT</td>
			<td><textarea name="alamat" rows="3" cols="40"></textarea></td>
		</tr>
		<tr>
			<td>GAJI</td>
			<td><?php echo form_input('gaji'); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_submit('submit','simpan'); ?><input type="reset" value="batal"></td>
		</tr>
	</table>
	<?php echo form_close(); ?>
	<h1 class="text-center"><?php echo $judul; ?></h1>
	<table border="3">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>GAJI</th>
			<th>AKSI</th>
		</tr>
		<?php foreach ($data->result_array() as $row) 
		{ ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['gaji']; ?></td>
				<td>
					<?php echo anchor('pengurus/edit/'.$row['id'],'Edit'); ?> |
					<?php echo anchor('pengurus/delete/'.$row['id'],'Hapus'); ?> 
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>

