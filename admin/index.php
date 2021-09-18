<?php
    session_start();
    if(!isset($_SESSION['adminName'])){
        header('Location: ../home.php');
    }
    include('../db.php');
    // $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
    $sql=mysqli_query($con,"SELECT * FROM `registration`");
    $numusers=mysqli_num_rows($sql);
    $sql=mysqli_query($con,"SELECT * FROM `events`");
    $numevents=mysqli_num_rows($sql);
    $sql=mysqli_query($con,"SELECT * FROM `eventList`");
    $numeventslist=mysqli_num_rows($sql);
    $sql=mysqli_query($con,"SELECT * FROM `comments`");
    $numcomments=mysqli_num_rows($sql);
    $sql=mysqli_query($con,"SELECT * FROM `location`");
    $totalveneu=mysqli_num_rows($sql);

    $sqlConn =  new mysqli('sql5.freesqldatabase.com','sql5437992','uRqlHhGhpf','sql5437992');
    $sqlString = "SELECT * FROM `location`";
    $result = $sqlConn->query($sqlString);
    $resultArray = $result->fetch_all(MYSQLI_ASSOC);
    $uniqueAdress[] = '';
    $uniquevenue[] = '';
    foreach($resultArray as $rws){
        $uniqueAdress[] = $rws['address'];
        $uniquevenue[] = $rws['name'];
    }
    $uniqueAdress = array_unique($uniqueAdress);
    $uniquevenue = array_unique($uniquevenue);
    $numvenue = sizeof($uniquevenue);
    $numlocation = sizeof($uniqueAdress);


    $dt = date("d-m-Y");
    $sqlString = "SELECT * FROM `events` ";
    $result = $sqlConn->query($sqlString);
    $resultArray = $result->fetch_all(MYSQLI_ASSOC);
    $upcomingEvents = 0;
    foreach($resultArray as $rws){
        if(strtotime($rws['startDate']) >= strtotime($dt))
            $upcomingEvents += 1;
    }
    // echo $upcomingEvents;
    
?>

        <!-- start header -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="../js/jquery-slim.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- start navbar -->
    

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sticky-top sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="sidebar-brand-text mx-3">EMS Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="userinfo.php" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Customers</span>
                </a>
                <a class="nav-link" href="location.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-map-marker-alt"></i>
                    <span>Location</span>
                </a>
                <a class="nav-link" href="events.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Events</span>
                </a>
                <a class="nav-link" href="orders.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Orders</span>
                </a>
                <a class="nav-link" href="activity.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Activity</span>
                </a>
                <a class="nav-link" href="comments.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Comments</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>
        <!-- End of Sidebar -->


        
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- end side navbar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php if(isset($_SESSION['adminName'])) echo  $_SESSION['adminName']; else echo "Not Logged in" ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"    aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                            
                              
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

              

                    <!-- Content Row -->
                    <div class="row">

                        <!-- users Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $numusers; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- location Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Locations (Division)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $numlocation - 1; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- event Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">event
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php echo $numeventslist; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- orders Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                orders</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $numevents; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Comments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $numcomments; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Unique Venue</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $numvenue - 1; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hotel fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row Upcoming Events -->
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                <h5>Upcoming Events</h5>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $upcomingEvents; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class = "mx-2 mb-5 bg-dark">

                                <!-- Number show end -->


                                    <!-- Admin Information -->


                    <div>
                        <h2 class = "text-danger font-weight-bold text-center mt-5 mb-2">Admin Information</h2>
                        <hr class = "bg-danger mb-5">
                    </div>
                    

                                        <!-- Add admin -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h4 class = "text-dark font-weight-bold">Add New Admin </h4>
                            <hr class = "bg-dark">
                            <form action="addAdmin.php" method = "post">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3 form-group">
                                        <label for="">Admin Name</label>
                                        <input type="text" class="form-control" name = "adminName" required>
                                    </div>
                                    <div class="col-lg-4 col-md-3 form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name = "password" required>
                                    </div>
                                    <div class="col-lg-4 col-md-3 form-group">
                                        <label for="">Add</label>
                                        <input type="submit" class="btn btn-outline-success form-control" name = "submit" value = "Submit">
                                    </div>
                                </div>
                            </form>
                            <hr class = "bg-dark mt-3 mb-5">
                        </div>
                    </div>
                    


                                        <!-- Show Admin -->



                    <div class="row justify-content-center mt-3">
                        <div class="col-lg-6">
                            <h4 class = "text-dark font-weight-bold">Our Admin</h4>
                            <hr class = "bg-dark my-3">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class = "text-center">
                                        <th>Admin Name</th>
                                        <th>Admin Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    // $con=mysqli_connect('localhost','root','','EMS') or die(mysqli_error());
                                    $sql=mysqli_query($con,"SELECT * FROM `admin`");
                                    $numrows=mysqli_num_rows($sql);
                                    // echo $numrows;
                                    while($row=mysqli_fetch_assoc($sql)){
                                        $adminName = $row['username'];
                                        $adminPass = $row['password'];
                                ?>
                                    <tr class = "text-center">
                                        <td class="align-middle text-dark"> <?php echo $adminName; ?> </td>
                                        <td class="align-middle text-dark"> <?php echo $adminPass; ?> </td>
                                        <td class="align-middle"> <a href="deleteAdmin.php?name=<?php echo $row['username']; ?>"> <span class = "text-danger"><i class = "fas fa-trash-alt fa-2x"></i> </span> </a> </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr class = "bg-danger mb-5 mt-3">
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->






                                            <!-- Select  -->

    <script>
        $(document).ready(function(){
            $("#location").change(function(){
                var locname = $("#location").val();
                // console.log(locname);
                $.ajax({
                    url: '../BookLocation.php',
                    method: 'post',
                    data: 'locname=' + locname
                }).done(function(venue){                                            
                    venue = JSON.parse(venue);
                    $('#venue').empty();
                    $('#venue').append('<option>' + '--Select--' + '</option>');
                    venue.forEach(function(vn){
                        $('#venue').append('<option>' + vn.name + '</option>');
                    })
                })
            })
        })
    </script>





                                            <!-- end select -->




    <!-- start script -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>
   


    

