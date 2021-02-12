<?php
    $LocationId = $_POST['LID'];
        $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
        $curdate=date("d-m-Y");
        $sql=mysqli_query($con,"SELECT * FROM events WHERE locationID='".$LocationId."'");
        $bookedDAte = array("02-02-2021");
        $prevDate = "01-05-2020";
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