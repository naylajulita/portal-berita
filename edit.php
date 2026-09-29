<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM berita WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Berita</title>

</head>

<body>

    <h2>Edit Berita</h2>

    <form action="update.php" method="POST" enctype="multipart/form-data">

        <input type="hidden"
               name="id"
               value="<?php echo $row['id']; ?>">


        <label>Judul Berita:</label>
        <br>

        <input type="text"
               name="judul"
               value="<?php echo $row['judul']; ?>"
               required>

        <br><br>


        <label>Gambar:</label>
        <br>

        <input type="file"
               name="gambar">

        <br><br>


        <label>Isi Berita:</label>
        <br>

        <textarea name="isi"
                  rows="10"
                  cols="50"
                  required><?php echo $row['isi']; ?></textarea>

        <br><br>


        <label>Penulis:</label>
        <br>

        <input type="text"
               name="penulis"
               value="<?php echo $row['penulis']; ?>"
               required>

        <br><br>


        <label>Tanggal:</label>
        <br>

        <input type="date"
               name="tanggal"
               value="<?php echo $row['tanggal']; ?>"
               required>

        <br><br>


        <button type="submit">
            Update
        </button>

    </form>

</body>

</html>
