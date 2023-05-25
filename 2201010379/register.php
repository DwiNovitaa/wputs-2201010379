<?php
session_start();
include 'config/app.php';
$psn = "";
if (isset($_POST["txNAMA"])) {
    $pass1 = $_POST["txPASS1"];
    $pass2 = $_POST["txPASS2"];
    if ($pass1 == $pass2) {
        $nama = $_POST["txNAMA"];
        $email = $_POST["txEMAIL"];
        $user = $_POST["txUSER"];

        #penambahan data (CRUD)
        $sql = "INSERT INTO tb_user(nama,email,username,passkey,iduser) VALUES('$nama', '$email', '$user', '" . md5($pass1) . "', '" . md5($nama) . "');";

        global $db;
        $hasil = mysqli_query($db, $sql);
        if ($hasil) {
            $_SESSION['registration_success'] = "Registrasi user sukses, Silahkan login dengan user tersebut";
            header("Location: login.php"); // Redirect ke halaman login
            exit();
        } else {
            $psn = "Registrasi gagal, Silahkan diulangi";
        }
    } else {
        $psn = "Password tidak sama dengan Konfirmasi Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Register User</title>
</head>
<body>
<?php
if (!$psn == "") {
    echo "<div>" . $psn . "</div>";
}
?>


<form action="register.php" method="POST">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_4kji20Y93r.json"  background="transparent"   speed="1"  style="width: 500px; height: 550px;"  loop  autoplay></lottie-player>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Create account</header>
                        <div class="input-field">
                            <input type="text" class="input" name="txNAMA" required autocomplete="off">
                            <label>Nama Lengkap User</label>
                        </div>
                        <div class="input-field">
                            <input type="email" class="input" name="txEMAIL" required autocomplete="off">
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" name="txUSER" required autocomplete="off">
                            <label>User Name</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" name="txPASS1" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" name="txPASS2" required>
                            <label for="password">Password konfirmasi</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Sign Up">

                        </div>
                        <div class="signin">
                            <span>Already have an account? <a href="login.php">Log in here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>
