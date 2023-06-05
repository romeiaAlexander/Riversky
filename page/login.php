<?php 
require_once "config/config.php"; 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from tb_mahasiswa where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
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
                <input type="submit" class="input-submit" value="Login">
            </div>
            <div class="bottom">
                <p>Belum mempunyai akun?</p>
                <span><a href="register.php">Sign Up</a></span>
            </div>
        </div>
    </div>
</body>

</html>