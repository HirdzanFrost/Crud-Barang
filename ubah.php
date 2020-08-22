<?php

  require 'function.php';

  $id = $_GET["id"];

  $mhs = query("SELECT * FROM produk WHERE id = $id ")[0];
    if (isset($_POST["submit"]))
      if (ubah($_POST) > 0){

        echo "<script>
            alert('Data Berhasil diubah');
            document.location.href = 'index2.php';
            </script>
      ";
      }  else {

    echo("Error description: " . $conn -> error);


        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ubah Data Produk</h1>
    <a href="index2.php">Kembali</a>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $prdk["id"]; ?>">
      <ul>
        <li>
          <label for="nama_produk"> Nama produk : </label>
          <input type="text" name="nama_produk" id="nama_produk"
          value="<?= $prdk["nama"]; ?>">
        </li>
        <li>
          <label for="keterangan"> Keterangan : </label>
          <input type="text" name="keterangan" id="keterangan"
          value="<?= $prdk["nim"]; ?>">
        </li>
        <li>
          <label for="harga"> haraga : </label>
          <input type="text" name="harga" id="harga"
          value="<?= $prdk["jurusan"]; ?>">
        </li>
        <li>
          <label for="jumlah"> Jumlah : </label>
          <input type="text" name="jumlah" id="jumlah"
          value="<?= $prdk["email"]; ?>">
        </li>
        <li>
          <button type="submit" name="submit">ubah Data</button>
        </li>
      </ul>
    </form>
  </body>
</html>
