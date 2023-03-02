<?php
include("koneksi.php");

$id_bantuan=$_GET['id_bantuan'];

$sql="DELETE FROM tb_bantuan where id_bantuan='$id_bantuan'";
$query=mysqli_query($koneksi,$sql);

$sql="DELETE FROM tb_penerima where id_bantuan='$id_bantuan'";
$query=mysqli_query($koneksi,$sql);

header("location:tampil.php?status=sukses");
?>