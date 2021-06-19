<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['userId'])) {
    header("Location: welcome.php");
}

if(isset($_POST['submitLog'])){

    $uname=$_POST['userId'];
    $uemail = $_POST['email'];
    $upass=md5($_POST['password']);

    $sql="select * from registerform where (User= '$uname' OR Email= '$uemail') AND  Pass='$upass' ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['userId'] = $row['User'];
		header("Location: welcome.php");
        echo "<script>alert('Hey! Welcome to our website.')</script>";
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>