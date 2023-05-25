<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Silahkan login terlebih dahulu."); window.location.href = "login.php";</script>';
    exit();
}

$title = 'Dashboard';
include 'layout/header.php'; 
?>

    <div class="container mt-5 text-center">
        <img src="logo.png" width="420px" height="420px">
        <h1>Sistem Informasi Mahasiswa</h1>
        <h1>Institut Bisnis dan Teknologi Indonesia</h1>
    </div>

<?php include 'layout/footer.php'; ?>
