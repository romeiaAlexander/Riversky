<?php
include('config.php');

if (isset($_GET['id'])) {
    $id         = $_GET['id'];
    $query      = "SELECT * FROM pencapaian WHERE id_pencapaian = $id";
    $result     = mysqli_query($conn, $query);
    $row        = mysqli_fetch_assoc($result);
    $nama       = $row['nama_pemenang'];
    $judul      = $row['judul_pencapaian'];
    $deskripsi  = $row['deskripsi_pencapaian'];
    $tanggal    = $row['tanggal_pencapaian'];
    $gambar     = $row['gambar_pencapaian'];
}

if (isset($_POST['edit-submit'])) {
    $id         = $_GET['id'];
    $nama       = $_POST['edit-nama-pemenang'];
    $judul      = $_POST['edit-judul-pencapaian'];
    $deskripsi  = $_POST['edit-deskripsi-pencapaian'];
    $tanggal    = $_POST['edit-tanggal-pencapaian'];
    $gambar     = $_FILES['edit-gambar-pencapaian']['name'];
    $gambarTmp  = $_FILES['edit-gambar-pencapaian']['tmp_name'];

    move_uploaded_file($gambarTmp, 'uploaded/img'.$gambar);

    $query      = "UPDATE pencapaian 
                    SET judul_pencapaian = '$judul', 
                    deskripsi_pencapaian = '$deskripsi', 
                    tanggal_pencapaian = '$tanggal', 
                    gambar_pencapaian = '$gambar' 
                    WHERE id_pencapaian = $id";

    mysqli_query($conn, $query);
    header("Location: index.php?admin=pencapaian");
    exit();
}
?>
