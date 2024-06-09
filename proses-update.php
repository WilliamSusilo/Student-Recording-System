<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_siswa = $_POST['id_siswa'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $id_jurusan = $_POST['id_jurusan'];
  $id_spp = $_POST['id_spp'];

$q = $koneksi->query("UPDATE tb_siswa SET nama = '$nama', kelas = '$kelas', id_jurusan = '$id_jurusan', id_spp = '$id_spp' WHERE id_siswa = '$id_siswa'");

if ($q) {
    // Pesan Jika Data Berubah
    echo "<script>alert('Data Produk Berhasil Diubah'); window.location.href='index.php'</script>";
  } else {
    // Pesan Jika Data Gagal Diubah
    echo "<script>alert('Data Produk Gagal Diubah'); window.location.href='index.php'</script>";
  }
} else {
  // Apabila Mencoba Akses Langsung ke File Ini akan Diredirect ke Halaman Index
  header('Location: index.php');
}