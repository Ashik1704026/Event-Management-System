<?php
    $LocationId = $_POST['LID'];
    $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $query = mysqli_query($con,"SELECT * FROM `location` WHERE locationID = '$LocationId'");
    $numrows=mysqli_num_rows($query);
    $cost = 1;
    while($row=mysqli_fetch_assoc($query)){
        $cost = $row['cost'];
    }
    echo $cost;
?>