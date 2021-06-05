<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_perpustakaan');

$getDetailBook = mysqli_query($conn, "SELECT * FROM books WHERE id=" . $_GET['id']);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Data Detail</title>
</head>

<body>
  <div class="container">
    <h2>Data Detail Buku</h2>
    <?php $no = 1;
    while ($row = mysqli_fetch_array($getDetailBook)) { ?>
      <table class="table">
        <tr>
          <th>Nama</th>
          <td>: <?= $row['name']; ?> </td>
        </tr>
        <tr>
          <th>Deskripsi</th>
          <td>: <?= $row['deskripsi']; ?></td>
        </tr>
        <tr>
          <th>Stok</th>
          <td>: <?= $row['stok']; ?></td>
        </tr>
        <tr>
          <th>Kategori</th>
          <td>: <?= $row['category_id']; ?></td>
        </tr>
      </table>
    <?php } ?>

    <a href="index.php" class="btn btn-success">Kembali</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>