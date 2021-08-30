<?php   
    session_start();  
    unset($_SESSION['username']);  
    unset($_SESSION['loginok']);
    session_destroy();  
    header("location:home.php");  
?>