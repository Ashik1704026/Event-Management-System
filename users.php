<?php
    session_start();
    if( !isset($_SESSION['username'])){
        header("Location: home.php");
    }
    include('db.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Users</title>
</head>
<body>


    <!-- header -->



    <header class="homeBGimg">
        <div class="dark-overlay">
            
            <!-- navbar -->

            <div class="navbar navbar-expand-md fixed-top bg-warning">
                <div class="container">
                    <a class="navbar-brand" href=""><h1>UEVC</h1></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#000; font-size:35px;"></i></span></button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                            <!-- <li class="nav-item"><a href="" class="nav-link">Event</a></li> -->
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                                <div class="dropdown-menu">
                                    <a href="Wedding.php" class="dropdown-item">Wedding</a>
                                    <a href="Birthday.php" class="dropdown-item">Birthday</a>
                                    <a href="Anniversary.php" class="dropdown-item">Anniversary</a>
                                    <a href="Conference.php" class="dropdown-item">Conference</a>
                                    <a href="Party.php" class="dropdown-item">Party</a>
                                    <a href="Reception.php" class="dropdown-item">Reception</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="location.php" class="nav-link">Location</a></li>
                            <!-- <li class="nav-item"><a href="" class="nav-link">About Us</a></li> -->
                            <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>

                            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){ ?>
                                <li class="nav-item"><a href="booking.php" class="nav-link">Booking</a></li>
                            <li class="nav-item log1"><a href="home.php" class="nav-link"><?php echo $_SESSION['username'] ?></a></li>
                            <li class="nav-item log1"><a href="logout.php" class="nav-link">Logout</a></li>
                            <?php } ?>

                            <!-- <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Signup</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- heading -->

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-3 head-segment text-center">
                            Urban Events Venues & Catering
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <p class="lead text-center d-none d-lg-block">
                            Whether you're looking to book a cocktail party, post-work gathering, celebratory function, conference, business meeting, wedding or private dining event, our dedicated Urban Events team can create a package that will meet your every need.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="my-5 text-center">
                                Thank You For Being With Us, <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){ echo $_SESSION['username']; } ?>
                                
                            </h1>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </header>



                                <!-- Profile -->


    <?php
        $username = $_SESSION['username'];
        // echo $username;
        // $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
        $sql=mysqli_query($con,"SELECT * FROM `registration` WHERE `username`='$username'");
        $numrows=mysqli_num_rows($sql);
        // echo $numrows;
        while($row=mysqli_fetch_assoc($sql)){
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $password = $row['pass'];
            $img = $row['img'];
        }
        // echo $fname,$lname,$email,$password;
    ?>

    <div class="container mt-5">
    <h2 class = "text-center mt-4 text-info"><b>Your Profile</b></h5>
    <hr class="my-4 bg-danger">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="row">

                                <!-- Profile Picture -->

                    <div class="col-sm-4 bg-primary rounded-left">
                        <div class="card-block text-center text-white">
                            <!-- <i class="fas fa-user-tie fa-7x mt-5"></i> -->
                            <!-- <img src="img/party2.jpg" alt="" class="rounded-circle w-75 mt-5"> -->
                            <?php echo '<img src="upload/'.$img.'" class="img-fluid rounded-circle w-50 mt-5"/>'; ?>
                            <h2 class="font-weight-bold"><?php echo $username; ?></h2>
                            <!-- <p>Web Designer</p>
                            <i class="far fa-edit fa-2x mb-4"></i> -->
                            <a class="text-white" data-toggle="collapse" href="#collapProfilePic" role="button" aria-expanded="false">
                                <i class="far fa-edit fa-2x mb-4"></i>
                            </a>
                        </div>
                    </div>

                                <!-- Profile Information -->

                    <div class="col-sm-8 bg-light rounded-right">
                        <h3 class="mt-3 text-center">Information</h3>
                        <hr class="badge-primary mt-0 w-50">
                        <div class="row">
                            <div class="col-sm-4 text-left">
                                <p class="font-weight-bold">Name</p>
                            </div>
                            <div class="col-sm-8 text-right">
                                <h6 class="text-muted"><?php echo $fname, " ",$lname; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 text-left">
                                <p class="font-weight-bold">Email</p>
                            </div>
                            <div class="col-sm-8 text-right">
                                <h6 class="text-muted"><?php echo $email; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 text-left">
                                <p class="font-weight-bold">User Name</p>
                            </div>
                            <div class="col-sm-8 text-right">
                                <h6 class="text-muted"><?php echo $username; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 text-left">
                                <p class="font-weight-bold">Password</p>
                            </div>
                            <div class="col-sm-8 text-right">
                                <h6 class="text-muted"><?php echo $password; ?></h6>
                            </div>
                        </div>
                        <a class="btn btn-outline-warning btn-sm btn-block pt-2" data-toggle="collapse" href="#collapseInfo" role="button" aria-expanded="false">
                            Update
                        </a>
                    </div>
                </div>
            </div>
        </div>

                        <!-- Profile Picture -->

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="collapse" id="collapProfilePic">
                    <!-- <div class="card card-body py-2"> -->
                        <form action="updateUserInfo.php" method="POST" enctype="multipart/form-data">
                            <div class="row mt-2">
                                <div class="custom-file col-sm-10">
                                    <input type="file" name = "profilePic">
                                    <!-- class="custom-file-input" id="customFile" -->
                                    <!-- <label class="custom-file-label" for="customFile">Choose Profile Pic</label> -->
                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" value="Update Pic" class="btn btn-info btn-md mb-3" name="submit">
                                </div>
                            </div>
                        </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>

                            <!-- Profile Information -->

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="collapse mt-2" id="collapseInfo">
                    <div class="card card-body py-2">
                        <form action="updateUserInfo.php" method="POST">
                            <div class="d-flex">
                                <div class="form-group input-group-lg mb-3 col-6 flex-margin">
                                    <label for="first_name">First name</label>
                                    <input type="text" class="form-control" name="fname" placeholder = "<?php echo $fname;?>">
                                </div>
                                <div class="form-group input-group-lg mb-3 col-6 ml-2">
                                    <label for="last_name">Last name</label>
                                    <input type="text" class="form-control" name="lname" placeholder = "<?php echo $lname;?>">
                                </div>
                                </div>
                                <div class="form-group input-group-lg mb-3 mx-2">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder = "<?php echo $email;?>">
                                </div>
                                <div class="form-group input-group-lg mb-3 mx-2">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="pass" placeholder = "<?php echo $password;?>">
                                </div>
                                <div class="form-group input-group-lg mb-3 mx-2">
                                    <label for="C-password">Confirm password</label>
                                    <input type="password" class="form-control" name="confpass">
                                </div>
                                <div class="row justify-content-center">
                                    <input type="submit" value="Update Info" class="btn btn-info btn-lg mb-3" name="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4 bg-danger">
    </div>





                            <!-- Previous Event List -->

    <div class = "container my-5">
    <h2 class = "text-center my-4 text-info"><b>Your Previous Events With Us</b></h5>
    <hr class="my-4 bg-dark">
    <?php
        $dt = date("d-m-Y");
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            // echo $username;
        }
        $sqlConn =  new mysqli('sql5.freesqldatabase.com','sql5437992','uRqlHhGhpf','sql5437992');
        $sqlString = "SELECT events.title,events.startDate,events.person,events.cost,location.name,location.address FROM events
        INNER JOIN location on events.locationID = location.locationID WHERE events.username = '$username' ";
        $result = $sqlConn->query($sqlString);
        $resultArray = $result->fetch_all(MYSQLI_ASSOC);
        // $numrows = mysqli_num_rows($result);
        // echo $numrows;
        $numrows = 0;
        foreach($resultArray as $rws){
            if(strtotime($rws['startDate']) < strtotime($dt))
                $numrows = 1;
        }
        // $numrows = 0;
        if($numrows){ ?>
        
            <div class="row my-2">
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Event Name </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Venue </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Location </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Date </b> </h5> 
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> No of Person </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Cost </b> </h5>
                </div>
            </div>
        
            <?php
                foreach($resultArray as $rws){
                    if(strtotime($rws['startDate']) < strtotime($dt)){?>
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"> <?php echo $rws['title'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"> <?php echo $rws['name'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['address'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['startDate'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['person'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['cost'];?> </h6>
                        </div>
                    </div>  
                    <?php }
                }
            }
            else{ ?>
                <h4 class = "text-center my-4 text-dastyle = "font-family:Didot;" nger"><b>You Do Not Have Any</b></h4>
            <?php }
        ?>
        <hr class="my-4 bg-dark">

    </div>




                        <!-- Current Event List -->


    <div class = "container my-5">
    <h2 class = "text-center my-4 text-info"><b>Your On Going Event With Us</b></h5>
    <hr class="my-4 bg-danger">
    <?php
        $dt = date("d-m-Y");
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            // echo $username;
        }
        $sqlConn =  new mysqli('sql5.freesqldatabase.com','sql5437992','uRqlHhGhpf','sql5437992');
        $sqlString = "SELECT events.title,events.startDate,events.person,events.cost,location.name,location.address FROM events
        INNER JOIN location on events.locationID = location.locationID WHERE events.username = '$username' ";
        $result = $sqlConn->query($sqlString);
        $resultArray = $result->fetch_all(MYSQLI_ASSOC);
        // $numrows = mysqli_num_rows($result);
        // echo $numrows;
        $numrows = 0;
        foreach($resultArray as $rws){
            if(strtotime($rws['startDate']) >= strtotime($dt))
                $numrows = 1;
        }
        // $numrows = 0;
        if($numrows){ ?>
        
            <div class="row my-2">
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Event Name </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Venue </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Location </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Date </b> </h5> 
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> No of Person </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 style = "font-family:Didot;" class = "text-center"> <b> Cost </b> </h5>
                </div>
            </div>
        
            <?php
                foreach($resultArray as $rws){
                    if(strtotime($rws['startDate']) >= strtotime($dt)){?>
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"> <?php echo $rws['title'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"> <?php echo $rws['name'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['address'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['startDate'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['person'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 style = "font-family:Didot;" class = "text-center"><?php echo $rws['cost'];?> </h6>
                        </div>
                    </div>  
                    <?php }
                }
            }
            else{ ?>
                <h4 class = "text-center my-4 text-danger"><b>Currently You Do Not Have Any</b></h4>
            <?php }
        ?>
        <hr class="my-4 bg-danger">

    </div>





    <!-- footer -->



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong class="ftxthght">C</strong>hittagong <strong class="ftxthght">U</strong>niversity of <strong class="ftxthght">E</strong>ngineering & <strong class="ftxthght">T</strong>echnology
                    </p>
                    <p>
                        Ashik & Ibadot &copy;Urban Events Venue & Catering, 2020.
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        Internet Programming sessional <br> 
                        Cse-200 <br>
                        Dept. of Cse <br>
                        Cuet.
                    </p>
                </div>
                <div class="col-md-4">
                    Follow us: <br>
                    <img src="img/facebook.png">
                    <img src="img/googleplus.png">
                    <img src="img/twitter.png">
                    <img src="img/youtube.png">

                </div>
            </div>
        </div>
    </div>



                    <!-- Warning and Confirmation -->
     <?php    // successful update......
    if(isset($_SESSION['userupdateok'])){ unset($_SESSION['userupdateok']) ?>
        <script type="text/javascript">
            swal({
            title: "Updated....",
            text: "Successfully updated your information Sir,<?php echo $_SESSION['username']?>",
            icon: "success",
            });
        </script>  
    <?php }
    if(isset($_SESSION['userupdateNotok'])){ unset($_SESSION['userupdateNotok']); ?> 
        <script type="text/javascript">
            swal({
            title: "Something Went Wrong....",
            text: "Please try again or contact with us....",
            icon: "error",
            });
        </script>
    <?php }
    if(isset($_SESSION['userupdatePicNotok'])){ unset($_SESSION['userupdatePicNotok']); ?> 
        <script type="text/javascript">
            swal({
            title: "Something Went Wrong....",
            text: "Please try original image file or contact with us....",
            icon: "error",
            });
        </script>
    <?php }
    if(isset($_SESSION['userupdatePicok'])){ unset($_SESSION['userupdatePicok']); ?> 
        <script type="text/javascript">
            swal({
            title: "Updated....",
            text: "Successfully updated your Profile Picture Sir,<?php echo $_SESSION['username']?>",
            icon: "success",
            });
        </script>
    <?php } ?>



    
</body>
</html>