<?php
$servername = "localhost"; //nama server database
$username = "root"; //nama pengguna database
$password = ""; //kata sandi database
$dbname = "riversky"; //nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>