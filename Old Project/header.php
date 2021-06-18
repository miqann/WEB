<?php
  session_start();
?>


<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./IMG/IMG1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="trangchu.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">SERVICES</a>
            </li>

            <?php
              if(isset($_SESSION["logEmail"])) {
                echo " <li class='nav-item'>
                <a class='nav-link' href='myprofile.php'>  PROFILE</a>
              </li>" ;
                echo " <li class='nav-item'>
                <a class='nav-link' href='include/logout.inc.php'>LOG OUT</a>  </li> ";
          
              }
              else {
                echo " <li class='nav-item'>
                <a class='nav-link' href='login.php'>LOG IN</a>   ";
                echo " <li class='nav-item'>
                <a class='nav-link' href='register.php'>SIGN UP</a>   ";

              }

            ?>
          </ul>
        </div>
    </nav>
  </section>

          

