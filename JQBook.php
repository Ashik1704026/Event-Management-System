<?php
    session_start();
    if(isset($_POST['locname']) && isset($_POST['vname'])){
        $lname = $_POST['locname'];
        $vname = $_POST['vname'];
        $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
        $sql=mysqli_query($con,"SELECT `locationID` FROM `location` WHERE `name`='".$vname."' AND `address` = '".$lname."' ");
        $numrows=mysqli_num_rows($sql);
        $LocationId = mysqli_fetch_assoc($sql);
        $LocationId =  $LocationId['locationID'];
        $query = mysqli_query($con,"SELECT * FROM `location` WHERE locationID = '$LocationId'");
        $numrows=mysqli_num_rows($query);
        $cost = 1;
        while($row=mysqli_fetch_assoc($query)){
            $cost = $row['cost'];
        }
        echo $cost;
    }
?>