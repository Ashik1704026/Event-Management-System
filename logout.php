<?php   
    session_start();  
    unset($_SESSION['username']);  
    session_destroy();  
    echo "logout done";
    //header("location:login.php");  
?>