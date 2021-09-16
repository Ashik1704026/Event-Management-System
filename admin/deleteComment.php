<?php
	$commentId = $_GET['commentId'];
	// echo $commentId;
	$con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"DELETE from `comments` WHERE `id`='$commentId'");
    header("Location: comments.php");
?>