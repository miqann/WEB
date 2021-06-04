<?php
  include_once 'header.php'
  ?>
    
<form class="form-login" action="include/register.inc.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Your email address</label>
      <input type="text" name="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Your full name</label>
        <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Your phone number</label>
        <input type="number" name="phone" class="form-control" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Your Home Address</label>
        <input type="text" name="address" class="form-control" aria-describedby="emailHelp">
      </div>
    </form>

    </body>
</html>