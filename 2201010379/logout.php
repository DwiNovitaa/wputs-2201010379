<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo '<script>alert("Silahkan login terlebih dahulu."); window.location.href = "login.php";</script>';
    exit();
}

//kosongkan $_SESSION user login
$_SESSION = [];

session_unset();
session_destroy();
header("Location: login.php");