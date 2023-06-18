<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM pencapaian WHERE id_pencapaian = '$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Mahasiswa terhapus.'); document.location.href = '/Riversky/admin/index.php?admin=pencapaian'</script>";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

?>