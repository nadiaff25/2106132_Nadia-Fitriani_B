<?php

include './koneksi.php' ;

$nama = $_POST['nama'];
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['lokasi'];

/* mendefinisikan query */
$query = "INSERT INTO input(nama, id, tanggal, lokasi, deskripsi) VALUES('$nama', '$id', '$tanggal', '$lokasi', '$deskripsi')";

/* mengeksekusi query */ 
mysqli_query($koneksi, $query);

/* kembali ke halaman index.php */ 
header("Location: ./index.php");

exit;

?>