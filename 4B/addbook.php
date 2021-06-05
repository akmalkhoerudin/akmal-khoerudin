<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_perpustakaan');

$nama = $_POST['name'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];
$category = $_POST['category_id'];
$image = 'default.jpg';

mysqli_query($conn, "INSERT INTO books (name, stok, image, deskripsi, category_id) VALUES ('$nama', '$stok', '$image', '$deskripsi', '$category')");

header('location:index.php');
