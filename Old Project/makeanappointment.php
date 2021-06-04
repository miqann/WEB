<?php
include_once 'header.php'
?>

<head>
  <title>Real Programmer: User Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>

<section class="form-makeanappointment">
<form action="include/appointment.inc.php" method="post">
    <div class="form-groupmakeanappointment">
      <label for="exampleInputEmail1">Can i get your phone number ?</label>
      <input  type="number" name="number" class="form-control" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">We'll call you to confirm your service.</small>
    </div>
    <div class="form-group" style="padding-left:20px">
      <input type="checkbox" class="form-check-input">
      <label class="form-check-label" for="exampleCheck1">I believe in your services</label>
    </div>
   <button type="submit" name="submit" value="submit" class="btn btn-primary">Let's go</button>
    <br><br>
    <?php
    if(isset($_GET["error"]) ){
      if($_GET["error"] == "emptyNumber") {
        echo "<p>Fill in all field! </p>";
      }
      elseif ($_GET["error"] == "none") {
        echo "<p> We will contact you immediately!</p>";
      }
   

    }

  ?>
  
  </form>
</section>
</body>
</html>