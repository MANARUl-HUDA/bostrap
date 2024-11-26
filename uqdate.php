<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

 
mysql_query("UPDATE user SET nama='$nama', alamat='$alamat' WHERE id='$id'");
 
header("location:index.php?pesan=update");
 
?>