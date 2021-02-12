<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST['user']) && !empty($_POST['pass'])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $user=$_POST['user'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $confpass=$_POST['confpass'];
            $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $query=mysqli_query($con,"SELECT * FROM registration WHERE username='".$user."'");
            $numrows=mysqli_num_rows($query);
            if($numrows==0 && $pass == $confpass){
                $sql="INSERT INTO registration(fname,lname,username,email,pass) VALUES('$fname','$lname','$user','$email','$pass')";
                $result=mysqli_query($con, $sql);
                if( $result ){
                    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                    header('Location: signup.html'); 
                }
            }
            else 
                echo "<script type='text/javascript'>alert('failed!')</script>";
        }
    }


?>