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
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Location</title>
    <script src = "js/datepicker.min.js"> </script>
    <link rel = "stylesheet" href = "css/datepicker.css" >
</head>
<body>

                        <!-- login and logout -->

    <script>$(document).ready(function(){
        <?php
        session_start();
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
                            <li class="nav-item"><a href="" class="nav-link">Home</a></li>
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
                            <li class="nav-item"><a href="" class="nav-link">Location</a></li>
                            <li class="nav-item"><a href="" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Signup</a></li>
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
                <a href="logout.php">logout</a>
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



    <!-- table -->



    <div class="container my-5">
        <h1>Details About Our Venues</h1>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover">
                <caption class="text-right my-2 text-danger">*Cost Per 50 Person</caption>
                <thead>
                    <tr class="">
                        <th class="">Name</th>
                        <th class="">Address</th>
                        <th class="">Class</th>
                        <th class="">Package</th>
                        <th class="">Capacity</th>
                        <th class="">Cost</th>
                        <th class="">Availability</th>
                    </tr>
                </thead>

                
                <!-- php -->


                <?php
                $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
                $query=mysqli_query($con,"SELECT * FROM location");
                while($row=mysqli_fetch_assoc($query)){
                    $locID=$row['locationID'];
                    $curdate=date("d-m-Y");
                    $sql=mysqli_query($con,"SELECT * FROM events WHERE locationID='".$locID."'");
                    $numrows=mysqli_num_rows($sql);
                    $bookedDAte = array("02-02-2021");
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
                ?>

                <tbody>
                    <tr class="">
                        <th data-toggle="modal" data-target="#contactModal-<?php echo $row['locationID']; ?>"><?php echo $row['name'];?></th>
                        <td class=""><?php echo $row['address'];?></td>
                        <td class=""><?php echo $row['class'];?></td>
                        <td class=""><?php echo $row['package'];?></td>
                        <td class=""><?php echo $row['capacity'];?></td>
                        <td class=""><?php echo $row['cost'];?></td>


                    <!-- accordion -->

                        <td class="">
                            <div id="accordion">
                                <h5>
                                    <div href="#collapse-<?php echo $row['locationID'];?>" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fas fa-arrow-circle-down"></i> Check
                                    </div>
                                </h5>
                                <div id="collapse-<?php echo $row['locationID'];?>" class="collapse">
                                <div class="row">
                                    <div class="datepicker date calendar-<?php echo $row['locationID'];?>">    
                                    <h5 class = "text-danger"> Disabled Dates are Booked </h5>
                                    <?php
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
                                    ?>
                                
                                    <script type="text/javascript">
                                        var jArray = <?php echo json_encode($bookedDAte); ?>;
                                        $('.calendar-<?php echo $row['locationID'];?>').datepicker({
                                            todayHighlight: true,
                                            format: 'dd/mm/yyyy',
                                            datesDisabled: jArray
                                        });

                                    </script>
                                    </div> 
                                </div>
                                </div>    
                            </div>
                        </td>
                    </tr>
                </tbody>


                <!-- modals -->


                <div class="modal" id="contactModal-<?php echo $row['locationID']; ?>" >
                    <div class="container">
                        <div class="modal-dialog modal-lg modal-md modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="text-info">Recent Events Picture</h3>
                                    <button class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                    <?php
                                    $sqlPic=mysqli_query($con,"SELECT image FROM images WHERE locationID='".$locID."'");
                                    while($rowPic=mysqli_fetch_assoc($sqlPic)){
                                    ?>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-img">
                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rowPic['image']).'" class="img-fluid"/>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                <div class="card-img">
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success mr-auto">Create Event</button>
                                    <button type="submit" class="btn btn-warning"data-dismiss="modal" >Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php } ?>


                <!-- php end -->

            </table>
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
