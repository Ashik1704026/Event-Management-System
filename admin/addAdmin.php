<?php
    session_start();
    include('../db.php');
    if(isset($_POST["submit"])){
        if(!empty($_POST['adminName'])){
            $name = $_POST['adminName'];
            $password = $_POST['password'];
            // $con = mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $sql = "INSERT INTO `admin` (`username`, `password`) VALUES ('$name', '$password')";
            $result = mysqli_query($con, $sql);
            if($result){
                // $_SESSION['comments'] = 1;
                header('Location: index.php');
            }
            else{
                // $_SESSION['commentsNot'] = 1;
                // header('Location: contactus.php');
            }
        }
    }


?>