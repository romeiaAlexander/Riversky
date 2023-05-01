<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
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
    <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="header">
                <header><img src="assets/images/logo4.png" alt="logo"></header>
                <p>Welcome to Riversky</p>

                <form action="index.php?river=home" method="post">
                    
            </div>
            <div class="input-box">
                <label for="email">E-mail</label>
                <input type="text" class="input-field" id="email" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <label for="pass">Password</label>
                <input type="password" class="input-field" id="pass" required>
                <i class="bx bx-lock"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="input-submit" value="Sign In">
            </div>
            <div class="bottom">
                <span><a href="#">Sign Up</a></span>
                <span><a href="#">Forget Password</a></span>
            </div>
        </div>
    </div>
</body>
</html>
