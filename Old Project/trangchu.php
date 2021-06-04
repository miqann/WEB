<?php
include_once 'header.php'
?>
<?php
  if (isset($_SESSION["logEmail"])) {
    echo" <p id='hello'>Hello " . $_SESSION["logName"] . "</p> ";
  }
?>
<div id="slider">
  <div id="headerSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
      <li data-target="#headerSlider" data-slide-to="1"></li>
      <li data-target="#headerSlider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./IMG/Alty-Cleaning-Services-Featured-Image.jpg" style="width: 100%;" class="d-block img-fluid" >
        <div class="carousel-caption">
          <h1>Make an apointment? </h1>
          <a class="carousel-caption" href="login.php">Click here</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./IMG/Big team.jpg" style="width: 100%;" class="d-block img-fluid" >
        <div class="carousel-caption">
          <h1>Employees that we got</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./IMG/Clean3.jpg" style="width: 100%;" class="d-block img-fluid" >
        <div class="carousel-caption">
          <h1>Anywhere you go , we will go there and clean for you </h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<section id="about">
  <div class="container">
    <div class="row"></div>
      <div class="col-md-6"></div>
      <h2>About us</h2>
      <div class="about-content">
        HBK Commercial Cleaning Company
Our company has plenty of employee all over the country which is suitable for any  cleaning service such as home cleaning, company cleaning and industry cleaning, etc. From now the system has many services namely normal clean, golden clean, monthly clean, industry clean.
        
      </div>
      <a href="aboutus.html"><button type="button" class="btn btn-primary">Read more>></button></a>
      <div class="col-md-6">

      </div>
  </div>
</section>

</body>
 

</html>