<?php
include '../config/koneksi.php';
$id_barangpw08 = $_GET['id_barangpw08'];
$query = mysqli_query($connect, "SELECT  * FROM barang where id_barangpw08='$id_barangpw08'");
$transaksi = mysqli_fetch_array($query);
$data=array(
'nama_barangpw08' => $transaksi['nama_barangpw08'],
'harga' => $transaksi['harga'],);


echo json_encode($data);
?>