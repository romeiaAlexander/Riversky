<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>21Versky - Achievement</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
     </div>
    </header>
    <!-- end header section -->
  </div>  

  <section class="padding_sub">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
    <div class="container my-5">
      <div class="row">
        <?php
          include('config/config.php');

          $query      = "SELECT * FROM pencapaian";
          $result     = mysqli_query($conn, $query);
          $num_rows   = mysqli_num_rows($result);
          $active     = "active";
          $counter    = 0;
          mysqli_data_seek($result, 0);
          $counter      = 0;

          while ($row = mysqli_fetch_assoc($result)) {
            $nama       = $row['nama_pemenang'];
            $judul      = $row['judul_pencapaian'];
            $tanggal    = $row['tanggal_pencapaian'];
            $gambar     = $row['gambar_pencapaian'];
            $deskripsi  = $row['deskripsi_pencapaian'];

            echo '<div class="col-md-4">';
            echo '<div class="card mb-3">';
            echo '<img src="admin/uploaded_img/'.$gambar.'" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<p class="h4 card-title">'.$judul.'</p>';
            echo '<p class="card-date">'.$tanggal.'</p>';
            echo '<p>Oleh: <span class="fw-bold">'.$nama.'</span></p>';
            echo '<p class="card-text">'.$deskripsi.'</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $counter++;
          }
        ?>
      </div>
    </div>
  </section>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>


  <!-- end achievement section -->

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
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script src="assets/js/main.js" async defer></script>
</body>
</html>
