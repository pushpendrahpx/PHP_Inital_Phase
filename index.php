<!DOCTYPE html>
<!-- Preloader is taken from Spinkit css -->
<html>
<head>
    <script>
if('serviceWorker' in navigator) {
  navigator.serviceWorker
           .register('/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
}
</script>
	<title>Chintan Pratishthan SVNIT</title>
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
		<a href="#homepage" style="text-decoration: none;"><div class="navbar-brand waves-effect waves-light" style="padding:5px;border-radius: 2px;font-size: 25px;">Chintan Pratishthan<br /><small>A Student Chapter of SVNIT</small></div>

			</a>
		
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
			<!-- <a href='alumni' class="nav-item waves-effect waves-light text-white bg-info" style="box-shadow: 0 0 10px teal;border-radius: 3px;text-decoration: none;">Alumni Registration</a> -->
			<a href='student' class="nav-item waves-effect waves-light text-white bg-primary" style="border-radius: 3px;text-decoration: none;">Student Registration</a>
		<!-- 	<a href=""><div class="nav-item waves-effect waves-light">Home</div></a>
			<a href=""><div class="nav-item waves-effect waves-light">Activites</div></a>
			
			<a href=""><div class="nav-item waves-effect waves-light">Practices</div></a>
			<a href="query.html"><div class="nav-item waves-effect waves-light">Query</div></a>
			<a href=""><div class="nav-item waves-effect waves-light">About us</div></a> -->
		
	</div>
	</div>
	<style type="text/css">
		@media (max-width: 720px){
			.nav-item{
				 width: 90%;			
				}
				.nav-item:hover{
					background: transparent;
				}
		}

	</style>
	<div class="main-content" style="width: 100%;">
			
				<section class="features-section">
			  		<div class="wrapper">
			  			<div class=" waves-effect h1 text-center" style="width: 100%;">Register Yourself Here<br /></div>
			  			<div class="services-content">
			  			    <hr />
			  				<div class="container">
			  					<form method="post" action="student">
			  					<button class="btn btn-block btn-info waves-effect load_btn">
			  						Student Registration
			  					</button>
			  				</form>
			  				<br />
			  					 <form method="post" action="iim">
			  					<button class="btn btn-block btn-primary waves-effect load_btn">
			  						Volunteer Registration Form
			  					</button>
			  				</form>
			  				<hr />
			  				<form action="https://www.facebook.com/chintanpratishthan/" method="get">
			  					<button class="btn btn-primary waves-effect">Visit Our Facebook Page</button>
			  				</form>
			  				</div>		
			  				<script>
			  				    $("button").click(function(){
			  				        
                    		$("#loader").fadeIn(500);
                    		$("#content").fadeOut(500);

			  				    });
			  				</script>
			  			</div>
			  			</div>
			  		</section>
<hr />
				
			  		<footer>
			  			<!-- <div class="row" style="margin:5px;color:white;">
			  				<div class="col-sm-12 col-lg-6">
			  					<div class="card-title lead text-center waves-effect" style="width:100%;">Important Links</div>
			  					<div class="card-body text-center">
			  						<a href="">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  					</div>
			  				</div>
			  				<hr />
			  				<div class="col-sm-12 col-lg-6">
			  					<div class="card-title lead text-center waves-effect" style="width:100%;">Connect With Us</div>
			  					<div class="card-body text-center">
			  						<a href="">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  						<a href="Link 1">Link 1</a><br />
			  					</div>
			  				</div>
			  			</div> -->
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
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
	<script src="jscripts/jquery-3.4.1.min.js"></script>
<script src="jscripts/bootstrap.min.js"></script>
<!-- Over Writing Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="styles/own.css">
<link rel="stylesheet" type="text/css" href="styles/waves.css"><!-- for Waves effect CSS AND JS is Required -->
<script type="text/javascript" src="jscripts/waves.js"></script>
</body>
<script>
    $("img").hide();
</script>
</html>