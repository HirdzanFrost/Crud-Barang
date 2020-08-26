<?php

  require 'function.php';

  $id = $_GET["id"];

  $prdk = query("SELECT * FROM produk WHERE id = $id ")[0];
    if (isset($_POST["submit"]))
      if (ubah($_POST) > 0){

        echo "<script>
            alert('Data Berhasil diubah');
            document.location.href = 'index2.php';
            </script>
      ";
      }  else {

    echo "<script>
    alert('Data Berhasil tidak berhasil diubah');
    </script>";      

        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <h1>Ubah Data Produk</h1>
    <a class="btn btn-primary"  href="index2.php">Kembali</a>
        <div class="container justify-content-center">
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $prdk["id"]; ?>">
      <ul>
        <li>
          <label for="nama_produk"> Nama produk : </label>
          <input type="text" name="nama_produk" id="nama_produk"
          value="<?= $prdk["nama_produk"]; ?>">
        </li>
        <li>
          <label for="keterangan"> Keterangan : </label>
          <input type="text" name="keterangan" id="keterangan"
          value="<?= $prdk["keterangan"]; ?>">
        </li>
        <li>
          <label for="harga"> haraga : </label>
          <input type="text" name="harga" id="harga"
          value="<?= $prdk["harga"]; ?>">
        </li>
        <li>
          <label for="jumlah"> Jumlah : </label>
          <input type="text" name="jumlah" id="jumlah"
          value="<?= $prdk["jumlah"]; ?>">
        </li>
        <li>
          <button class="btn btn-primary" type="submit" name="submit">ubah Data</button>
        </li>
      </ul>
    </form>
    </div>
      
  </body>
</html>
