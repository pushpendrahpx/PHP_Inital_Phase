<?php 

	session_start();
	if($_SESSION && isset($_SESSION['ismessage']) && $_SESSION['ismessage']==true){
		$_SESSION['ismessage'] = false;

	}else{
	$_SESSION['ismessage'] = false;
}

?><!DOCTYPE html>
<!-- Preloader is taken from Spinkit css -->
<html>

<head>
	<title>Chintan Pratishthan Student Registration Form</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap" rel="stylesheet">
	<!-- Customizing Webpage for Mobile Purposes by using below Meta tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Below Meta tag is used to make Chrome Tab Theme -->
	<meta charset="utf-8" name='theme-color' content='#2c3f48'>
	<style type="text/css">
		*{font-family: Quicksand,sans-serif;
			}
		.loader{
			top:0px;
			left:0px;
			width:100%;
			height: 100vh;
			position: absolute;
			background: #2c3f48;
			color:white;
		}
		.loadcontent{
			align-self: center;
			align-content: center;
			align-items: center;
			text-align: center;
		}
		.loadcontent > .sq{
			left:50px;
			position: absolute;
			top:50px;
			height: 30px;
			width: 30px;
			background: white;
		}
		.content{
			display: none;
		}
		.sk-circle {
  margin: 100px auto;
  width: 40px;
  height: 40px;
  position: relative;
}
.sk-circle .sk-child {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.sk-circle .sk-child:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #ffffff;
  border-radius: 100%;
  -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
          animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
}
.sk-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
          transform: rotate(30deg); }
.sk-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
          transform: rotate(60deg); }
.sk-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg); }
.sk-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
          transform: rotate(120deg); }
.sk-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
          transform: rotate(150deg); }
.sk-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg); }
.sk-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
          transform: rotate(210deg); }
.sk-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
          transform: rotate(240deg); }
.sk-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg); }
.sk-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
          transform: rotate(300deg); }
.sk-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
          transform: rotate(330deg); }
.sk-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
          animation-delay: -1.1s; }
.sk-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
          animation-delay: -1s; }
.sk-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
          animation-delay: -0.9s; }
.sk-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s; }
.sk-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
          animation-delay: -0.7s; }
.sk-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
          animation-delay: -0.6s; }
.sk-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s; }
.sk-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
          animation-delay: -0.4s; }
.sk-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
          animation-delay: -0.3s; }
.sk-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
          animation-delay: -0.2s; }
.sk-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
          animation-delay: -0.1s; }

@-webkit-keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
	</style>
</head>
<script type="text/javascript">
	(nowrun = function(){
		$("#loader").fadeOut(500);
		$("#content").fadeIn(500);

		// Codes for Navbar - Toggler
		var _global = true;
			$("#wrapper").click(function(){
				$(".icon").toggleClass("close");
				$(".navtoggler-content").slideToggle(200);
				// $(".main-content").hide();
				// if(_global == true){
				// 	_global = false;
				// 	$(".main-content").hide();
				// }else{
				// 	_global = true;
				// 	$(".main-content").show();
				// }

			});
		// End of Navbar Toggler
	});
</script>
<body onload="nowrun()">
<div class="loader" id="loader">
	<div class="sk-circle">
  <div class="sk-circle1 sk-child"></div>
  <div class="sk-circle2 sk-child"></div>
  <div class="sk-circle3 sk-child"></div>
  <div class="sk-circle4 sk-child"></div>
  <div class="sk-circle5 sk-child"></div>
  <div class="sk-circle6 sk-child"></div>
  <div class="sk-circle7 sk-child"></div>
  <div class="sk-circle8 sk-child"></div>
  <div class="sk-circle9 sk-child"></div>
  <div class="sk-circle10 sk-child"></div>
  <div class="sk-circle11 sk-child"></div>
  <div class="sk-circle12 sk-child"></div>
</div>
</div>
<div class="content" id="content">
	<div class="navbar">
		<a href="#homepage" style="text-decoration: none;"><div class="navbar-brand waves-effect waves-light" style="padding:5px;border-radius: 2px;font-size: 25px;">Chintan Pratishthan</div></a>
		
		<div class="navbar-toggle">
			<div id="wrapper">
				<div class="circle icon">
					<div class="line top"></div>
					<div class="line middle"></div>
					<div class="line bottom"></div>
				</div>
			</div>
		</div>
		<div class="navtoggler-content">
		<a href='/student' class="nav-item waves-effect waves-light text-white bg-primary" style="border-radius: 3px;text-decoration: none;">Student Registration</a>
		
	</div>
	</div>
	
	<div class="main-content" style="width: 100%;">
			
				<section class="features-section">
			  		<div class="wrapper">
			  			<div class=" waves-effect h1 text-center" style="width: 100%;">Student Alumni Mentorship Programme Registration</div>
			  			<div class="services-content">
			  				<small>This Form is to be filled by Students of SVNIT.</small>
			  				<div class="container">
			  					<?php 
			  						if(isset($_SESSION['ismessage']) && $_SESSION['ismessage'] != true){
			  						?><form method="post" action="registerstudent.php">
			  						<a class="text-success">* All Fields are Mandatory	</a>
									<div class="row">
										<div class="col-sm-12 col-lg-6">
											<div class="form-group">
												<label>Full Name - </label>
												<input type="text" class="form-control" name="name" placeholder="Full Name" required="required" minlength="3">
												<small>*Mandatory To Identify Each Student</small>
											</div>
										</div>
										
											<div class="col-sm-12 col-lg-6">
												<div class="form-group">
													<label>Mobile Number - </label>
										<input required="required" type="number" class="form-control" name="phone" placeholder="Mobile Number" minlength="10" maxlength="10"  >
										<small>*May be used for Verification</small>
									</div>
											</div>
										
											<div class="col-sm-12 col-lg-6">
												<div class="form-group">
													<label>Roll Number </label>
										<input required="required" type="text" class="form-control" name="rollno" placeholder="Roll Number" minlength="8" maxlength="8" onkeyup="var start = this.selectionStart;var end = this.selectionEnd;this.value = this.value.toUpperCase();this.setSelectionRange(start, end);" >
										<small>*Roll Number is necessary (like - U19EE003)</small>
									</div>
											</div>
									</div>
									
										<div class="row">
											<div class="col-sm-12 col-lg-6">
												<div class="form-group">
													<label>Branch - </label>
										<select class="form-control" name="department" required="required">
											<option selected="selected" disabled="disabled" value="-1">Select Your Department</option>
											<!-- ( -1 ) can be used while Validation of Form -->
											<option value="Civil">Civil Engineering Department</option>
											<option value="Chemical">Chemical Engineering Department</option>
											<option value="Computer">Computer Engineering Department</option>
											<option value="Electrical">Electrical Engineering Department</option>
											<option value="Electronics">Electronics Engineering Department</option>
											<option value="Mechanical">Mechanical Engineering Department</option>
											<option value="Integrated Physics">Integrated Physics</option>
											<option value="Integrated Chemistry">Integrated Chemistry</option>
											<option value="Integrated Mathematics">Integrated Mathematics</option>
										</select>
										<small>All Branches</small>
									</div>
											</div>	

											<div class="col-sm-12 col-lg-6">
												<div class="form-group">
													<label>Email ID </label>
														<input required="required" class="form-control" type="email" name="email" placeholder="Email ID" minlength="14">
										<small>*Mandatory</small>
												</div>
											</div>			
										</div>
										
											<div class="form-group">
												<label>Scope Of Interest</label>
												<select name="interest" required="required" class="form-control" id="interest">
													<option value="-1">SCOPE OF INTEREST</option>
													<option value="GATE">GATE for M.Tech</option>
													<option value="CAT">CAT for M.B.A</option>
													<option value="UPSC">UPSC</option>
													<option value="Technical">Technical</option>
													<option value="Programming">Programming / Developer</option>
													<option value="-2">Others</option>
												
												</select>
												<div class='form-group'>
												    
												<textarea class='form-control' placeholder="Other Scope of Interest" ></textarea>
												</div>
											</div>
									<div><input name='lat' value='' type='hidden'  id='lat'/><input name='lon' value='' type='hidden'  id='lon'/>
										<label>Confirm Above Data is Correct</label>
										<input class='form-control' type="radio" name="ischecked" required="required" value="true">
									</div><br />
									<div class="form-group">
										<center><button class="btn btn-block btn-success">Submit</button></center>
										<!-- In Some Cases Center tag doesn't work in HTML5 -->
									</div>
				</form><?php
			  					}else{
			  					?>Registration Successfull<?php
			  				}
			  					?>
			  				</div>		
			  			</div>
			  			</div>
			  		</section>
<hr />
				
			  		<footer>
			  		    Contact us @ +91-9327046282
			  			<div class="row text-center" style="margin:5px;color: white">
			  				<div class="col-12">
			  					&copy; 2019-2020 SVNIT Surat,Gujarat,India
			  				</div>
			  			</div>
			  		</footer>
			 </div>
			  

	</div>
</div>

<!-- Sources -->
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css">
	<script src="../jscripts/jquery-3.4.1.min.js"></script>
<script src="../jscripts/bootstrap.min.js"></script>
<!-- Over Writing Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="../styles/own.css">
<link rel="stylesheet" type="text/css" href="../styles/waves.css"><!-- for Waves effect CSS AND JS is Required -->
<script type="text/javascript" src="../jscripts/waves.js"></script>
</body>
//     <script>
//         function getLocation() {
//   if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(showPosition);
//   } else { 
//     console.log("Geolocation is not supported by this browser.");
//   }
// }

// function showPosition(position) {
//   var latitude = position.coords.latitude;
//   var longitude = position.coords.longitude;
//     document.getElementById("lat").value = latitude;
//     document.getElementById("lon").value = longitude;
// }

// getLocation();
    </script>
<script>
    $("img").hide();
</script>
</html>