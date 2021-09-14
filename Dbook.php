
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
            if($Person_num < 50 && $Person_num > 0){
                $_SESSION['NotEnoughPeople'] = 1;
                header('Location: booking.php');
            }
            else if(empty($Event) || empty($Location) || empty($Venue) || empty($StartDate) || empty($LastDate) || empty($Person_num)){
                $_SESSION['InfoNotGiven'] = 1;
                header('Location: booking.php');
            }
            else{
                $user = $_SESSION['username'];
                $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
                $sql=mysqli_query($con,"SELECT `locationID` FROM `location` WHERE `name`='".$Venue."' AND `address` = '".$Location."' ");
                $LocationId = mysqli_fetch_assoc($sql);
                $LocationId =  $LocationId['locationID'];
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
                $sql="INSERT INTO `events` (`title`, `startDate`, `lastDate`, `person`, `cost`, `locationID`, `username`) VALUES ('$Event', '$StartDate', '$LastDate', '$Person_num', '$cost', '$LocationId', '$user')";
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
        }
        else{
            header("Location: booking.php");
        }
    }

?>