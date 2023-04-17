<!DOCTYPE html>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <?php
        session_start();
        if($_SESSION['admin']==""){
            header("location:index.php?pesan=gagal");
        }
        ?>
        <h1>Selamat datang di halaman utama</h1>
        <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	    <a href="logout.php">LOGOUT</a>


        <script src="" async defer></script>
    </body>
</html>