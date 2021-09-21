<?php
    session_start();
    include('../db.php');
    if(!isset($_SESSION['adminName'])){
        header('Location: ../home.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Location</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link active" href="userinfo.php" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="location.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-map-marker-alt"></i>
                    <span>Location</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="events.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Events</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="activity.php" -expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Activity</span>
                </a>
            </li>
            <li class="nav-item">
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

        
 <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        
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



    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $_SESSION['adminName']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"    aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            
                              
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>



                                         <!--User Info Page Heading -->


                <h1 class="h3 mb-2 text-gray-800 mx-3 text-center my-5">All the Location Name.....</h1>


                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-5 font-weight-bold" data-toggle="collapse" data-target="#collapseAddLocation" aria-expanded="false">Add New Location and Venue</button>
                        <div class="collapse mb-5" id="collapseAddLocation">
                            <div class="card card-body">
                                <form method = "post" action = "addLocation.php">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class = "text-dark">Hotel Name</label>
                                            <input type="text" class="form-control" name = "hotelName">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class = "text-dark">Location Name</label>
                                            <input type="text" class="form-control" name = "locationName">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-8">
                                            <label class = "text-dark">Email address</label>
                                            <input type="email" class="form-control" name = "email">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label class = "text-dark">Capacity</label>
                                            <input type="text" class="form-control" name = "capacity">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-8">
                                            <label class = "text-dark">Phone Number</label>
                                            <input type="text" class="form-control" name = "phoneNumber">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label class = "text-dark">Cost</label>
                                            <input type="text" class="form-control" name = "cost">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-block text-dark" name = "submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                                <!-- Alerts.... -->
                 
                <?php if(isset($_SESSION['addLocation'])){ unset($_SESSION['addLocation']); ?>                
                    <div class="alert alert-success alert-dismissible fade show mx-5" role="alert">
                        <strong>Successful....!</strong> New Location Successfully Added....
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>  
                <?php if(isset($_SESSION['addLocationNot'])){ unset($_SESSION['addLocationNot']); ?>                
                    <div class="alert alert-danger alert-dismissible fade show mx-5" role="alert">
                        <strong>Oppss...!</strong> New Location Is Not Added, Try Again......
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>  
                <?php if(isset($_SESSION['dltLocation'])){ unset($_SESSION['dltLocation']); ?>                
                    <div class="alert alert-danger alert-dismissible fade show mx-5" role="alert">
                        <strong>Deleted...!</strong> Your Location Is Deleted Successfully....
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <?php if(isset($_SESSION['editL'])){ unset($_SESSION['editL']); ?>                
                    <div class="alert alert-success alert-dismissible fade show mx-5" role="alert">
                        <strong>Updated....!</strong> Location Successfully Updated......
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?> 


                    <!-- DataTales Example -->
                <div class="card shadow mb-4 mx-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Location List</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class = "text-center">
                                        <th>Hotel Name</th>
                                        <th>Hotel Location</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Capacity</th>
                                        <th>Cost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> -->
                                <tbody>
                                <?php
                                    $sqlConn =  new mysqli('sql5.freesqldatabase.com','sql5437992','uRqlHhGhpf','sql5437992');
                                    $sqlString = "SELECT * FROM `location` ORDER BY `location`.`address` ASC";
                                    $result = $sqlConn->query($sqlString);
                                    $resultArray = $result->fetch_all(MYSQLI_ASSOC);
                                    // echo $numrows;
                                    foreach($resultArray as $rws){
                                ?>
                                    <tr class = "">
                                        <td class="align-middle text-dark text-center"> <?php echo $rws['name']; ?> </td>
                                        <td class="align-middle text-dark text-center"> <?php echo $rws['address']; ?> </td>
                                        <td class="align-middle text-dark text-center"> <?php echo $rws['email']; ?> </td>
                                        <td class="align-middle text-dark text-center"> <?php echo $rws['phone']; ?> </td>
                                        <td class="align-middle text-dark text-center"> <?php echo $rws['capacity']; ?> </td>
                                        <td class="align-middle text-dark text-center"> <?php echo $rws['cost']; ?> </td>
                                        <td class="">
                                            <a href="deleteLocation.php?locationId=<?php echo $rws['locationID']; ?>"> <span class = "text-danger"><i class = "fas fa-trash-alt fa-2x"></i> </span></a> 
                                            <a href="#editLocation<?php echo $rws['locationID']; ?>" data-toggle="modal" style="float: right;"> <span class = "text-warning"><i class = "fas fa-edit fa-2x"></i> </span></a> 
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editLocation<?php echo $rws['locationID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title font-weigth-bold" >Edit For <?php echo $rws['name']; ?>, <?php echo $rws['address']; ?> </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method = "post" action = "editLocation.php">
                                                        <input type="hidden" name = "locationId" value = "<?php echo $rws['locationID']; ?>">
                                                        <div class="row">
                                                            <div class="form-group col-lg-6">
                                                                <label class = "text-dark">Hotel Name</label>
                                                                <input type="text" class="form-control" name = "hotelName">
                                                             </div>
                                                            <div class="form-group col-lg-6">
                                                                <label class = "text-dark">Location Name</label>
                                                                <input type="text" class="form-control" name = "locationName">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-8">
                                                                <label class = "text-dark">Email address</label>
                                                                <input type="email" class="form-control" name = "email">
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label class = "text-dark">Capacity</label>
                                                                <input type="text" class="form-control" name = "capacity">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-8">
                                                                <label class = "text-dark">Phone Number</label>
                                                                <input type="text" class="form-control" name = "phoneNumber">
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label class = "text-dark">Cost</label>
                                                                <input type="text" class="form-control" name = "cost">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-outline-success btn-block text-dark" name = "submit">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.container-fluid -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Ashik & Ibadot &copy;Urban Events Venue & Catering, 2021.</span>
                </div>
            </div>
        </footer>
            <!-- End of Footer -->
    </div>
            <!-- End of Main Content -->




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="js/demo/datatables-demo.js"></script> -->

</body>

</html>