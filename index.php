<?php
include 'koneksi.php';
$sql = "SELECT nama_barang, jumlah_barang, tgl_masuk, id_jenis, keadaan_barang FROM barang";
$data = mysqli_query($koneksi,$sql);

//var_dump($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<label><b>Barang di Gudang</label></b><br/>
	<a href="input_barang.php">Tambah Barang Baru</a>
	<table border="1px">
		<tr>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tanggal Masuk</th>
			<th>Jenis</th>
			<th>Keadaan</th>
		</tr>
	<?php
		foreach ($data as $barang):
	?>
		<tr>
			<td>
				<?php echo $barang['nama_barang'];?>
			</td>
			<td>
				<?php echo $barang['jumlah_barang'];?>
			</td>
			<td>
				<?php echo $barang['tgl_masuk'];?>
			</td>
			<td>
				<?php echo $barang['id_jenis'];?>
			</td>
			<td>
				<?php echo $barang['keadaan_barang'];?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>