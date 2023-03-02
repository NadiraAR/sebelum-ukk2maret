<?php
include("koneksi.php");
if(isset($_POST['edit'])){
  $id_bantuan=$_POST['id_bantuan'];
  $nomor=$_POST['no_bantuan'];
  $jenis_bantuan=$_POST['jenis_bantuan'];
  $nama=$_POST['nama_penerima'];
  $alamat=$_POST['alamat'];
  $jenis_kelamin=$_POST['jenis_kelamin'];

  $sql="UPDATE tb_bantuan SET no_bantuan='$nomor',jenis_bantuan='$jenis_bantuan' WHERE id_bantuan='$id_bantuan'";
  $query=mysqli_query($koneksi,$sql);

  $sql="UPDATE tb_penerima SET nama_penerima='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin' WHERE id_bantuan='$id_bantuan'";
  $query=mysqli_query($koneksi,$sql);

  if($query){
    header('location:tampil.php?status=sukses');
  }else{
    header('location:tampil.php?status=gagal');
  }
}
?>