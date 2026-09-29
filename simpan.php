<?php

include "koneksi.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

if ($gambar != "") {
    move_uploaded_file($tmp, "uploads/" . $gambar);
}

$query = "INSERT INTO berita
          (judul, gambar, isi, penulis, tanggal)
          VALUES
          ('$judul', '$gambar', '$isi', '$penulis', '$tanggal')";

mysqli_query($koneksi, $query);

header("Location: index.php");

?>
