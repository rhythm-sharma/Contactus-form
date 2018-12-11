<?php

include("dbconnect.php");

$name=$_REQUEST['name'];
$city=$_REQUEST['city'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['message'];

/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO user (name,city,email,message) VALUES ('$name','$city','$email','$msg')") or die(mysqli_error($db_connect));
echo "<h1>Connected! to database_user_process</h1>";
mysqli_close($db_connect);
//header("location:index.php");
?>