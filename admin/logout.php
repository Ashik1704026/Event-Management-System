<?php   
    session_start();  
    unset($_SESSION['adminName']);  
    session_destroy();  
    header("location: ../home.php");  
?>