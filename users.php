<?php
    session_start();
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
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
                            <li class="nav-item"><a href="" class="nav-link">Event</a></li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Wedding</a>
                                    <a href="" class="dropdown-item">Birthday</a>
                                    <a href="" class="dropdown-item">Anniversary</a>
                                    <a href="" class="dropdown-item">Conference</a>
                                    <a href="" class="dropdown-item">Party</a>
                                    <a href="" class="dropdown-item">Reception</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="location.php" class="nav-link">Location</a></li>
                            <li class="nav-item"><a href="" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>

                            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){ ?>
                            <li class="nav-item log1"><a href="" class="nav-link"><?php echo $_SESSION['username'] ?></a></li>
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



                            <!-- Previous Event List -->

    <div class = "container my-5">
    <h2 class = "text-center my-4"><b>Your Previous Events With Us</b></h5>
    <?php
        $dt = date("d-m-Y");
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            // echo $username;
        }
        $sqlConn =  new mysqli('localhost', 'root','', 'EMS');
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
                    <h5 class = "text-center"> <b> Event Name </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Venue </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Location </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Date </b> </h5> 
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> No of Person </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Cost </b> </h5>
                </div>
            </div>
        
            <?php
                foreach($resultArray as $rws){
                    if(strtotime($rws['startDate']) < strtotime($dt)){?>
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 class = "text-center"> <?php echo $rws['title'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"> <?php echo $rws['name'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['address'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['startDate'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['person'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['cost'];?> </h6>
                        </div>
                    </div>  
                    <?php }
                }
            }
            else{ ?>
                <h4 class = "text-center my-4 text-danger"><b>You Do Not Have Any</b></h4>
            <?php }
        ?>

    </div>




                        <!-- Current Event List -->


    <div class = "container my-5">
    <h2 class = "text-center my-4"><b>Your On Going Event With Us</b></h5>
    <?php
        $dt = date("d-m-Y");
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            // echo $username;
        }
        $sqlConn =  new mysqli('localhost', 'root','', 'EMS');
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
                    <h5 class = "text-center"> <b> Event Name </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Venue </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Location </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Date </b> </h5> 
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> No of Person </b> </h5>
                </div>
                <div class="col-lg-2">
                    <h5 class = "text-center"> <b> Cost </b> </h5>
                </div>
            </div>
        
            <?php
                foreach($resultArray as $rws){
                    if(strtotime($rws['startDate']) >= strtotime($dt)){?>
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 class = "text-center"> <?php echo $rws['title'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"> <?php echo $rws['name'];?> </h5>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['address'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['startDate'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['person'];?> </h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class = "text-center"><?php echo $rws['cost'];?> </h6>
                        </div>
                    </div>  
                    <?php }
                }
            }
            else{ ?>
                <h4 class = "text-center my-4 text-danger"><b>Currently You Do Not Have Any</b></h4>
            <?php }
        ?>

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


    
</body>
</html>