<?php
	session_start();
	include('../db.php');
	$imageId = $_GET['id'];
	// echo $imageId;
	// $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `images` WHERE `id`='$imageId'");
    header("Location: index.php");
?>