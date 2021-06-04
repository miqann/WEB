<?php

if (isset($_POST["submit"]) ) {
    echo "It works";

    $email = $_POST["email"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputRegister($email,$name,$phone,$address,$password,$passwordRepeat) !== false ) {
        header("location: ../register.php?error=emptyInput");
        exit();
    }

    if (invalidEmail($email) !== false ) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($password, $passwordRepeat) !== false ) {
        header("location: ../register.php?error=passwordsdontmatch");
        exit();
    }

    if (emailExists($conn, $email) !== false ) {
        header("location: ../register.php?error=emailtaken");
        exit();
    }
    createUsers($conn,$email,$name,$phone,$address,$password);
        
}
else {
    header("location: ../register.php");
    exit();
}