<?php

include "koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

if ($gambar != "") {

    move_uploaded_file($tmp, "uploads/" . $gambar);

    $query = "UPDATE berita SET
              judul='$judul',
              gambar='$gambar',
              isi='$isi',
              penulis='$penulis',
              tanggal='$tanggal'
              WHERE id='$id'";

} else {

    $query = "UPDATE berita SET
              judul='$judul',
              isi='$isi',
              penulis='$penulis',
              tanggal='$tanggal'
              WHERE id='$id'";
}

mysqli_query($koneksi, $query);

header("Location: index.php");

?>
