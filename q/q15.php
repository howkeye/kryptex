
<?php
session_start();

?>

<?php if($_SESSION['level']!=15)
echo  "<script type='text/javascript'>window.location.href='../level.php';</script>";
?>
<?php
 /*  
    $user=$_SESSION['user'];
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="alma";
	$conn=mysqli_connect($servername, $username, $password,$dbname) or die(" can't connect to server"); */
?>
 <?php

 	$user=$_SESSION['user'];
	 $username="********";
	 $password="******";
	 $dbname = "******";

	$conn=mysqli_connect($servername, $username, $password,$dbname) or die(" can't connect to server");
?>
 <?php function check($input){
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}

 function answer($input){
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		$input = strtolower($input);
		$input = str_replace(' ', '', $input);
		return $input;
	}
	$ans=answer($_POST["ans"]);



  if($ans=="…---…" or $ans=="…___..."){
echo "<script type='text/javascript'>alert('Correct Answer');</script>";
     $user=$_SESSION['user'];
	$sql1 = "UPDATE leaderboard SET level='15' WHERE username='$user'";
	$result=mysqli_query($conn,$sql1);
	if($result)
       echo  "<script type='text/javascript'>window.location.href='../level.php';</script>";
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Kryptex </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/alma-af-icon.jpg" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="kryptex" content="alma fiesta, iitbbs">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- gallery -->
<link type="text/css" rel="stylesheet" href="../css/cm-overlay.css" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->

<!-- //font -->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- animation -->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
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
								<h1><a href="../index.php"><img src="images/logo1.png" alt="" /> Kryptex</a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
					
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li ><a href="../index.php">Home</a></li>
								
                                    
                                    <?php
                                    
                                    if($_SESSION['check'])
                                    { echo  '<li><a href="../logout.php" >  logout </a></li> ';   }
                                     else   {echo  '<li><a href="../index.php"> login </a></li> '; 
                                              echo  '  <li><a href="../register.php">Register</a></li>';
                                     
                                     
                                     }  ?>
                                    

                             

                                
										<li><a href="../rules.php" >Rules</a></li>
									<li><a href="../leader.php" >Leaderboard</a></li>
										<li><a href="../developers.php" >Developers</a></li>
								</ul>
							</nav>
						</div>
				
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		
<div class=" container" style=" color:red;"><center>
 <?php


  if($ans)
     echo " Wrong Answer!!".$ans;
     ?>
     </center>  </div>
			
        <div class=" container  w3l-heading" >
             	<div class="rj3" style="align-content: center;padding-left: 2vw; color:white; ">
				<center>	 <h2><u>Question 15</u></h2></center></div>  </div>


				<div class=" container  w3l-heading" >
						<div class="rj3" style="align-content: center;padding: 2vw; margin:2vw; margin-top:auto; color:white; ">
				<br><center>	
				 You can hear birds screeching and trees rustling. You can hear the wind howling and the waves colliding off the rocks. You can hear monkeys and then complete silence. Now you can feel sudden pain crawling down your legs. You now feel the sand you are lying uneasily on and your damp clothes. Although you are damp from your clothes, you can still feel the searing pain of heat beaming down on you. You smell salt, pine and fish but worst of all, you smell danger. You taste blood and salt but you have a dry mouth. You open your eyes but the light is like a torch being shone in your eyes. You can see green tropical trees, a bright blue sky, and yellow sand beneath your body, the foaming blue waves splashing onto the sand. At first you think that you are hallucinating but this is no dream! You can see blood from wounds on your arms and legs; You look around to see a massive jungle to your left and to your right. When you blink you see your own eyelashes. <br><br>
Then suddenly you remember it all, being chased by them, jumping off the bridge and getting washed ashore. You realize that you need to escape from the island asap. You sit up and the only thing lying around you is a broken radio. You know that the island isn't too far away from the mainland. Hopefully you'll find an airplane or a ship. You need to think of something fast ! 
<br><br>
Can you save your soul?

</center></div>  </div>


	<div class=" container  w3l-heading" >
		<div class="rj3" style="align-content: center;padding-left: 2vw; padding-bottom: 2vw; color:white; ">
		<center>			
<form action="q15.php" method="post">
   Ans: <input type="text" name="ans">

<input type="submit">
</form>
</center></div>  </div>		
							


			
	<footer>
		<div class="container">
			<p>© Design by WebD Team | <a href="http://almafiesta.com"> Alma fiesta</a> </p>
		</div>
	</footer>						
					

					
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