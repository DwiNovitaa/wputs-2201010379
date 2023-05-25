<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Silahkan login terlebih dahulu."); window.location.href = "login.php";</script>';
    exit();
}

include 'config/app.php';

// menerima id mahasiswa yang dipilih user
$id_mhs = (int)$_GET['id_mhs'];

if (delete_mhs($id_mhs) > 0) {
    echo "<script>
            alert('Data Mahasiswa Berhasil Dihapus');
            document.location.href = 'datamahasiswa.php';
          </script>";
} else {
    echo "<script>
            alert('Data Mahasiswa Gagal Dihapus');
            document.location.href = 'datamahasiswa.php';
          </script>";
}