<?php

include ('config.php');

if(isset($_POST['userId'])){

    $uname=$_POST['userId'];
    $upassword=$_POST['password'];

    $sql="select * from loginform where user= '".$uname."' AND  pass='".$upassword."' limit 1";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){
        echo "<script>alert('You have successfully log in!')</script>";       
    } else {
        echo "Wrong username or password";
        exit();
    }
}
?>