<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Devs </title>
<link href="images/alma-af-icon.jpg" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="kryptex" content="alma fiesta, iitbbs">
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
								
                                    
                                    <?php
                                    echo $_SESSION['check'];
                                    if($_SESSION['check'])
                                    { echo  '<li><a href="logout.php" >  logout </a></li> ';   }
                                     else   {echo  '<li><a href="index.php"> login </a></li> '; 
                                              echo  '  <li><a href="register.php">Register</a></li>';
                                     
                                     
                                     }  ?>
                                    

                             

                                
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
	


			
           <div class="container">
				<div class="w3l-heading about-heading">
				<center>	<h3>Our Team</h3></center>
					<div class="w3ls-border about-border"> </div>
				</div>
				<div class="agileits-team">
					

					<div class="col-lg-4 agileits-team">
						<div class="team-info" style="margin-left: 3vw; margin-right: 2vw;">
							<img src="images/t2.jpeg" alt="" />
							<div class="team-caption"> 
								<h4>Gaurav Gupta</h4>
								<p>  Backend Devil</p>
								<p> Phone: 9589215860       </p>
								<p> Email: gg13@iitbbs.ac.in </p>

								<ul>
									
								<li><a href="https://www.facebook.com/gau17gupta"><i class="fa fa-facebook"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>

					
					
			
                  <div class="col-lg-4 agileits-team">
						<div class="team-info" style="margin-left: 2vw; margin-right: 2vw;">
							<img src="images/t1.jpg" alt="" />
							<div class="team-caption"> 
								<h4>Rajat kumar Gupta</h4>
								<p> Decoder    </p>
								<p> Phone: 9455190304 </p>


								<p> Email: rk39@iitbbs.ac.in </p>

								<ul>
									<li><a href="https://www.facebook.com/rajatguptakumar3"><i class="fa fa-facebook"></i></a></li>
								
									
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 agileits-team">
						<div class="team-info" style="margin-left: 2vw; margin-right: 3vw;">
							<img src="images/t3.jpg" alt="" />
							<div class="team-caption"> 
								<h4>Arooshi Verma</h4>
								<p>Hackergirl </p>
								<p> Problem setter </p>
								<p> Email: av22@iitbbs.ac.in </p>
								<ul>
									<li><a href="https://www.facebook.com/profile.php?id=100017523346668&ref=br_rs"><i class="fa fa-facebook"></i></a></li>
									
									
								</ul>
							</div>
						</div>
					</div>

				
					<div class="clearfix"> </div>
				</div>
			</div>

	<footer>
		<div class="container">
			<p>© Design by WebD Team | <a href="http://almafiesta.com"> Alma fiesta</a> </p>
		</div>
	</footer>




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