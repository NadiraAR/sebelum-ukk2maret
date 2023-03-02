<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil</title>
</head>
<body>
  <center>
    <h1>Aplikasi Penerima Bantuan</h1>
    <h3><a href="tambah.php">Tambah data</a></h3>
    <table border="1">
      <tr>
        <th>No</th>
        <th>Nama Penerima</th>
        <th>Alamat</th>
        <th>Jenis kelamin</th>
        <th>Nomor Bantuan</th>
        <th>Jenis Bantuan</th>
        <th>Aksi</th>
</tr>

<?php
include("koneksi.php");
$sql = "SELECT * FROM tb_bantuan INNER JOIN tb_penerima ON tb_bantuan.id_bantuan=tb_penerima.id_bantuan";
$query = mysqli_query($koneksi,$sql);

while($row=mysqli_fetch_array($query)){
  echo "<tr>";
  echo "<td>".$row['id_penerima']."</td>";
  echo "<td>".$row['nama_penerima']."</td>";
  echo "<td>".$row['alamat']."</td>";
  echo "<td>".$row['jenis_kelamin']."</td>";
  echo "<td>".$row['no_bantuan']."</td>";
  echo "<td>".$row['jenis_bantuan']."</td>";
  echo "<td>";
  echo "<a href='edit.php?id_bantuan=".$row['id_bantuan']."'>Edit | </a>";
  echo "<a href='hapus.php?id_bantuan=".$row['id_bantuan']."'>Hapus </a>";
  echo "</td>";
  echo "</tr>";
}
?>
</table>
</center>

</body>
</html>