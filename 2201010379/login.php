<?php
session_start();
include 'config/app.php';
// Mengkoneksikan ke database
global $db;

$err = "";
$username = "";

if (isset($_SESSION['registration_success'])) {
    $registration_success = $_SESSION['registration_success'];
    unset($_SESSION['registration_success']);
}

if (isset($_POST['txUSER'])) {
    $username = $_POST['txUSER'];
    $passkey = $_POST['txPASS'];

    if ($username == '' or $passkey == '') {
        $err .= "<li>Silahkan masukkan username dan juga password.</li>";
    } else {
        $sql1 = "SELECT passkey FROM tb_user WHERE username='$username'";
        $sql = mysqli_query($db, $sql1);
        $r1 = mysqli_fetch_array($sql);

        if ($r1['passkey'] == md5($passkey)) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $err = "Login Gagal";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Form Login</title>
</head>
<body>
<?php
if (isset($registration_success)) {
    echo "<div class='alert alert-success'>" . $registration_success . "</div>";
}
?>
     
    <form method="POST" action="">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_GbabwrUY2k.json"  background="transparent"   speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>LOGIN</header>
                        <?php if (!empty($err)) { ?>
                            <div class="error"><?php echo $err; ?></div>
                        <?php } ?>
                        <div class="input-field">
                            <input type="text" class="input" name="txUSER" required autocomplete="off">
                            <label>User Name</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" name="txPASS" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Sign In">
                        </div>
                        <div class="signin">
                            <span>Didn't have an account? <a href="register.php">Sign up here</a></span>
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
