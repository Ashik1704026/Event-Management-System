<?php
	$eventName = $_POST['eventName'];
	$con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    if(!empty($_FILES['CoverPic']['tmp_name'])){
        $image = $_FILES['CoverPic']['name'];
        $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        $allowTypes = array('jpg','png','jpeg');
        if(in_array($imageFileType, $allowTypes)){
            move_uploaded_file($_FILES["CoverPic"]["tmp_name"],"../upload/".$_FILES["CoverPic"]["name"]);
            $image = $_FILES['CoverPic']['name'];
            $result = mysqli_query($con,"UPDATE `eventList` SET `image` = '$image' WHERE `eventList`.`name` = '$eventName'");
            if($result){
                // $_SESSION['userupdatePicok'] = 1;
                header("Location: events.php");
                //echo "Done";
            }
            else{
                //echo "Not Done";
            }
        }
        else{
        }

        //echo $image;
    }
    else
        //echo "No..."
?>