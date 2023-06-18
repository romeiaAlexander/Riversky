<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> coder
ob_start();
=======
>>>>>>> b72bb4172f14c5050d9f22de478266d344eb1021
include "config/config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if (empty($username)) {
        echo "<script>alert('Username belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
        exit();
    } else if (empty($password)) {
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
        exit();
    } else {
        $login = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");
<<<<<<< HEAD

<<<<<<< HEAD

=======
>>>>>>> coder
=======
>>>>>>> b72bb4172f14c5050d9f22de478266d344eb1021
        if (mysqli_num_rows($login) > 0) {
            $_SESSION['username'] = $username;
            echo "<script>window.location.href='admin/index.php'</script>";
        } else {
            echo "<script>alert('Username atau Password anda salah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=index.php'>";
            exit();
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Riversky</title>
    <link rel="stylesheet" href="/Riversky/assets/css/style2.css">
</head>

<body class="sub_page">
    <div class="container">
        <div class="box">
            <div class="header">
                <header><img src="/Riversky/assets/images/logo4.png" alt="logo"></header>
                <p>Welcome to Riversky</p>
                <form action="" method="post">
            </div>
            <div class="input-box">
                <label for="Username">Username</label>
                <input type="text" class="input-field" name="username" id="username" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <label for="pass">Password</label>
                <input type="password" class="input-field" name="password" id="password" required>
                <i class="bx bx-lock"></i>
            </div>
            <div class="input-box">
<<<<<<< HEAD
                <input type="submit" class="input-submit" value="Login">
<<<<<<< HEAD
              </div>
=======
            </div>
>>>>>>> coder
=======
                <input type="submit" name="submit" class="input-submit" value="Login">
            </div>

>>>>>>> b72bb4172f14c5050d9f22de478266d344eb1021
        </div>
    </div>
</body>

</html>