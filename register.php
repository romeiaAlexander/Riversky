<?php
require "config/config.php";
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $repassword = $_POST["re_password"];
  $duplicate = mysqli_query($conn, "select * from tb_mahasiswa where username = '$username' or email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script>alert('username or email sudah di dimiliki orang lain')</script>";
  }
  else{
    if($password == $repassword){
      $query = "insert into tb_mahasiswa values('', '$username', '$email', MD5('$password'))";
      mysqli_query($conn, $query);
      echo "<script>alert('Registrasi berhasil')</script>";
      echo "<meta http-equiv='refresh' content='1 url=index.php'>";
      exit();
    }else{
      echo "<script>alert('Registrasi gagal')</script>";
      echo "<meta http-equiv='refresh' content='1 url=register.php'>";
      exit();
    }
  }
}
?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Riversky - Sign Up</title>
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="/Riversky/assets/css/style1.css">
  <meta name="robots" content="noindex, follow">
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js" nonce="f196543e-fd3b-429b-a729-2cf9a98f5029"></script>
  <script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyU2lnbiUyMFVwJTIwRm9ybSUyMGJ5JTIwQ29sb3JsaWIlMjIlMkMlMjJ4JTIyJTNBMC41MDczNzI5NzAyMjIwMzU1JTJDJTIydyUyMiUzQTEzNjYlMkMlMjJoJTIyJTNBNzY4JTJDJTIyaiUyMiUzQTY0OSUyQyUyMmUlMjIlM0ExMzY2JTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGY29sb3JsaWIuY29tJTJGZXRjJTJGcmVnZm9ybSUyRmNvbG9ybGliLXJlZ2Zvcm0tOCUyRiUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmNvbG9ybGliLmNvbSUyRiUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtNDgwJTJDJTIycSUyMiUzQSU1QiU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMCUyMiUyQyUyMmNvbmZpZyUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMSUyMiUyQyUyMlVBLTIzNTgxNTY4LTEzJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTVEJTdE"></script>
</head>

<body style="background-image: url('/Riversky/assets/images/a.jpg');">
  <div class="main">
    <section class="signup">

      <div class="container">
        <div class="signup-content">
          <form method="POST" id="signup-form" class="signup-form">
            <h2 class="form-title">Create account</h2>
            <div class="form-group">
              <input type="text" class="form-input" name="username" id="username" placeholder="Your Username">
            </div>
            <div class="form-group">
              <input type="email" class="form-input" name="email" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-input" name="password" id="password" placeholder="Password">
              <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
              <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password">
            </div>
            <div class="form-group">
              <input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
              <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up">
            </div>
          </form>
          <p class="loginhere">
            Have already an account ? <a href="index.php?river=login" class="loginhere-link">Login here</a>
          </p>
        </div>
      </div>
    </section>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7c70899d1d433f69&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

</body>

</html>