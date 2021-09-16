<?php
    session_start();
    if(isset($_POST["submit"])){
        if(!empty($_POST['hotelName'])){
            $hotelName = $_POST['hotelName'];
            $locationName = $_POST['locationName'];
            $email = $_POST['email'];
            $capacity = $_POST['capacity'];
            $phone = $_POST['phoneNumber'];
            $cost = $_POST['cost'];
            $con = mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $sql = "INSERT INTO `location` (`locationID`, `name`, `address`, `manager`, `email`, `phone`, `capacity`, `cost`) VALUES (NULL, '$hotelName', '$locationName', '', '$email', '$phone', '$capacity', '$cost')";
            $result = mysqli_query($con, $sql);
            if($result){
                // $_SESSION['comments'] = 1;
                header('Location: location.php');
            }
            else{
                // $_SESSION['commentsNot'] = 1;
                // header('Location: contactus.php');
            }
        }
    }


?>