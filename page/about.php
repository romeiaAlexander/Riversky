<?php
include('../Riversky/config/config.php')
?>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>21Versky - Tentang Kami</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet">
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section">
    <div class="container con_padding">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="assets/images/logoangkatan.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Mengenai 21Versky
              </h2>
            </div>
            <p>
              Visi : <br>
              Menjadi jembatan pertemuan dan pemersatu bagi mahasiswa dengan memiliki
              jiwa yang independen dan bergerak secara sistematis, serta mampu
              unggul dalam bidang akademik maupun non-akademik. <br> <br>
              Misi : <br>
              1. Menjadikan mahasiswa yang memiliki rasa solidaritas dengan mengoptimalkan kualitas diri, berinovasi, dan berkreasi
              dengan berbagi antar pengalaman dan ilmu

            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content px-5 pb-4">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 position-static">
          <h2>Tabel Daftar Mahasiswa</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
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
                  </tr>
                <?php
                }
              } else {
                ?>
                <tr>
                  <td colspan="12" class="px-6 py-4 text-gray-500">Tidak ada Data Mahasiswa.</td>
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

  <!-- end about section -->


  <div class="footer_bg">

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contactLink">
      <div class="container">
        <div class="heading_container">
          <h2>
            Kirim pesan untuk kami
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Nama ">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>

              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Perihal">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Pesan">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>





  </div>

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="asset/js/custom.js"></script>



</body>

</html>