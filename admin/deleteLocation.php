<?php
    session_start();
    include('../db.php');
	$locationID = $_GET['locationId'];
    // echo $locationID;
	// $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `location` WHERE `locationID`='$locationID'");
    header("Location: location.php");
?>