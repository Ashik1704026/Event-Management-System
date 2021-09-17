<?php
    session_start();
    include('db.php');
    if(isset($_POST['locname']) && isset($_POST['vname'])){
        $lname = $_POST['locname'];
        $vname = $_POST['vname'];
        // $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
        $sql=mysqli_query($con,"SELECT `locationID` FROM `location` WHERE `name`='".$vname."' AND `address` = '".$lname."' ");
        $numrows=mysqli_num_rows($sql);
        $LocationId = mysqli_fetch_assoc($sql);
        $LocationId =  $LocationId['locationID'];
    }
        $curdate=date("d-m-Y");
        $sql=mysqli_query($con,"SELECT * FROM events WHERE locationID='".$LocationId."'");
        $bookedDAte = array("08-08-2021");
        $prevDate = "05-08-2021";
        $start  = new DateTime($prevDate);
        $end    = new DateTime($curdate);
        $format = 'd-m-Y';
        $invert = $start > $end;
        $dates = array();
        $dates[] = $start->format($format);
        while ($start != $end) {
            $start->modify(($invert ? '-' : '+') . '1 day');
            $dates[] = $start->format($format);
        }
        $bookedDAte = array_merge($bookedDAte,$dates);
        while($RowDate=mysqli_fetch_assoc($sql)){
            $Fdate = $RowDate['startDate'];
            $Ldate = $RowDate['lastDate'];
            $start  = new DateTime($Fdate);
            $end    = new DateTime($Ldate);
            $format = 'd-m-Y';
            $invert = $start > $end;

            $dates = array();
            $dates[] = $start->format($format);
            while ($start != $end) {
                $start->modify(($invert ? '-' : '+') . '1 day');
                $dates[] = $start->format($format);
            }
            $bookedDAte = array_merge($bookedDAte,$dates);
        }
    echo json_encode($bookedDAte);

exit;