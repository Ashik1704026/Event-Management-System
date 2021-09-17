<?php
	session_start();
	include('../db.php');
	$username = $_GET['username'];
	// echo $username;
	// $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `registration` WHERE `username`='$username'");
    header("Location: userinfo.php");
?>