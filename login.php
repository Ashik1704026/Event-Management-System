<?php
    session_start();
    if(isset($_POST["submit"])){
        if(!empty($_POST['user']) && !empty($_POST['pass'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $query=mysqli_query($con,"SELECT pass FROM registration WHERE username='".$user."'");
            $numrows=mysqli_num_rows($query);
            if($numrows!=0){
                while($row=mysqli_fetch_assoc($query)){  
                    $dbusername=$row['username'];  
                    $dbpassword=$row['pass'];  
                }
                if($pass == $dbpassword){
                    $_SESSION['username'] = $user;
                    // echo "loggedin....";
                    // header("Location: home.html");
                    die;
                }
                else{
                    // header("Location: signup.html");
                }
            }
        }
    }


?>