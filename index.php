<?php
session_start();
require_once 'config/config.php';
?>
<html><head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>21Versky</title>

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

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php?river=home">
            <span>
              21Versky
            </span>
          </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php?river=home">Homepage <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?river=about"> About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?river=service"> Achievement </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?river=login"> login </a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <a href="">
                <img src="assets/images/call.png" alt="">
                <span>
                  Call : + 62 815-2619-0671
                </span>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
 
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      Kunjungi Kami
                    </h1>
                    <p>
                      Program Studi Sistem Informasi Jl. Fakultas MIPA UNSRAT,<br>
                      Kleak, Kec. Malalayang, Kota Manado, Prov. Sulawesi Utara<br>
                      Kode Pos 95115
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="assets/images/gambar3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <?php 
	if(isset($_GET['river'])){
		$page = $_GET['river'];
 
		switch ($page) {
			case 'home':
				include "page/home.php";
				break;
			case 'about':
				include "page/about.php";
				break;
			case 'service':
				include "page/service.php";
				break;
      case 'login':
        include "page/login.php";
        break;
      case 'dev':
        include "page/team.php";
        break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "page/home.php";
	}
 
?>

  <!-- service section -->
      <div class="btn-box">

      </div>
    </div>
  </section>
  <div class="footer_bg">

    
    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h3>
                21Versky
              </h3>
              <p>
                Terima kasih telah mengunjungi website kami.
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                Tautan Lain
              </h4>
              <ul class="  ">
                <li class=" active">
                  <a class="" href="index.php?river=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="">
                  <a class="" href="index.php?river=about"> About Us</a>
                </li>
                <li class="">
                  <a class="" href="index.php?river=service"> Achievement </a>
                </li>
                <li class="">
                  <a class="" href="index.php?river=login">Login</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                Kontak
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="assets/images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  +62 815-2619-0671
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="assets/images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  21versky@gmail.com 
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_form ">
              <h4>
                Masukkan email untuk mendapatkan berita terbaru mengenai kami
              </h4>
              <form action="">
                <input type="email" placeholder="Email">
                <button>
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <img src="assets/images/info-fb.png" alt="">
                </a>
                <a href="">
                  <img src="assets/images/info-twitter.png" alt="">
                </a>
                <a href="">
                  <img src="assets/images/info-linkedin.png" alt="">
                </a>
                <a href="">
                  <img src="assets/images/info-youtube.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          <span id="displayYear">2023</span> All Rights Reserved By
          <a href="index.php?river=dev">DEVELOPER 21versky</a>
        </p>
      </div>
    </section>
    <!-- footer section -->

  </div>

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>



</body></html>