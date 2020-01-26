<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
if($_SESSION["check"])
echo "<script type='text/javascript'>window.location.href='level.php';</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kryptex</title>
<link href="images/alma-af-icon.jpg" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Kryptex" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- gallery -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->

<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- animation -->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="agileits-logo">
								<h1><a href="index.php"><img src="images/logo1.png" alt="" /> Kryptex</a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
					
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li ><a href="index.php">Home</a></li>
								
									<li><a href="register.php">Register</a></li>
									<li><a data-toggle="modal" href="#myModal">Login</a></li>
									<li><a href="rules.php" >Rules</a></li>
									<li><a href="leader.php" >Leaderboard</a></li>
										<li><a href="developers.php" >Developers</a></li>
								</ul>
							</nav>
						</div>
				
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			
			<div class="w3layouts-banner-info">
				<div class="container w3l-heading">
				

				<h2 >

      Kryptex is organised by Alma Fiesta where the KEY is redefining FESTIVITY!</h2>
      <h2>YO ALMA!</h2>
				 </small></h1>
					</div>
					
				<!--	<div class="w3-arrow bounce animated">
						<a href="#indro" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
					</div>   -->


				</div>
			
			<div class="container links">
			
				      <div class="row">
                  
                    <h2>
                     <div class="col-sm-4"> <center></center></div>
                    <a data-toggle="modal" href="#myModal">   <div class="col-sm-2 rj"><center>Login</center></div></a>
                <a href="register.php">      <div class="col-sm-2 rj"> <center>Register</center></div></a>
                     <div class="col-sm-4"><center></center></div>
                      </h2>
             </div>
       <center><h2><p style="color:red;">Kryptex Over !!</p><br></h2></center>
             <div class=" container  w3l-heading" >
             	<div class="rj1"><br>
             	<h2><p style="color: #ffdd99;">Kryptex Says..</p><br>
             	<div style="color: #00ffcc;">YO ALMA !!<br> <br></div> </h2>
             </div>
             </div>


	<footer>
		<div class="container">
			<p>© Design by WebD Team | <a href="http://almafiesta.com"> Alma fiesta</a> </p>
		</div>
	</footer>




</div>
		</div>
	</div>   		  <div class="container">
 
	  </div>




	<div id="myModal" class="modal fade" role="dialog" >
		<div class="modal-dialog">
	  
		  <!-- Modal content-->
		  <div class="modal-content" style=" background-color: rgb(0,0,0,0.5)">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h3 class="modal-title" style="color:white;"><center>Login</center></h3>
			</div>
			<div class="modal-body">
			
				<div class="w3layouts-main">
			
					<form action="login.php" method="post">
						
						<input placeholder="User Name" name="user" type="text" required="">
						
						
						<input placeholder="Password" name="pword" type="password"  id="password1" required="">
						
						<input type="submit" value="Get Started" name="login">
					</form>
			</div>

			</div>
			
		  </div>

	  
		</div>
	  </div>


			<script src="js/jquery.tools.min.js"></script>
			<script src="js/jquery.mobile.custom.min.js"></script>
			<script src="js/jquery.cm-overlay.js"></script>
			<script>
				$(document).ready(function(){
					$('.cm-overlay').cmOverlay();
				});
			</script>
		</div>
	</div>
	<!-- //gallery -->
	<!-- team -->

	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>	
</html>