<?php
    session_start();
    include('../db.php');
    if(isset($_POST["submit"])){
        // $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());

        $eventName = $_POST['eventName'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $venue = $_POST['venue'];
        $userName = $_POST['userName'];

        if(!empty($_FILES['eventImage']['tmp_name'])){
            $image = $_FILES['eventImage']['name'];
            $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
            $allowTypes = array('jpg','png','jpeg');
            if(in_array($imageFileType, $allowTypes)){
                move_uploaded_file($_FILES["eventImage"]["tmp_name"],"../upload/".$_FILES["eventImage"]["name"]);
                $image = $_FILES['eventImage']['name'];
                $result = mysqli_query($con,"INSERT INTO `images` (`id`,`event`, `description`, `location`, `venue`, `username`, `image`) VALUES (NULL, '$eventName', '$description', '$location', '$venue', '$userName', '$image')");
                if($result){
                    // $_SESSION['userupdatePicok'] = 1;
                    header("Location: index.php");
                }
                else{
                    // $_SESSION['userupdatePicNotok'] = 0;
                    // header("Location: users.php");
                }
            }
            else{
                // $_SESSION['userupdatePicNotok'] = 0;
                // header("Location: users.php");
            }
        }

    }


?>