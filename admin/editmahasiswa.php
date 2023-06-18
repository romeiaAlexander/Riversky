<?php
include('config.php');

if (isset($_GET['id'])) {
    $id_mahasiswa = $_GET['id'];
    $query = "SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $nama_mahasiswa = $row['nama_mahasiswa'];
    $nim = $row['nim'];
    $tanggal_lahir = $row['tanggal_lahir'];
    $jenis_kelamin = $row['jenis_kelamin'];
}

if (isset($_POST['edit-nama'])) {
    $id_mahasiswa = $_GET['id'];
    $nama_mahasiswa = $_POST['edit-nama'];
    $nim = $_POST['edit-nim'];
    $tanggal_lahir = $_POST['edit-tanggal-lahir'];
    $jenis_kelamin = $_POST['edit-jenis-kelamin'];

    $query = "UPDATE mahasiswa SET nama_mahasiswa = '$nama_mahasiswa', nim = '$nim', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin' WHERE id_mahasiswa = $id_mahasiswa";
    mysqli_query($conn, $query);
    header("Location: index.php?admin=mahasiswa");
    exit();
}
?>
