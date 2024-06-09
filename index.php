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
        }

        header {
            margin-bottom: 1em;
        }

        h3 {
            color: #1a73e8;
            font-size: 2em;
            margin-bottom: 0.5em;
        }

        h4 {
            font-size: 1.5em;
            margin-bottom: 1em;
            color: black;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            padding: 0;
            margin-bottom: 1em;
            gap: 1rem;
        }

        nav ul li {
            flex: 1;
        }

        nav ul li a {
            height: 100%;
            text-decoration: none;
            color: black;
            font-weight: 600;
            background-color: #fff;
            padding: 0.5em 1em;
            border: 2px solid #1a73e8;
            border-radius: 5px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            filter: drop-shadow(3px 4px 6px rgba(0, 0, 0, 0.2));

        }

        nav ul li a:hover {
            background-color: #1a73e8;
            color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        p {
            padding: 1em;
            border-radius: 5px;
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .success {
            margin-top: 1rem;
            border-color: #28a745;
            color: #28a745;
        }

        .error {
            margin-top: 1rem;
            border-color: #dc3545;
            color: #dc3545;
        }

        footer {
            margin-top: 2em;
            color: black;
            font-weight: 600
        }

        .footer-content {
            background-color: #1a73e8;
            padding: 1rem;
            border-radius: 0.5rem;
            filter: drop-shadow(3px 4px 6px rgba(0, 0, 0, 0.2));
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h3>Data Diri Siswa Kwik Kian Gie</h3>
            <hr>
        </header>
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="input.php">Input Data Siswa</a></li>
                <li><a href="list.php">List Data SPP</a></li>
                <li><a href="join-table.php">List Data Siswa</a></li>
            </ul>
        </nav>
        <hr>
        <?php if(isset($_GET['status'])): ?>
        <p id="notification" class="<?php echo $_GET['status'] == 'sukses' ? 'success' : 'error'; ?>">
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Input Data Siswa Baru Berhasil!";
                } else {
                    echo "Input Data Siswa Gagal!";
                }
            ?>
        </p>
        <?php endif; ?>
        <footer>
            <div class="footer-content">
                <p>© 2024 William Susilo</p>
            </div>
        </footer>
    </div>

    <script>
        // Mengatur Tampilan Sementara
        document.addEventListener('DOMContentLoaded', function() {
            var notification = document.getElementById('notification');
            if (notification) {
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 5000); // Tampilkan Selama 5 Detik
            }
        });
    </script>
</body>
</html>
