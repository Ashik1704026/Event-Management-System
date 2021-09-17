<?php
	session_start();
	include('../db.php');
	$eventName = $_GET['eventName'];
	// echo $eventName;
	// $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `eventList` WHERE `name`='$eventName'");
    header("Location: events.php");
?>