<?php
include 'koneksi.php';
$sql = "SELECT id_barang, nama_barang, jumlah_barang, tgl_masuk, id_jenis, keadaan_barang FROM barang";
$data = mysqli_query($koneksi,$sql);

//menampilkam jenis di index
function tampilJenis($idJenis, $koneksi){
	$sql = "SELECT nama_jenis FROM jenis_barang WHERE id_jenis=$idJenis";
	$data =  mysqli_query($koneksi, $sql);
	$jenis = mysqli_fetch_assoc($data);
	return $jenis['nama_jenis'];
}
//var_dump($jenis);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventori</title>
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
			<th>Edit</th>
			<th>Hapus</th>
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
				<?php echo tampilJenis($barang['id_jenis'],$koneksi);?>
			</td>
			<td>
				<?php echo $barang['keadaan_barang'];?>
			</td>
				<!-- tanda ? sebelum id artinya dia sudah sebagai format dari php untuk mengirim data GET-->
				<!-- jika tidak diberi tanda ?, maka data akan dikirim dalam bentuk POST-->
				<!-- id diambil dari $id_barang = $_GET['id']; di ubah_barang.php-->
			<td>
				<a href="ubah_barang.php?id=<?php echo $barang['id_barang'];?>">Edit</a>
			</td>
			<td>
				<a href="hapus.php?id=<?php echo $barang['id_barang'];?>">Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>