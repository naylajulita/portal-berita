<?php

include "koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>

<head>

    <title>Portal Berita</title>

    <style>

        body {
            font-family: Arial;
            margin: 0;
            background-color: #f5f5f5;
        }

        nav {
            background-color: white;
            padding: 15px 80px;
        }

        nav a {
            margin-right: 20px;
            text-decoration: none;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .berita {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
        }

        .berita img {
            width: 250px;
            max-height: 150px;
            object-fit: cover;
        }

        .edit {
            background-color: #0d6efd;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
        }

        .hapus {
            background-color: red;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
        }

    </style>

</head>

<body>

<nav>

    <b>Portal Berita</b>

    &nbsp;&nbsp;&nbsp;

    <a href="index.php">Home</a>

    <a href="input.php">Input Berita</a>

</nav>


<div class="container">

    <h2>Daftar Berita</h2>

    <?php while ($row = mysqli_fetch_assoc($data)) { ?>

        <div class="berita">

            <h2>
                <?php echo $row['judul']; ?>
            </h2>


            <?php if ($row['gambar'] != "") { ?>

                <img src="uploads/<?php echo $row['gambar']; ?>">

            <?php } ?>


            <p>
                <?php echo nl2br($row['isi']); ?>
            </p>


            <p>
                <b>Penulis:</b>
                <?php echo $row['penulis']; ?>
            </p>


            <p>
                <b>Tanggal:</b>
                <?php echo $row['tanggal']; ?>
            </p>


            <a class="edit"
               href="edit.php?id=<?php echo $row['id']; ?>">
                Edit
            </a>

            <a class="hapus"
               href="hapus.php?id=<?php echo $row['id']; ?>"
               onclick="return confirm('Yakin ingin menghapus berita ini?')">
                Hapus
            </a>

        </div>

    <?php } ?>

</div>

</body>

</html>
