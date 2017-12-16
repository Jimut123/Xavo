<?php
include("connect.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
		<meta name="description" content="Xavotsav 2018 Official Site : Sounds of the Multiverse">
		<meta name="author" content="Kalyan Majumdar">

		<title>Xavotsav 2018</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/fluid_grid.css" rel="stylesheet">
		<link href="css/demo-styles.css" rel="stylesheet">
		<link href="css/contactTiles.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Jura:300,400" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body id="page-top" class="events" onload="myFunction();" style="overflow-x:hidden;">
		<div id="loader"></div>
		<!-- Navigation -->
        <script type="text/javascript" src="assets/fb.js"></script>
		<div id="totality" class="animate-bottom" style="overflow-x:hidden;">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="index.html#page-top"><img src="img/others/xavotextsmall.png" style="width:100px;margin-top:-4px;@media (max-width:768px){margin-top:0px;}"/></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="#page-top">Event Name</a>
						</li>
						<li>
							<a class="page-scroll" href="team.html#page-top">Team</a>
						</li>
				</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		
		<header>
			<div id='stars'></div>
			<div id='stars2'></div>
			<div id='stars3'></div>
			<div id='title'>
				<span>
					Events Details
				</span>
			</div>
		</header>
		
		<center>
		<div class="rule"></div>
            <section id="team">
                <div class="container">
		<div>
        <h1><?php if(isset($_SESSION['name'])){echo $_SESSION['name'];?></h1><?php }?>
            
        </div>
        <?php if(isset($_SESSION['name'])){ }
        else{
        ?><div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-use-continue-as="false" data-scope="public_profile,email"  onlogin="checkLoginState();"></div>
        
        <?php } ?>
                </div>
            </section>
		</center>
	
		<!-- Contact Section -->
		<section id="contact" style="background-attachment:fixed;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center" style="text-decoration:none;text-transform:uppercase;letter-spacing:1px;font-weight:400;font-family:'Jura',sans-serif;color:#CCC;">
						<h5>Contact</h5>
						<p>e-mail : <a href="mailto:gsec@sxccal.edu">gsec@sxccal.edu</a></p>
						<p>phone : <a href="tel:+919038634869">+91 90386 34869</a></p>
						<h6>For events :</h6>
						<p>e-mail : <a href="mailto:eventsxavo18@gmail.com?subject=Ref&mdashXavotsav%20Website">eventsxavo18@gmail.com</a></p>
						<h6>For PR :</h6>
						<p>e-mail : <a href="mailto:pr.xavo18@gmail.com?subject=Ref&mdashXavotsav%20Website">pr.xavo18@gmail.com</a></p>
					</div>
					
					<div class="col-md-4" id="googleMap">
					</div>
					
					<div class="col-md-4 text-center" style="text-decoration:none;text-transform:uppercase;letter-spacing:1px;font-weight:400;font-family:'Jura',sans-serif;color:#CCC;">
						<h5>Useful Links:</h5>
						<p><a href="#events">Event Details</a></p>
						<p><a href="#college">College Details</a></p>
						<p><a href="#login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Log-in</a></p>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; SXCSC 2017-18</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="https://www.facebook.com/Xavotsav/" alt="Connect with us on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCUIc-Qc9Jnsh1oE8ZEITsHA" alt="SXCSC on YouTube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
							<li><a href="https://www.instagram.com/sxcsc/" alt="SXCSC on Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://twitter.com/gensec2016" alt="SXCXC Twitter Handle" target="_blank"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li>Designed and Developed by Team SXCSC
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		
		</div>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="js/spacex.js"></script>
		
		<!-- LOADER -->
		<script>
			var myVar;

			function myFunction() {
				myVar = setTimeout(showPage, 200);
			}

			function showPage() {
				document.getElementById("loader").style.display = "none";
				document.getElementById("totality").style.display = "block";
			}
		</script>
				
		
		<!-- Google Maps API -->
		<script type="text/javascript">
			function myMap() {
				var location = new google.maps.LatLng(22.548844,88.355837);

				var mapCanvas = document.getElementById('googleMap');
				
				var mapOptions = {
					center:new google.maps.LatLng(22.557821,88.345999),
					zoom:14,
					panControl: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
					
				var map = new google.maps.Map(mapCanvas,mapOptions);
				
								
				var marker = new google.maps.Marker({
					position: location,
					map: map,
					title: "St. Xavier's College (Autonomous), Kolkata"
				});
				
				$('section#contact').on('load', function(){
					google.maps.event.trigger(map, 'resize');

					// Recenter the map now that it's been redrawn               
					var reCenter = new google.maps.LatLng(22.548844,88.355837);
					map.setCenter(reCenter);
				});
			}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK_nsGp6o6i0sYC73mB6BHzlGXVynPNxU&callback=myMap" type="text/javascript"></script>

	</body>
</html>
