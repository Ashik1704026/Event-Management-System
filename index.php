<?php 
echo "Hey man...";

$con=mysqli_connect('sql5.freesqldatabase.com','sql5437992','uRqlHhGhpf','sql5437992') or die(mysqli_error());
if($con)
    echo "connected successfully";
else
    echo "not connected man...";
?>