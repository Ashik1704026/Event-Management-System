<?php
    session_start();
    include('../db.php');
    // $con = mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $locationId = $_POST['locationId'];
    if(isset($_POST["submit"])){
        if(!empty($_POST['hotelName'])){
            $hotelName = $_POST['hotelName'];
            // UPDATE `location` SET `locationID` = NULL, `name` = '', `address` = '', `manager` = '', `email` = 'sonarga@gmail.com', `phone` = '', `capacity` = '', `cost` = '' WHERE `location`.`locationID` = 2;
            $sql = "UPDATE `location` SET `name` = '$hotelName' WHERE `location`.`locationID` = '$locationId' ";
            $result = mysqli_query($con, $sql);
            if($result){
                $_SESSION['editL'] = 1;
                header('Location: location.php');
            }
            else{
                $_SESSION['editLNot'] = 1;
                header('Location: location.php');
            }
        }
        if(!empty($_POST['locationName'])){
            $locationName = $_POST['locationName'];
            $sql = "UPDATE `location` SET `address` = '$locationName' WHERE `location`.`locationID` = '$locationId' ";
            $result = mysqli_query($con, $sql);
            if($result){
                $_SESSION['editL'] = 1;
                header('Location: location.php');
            }
            else{
                $_SESSION['editLNot'] = 1;
                header('Location: location.php');
            }
        }
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            $sql = "UPDATE `location` SET `email` = '$email' WHERE `location`.`locationID` = '$locationId' ";
            $result = mysqli_query($con, $sql);
            if($result){
                $_SESSION['editL'] = 1;
                header('Location: location.php');
            }
            else{
                $_SESSION['editLNot'] = 1;
                header('Location: location.php');
            }
        }
        if(!empty($_POST['capacity'])){
            $capacity = $_POST['capacity'];
            $sql = "UPDATE `location` SET `capacity` = '$capacity' WHERE `location`.`locationID` = '$locationId' ";
            $result = mysqli_query($con, $sql);
            if($result){
                $_SESSION['editL'] = 1;
                header('Location: location.php');
            }
            else{
                $_SESSION['editLNot'] = 1;
                header('Location: location.php');
            }
        }
        if(!empty($_POST['phoneNumber'])){
            $phone = $_POST['phoneNumber'];
            $sql = "UPDATE `location` SET `phone` = '$phone' WHERE `location`.`locationID` = '$locationId' ";
            $result = mysqli_query($con, $sql);
            if($result){
                $_SESSION['editL'] = 1;
                header('Location: location.php');
            }
            else{
                $_SESSION['editLNot'] = 1;
                header('Location: location.php');
            }
        }
        if(!empty($_POST['cost'])){
            $cost = $_POST['cost'];
            $sql = "UPDATE `location` SET `cost` = '$cost' WHERE `location`.`locationID` = '$locationId' ";
            $result = mysqli_query($con, $sql);
            if($result){
                $_SESSION['editL'] = 1;
                header('Location: location.php');
            }
            else{
                $_SESSION['editLNot'] = 1;
                header('Location: location.php');
            }
        }
    }
    


?>