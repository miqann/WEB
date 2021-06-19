<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['userId'])) {
    header("Location: Login.php");
}

if (isset($_POST['submitSign'])) {
	$uname = $_POST['userId'];
	$uemail = $_POST['email'];
	$upass = md5($_POST['password']);
	$cupass = md5($_POST['cpassword']);

	if ($upass == $cupass) {
		$sql = "SELECT * FROM registerform WHERE Email='$uemail'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO registerform (User, Email, Pass)
					VALUES ('$uname', '$uemail', '$upass')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$uname = "";
				$uemail = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>