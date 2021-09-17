<?php 
    session_start();
    include('db.php');
    function loadLocation(){
        // $sqlConn = $con;
        $sqlConn =  new mysqli('sql5.freesqldatabase.com','sql5437992','uRqlHhGhpf','sql5437992');
        $sqlString = "SELECT * FROM `location`";
        $result = $sqlConn->query($sqlString);
        $resultArray = $result->fetch_all(MYSQLI_ASSOC);
        $uniqueAdress[] = '';
        foreach($resultArray as $rws)
            $uniqueAdress[] = $rws['address'];
        $uniqueAdress = array_unique($uniqueAdress);
        return $uniqueAdress;
    }
    // $rw = loadLocation();
    // $uniqueAdress = $rw;
    // $uniqueAdress = array_unique($uniqueAdress);
    // foreach($rw as $rws)
    //     $uniqueAdress[] = $rws['address'];
    // print_r($uniqueAdress);
    // $uniqueAdress = array_unique($uniqueAdress);
    // foreach($uniqueAdress as $unadrs)
        // echo $unadrs;

    if(isset($_POST['locname'])){
        $loc = $_POST['locname'];
        $sqlConn =  new mysqli('sql5.freesqldatabase.com','sql5437992','uRqlHhGhpf','sql5437992');
        $sqlString = "SELECT * FROM `location` WHERE `address` = '$loc'";
        $result = $sqlConn->query($sqlString);
        $rArray = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($rArray);
    }
    // $locn = $_POST['locname'];
    // echo $locn;
    // $sqlConn =  new mysqli('localhost', 'root','', 'EMS');
    // $sqlString = "SELECT * FROM `location` WHERE `address` = 'Dhaka' ";
    // $result = $sqlConn->query($sqlString);
    // $rArray = $result->fetch_all(MYSQLI_ASSOC);
    // foreach($rArray as $ra)
    //     echo $ra['name'];
?>