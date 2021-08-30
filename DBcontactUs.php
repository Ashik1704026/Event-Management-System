<?php
    session_start();
    if(isset($_POST["submit"])){
        if(!empty($_POST['name'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $comments=$_POST['comments'];
            $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $sql="INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES (NULL, '$name', '$email', '$comments')";
            $result=mysqli_query($con, $sql);
            if($result){
                $_SESSION['comments'] = 1;
                header('Location: contactus.php');
            }
            else{
                $_SESSION['commentsNot'] = 1;
                header('Location: contactus.php');
            }
        }
    }


?>