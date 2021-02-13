<?php
    session_start();
    if(isset($_POST["submit"])){
        if(!empty($_SESSION['username'])){
            $Event=$_POST['gridRadios'];
            $Location=$_POST['location'];
            $Venue=$_POST['venue'];
            $StartDate=$_POST['startDate'];
            $LastDate=$_POST['lstDate'];
            $Person_num=$_POST['Person_num'];
            echo $Location;
            echo $Venue;
            $LocationId = 0;
            if($Location == "Dhaka"){
                if($Venue == "Radison Blu")
                    $LocationId = 1;
                else if($Venue == "Sonarga")
                    $LocationId = 2;
                else if($Venue == "IWestern")
                    $LocationId = 3;
                else if($Venue == "Rupusi")
                    $LocationId = 4;  
            }
            else if($Location == "Chittagong"){
                if($Venue == "Radison Blu")
                    $LocationId = 5;
                if($Venue == "Sanmar")
                    $LocationId = 6;
                if($Venue == "Port International")
                    $LocationId = 7;
            }
            $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
            $query = mysqli_query($con,"SELECT * FROM `location` WHERE locationID = '$LocationId'");
            $numrows=mysqli_num_rows($query);
            $cost = 1;
            while($row=mysqli_fetch_assoc($query)){
                $cost = $row['cost'];
            }
            $InitialDate = strtotime($StartDate); 
            $FinalDate = strtotime($LastDate);
            $datediff = $FinalDate - $InitialDate;
            $datediff = round($datediff / (60 * 60 * 24));
            $cost = ($cost / 50) * $Person_num * ($datediff + 1);
            // echo $cost;
            $sql="INSERT INTO `events` (`title`, `startDate`, `lastDate`, `person`, `cost`, `locationID`, `username`) VALUES ('$Event', '$StartDate', '$LastDate', '$Person_num', '$cost', '$LocationId', 'xxx')";
            $result=mysqli_query($con, $sql);
            if( $result){
                $_SESSION['Dbooksuccess'] = 1;
                header('Location: booking.php'); 
            }
            else{
                $_SESSION['Dbookerror'] = 1;
                header('Location: booking.php');
            }
        }
        else{
            header("Location: booking.php");
        }
    }

?>