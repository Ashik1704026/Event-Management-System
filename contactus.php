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
    <title>Contact Us</title>
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
                            <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>

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



                        <!-- Contact Form -->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class = "text-info"> <b>Feel Free To Contact With Us</b></h1>
            </div>
            <!-- <div class="col-sm-12 text-center">
                <h1> <b>Your Comments Is Our Top Priority</b></h1>
            </div> -->
        </div>
    </div>
              
    <div class="container my-5">
        <form action="DBcontactUs.php" method = "POST">
            <div class="row form-group justify-content-center my-4">
                <label class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" placeholder="Your Name" name = "name">
                </div>
            </div>
            <div class="row form-group justify-content-center my-4">
                <label class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control form-control-lg" placeholder="ex@mail.com" name = "email">
                </div>
            </div>
            <div class="row form-group justify-content-center my-4">
                <label class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Comments</label>
                <div class="col-sm-6">
                    <textarea class="form-control form-control-lg" rows="8" name = "comments" placeholder = "Your valueable comments..."></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row justify-content-end">
                        <div class="col-sm-2">
                            <input type="submit" value="Submit" class="btn btn-success btn-lg mb-3 " name="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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



                            <!-- Success alert -->

    <?php    // success......
        if(isset($_SESSION['comments'])){ unset($_SESSION['comments']) ?>
            <script type="text/javascript">
                swal({
                title: "Submitted",
                text: "Thanks For Your Valueable Comments",
                icon: "success",
                });
            </script>  
    <?php } // Not success......
    if(isset($_SESSION['commentsNot'])){ unset($_SESSION['commentsNot']); ?>
        <script type="text/javascript">
            swal({
            title: "Not Submitted",
            text: "Please Try Again.....",
            icon: "error",
            });
        </script>
    <?php } ?>

    
</body>
</html>