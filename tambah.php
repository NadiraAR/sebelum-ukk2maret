<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
</head>
<body>
  <center>
  <h1>Form Tambah Data</h1>
  <form action = "proses-tambah.php" method = "POST">
      <table border = "0">
        <tr>
          <td><label for = "no_bantuan">Nomor Bantuan : </label>
          <td><input type = "text" name = "no_bantuan"/></td>
</tr>
<tr>
  <td><label for = "jenis_bantuan">Jenis bantuan : </label>
  <td><input type = "text" name = "jenis_bantuan"/></td>
</tr>
<tr>
  <td><label for = "nama_penerima">Nama Penerima : </label>
  <td><input type = "text" name = "nama_penerima"/></td>
</tr>
<tr>
  <td><label for = "alamat">Alamat : </label>
  <td><input type = "text" name = "alamat"/></td>
</tr>
<tr>
  <td><label for = "jenis_kelamin">Jenis kelamin : </td>
  <td><input type ="radio" name = "jenis_kelamin" value = "laki-laki"/>Laki-laki
  <input type ="radio" name = "jenis_kelamin" value = "perempuan"/>Perempuan</td>
</tr>
<table>
  <p><input type="submit" name = "kirim" value = "Kirim data"/></p>
</table>
</table>
</center>
</body>
</html>