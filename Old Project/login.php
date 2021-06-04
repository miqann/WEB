<?php 
  include_once 'header.php'
  ?>
  <h2 class="tittle">LOGIN</h2>
  
  
<section class="form-login"> 
    <div class="form-group">
    <form action="include/login.inc.php" method="post" >
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" >
    </div>
    <div class="form-group" style="padding-left:20px">
      <input type="checkbox" class="form-check-input" required>
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
  
    <br><br>
    <div>
    <a href="./register.php">Don't have an account? Sign up now</a>
    </div>
    <?php
    if(isset($_GET["error"]) ){
      if($_GET["error"] == "emptyInput") {
        echo "<p>Fill in all field! </p>";
      }
      elseif ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login infomation!</p>";
      }
    }

  ?>
    </form>
    </div>
  
  </section>
  </body> 
</html>