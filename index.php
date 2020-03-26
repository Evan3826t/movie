<?php 
include_once ("base.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/fontawesome.all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="shortcut icon" href="./images/favicon-20191209083958255.ico" type="image/x-icon">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/all.js"></script>
    <!-- Primary Meta Tags -->
<title>電影院</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light text-white" style="background:#7373B9">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">電影院</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-white" href="index.php">首頁<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="./movie.php">電影</a>
                </li>
              </ul>

            </div>
        </div>
      </nav>
      
      <?php
      $do = (empty($_GET['do']))?"home":$_GET['do'];
      $path = "./front/" . $do . ".php";
      if(file_exists($path)){
        include ($path);
      }else{
        include ("./front/home.php");
      }
      ?>
      <div class="container-fluid text-white text-center" id="footer" style="background:#7373B9">
        <div class="row">
          <div class="col-12" >
              <br>
                &copy; <script>
                  document.write(new Date().getFullYear())
                </script>電影院
          </div>
        </div>
      </div>
    <script>
      $(window).on("load", function(){
        $("#loading").fadeOut(100, function(){
          $("#content").fadeIn();
          $("#footer").fadeIn();
          new WOW().init();
        })
      })
    </script>
</body>
</html>