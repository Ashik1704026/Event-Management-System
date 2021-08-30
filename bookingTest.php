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
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Home</title>
</head>
<body>
          
                        <!-- login element show or hide-->



    <script>$(document).ready(function(){
        <?php
        // session_start();
        if($_SESSION['username']){ ?>
            $(".show1").hide();
        <?php }
        else{ ?>
            $(".show1").show();
        <?php } ?>
    });
    </script>


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
                            <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>

                                            <!-- navbar login signup show or hide -->

                            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){ ?>
                            <li class="nav-item log1"><a href="users.php" class="nav-link"><?php echo $_SESSION['username'] ?></a></li>
                            <li class="nav-item log1"><a href="logout.php" class="nav-link">Logout</a></li>
                            <?php }else{ ?>
                            <li class="nav-item show1"><a href="" class="nav-link">Login</a></li>
                            <li class="nav-item show1"><a href="signup.php" class="nav-link">Signup</a></li>
                            <?php } ?> 
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
                <form action="login.php" method="POST">
                    <div class="row show1">
                        <div class="input-group input-group-lg col-lg-4 col-md-6 resp-input">
                            <div class="input-group-prepend"> 
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="user" required>
                        </div>
                        <div class="input-group input-group-lg col-lg-4 col-md-6 resp-input">
                            <div class="input-group-prepend"> 
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                        <div class="input-group col-lg-4 col-md-12">
                            <input type="submit" value="Login" name="submit" class="btn btn-block btn-lg btn-outline-warning">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </header>



    <!-- DO List -->



    <div class="do">
        <div class="container">
            <h2 class="display-4">What We Organize</h2>
            <hr class="my-4">
            <div class="row">
                <?php
                    $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
                    $query=mysqli_query($con,"SELECT * FROM eventList");
                    while($row=mysqli_fetch_assoc($query)){
                        $name = $row['name']; ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-4">
                                <div class="card-head text-center bg-info py-2">
                                    <h2 class = "text-white"><?php echo $name ?></h2>
                                </div>
                                <div class="card-img">
                                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" class="img-fluid"/>'; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo $name ?>.html" class="card-link"><button class="btn btn-outline-success btn-block">Show Details</button></a>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>
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



                            <!-- Log in alert -->

    <?php    // login......
    if(isset($_SESSION['loginok'])){ unset($_SESSION['loginok']) ?>
        <script type="text/javascript">
            swal({
            title: "Logged In",
            text: "Welcome Sir,<?php echo $_SESSION['username']?>",
            icon: "success",
            });
        </script>  
    <?php } // userid not found......
    if(isset($_SESSION['loginNotok'])){ unset($_SESSION['loginNotok']); ?>
        <script type="text/javascript">
            swal({
            title: "Not Found",
            text: "Seems like that you are new in our system. Please signup first....",
            icon: "error",
            });
        </script>
    <?php }   // password not match
    if(isset($_SESSION['passMissmatch'])){ unset($_SESSION['passMissmatch']); ?> 
        <script type="text/javascript">
            swal({
            title: "Password not match",
            text: "Please try with correct password or contact with us....",
            icon: "warning",
            });
        </script>
    <?php } ?>


    
</body>
</html>