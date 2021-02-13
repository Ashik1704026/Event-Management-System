<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Registration</title>
</head>
<body>
    


    <!-- navbar -->



    <div class="navbar navbar-expand-md fixed-top bg-warning">
        <div class="container">
            <a class="navbar-brand" href=""><h1>UEVC</h1></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:#000; font-size:35px;"></i></span></button>
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
                    <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="signup.php" class="nav-link">Signup</a></li>
                </ul>
            </div>
        </div>
    </div>



    <!-- signup -->



    <div class="signup">
        <div class="dark-overlay">
            <div class="container">
                <div class="signup-form">
                    <h3 class="text-center display-4">Sign Up</h3>
                    <div class="row">
                        <div class="col-12">
                            <form action="register.php" method="POST">
                                <div class="d-flex">
                                    <div class="form-group input-group-lg mb-3 col-6 flex-margin">
                                        <label for="first_name">First name</label>
                                        <input type="text" class="form-control" name="fname" required>
                                    </div>
                                    <div class="form-group input-group-lg mb-3 col-6 ml-2">
                                        <label for="last_name">Last name</label>
                                        <input type="text" class="form-control" name="lname" required>
                                    </div>
                                </div>
                                <div class="form-group input-group-lg mb-3 mx-2">
                                    <label for="user_name">User name</label>
                                    <input type="text" class="form-control" name="user" required>
                                </div>
                                <div class="form-group input-group-lg mb-3 mx-2">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                                <div class="form-group input-group-lg mb-3 mx-2">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="pass" required>
                                </div>
                                <div class="form-group input-group-lg mb-3 mx-2">
                                    <label for="C-password">Confirm password</label>
                                    <input type="password" class="form-control" name="confpass" required>
                                </div>
                                <input type="submit" value="Register" class="btn btn-info btn-lg mb-3" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
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




</body>
</html>