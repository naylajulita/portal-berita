<!DOCTYPE html>
<html>
<head>
    <title>Input Berita</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        nav {
            background-color: #f5f5f5;
            padding: 15px 80px;
        }

        nav a {
            margin-right: 20px;
            text-decoration: none;
            color: #333;
        }

        .container {
            width: 70%;
            margin: 30px auto;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
        }

        button {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 4px;
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

    <h2>Input Berita</h2>

    <form action="simpan.php" method="POST" enctype="multipart/form-data">

        <label>Judul Berita:</label>
        <input type="text" name="judul" required>

        <label>Gambar:</label>
        <input type="file" name="gambar">

        <label>Isi Berita:</label>
        <textarea name="isi" required></textarea>

        <label>Penulis:</label>
        <input type="text" name="penulis" required>

        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>

        <button type="submit">Submit</button>

    </form>

</div>

</body>
</html>
