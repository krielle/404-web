<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="image/404.jpg">
  <title>404 Team Command Center</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/bg_style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="image/404logo.jpg" alt="logo" width="30px;">
         404 Command Center
         </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?page=home-center">Home Center
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php?page=404team" role="button" aria-haspopup="true" aria-expanded="false">About 404</a>
            <div class="dropdown-menu navbar-dark bg-dark">
              <a class="dropdown-item text-white text-bold" href="index.php?page=404team">404 Team</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-white text-bold" href="index.php?page=ump45">UMP45</a>
              <a class="dropdown-item text-white text-bold" href="index.php?page=ump9">UMP9</a>
              <a class="dropdown-item text-white text-bold" href="index.php?page=hk416">HK416</a>
              <a class="dropdown-item text-white text-bold" href="index.php?page=g11">G11</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=mission-serv">Mission Serv</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=intern-contact">Intern Contact</a>
          </li>
          <?php
            if(isset($_SESSION['username'])){
              echo
              "
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=member'>Members</a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=chart'>Charts</a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=home-center'>welcome,".$_SESSION['username'] . "</a>
              </li>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='index.php?page=logout'>Logout</a>
              </li>";
            }
            else{
              echo"<li class='nav-item'>
              <a class='nav-link' href='index.php?page=login_form'>Login</a>
              </li>";
            }
          ?>
          
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('image/404 team.png');">
    <div style="height: 100px;"></div>
    <img class="img-fluid d-block mx-auto" src="image/404.jpg" alt="" style="width: 300px">
  </header>

  <!--restriction code -->
  <?php
        define("IS_INDEX",true);

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = "home-center";
        }
        require_once("aplikasi.php");
        require_once($page.".php");
    ?>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Febryan Surya 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
</body>

</html>