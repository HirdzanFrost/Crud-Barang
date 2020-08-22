
<?php
require 'function.php';

$produk = query("SELECT * FROM produk ");
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
  // code...
// while ($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs["Nama"]);
// }

//cari
  if(isset($_POST["cari"])) {
    $produk = cari($_POST["keyword"]);
  }
 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

     <h1><p style="text-align: center;"> Data Produk</p></h1>

    <a class="btn btn-primary" href="tambah.php">Tambah Data Produk</a>
      <br>
      <br>
      
      <form action="" method="post">
      
        <input type="text" name="keyword" size="40" autofocus="" placeholder="Cari Disini" autocomplete="off">
        <button type="submit" name="cari" >Cari</button>
        
      </form>

      <br>
      <div class="container"><div class="table-responsive">
    <table class="table table-sm table-dark" border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Edit</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Harga</th>
          <th scope="col">Jumlah</th>       
        </tr>
        <?php $i =1; ?>
        <?php foreach ($produk as $prdk ) : ?>

        <tr>
          <td><?= $i; ?></td>
          <td>
            <a class="btn btn-primary" href="ubah.php?id=<?= $prdk["id"]; ?>">Edit</a>
            |
            <a class="btn btn-primary" href="hapus.php?id=<?= $prdk["id"]; ?>" onclick="return confirm('yakin');">Hapus</a>
          </td>
          <td><?= $prdk{"nama_produk"} ?></td>
          <td><?= $prdk{"keterangan"} ?></td>
          <td><?= $prdk{"harga"} ?></td>
          <td><?= $prdk{"jumlah"} ?></td>

        </tr>

        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div></div>
    
  </body>
</html>
