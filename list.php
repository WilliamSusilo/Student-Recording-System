<?php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Siswa Kwik Kian Gie</title>
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
            max-width: 800px;
            text-align: center;
            margin-top: 2em;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>List Data SPP Kwik Kian Gie</h1>

        <!-- Menampilkan Data dari Database -->
        <table>
            <tr>
                <th>ID_SPP</th>
                <th>Tahun</th>
                <th>Nominal</th>
            </tr>
            <?php
            // Menampilkan Data
            $q = $koneksi->query("SELECT * FROM tb_spp");
            while($dt = $q->fetch_assoc()) :
            ?>
            <tr>
                <td><?= $dt['id_spp']?></td>
                <td><?= $dt['tahun']?></td>
                <td><?= $dt['nominal']?></td>
            <?php endwhile;?>
        </table>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
