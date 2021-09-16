<?php
    session_start();
    // echo "Fine";
    if(isset($_POST["submit"])){
        // echo "Submit Clicked";
        $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
        $username = $_SESSION['username'];
        if(!empty($_POST['fname'])){
            $fname = $_POST['fname'];
            $result = mysqli_query($con,"UPDATE `registration` SET `fname` = '$fname' WHERE `registration`.`username` = '$username'");
            if($result){
                $_SESSION['userupdateok'] = 1;
                header("Location: users.php");
            }
            else{
                $_SESSION['userupdateNotok'] = 1;
                header("Location: users.php");
            }
        }
        if(!empty($_POST['lname'])){
            $lname = $_POST['lname'];
            $result = mysqli_query($con,"UPDATE `registration` SET `lname` = '$lname' WHERE `registration`.`username` = '$username'");
            if($result){
                $_SESSION['userupdate'] = 1;
                header("Location: users.php");
            }
            else{
                $_SESSION['userupdate'] = 0;
                header("Location: users.php");
            }
        }
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            $result = mysqli_query($con,"UPDATE `registration` SET `email` = '$email' WHERE `registration`.`username` = '$username'");
            if($result){
                $_SESSION['userupdate'] = 1;
                header("Location: users.php");
            }
            else{
                $_SESSION['userupdate'] = 0;
                header("Location: users.php");
            }
        }
        if(!empty($_POST['pass'])){
            $pass = $_POST['pass'];
            $confpass = $_POST['confpass'];
            if($pass == $confpass){
                $result = mysqli_query($con,"UPDATE `registration` SET `pass` = '$pass' WHERE `registration`.`username` = '$username'");
                if($result){
                    $_SESSION['userupdate'] = 1;
                    header("Location: users.php");
                }
                else{
                    $_SESSION['userupdate'] = 0;
                    header("Location: users.php");
                }
            }
        }
        if(!empty($_FILES['profilePic']['tmp_name'])){
            $image = $_FILES['profilePic']['name'];
            $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
            $allowTypes = array('jpg','png','jpeg');
            if(in_array($imageFileType, $allowTypes)){
                move_uploaded_file($_FILES["profilePic"]["tmp_name"],"upload/".$_FILES["profilePic"]["name"]);
                $image = $_FILES['profilePic']['name'];
                $result = mysqli_query($con,"UPDATE `registration` SET `img` = '$image' WHERE `registration`.`username` = '$username'");
                if($result){
                    $_SESSION['userupdatePicok'] = 1;
                    header("Location: users.php");
                }
                else{
                    $_SESSION['userupdatePicNotok'] = 0;
                    header("Location: users.php");
                }
            }
            else{
                $_SESSION['userupdatePicNotok'] = 0;
                header("Location: users.php");
            }
        }
    }


?>