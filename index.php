<?php 
// echo "Hey man...";

include('db.php');
if($con)
    header('Location: home.php');
else
    echo "not connected man...";
?>