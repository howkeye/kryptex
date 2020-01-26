
 <?php

 	$user=$_SESSION['user'];
	 $username="********";
	 $password="******";
	 $dbname = "******";

	$conn=mysqli_connect($servername, $username, $password,$dbname) or die(" can't connect to server");
?>
<?php
function check($input){
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}

       

	
	$user=check($_POST["user"]);

	$pword=check($_POST["pword"]);
	
?>


<?php
$sql = "SELECT username,pword FROM kryptex WHERE username='$user'and pword='$pword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0){
			$message = " wrong user Name or password";
			echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";  //
		}
		else
		{
			
           session_start();

			$row = mysqli_fetch_assoc($result);
			 $_SESSION["user"]=$row["username"];
			   $_SESSION["pword"]=$row["pword"];
			   $_SESSION["check"]=1;
         echo "<script type='text/javascript'>window.location.href='index.php';</script>";  //
		
		}

?>
