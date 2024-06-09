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
            max-width: 600px;
            text-align: center;
            margin: 2rem;
        }

        header {
            margin-bottom: 1em;
        }

        h3 {
            color: #1a73e8;
            font-size: 2em;
            margin-bottom: 0.5em;
        }

        p {
            padding: 1em;
            border-radius: 5px;
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 1em;
        }

        label {
            display: block;
            margin-bottom: 0.5em;
            color: #333;
            font-weight: 600;
        }

        input[type="text"] {
            width: calc(100% - 2em);
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

        footer {
            margin-top: 2em;
            color: black;
            font-weight: 600;
        }

        .footer-content {
            background-color: #1a73e8;
            padding: 1rem;
            border-radius: 0.5rem;
            filter: drop-shadow(3px 4px 6px rgba(0, 0, 0, 0.2));
        }

        fieldset {
            border: none;
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
        <header>
            <h3>Input Data Diri Siswa Kwik Kian Gie</h3>
            <hr>
        </header>

        <form action="proses-input.php" method="POST">
            <fieldset>
                <p>
                    <label for="id_siswa">ID Siswa: </label>
                    <input type="text" name="id_siswa" placeholder="ID Siswa" />
                </p>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" />
                </p>
                <p>
                    <label for="kelas">Kelas: </label>
                    <input type="text" name="kelas" placeholder="Kelas" />
                </p>
                <p>
                    <label for="id_jurusan">ID Jurusan: </label>
                    <input type="text" name="id_jurusan" placeholder="ID Jurusan" />
                </p>
                <p>
                    <label for="id_spp">ID SPP: </label>
                    <input type="text" name="id_spp" placeholder="ID SPP" />
                </p>
                <p>
                    <input type="submit" value="Tambah" name="tambah" />
                </p>
            </fieldset>
        </form>
        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
        <footer>
            <div class="footer-content">
                <p>© 2024 William Susilo</p>
            </div>
        </footer>

    </div>
</body>
</html>
