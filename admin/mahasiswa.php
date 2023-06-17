<?php
include('config.php'); // file koneksi ke database

if (isset($_POST['submit'])) {
    $nama_mahasiswa     = $_POST['nama_mahasiswa'];
    $nim                = $_POST['nim'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $berhasil           = "";
    $gagal              = "";

    // cek apakah username sudah ada di database
    $query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Mahasiswa dengan NIM tersebut telah terdaftar.'); document.location.href = '/Riversky/admin/mahasiswa.php'</script>";
        exit();
    } else {
        $insert = "INSERT INTO mahasiswa (nama_mahasiswa, nim, tanggal_lahir, jenis_kelamin) VALUES ('$nama_mahasiswa', '$nim', '$tanggal_lahir', '$jenis_kelamin')";
        $queue = mysqli_query($conn, $insert);
        if($queue){
            $berhasil   = "Data berhasil diupload";
        }else{
            $gagal      = "Data gagal diupload";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>21VerskyMin | Mahasiswa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Mahasiswa</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12 position-static">
                        <form action="" method="POST">
                        <div class="mb-3">
                                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                                <input type="text" name="nim" class="form-control" id="nim">
                            </div>
                            <div class="mb-3">
                                <label for="nama_mahasiswa" class="form-label">Nama mahasiswa</label>
                                <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                            </div>
                            <div class="mb-3">
                                <h6 class="text-bold">Jenis kelamin</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_laki" value="Laki-laki">
                                        <label class="form-check-label" for="jenis_kelamin_laki">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan">
                                        <label class="form-check-label" for="jenis_kelamin_perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-lg-12 position-static">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
                                    $result = mysqli_query($conn, $query);
                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id_mahasiswa = $row['id_mahasiswa'];
                                            $nama_mahasiswa = $row['nama_mahasiswa'];
                                            $nim = $row['nim'];
                                            $tanggal_lahir = $row['tanggal_lahir'];
                                            $jenis_kelamin = $row['jenis_kelamin'];
                                    ?>
                                            <tr>
                                                <th scope="row"><?php echo $id_mahasiswa ?></th>
                                                <td><?php echo $nama_mahasiswa ?></td>
                                                <td><?php echo $nim ?></td>
                                                <td><?php echo $tanggal_lahir ?></td>
                                                <td><?php echo $jenis_kelamin ?></td>
                                                <td>
                                                    <!-- Tombol Edit -->
                                                    <a href="#" class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal<?php echo $id_mahasiswa ?>">Edit</a>
                                                </td>
                                                <td>
                                                    <!-- Tombol Hapus -->
                                                    <a href="deletemahasiswa.php?id=<?php echo $id_mahasiswa ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                                                </td>
                                            </tr>
                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editModal<?php echo $id_mahasiswa ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $id_mahasiswa ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel<?php echo $id_mahasiswa ?>">Edit Mahasiswa</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Form Edit Mahasiswa -->
                                                            <form action="editmahasiswa.php?id=<?php echo $id_mahasiswa ?>" method="POST">
                                                                <div class="form-group">
                                                                    <label for="edit-nama">Nama</label>
                                                                    <input type="text" class="form-control" id="edit-nama" name="edit-nama" value="<?php echo $nama_mahasiswa ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="edit-nim">NIM</label>
                                                                    <input type="text" class="form-control" id="edit-nim" name="edit-nim" value="<?php echo $nim ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="edit-tanggal-lahir">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control" id="edit-tanggal-lahir" name="edit-tanggal-lahir" value="<?php echo $tanggal_lahir ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="edit-jenis-kelamin">Jenis Kelamin</label>
                                                                    <select class="form-control" id="edit-jenis-kelamin" name="edit-jenis-kelamin">
                                                                        <option value="Laki-laki" <?php if ($jenis_kelamin == 'Laki-laki') echo 'selected' ?>>Laki-laki</option>
                                                                        <option value="Perempuan" <?php if ($jenis_kelamin == 'Perempuan') echo 'selected' ?>>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="7" class="px-6 py-4 text-gray-500">Tidak ada Data Mahasiswa.</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </section>
        <!-- /.content -->
      
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>