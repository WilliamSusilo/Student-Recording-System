<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        a.update {
            color: blue; 
            text-decoration: none; 
        }

        a.delete {
            color: red; 
            text-decoration: none; 
        }

        a:hover {
            color: gray; 
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

        h1 {
            color: #1a73e8;
            font-size: 2em;
            margin-bottom: 1em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1em;
        }

        th, td {
            padding: 0.5em;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        td {
            background-color: #fff;
        }

        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        .back-button {
            background-color: red;
            color: #fff;
            padding: 0.5em 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            margin-top: 1em;
            display: inline-block;
        }

        .back-button:hover {
            background-color: gray;
        }

        label {
            display: block;
            margin-bottom: 0.5em;
            color: #333;
            font-weight: 600;
        }

        input[type="text"] {
            width: 50%;
            padding: 0.5em;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
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

        .search-data{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>List Data Diri Siswa Kwik Kian Gie</h1>

        <form action="join-table.php" method="get">
            <div class="search-data">
                <label>Cari : </label>
                <input type="text" name="cari">
                <input type="submit" value="Cari">
            </div> 
        </form>

        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
        ?>
        <table>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th colspan="2">Aksi</th>
            </tr>

            <!-- Kode PHP -->
            <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp = tb_spp.id_spp WHERE nama LIKE '%".$cari."%' OR kelas = '$cari' OR nama_jurusan LIKE '%".$cari."%' OR tahun LIKE '%".$cari."%' OR nominal LIKE '%".$cari."%'");				
            } else{
            $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp = tb_spp.id_spp");
            }

            $no = 1;
            foreach ($query as $row) :
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kelas'];?></td>
                <td><?= $row['nama_jurusan'];?></td>
                <td><?= $row['tahun'];?></td>
                <td><?= $row['nominal'];?></td>
                <td><a class="update" href="update.php?id_siswa=<?= $row['id_siswa'] ?>">Ubah</a></td>
                <td><a class="delete" href="delete.php?id_siswa=<?= $row['id_siswa'] ?>" onclick="return confirm('Anda Yakin akan Menghapus Data Ini?')">Hapus</a></td>
            </tr>

            <?php endforeach; ?>
        </table>
        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
