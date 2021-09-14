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
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Booking</title>
    <script src = "js/datepicker.min.js"> </script>
    <link rel = "stylesheet" href = "css/datepicker.css" >
    <script src="js/sweetalert.min.js"></script>
</head>
<body>
          
                        <!-- login and logout -->

    <script>$(document).ready(function(){
        <?php
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
                            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){ ?>
                                <li class="nav-item log1"><a href="" class="nav-link"><?php echo $_SESSION['username'] ?></a></li>
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



    <!-- booking -->
    

    <div class="book">
        <div class="container my-5">
            <form action="Dbook.php" method="POST" name = "myform">
                <fieldset class="form-group">
                    <div class="row">
                       	<div class="col-form-label col-form-label-lg col-sm-2 col-md-2 col-lg-2 pt-2">Event</div>
                      	<div class="col-sm-10 col-md-10 col-lg-10">
							<div class="row ml-2" required>
								<div class="col-lg-4 col-md-4 form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Wedding">
									<label class="form-check-label col-form-label-lg" for="gridRadios1">
									Wedding
									</label>
								</div>
								<div class="col-lg-4 col-md-4 form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Birthday">
									<label class="form-check-label col-form-label-lg" for="gridRadios2">
									Birthday
									</label>
								</div>
								<div class="col-lg-3 col-md-2 form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Anniversary">
									<label class="form-check-label col-form-label-lg" for="gridRadios2">
									Anniversary
									</label>
								</div>
								<div class="col-lg-4 col-md-4 form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Conference">
									<label class="form-check-label col-form-label-lg" for="gridRadios2">
									Conference
									</label>
								</div>
								<div class="col-lg-4 col-md-4 form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Party">
									<label class="form-check-label col-form-label-lg" for="gridRadios2">
									Party
									</label>
								</div>
								<div class="col-lg-2 col-md-2 form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Reception">
									<label class="form-check-label col-form-label-lg" for="gridRadios2">
									Reception
									</label>
								</div>
							</div>
                      	</div>
                    </div>
                </fieldset>
                <div class="form-group row">
					<label class="col-sm-2 col-form-label  col-form-label-lg" for="inputState">Location</label>
					<div class="col-sm-10">
						<select class="form-control form-control-lg" id = "location" name = "location" required>
                            <option selected>--Select--</option>
                            <?php
                                require 'BookLocation.php';
                                $locations = loadLocation();
                                foreach($locations as $location){
                                    if($location)
                                        echo "<option id = '".$location."' value = '".$location."' >" .$location. " </option>";
                                }
                            ?>
						</select>
					</div>
                </div>
                <div class="form-group row">
					<label class="col-sm-2 col-form-label  col-form-label-lg" for="inputState">Venue</label>
					<div class="col-sm-10">
						<select class="form-control form-control-lg" name="venue" id="venue">
						    <option selected>--Select--</option>
						</select>
					</div>
                </div>
                
                <div class="form-group row">
					<label for="" class="col-sm-2 col-form-label col-form-label-lg">Start Date</label>
					<div class="col-sm-10">
						<div class='input-group input-group-lg date' id='datetimepicker6'>
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
						</div>
						<input type='text' class="form-control datepicker Scalendar" name ="startDate" id = "SDate"/>
						</div>
					</div>
                </div>
                <div class="form-group row">
					<label for="" class="col-sm-2 col-form-label col-form-label-lg">Last Date</label>
					<div class="col-sm-10 ">
						<div class='input-group input-group-lg date' id='datetimepicker7'>
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
						</div>
						<input type='text' class="form-control datepicker Lcalendar" name = "lstDate" id="LDate" />
						</div>
					</div>
                </div>
                <div class="form-group row">
					<label for="inputtotalperson" class="col-sm-2 col-form-label  col-form-label-lg">No. of Person</label>
					<div class="col-sm-10">
						<input type="text" class="form-control form-control-lg" id="NOofPerson" placeholder="**Total perticipant number can not be less than Fifty(50)**  Ex 250" name = "Person_num">
					</div>
                </div>
                <input type="button" value = "SUBMIT" class="btn btn-outline-warning btn-lg btn-block mb-2" name = "submit" data-toggle="modal" data-target="#BookConfirmModal" onclick = "showMessage();" >
                


                <!-- modals -->
                
                <div class="modal fade" id="BookConfirmModal" tabindex="-1" role="dialog" aria-labelledby="BookConfirmModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="BookConfirmModal">Your Booking Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <table class = "table table-bordered table-hover">
                                            <tr><th class="">Event</th></tr>
                                            <tr><td class=""><span id = "display_messageRadio"></span></td></tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <table class = "table table-bordered table-hover">
                                            <tr><th class="">Location</th></tr>
                                            <tr><td class=""><span id = "display_messageLocation"></span></td></tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <table class = "table table-bordered table-hover">
                                            <tr><th class="">Venue</th></tr>
                                            <tr><td class=""><span id = "display_messageVenue"></span></td></tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <table class = "table table-bordered table-hover">
                                            <tr><th class="">Start Date</th></tr>
                                            <tr><td class=""><span id = "display_messageStartDate"></span></td></tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <table class = "table table-bordered table-hover">
                                            <tr><th class="">Last Date</th></tr>
                                            <tr><td class=""><span id = "display_messageLastDate"></span></td></tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <table class = "table table-bordered table-hover">
                                            <tr><th class="">Person No.</th></tr>
                                            <tr><td class=""><span id = "display_messageNo_Persom"></span>
                                            
                                            </td></tr>
                                        </table>
                                    </div>
                                    
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-10 col-sm-6">
                                            <table class = "table table-bordered table-hover">
                                                <tr><th class=""><p class = "text-center text-success">Your Total Cost(approx)</p></th></tr>
                                                <tr><td class=""><p id = "display_messageTotalCost" class = "text-center text-success"></p></td></tr>
                                            </table>
                                    </div>
                                </div>
                                <p class = "text-center text-danger" id = "Less50alert"></p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                <input type="submit" value = "Confirm" class="btn btn-outline-success" name = "submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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




                                    <!-- Select -->  <!-- Calendar -->

    
    <script>
        $(document).ready(function(){
            $("#location").change(function(){
                var locname = $("#location").val();
                $.ajax({
                    url: 'BookLocation.php',
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
            $("#venue").change(function(){
                var vname = $("#venue").val();
                var locname = $("#location").val();
                // console.log(vname);
                // console.log(locname);
                $.post('JQBookCalendar.php',{vname:vname,locname:locname},function(data){
                    $("#SDate").datepicker("destroy");
                    $("#LDate").datepicker("destroy");
                    var jqvar = data;
                    // console.log(jqvar);
                    $('.Scalendar').datepicker({
                        todayHighlight: true,
                        format: 'dd-mm-yyyy',
                        datesDisabled: jqvar
                    });
                    $('.Lcalendar').datepicker({
                        todayHighlight: true,
                        format: 'dd-mm-yyyy',
                        datesDisabled: jqvar
                    });
                    $( "#SDate" ).datepicker("refresh");
                    $( "#LDate" ).datepicker("refresh");
                });
            })
        })
    </script>


    




                                            <!-- Modal -->


    <script type="text/JavaScript">
        function showMessage(){
            var message = document.getElementsByName("gridRadios");
            var ok = 0;
            for(let i = 0;i < message.length;i ++){
                if(message[i].checked){
                    ok = 1;
                    display_messageRadio.innerHTML= message[i].value;
                }
            }
            if(ok == 0)
            display_messageRadio.innerHTML= 'required';

            var message5 = document.getElementById("location").value;
            if(message5 != '--Select--')
                display_messageLocation.innerHTML= message5;
            else
                display_messageLocation.innerHTML= 'required';

            var message1 = document.getElementById("venue").value;
            if(message1 != '--Select--')
                display_messageVenue.innerHTML= message1;
            else
                display_messageVenue.innerHTML= 'required';

            var message2 = document.getElementById("SDate").value;
            if(message2)
                display_messageStartDate.innerHTML= message2;
            else
                display_messageStartDate.innerHTML= 'required';

            var message3 = document.getElementById("LDate").value;
            if(message3)
                display_messageLastDate.innerHTML= message3;
            else
                display_messageLastDate.innerHTML= 'required';

            var message4 = document.getElementById("NOofPerson").value;
            if(message4)
                display_messageNo_Persom.innerHTML= message4;
            else
                display_messageNo_Persom.innerHTML= 'required'; 
                                                            

            var date_diff_indays = function(date1, date2) {
                dt1 = new Date(date1);
                dt2 = new Date(date2);
                return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
            } 
            var datearray = message2.split("-");
            var newdate1 = datearray[1] + '-' + datearray[0] + '-' + datearray[2];
            var datearray = message3.split("-");
            var newdate2 = datearray[1] + '-' + datearray[0] + '-' + datearray[2];

            if(message4 >= 50){
                $.post('JQBook.php',{vname:message1,locname:message5},function(data){
                    var jqvar = data;
                    // console.log(jqvar);
                    // console.log(message4);
                    // var datediff = date_diff_indays(newdate1,newdate2)+1;
                    // console.log(datediff);
                    display_messageTotalCost.innerHTML = (jqvar / 50) * message4 * (date_diff_indays(newdate1,newdate2)+1);
                });
            }
            if(message4 < 50 && message4){
                display_messageNo_Persom.innerHTML= "Not Enough";
                display_messageTotalCost.innerHTML = "Please Re-check";
                Less50alert.innerHTML = "**Total perticipant number must be greater than or equal Fifty(50)**";
            }
        }
    </script>



                            <!-- Log in and Booking alert -->

    <?php
        if(empty(isset($_SESSION['username']))){ ?>
            <script type="text/javascript">
                swal({
                title: "log in required",
                text: "Please log in to book",
                icon: "warning",
                });
            </script>  
    <?php } ?>
    <?php
        if(isset($_SESSION['Dbooksuccess'])){ unset($_SESSION['Dbooksuccess']); ?>
            <script type="text/javascript">
                swal({
                title: "Submitted",
                text: "Thank you sir,<?php echo $_SESSION['username']?>.For your booking...",
                icon: "success",
                });
            </script> 
    <?php } ?>
    <?php
        if(isset($_SESSION['Dbookerror'])){ unset($_SESSION['Dbookerror']); ?>
            <script type="text/javascript">
                swal({
                title: "Not Submitted",
                text: "Sorry sir, Please try again....",
                icon: "error",
                });
            </script>
    <?php } ?>
    <?php
        if(isset($_SESSION['NotEnoughPeople'])){ unset($_SESSION['NotEnoughPeople']); ?>
            <script type="text/javascript">
                swal({
                title: "Not Submitted",
                text: "Total Number of People Must Be Atleast 50....",
                icon: "error",
                });
            </script>
    <?php } ?>
    <?php
        if(isset($_SESSION['InfoNotGiven'])){ unset($_SESSION['InfoNotGiven']); ?>
            <script type="text/javascript">
                swal({
                title: "Not Submitted",
                text: "All The Information Must Be Filled....",
                icon: "error",
                });
            </script>
    <?php } ?>



    </body>
</html>
