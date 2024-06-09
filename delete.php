<?php
require_once 'koneksi.php';
if (isset($_GET['id_siswa'])) {
  $id_siswa = $_GET['id_siswa'];

// Perintah Hapus Data Berdasarkan ID yang Dikirimkan
  $q = $koneksi->query("DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'");

// Memeriksa Perintah
  if ($q) {
    // Menampilkakn Pesan Ketika Berhasil
    echo "<script>alert('Data Berhasil Dihapus'); window.location.href='index.php'</script>";
  } else {
    // Menampilkan Pesan Ketika Aksi Hapus Gagal
    echo "<script>alert('Data Gagal Dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // Apabila Mencoba Akses Langsung ke File Ini akan Diredirect ke Halaman Index
  header('Location:index.php');
}