<?php

if (isset($_POST["submit"]) ) {
    echo "It works";

    $number = $_POST["number"];
  

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyNumber($number) !== false ) {
        header("location: ../makeanappointment.php?error=emptyNumber");
        exit();
    }

    addNumber($conn,$number);
        
}
else {
    header("location: ../makeanappointment.php");
    exit();
}