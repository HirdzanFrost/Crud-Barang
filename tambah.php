<?php

  require 'function.php';
    if (isset($_POST["submit"]))
    if (tambah($_POST) > 0 )
      echo "Berhasil";
    else {
      echo "Gagal";
      echo "<br>";
    } ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <h1>Tambah Data Produk</h1>
    <a class="btn btn-primary" href="index2.php">Kembali</a>
    <form action="" method="post">
      <ul>
        <li>
          <label for="nama_produk"> Nama : </label>
          <input type="text" name="nama_produk" id="nama_produk">
        </li>
        <li>
          <label for="keterangan"> NIM : </label>
          <input type="text" name="keterangan" id="keterangan">
        </li>
        <li>
          <label for="harga"> Jurusan : </label>
          <input type="text" name="harga" id="harga">
        </li>
        <li>
          <label for="jumlah"> Email : </label>
          <input type="text" name="jumlah" id="jumlah">
        </li>

          <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
        
      </ul>
    </form>
  </body>
</html>
