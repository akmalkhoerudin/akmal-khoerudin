<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_perpustakaan');

$allBooks = mysqli_query($conn, "SELECT * FROM books ORDER BY id ASC");

$getAllData = mysqli_query($conn, "SELECT *
                                  FROM books AS b 
                                  INNER JOIN categories as c 
                                  ON b.category_id = c.id");

$getCategory = mysqli_query($conn, "SELECT * FROM categories");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Data Buku</title>
</head>

<body>
  <div class="container">
    <h2>Data Buku</h2>
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
      Tambah
    </button>
    <button type="button" class="btn btn-info text-white mb-3" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
      Tambah Kategori
    </button>
    <div class="row">
      <?php $no = 1;
      while ($row = mysqli_fetch_array($allBooks)) { ?>
        <div class="col-6 col-md-3">
          <div class="card" style="width: 100%;">
            <a href="detail.php?id=<?= $row['id']; ?>">
              <img src="./<?= $row['image'] ?>" class="card-img-top" alt="<?= $row['image'] ?>">
            </a>
            <div class="card-body">
              <div class="col">
                <h5 class="card-title"><?= $row['name']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Stok : <?= $row['stok']; ?> </h6>
              </div>
              <?php if ($row['stok'] == '0') { ?>
                <button class="btn btn-sm btn-primary disabled">Pinjam</button>
              <?php } else { ?>
                <button class="btn btn-sm btn-primary">Pinjam</button>
              <?php } ?>
              <button class="btn btn-sm btn-warning">Kembalikan</button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<!-- Modal Tambah Buku -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="addbook.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Buku</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Buku">
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Jumlah Stok</label>
            <input type="text" name="stok" class="form-control" id="stok" placeholder="Jumlah Stok">
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="category_id" id="kategori" aria-label="Default select example">
              <option selected>-- Kategori --</option>
              <?php
              while ($row = mysqli_fetch_array($getCategory)) { ?>
                <option value="<?= $row['id']; ?>"><?= $row['name'] ?></option>
              <?php } ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Tambah Kategori -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="addcategory.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Kategori</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Kategori">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>