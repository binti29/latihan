<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$jumlah  = $_POST['jumlah'];
	$jenis = $_POST['jenis'];
	$keadaan = $_POST['keadaan'];

//echo $nama.",".$jumlah.",".$jenis.",".$keadaan;
	$sql = "INSERT INTO barang(nama_barang,jumlah_barang,id_jenis,keadaan_barang) VALUES ('$nama','$jumlah','$jenis','$keadaan')";
	$data = mysqli_query($koneksi,$sql);

	if ($data) {
		echo "barang berhasil di simpan<br>";
	}else{
		echo "barang gagal disimpan";
		echo mysqli_error($koneksi);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventori</title>
</head>
<body>
	<form method="POST">
		<label>Nama Barang : </label>
		<input type="text" name="nama"><br/>
		<label>Jumlah Barang : </label>
		<input type="number" name="jumlah"><br/>
		<label>Jenis : </label>
		<select name="jenis">
			<option value="1">Berbahaya</option>
			<option value="2">Beracun</option>
			<option value="3">Mudah Pecah</option>
		</select><br/>
		<label>Keadaan : </label>
		<select name="keadaan">
			<option value="baru">Baru</option>
			<option value="bekas">Bekas</option>
		</select><br/>
		<input type="submit" name="submit" value="simpan">
	</form>
</body>
</html>