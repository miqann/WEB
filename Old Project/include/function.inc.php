<?php

function emptyInputRegister($email,$name,$phone,$address,$password,$passwordRepeat) {
    $result;
    
    if (empty($email) || empty($name) || empty($phone) || empty($address) || empty($password) || empty($passwordRepeat)  ) {

        $result = true;
    }
    else{
        $result=false; 
    }
    return $result;
}
    
function invalidEmail($email) {
    $result;
    if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($password, $passwordRepeat) {
    $result;
    if( $password !== $passwordRepeat ) {
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function emailExists($conn,$email) {
    $sql = "SELECT * FROM users WHERE email=?; ";
    $stmt = mysqli_stmt_init($conn);
    if( !mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../register.php?error=stmtfailed");
        exist();
    }
    mysqli_stmt_bind_param($stmt, "s", $email );
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row= mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUsers($conn, $email, $name, $phone, $address, $password) {
    $sql = "INSERT INTO users (email, name, phone, address, password) VALUES (?, ?, ?, ?, ?); ";


    $stmt = mysqli_stmt_init($conn);
    if( !mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../register.php?error=stmtfailed");
        exist();
    }
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssiss", $email, $name, $phone, $address, $hashedPwd );
    mysqli_stmt_execute($stmt);   
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
    exist();
   

}


function emptyInputLogin($email,$password) {
    $result;
    
    if (empty($email) || empty($password)  ) {

        $result = true;
    }
    else{
        $result=false; 
    }
    return $result;
}

function loginUser($conn,$email,$password){
    $emailExist= emailExists($conn,$email);

    if($emailExist === false ){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $hashedPwd = $emailExist["password"];
    $checkPwd = password_verify($password,$hashedPwd );

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
            
    }
    else if ($checkPwd===true) {
        session_start();
        $_SESSION["logId"]= $emailExist["Id "];
        $_SESSION["logName"]=$emailExist["name"];
        $_SESSION["logEmail"]= $emailExist["email"];
        header("location: ../trangchu.php ");
        exit();
    }
}


function emptyNumber($number) {
    $result;
    
    if (empty($number) ) {

        $result = true;
    }
    else{
        $result=false; 
    }
    return $result;
}
function addNumber($conn, $number) {
    $add = "INSERT INTO appointment (number) VALUES (?); ";


    $stmt = mysqli_stmt_init($conn);
    if( !mysqli_stmt_prepare($stmt,$add)) {
        header("location: ../makeanappointmnet.php?error=stmtfailed");
        exist();
    }
   
    mysqli_stmt_bind_param($stmt, "i", $number );
    mysqli_stmt_execute($stmt);   
    mysqli_stmt_close($stmt);
    header("location: ../makeanappointment.php?error=none");
    exist();
   

}






