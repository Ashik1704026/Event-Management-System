<?php
	$commentId = $_GET['commentId'];
	// echo $commentId;
	$con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"UPDATE `comments` SET `read` = 'yes' WHERE `comments`.`id` = '$commentId'");
    header("Location: comments.php");
?>