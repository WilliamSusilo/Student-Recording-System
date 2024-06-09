<?php
require_once 'koneksi.php';

if (isset($_GET['id_siswa'])) {
  $id_siswa = $_GET['id_siswa'];

$q = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa'");

foreach ($q as $dt) :
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Join Table</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Montserrat', sans-serif;
                background-image: url('bg.png');
                background-repeat: no-repeat;
                background-size: cover;
                color: #333;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }

            .container {
                background: #fff;
                padding: 2em;
                border: none;
                border-radius: 1rem;
                filter: drop-shadow(3px 4px 6px rgba(0, 0, 0, 0.2));
                width: 800px;
                text-align: center;
                margin: 2em 0;
            }

            h2 {
                color: #1a73e8;
                font-size: 2em;
                margin-bottom: 1em;
            }

            input[type="text"],
            input[type="number"],
            input[type="submit"] {
                width: 50%;
                padding: 0.5em;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-family: 'Poppins', sans-serif;
                margin-bottom: 1em;
            }

            input[type="submit"] {
                background-color: #1a73e8;
                color: #fff;
                padding: 0.5em 1em;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
                font-family: 'Poppins', sans-serif;
            }

            input[type="submit"]:hover {
                background-color: #155ab6;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Tampilan Ubah Data Siswa</h2>
            <form action="proses-update.php" method="POST">
                <?php foreach ($q as $dt) : ?>
                <input type="hidden" name="id_siswa" value="<?= $dt['id_siswa'] ?>">
                <input type="text" name="nama" value="<?= $dt['nama'] ?>" placeholder="Nama">
                <input type="text" name="kelas" value="<?= $dt['kelas'] ?>" placeholder="Kelas">
                <input type="number" name="id_jurusan" value="<?= $dt['id_jurusan'] ?>" placeholder="ID Jurusan">
                <input type="number" name="id_spp" value="<?= $dt['id_spp'] ?>" placeholder="ID SPP">
                <input type="submit" name="submit" value="Ubah Data">
                <?php endforeach; ?>
            </form>
        </div>
    </body>
</html>

<?php
  endforeach;
}