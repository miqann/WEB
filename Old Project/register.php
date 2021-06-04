<?php
  include_once 'header.php'
  ?>

  <h2 class="tittle">SIGN UP</h2>  

<section class="form-login">
    <div class="form-group">
     <form  action="include/register.inc.php" method="post">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Full name</label>
        <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group" id="myform">
        <label for="exampleInputEmail1">Phone number</label>
        <input id="phone"type="number" name="phone" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Home Address</label>
        <input type="text" name="address" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" name="passwordRepeat" class="form-control" >
    </div>
    <div class="form-group" style="padding-left:20px">
      <input type="checkbox" class="form-check-input">
      <label class="form-check-label" for="exampleCheck1">I believe in your company . Let's go</label>
      <br></br>
    <button type="submit" name="submit" value="submit" class="btn btn-primary">SIGN UP</button>
    </div>

    <?php
    if(isset($_GET["error"]) ){
      if($_GET["error"] == "emptyInput") {
        echo "<p>Fill in all field! </p>";
      }
      elseif ($_GET["error"] == "invalidemail") {
        echo "<p> Choose a proper email!</p>";
      }
      elseif ($_GET["error"] == "passwordsdontmatch") {
        echo "<p> Password doesnt match!</p>";
      }
      elseif ($_GET["error"] == "emailtaken") {
        echo "<p> This email already existed!</p>";
      }
      elseif ($_GET["error"] == "stmtfailed") {
        echo "<p> Something went wrong, try again!</p>";
      }
      elseif ($_GET["error"] == "none") {
        echo "<p> You have sign up successfully!</p>";
      }

    }

  ?>
  
  </form>
  </section>

 

  </body>
</html>