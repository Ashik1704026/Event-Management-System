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
                <form action="login.php" method="POST">
                    <div class="row">
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
        <div class="container">
            <form action="Dbook.php" method="POST" name = "myform">
                <fieldset class="form-group">
                    <div class="row">
                       	<div class="col-form-label col-form-label-lg col-sm-2 col-md-2 col-lg-2 pt-2">Event</div>
                      	<div class="col-sm-10 col-md-10 col-lg-10">
							<div class="row">
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
						<select id="slct1" class="form-control form-control-lg" name = "location" onclick="populate(this.id,'slct2')">
						<option selected>--Select--</option>
						<option>Dhaka</option>
						<option>Chittagong</option>
						<option>Khulna</option>
						<option>Rajshahi</option>
						<option>Barishal</option>
						<option>Rangpur</option>
						</select>
					</div>
                </div>
                <div class="form-group row">
					<label class="col-sm-2 col-form-label  col-form-label-lg" for="inputState">Venue</label>
					<div class="col-sm-10">
						<select id="slct2" class="form-control form-control-lg" name = "venue" onchange="changeCalendar();">
						<option selected>--Select--</option>
						</select>
					</div>
                </div>
                <!-- <p id = "display_check"></p> -->
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




                                            <!-- Select -->


    <script>
        function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            if(s1.value == "Dhaka"){
            var optionArray = ["ss|--Select--","a|Radison Blu","b|Sonarga","c|IWestern","rupusi|Rupusi"];
            }
            else if(s1.value == "Chittagong"){
            var optionArray = ["ss|--Select--","a|Radison Blu","b|Sanmar","c|Port International"];
            }
            else if(s1.value == "Rajshahi"){
            var optionArray = ["ss|--Select--","a|Khan Hotel","b|Hotel X","c|Hotel Y"];
            }
            else if(s1.value == "Rangpur"){
            var optionArray = ["ss|--Select--","a|Khan Hotel","b|Hotel R","c|Hotel F"];
            }
            else if(s1.value == "Barishal"){
            var optionArray = ["ss|--Select--","a|Barishal Hotel","b|Barishal X","c|Barishal Y"];
            }
            else if(s1.value == "Khulna"){
            var optionArray = ["ss|--Select--","a|Khulna Hotel","b|Khulna X","c|Khulna Y"];
            }
            for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.name = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
            }
        }
    </script>


                                            <!-- Calendar -->




    <script type = "text/javascript">

        function changeCalendar(){
            var message5 = document.getElementById("slct1").value;
            var message1 = document.getElementById("slct2").value;
            if(message5 == "Dhaka"){
                if(message1 == "Radison Blu")
                    var dhk = 1;
                if(message1 == "Sonarga")
                    var dhk = 2;
                if(message1 == "IWestern")
                    var dhk = 3;
                if(message1 == "Rupusi")
                    var dhk = 4;
            }
            else if(message5 == "Chittagong"){
                if(message1 == "Radison Blu")
                    var dhk = 5;
                if(message1 == "Sanmar")
                    var dhk = 6;
                if(message1 == "Port International")
                    var dhk = 7;
            }
            $.post('JQBookCalendar.php',{LID:dhk},
                function(data){
                    $("#SDate").datepicker("destroy");
                    $("#LDate").datepicker("destroy");
                    var jqvar = data;
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
                }
            );
        }

    </script>




                                            <!-- Modal -->


    <script type="text/JavaScript">
        function showMessage(){
            var message = document.getElementsByName("gridRadios");
            if(message[0].checked)
                display_messageRadio.innerHTML= message[0].value;
            if(message[1].checked)
                display_messageRadio.innerHTML= message[1].value;
            if(message[2].checked)
                display_messageRadio.innerHTML= message[2].value;
            if(message[3].checked)
            display_messageRadio.innerHTML= message[3].value;
            if(message[4].checked)
                display_messageRadio.innerHTML= message[4].value;
            if(message[5].checked)
                display_messageRadio.innerHTML= message[5].value;
                
            var message5 = document.getElementById("slct1").value;
            display_messageLocation.innerHTML= message5;

            var message1 = document.getElementById("slct2").value;
            display_messageVenue.innerHTML= message1;

            var message2 = document.getElementById("SDate").value;
            display_messageStartDate.innerHTML= message2;

            var message3 = document.getElementById("LDate").value;
            display_messageLastDate.innerHTML= message3;

            var message4 = document.getElementById("NOofPerson").value;
            display_messageNo_Persom.innerHTML= message4;
                                                            
                                                            
            if(message5 == "Dhaka"){
                if(message1 == "Radison Blu")
                    var dhk = 1;
                if(message1 == "Sonarga")
                    var dhk = 2;
                if(message1 == "IWestern")
                    var dhk = 3;
                if(message1 == "Rupusi")
                    var dhk = 4;
            }
            else if(message5 == "Chittagong"){
                if(message1 == "Radison Blu")
                    var dhk = 5;
                if(message1 == "Sanmar")
                    var dhk = 6;
                if(message1 == "Port International")
                    var dhk = 7;
            }

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
                $.post('JQBook.php',{LID:dhk},
                    function(data){
                    var jqvar = data;
                    display_messageTotalCost.innerHTML = (jqvar / 50) * message4 * (date_diff_indays(newdate1,newdate2)+1);
                });
            }
            if(message4 < 50){
                display_messageNo_Persom.innerHTML= "Not Enough";
                display_messageTotalCost.innerHTML = "Please Re-check";
                Less50alert.innerHTML = "**Total perticipant number must be greater than or equal Fifty(50)**";
            }
        }
    </script>



</body>
</html>