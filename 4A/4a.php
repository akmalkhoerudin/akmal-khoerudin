<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_perpustakaan');

// Menampilkan Semua Data Buku
$allBooks = mysqli_query($conn, "SELECT * FROM books ORDER BY id ASC");

// Menampilkan Produk Per Kategori
$getBookByCategory = mysqli_query($conn, "SELECT b.name, b.stok, c.name AS category 
                                          FROM books AS b 
                                          INNER JOIN categories as c 
                                          ON b.category_id = c.id 
                                          WHERE category_id=1");

// Menampilkan Detail Data Buku
$getDetailBook = mysqli_query($conn, "SELECT * FROM books WHERE id=1");

// Insert Data Buku
$addBook = mysqli_query($conn, "INSERT INTO books (name, stok, image, deskripsi, category_id) VALUES ('laskar_pelangi','2','default.jpg','Laskar Pelangi Adalah Cerita anak dari wilayah timur','1')");

// Insert Data Kategori
$addCategori = mysqli_query($conn, "INSERT INTO categories (name) VALUES ('Fiksi')");
