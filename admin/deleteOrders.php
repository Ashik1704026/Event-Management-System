<?php
    session_start();
    include('../db.php');
	$eventId = $_GET['eventId'];
    // echo $eventId;
	// $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `events` WHERE `eventID`='$eventId'");
    header("Location: orders.php");
?>