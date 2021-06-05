<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_perpustakaan');

$nama = $_POST['name'];

mysqli_query($conn, "INSERT INTO categories (name) VALUES ('$nama')");

header('location:index.php');
