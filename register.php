<?php
    session_start();
    include('db.php');
    if(isset($_POST["submit"])){
        if(!empty($_POST['user']) && !empty($_POST['pass'])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $user=$_POST['user'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $confpass=$_POST['confpass'];
            // $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $query=mysqli_query($con,"SELECT * FROM registration WHERE username='".$user."'");
            $numrows=mysqli_num_rows($query);
            if($numrows != 0){
                $_SESSION['signupExists'] = 1;
                header('Location: signup.php');
            }
            else if($pass == $confpass){
                $sql="INSERT INTO registration(fname,lname,username,email,pass) VALUES('$fname','$lname','$user','$email','$pass')";
                $result=mysqli_query($con, $sql);
                if( $result ){
                    $_SESSION['username'] = $user;
                    $_SESSION['loginok'] = 1;
                    header('Location: home.php'); 
                }
                else{
                    $_SESSION['signupNotok'] = 1;
                    header('Location: signup.php');
                }
            }
            else{
                $_SESSION['signupPassNotmatch'] = 1;
                header('Location: signup.php');
            }
        }
    }


?>