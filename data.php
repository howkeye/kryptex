<?php

 
$servername="localhost";
$username="****";
$password="****";
$dbname = "*****";

$conn=mysqli_connect($servername, $username, $password,$dbname) or die(" can't connect to server");
?>

<?php

	/*
CREATE TABLE kryptex(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone VARCHAR(50),
pword VARCHAR(50)
);

CREATE TABLE leaderboard(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
level INT
)
*/

	function check($input){
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}

	$name=$user=$email=$mbno=$pword=$cpword="";

	$name=check($_POST["name"]);
	$user=check($_POST["user"]);
	$email=check($_POST["email"]);
	$mbno=check($_POST["phone"]);
	$pword=check($_POST["pword"]);
	$cpword=check($_POST["cpword"]);
?>

<?php
	if($pword==$cpword){
		$sql1="INSERT INTO kryptex(name,username,email,phone,pword) VALUES ('$name','$user','$email','$mbno','$pword')";
	//	echo $sql1."     ";
		$sql2 = "SELECT username FROM kryptex WHERE username='$user'";
	//	echo $sql2 ;
		$result=mysqli_query($conn,$sql2);
	//	echo mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0){
			$message = "username already used";
			echo "<script type='text/javascript'>alert('$message');window.location.href='register.php';</script>";
		}

		else{
	//		echo " i am inside else part ";
			if(mysqli_query($conn,$sql1)== TRUE){
	//			echo " i am inside if part ";
				$level=0;
				$sql3="INSERT INTO leaderboard(name,username,level) VALUES ('$name','$user','$level')";
				if(mysqli_query($conn,$sql3)==TRUE){
					$message = "congrats You have successfully registered.";
				$to ="$email";
$subject = "Alma Fiesta Welcomes you to Kryptex";
$txt = "Congrats! You have successfully registered for Kryptex:) . If you have any issues regarding Kryptex- mail directly to Developers ( Details are in Website )  ";
$headers = "From: Kryptex@AlmaFiesta.com" . "\r\n" ;

mail($to,$subject,$txt,$headers);
					 
			   echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";

				}
				else{
					$message = "server issues, try again";
					echo "<script type='text/javascript'>alert('$message');window.location.href='register.php';</script>";
				}
			}
			else{
				$message ="Error: " . $sql1 . "<br>" . mysqli_error($conn);
				echo "<script type='text/javascript'>alert('$message');window.location.href='register.php';</script>";
			}
		}
	}

	else{
		$message = "Enter confirmed password properly";
		echo "<script type='text/javascript'>alert('$message');window.location.href='register.php';</script>";
	}

	mysqli_close($conn);
?>