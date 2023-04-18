<!DOCTYPE html>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <h1>Selamat datang di halaman utama</h1>
        <p>Halo <b><?php echo $_SESSION['username']; ?></p>
	    <a href="logout.php">LOGOUT</a>


        <script src="" async defer></script>
    </body>
</html>