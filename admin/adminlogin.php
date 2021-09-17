<?php
    session_start();
    include('../db.php');
    if(isset($_POST["submit"])){
        if(!empty($_POST['user']) && !empty($_POST['pass'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            // $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $query=mysqli_query($con,"SELECT password FROM admin WHERE username='".$user."'");
            $numrows=mysqli_num_rows($query);
            if($numrows == 1){
                while($row=mysqli_fetch_assoc($query)){  
                    $dbusername=$row['username'];  
                    $dbpassword=$row['password'];  
                }
                if($pass == $dbpassword){
                    $_SESSION['adminName'] = $user;
                    // $_SESSION['loginok'] = 1;
                    header("Location: index.php");
                    die;
                }
                else{
                    // $_SESSION['passMissmatch'] = 1;
                    // header("Location: home.php");
                }
            }
            else{
                // $_SESSION['loginNotok'] = 1;
                // header("Location: home.php");
            }
        }
    }


?>