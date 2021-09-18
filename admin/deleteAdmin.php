<?php
	session_start();
	include('../db.php');
	$name = $_GET['name'];
	// echo $commentId;
	// $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `admin` WHERE `username`='$name'");
    header("Location: index.php");
?>