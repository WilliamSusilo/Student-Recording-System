<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'siswa';

$koneksi = mysqli_connect($host, $username, $password, $db_name);

if ($koneksi) {
    echo "";
} else {
    die ("Koneksi Gagal : " . mysqli_connect_error());
}
?>