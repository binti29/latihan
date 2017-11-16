<?php
include 'koneksi.php';
$id_barang = $_GET['id'];

$sql = "DELETE from barang WHERE id_barang='$id_barang'";

$barang = mysqli_query($koneksi,$sql);

	if ($barang) {
		echo "barang berhasil di hapus<br>";
	}else{
		echo "barang gagal di hapus";
		echo mysqli_error($koneksi);
	}
?>