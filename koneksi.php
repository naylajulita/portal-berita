<?php

$koneksi = mysqli_connect("localhost", "root", "", "portal_berita");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
