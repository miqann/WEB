<?php

$server="localhost:52702";
$username="root";
$password="";
$db="web";

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

// Check connection
if (!$conn) {
  die("<script>alert('Connection Failed.')</script>");
}

?>