<?php
include('config.php');

if(isset($_POST['submit'])){
    $nama               = $_POST['nama_pemenang'];
    $judul              = $_POST['judul_pencapaian'];
    $deskripsi          = $_POST['deskripsi_pencapaian'];
    $tanggal            = $_POST['tanggal_pencapaian'];
    $gambar             = $_FILES['gambar_pencapaian']['name'];
    $gambar_tmp_name    = $_FILES['gambar_pencapaian']['tmp_name'];
    $gambar_folder      = 'uploaded_img/'. $gambar;

    if(empty($judul) || empty($deskripsi) || empty($tanggal) || empty($gambar)){
        $pesan[]        = "<script>alert('tolong di isi datanya')</script>";
    }else{
        $insert         = "INSERT INTO pencapaian (nama_pemenang, judul_pencapaian, deskripsi_pencapaian, tanggal_pencapaian, gambar_pencapaian)
                            VALUES ('$nama','$judul','$deskripsi','$tanggal','$gambar')";
        $result         = mysqli_query($conn, $insert);
        if($result){
            move_uploaded_file($gambar_tmp_name, $gambar_folder);
            $pesan[]    = "<script>alert('Data telah terupload')</script>";
        }else{
            $pesan[]    = "<script>alert('Data tidak dapat terupload')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>21VerskyMin | Pencapaian</title>

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
    <link rel="stylesheet" href="assets/css/style.css">
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
                        <h1 class="m-0">Tambah Pencapaian</h1>
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
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="namapemenang" class="form-label">Nama pemenang</label>
                                <input type="text" class="form-control" name="nama_pemenang" id="nama_pemenang">
                            </div>
                            <div class="mb-3">
                                <label for="judulpencapaian" class="form-label">Judul pencapaian</label>
                                <input type="text" class="form-control" name="judul_pencapaian" id="judul_pencapaian">
                            </div>
                            <div class="mb-3">
                                <label for="deskpencapaian" class="form-label">Deskripsi pencapaian</label>
                                <input type="text" class="form-control" name="deskripsi_pencapaian" id="deskripsi_pencapaian">
                            </div>
                            <div class="mb-3">
                                <label for="tglpencapaian" class="form-label">Tanggal pencapaian</label>
                                <input type="date" class="form-control" name="tanggal_pencapaian" id="tanggal_pencapaian">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar pencapaian</label>
                                <input class="form-control" accept="image/png, image/jpeg, image/jpg" name="gambar_pencapaian" type="file" id="formFile">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Apakah anda sudah meresize foto?')">Submit</button>
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
                                        <th scope="col">Nama Pemenang</th>
                                        <th scope="col">Judul Pencapaian</th>
                                        <th scope="col">Deskripsi Pencapaian</th>
                                        <th scope="col">Tanggal Pencapaian</th>
                                        <th scope="col">Gambar pencapaian</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query1 = "SELECT * FROM pencapaian ORDER BY id_pencapaian ASC";
                                    $result1 = mysqli_query($conn, $query1);
                                    if ($result1->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                            $id_pencapaian          = $row['id_pencapaian'];
                                            $nama_pemenang          = $row['nama_pemenang'];
                                            $judul_pencapaian       = $row['judul_pencapaian'];
                                            $deskripsi_pencapaian   = $row['deskripsi_pencapaian'];
                                            $tanggal_pencapaian     = $row['tanggal_pencapaian'];
                                            $gambar_pencapaian      = $row['gambar_pencapaian'];
                                    ?>
                                            <tr>
                                                <th scope="row"><?php echo $id_pencapaian ?></th>
                                                <td><?php echo $nama_pemenang ?></td>
                                                <td><?php echo $judul_pencapaian ?></td>
                                                <td><?php echo $deskripsi_pencapaian ?></td>
                                                <td><?php echo $tanggal_pencapaian ?></td>
                                                <td><img src="uploaded_img/<?php echo $gambar_pencapaian ?>" alt=""></td>
                                                <td>
                                                    <!-- Tombol Edit -->
                                                    <a href="#" class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal<?php echo $id_pencapaian ?>">Edit</a>
                                                </td>
                                                <td>
                                                    <!-- Tombol Hapus -->
                                                    <a href="deletepencapaian.php?id=<?php echo $id_pencapaian ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                                                </td>
                                            </tr>
                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editModal<?php echo $id_pencapaian ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $id_pencapaian ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel<?php echo $id_pencapaian ?>">Edit Mahasiswa</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Form Edit Mahasiswa -->
                                                            <form action="editpencapaian.php?id=<?php echo $id_pencapaian ?>" method="POST" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label for="edit-nama">Nama Pemenang</label>
                                                                    <input type="text" class="form-control" id="edit-nama-pemenang" name="edit-nama-pemenang" value="<?php echo $nama_pemenang ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="edit-judul">Judul Pencapaian</label>
                                                                    <input type="text" class="form-control" id="edit-judul-pencapaian" name="edit-judul-pencapaian" value="<?php echo $judul_pencapaian ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="edit-deskripsi">Deskripsi Pencapaian</label>
                                                                    <input type="text" class="form-control" id="edit-deskripsi-pencapaian" name="edit-deskripsi-pencapaian" value="<?php echo $deskripsi_pencapaian ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="edit-tanggal">Tanggal Pencapaian</label>
                                                                    <input type="date" class="form-control" id="edit-tanggal-pencapaian" name="edit-tanggal-pencapaian" value="<?php echo $tanggal_pencapaian ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formFile" class="form-label">Gambar pencapaian</label>
                                                                    <input class="form-control" accept="image/png, image/jpeg, image/jpg" name="edit-gambar-pencapaian" type="file" id="formFile" value="<?php echo $gambar_pencapaian ?>">
                                                                </div>
                                                                <button type="submit" name="edit-submit" class="btn btn-primary">Simpan</button>
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
    </div>

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