<?php
    session_start();
    include('../db.php');
	$locationID = $_GET['locationId'];
    // echo $locationID;
	// $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `location` WHERE `locationID`='$locationID'");
    if($sql)
        $_SESSION['dltLocation'] = 1;
    else
        $_SESSION['dltLocationNot'] = 1;
        
    header("Location: location.php");
?>