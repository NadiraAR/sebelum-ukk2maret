<?php
include("koneksi.php");
if(!isset($_GET['id_bantuan'])){
  header("location:tampil.php");
}

$id_bantuan=$_GET['id_bantuan'];

$sql="SELECT * FROM tb_bantuan INNER JOIN tb_penerima ON tb_bantuan.id_bantuan=tb_penerima.id_bantuan
WHERE tb_bantuan.id_bantuan='$id_bantuan'";
$query=mysqli_query($koneksi,$sql);

$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>
<body>
  <center>
    <h1>Edit Data</h1>
    <form action ="proses-edit.php" method = "POST">
      <table border = "0">
        <input type = "hidden" name = "id_bantuan" value="<?php echo $row['id_bantuan']?>"/>

        <tr>
          <td><label for = "no_bantuan">Nomor Bantuan : </td>
          <td><input type = "text" name = "no_bantuan" value="<?php echo $row['no_bantuan']?>"/></td>
</tr>
<tr>
          <td><label for = "jenis_bantuan">Jenis bantuan : </td>
          <td><input type = "text" name = "jenis_bantuan" value="<?php echo $row['jenis_bantuan']?>"/></td>
</tr>
<tr>
          <td><label for = "nama_penerima">Nama Penerima : </td>
          <td><input type = "text" name = "nama_penerima" value="<?php echo $row['nama_penerima']?>"/></td>
</tr>
<tr>
          <td><label for = "alamat">Alamat : </td>
          <td><input type = "text" name = "alamat" value="<?php echo $row['alamat']?>"/></td>
</tr>
<tr>
  <td><label for = "jenis_kelamin">Jenis Kelamin : </td>
  <td><input type = "radio" name = "jenis_kelamin" value = "laki-laki"/>Laki-laki
  <input type = "radio" name = "jenis_kelamin" value = "perempuan"/>Perempuan</td>
</tr>

<table>
  <p><input type = "submit" name ="edit" value ="Edit data"/></p>
</table>
</table>
</center>
</body>
</html>
