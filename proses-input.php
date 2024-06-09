<?php

include("koneksi.php");

// Mengecek Tombol Daftar Sudah Diklik atau Belum
if(isset($_POST['tambah'])){

    // Mengambil Data dari Formulir
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $id_jurusan = htmlspecialchars($_POST['id_jurusan']);
    $id_spp = htmlspecialchars($_POST['id_spp']);

    // MEembuat Query
    $sql = "INSERT INTO tb_siswa (id_siswa, nama, kelas, id_jurusan, id_spp) VALUE ('$id_siswa','$nama', '$kelas', '$id_jurusan', '$id_spp')";
    $query = mysqli_query($koneksi, $sql);

    // Mengecek Apakah Query Berhasil Disimpan
    if( $query ) {
        // Apabila Berhasil Dialihkan ke Halaman index.php dengan Status = Sukses
        header('Location: index.php?status=sukses');
    } else {
        // Apabila Gagal Dialihkan ke Halaman index.php dengan Status = Gagal
        header('Location: index.php?status=gagal');
    }
    
} else {
    die("Akses dilarang...");
}
?>