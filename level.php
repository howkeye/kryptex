
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
<?php
session_start();
?>


<?php


$user=$_SESSION['user'];
$sql = "SELECT level FROM leaderboard WHERE username='$user'";


?>



<html>
<head>
<title> Loading </title>
</head>
<body>
<?php
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>
<?php


if($_SESSION['user']){
	$level= $row['level']+1;
$_SESSION['level']=$level;

if($level==1)  echo "<script type='text/javascript'>window.location.href='q/q1.php';</script>";
if($level==2)  echo "<script type='text/javascript'>window.location.href='q/q2.php';</script>";
if($level==3)  echo "<script type='text/javascript'>window.location.href='q/q3.php';</script>";
if($level==4)  echo "<script type='text/javascript'>window.location.href='q/q4.php';</script>";
if($level==5)  echo "<script type='text/javascript'>window.location.href='q/q5.php';</script>";
if($level==6)  echo "<script type='text/javascript'>window.location.href='q/q6.php';</script>";
if($level==7)  echo "<script type='text/javascript'>window.location.href='q/q7.php';</script>";
if($level==8)  echo "<script type='text/javascript'>window.location.href='q/q8.php';</script>";
if($level==9)  echo "<script type='text/javascript'>window.location.href='q/q9.php';</script>";
if($level==10)  echo "<script type='text/javascript'>window.location.href='q/q10.php';</script>";
if($level==11)  echo "<script type='text/javascript'>window.location.href='q/q11.php';</script>";
if($level==12)  echo "<script type='text/javascript'>window.location.href='q/q12.php';</script>";
if($level==13)  echo "<script type='text/javascript'>window.location.href='q/q13.php';</script>";
if($level==14)  echo "<script type='text/javascript'>window.location.href='q/q14.php';</script>";
if($level==15)  echo "<script type='text/javascript'>window.location.href='q/q15.php';</script>";
if($level==16)  echo "<script type='text/javascript'>window.location.href='q/q16.php';</script>";
if($level==17)  echo "<script type='text/javascript'>window.location.href='q/q17.php';</script>";
if($level==18)  echo "<script type='text/javascript'>window.location.href='q/q18.php';</script>";
if($level==19)  echo "<script type='text/javascript'>window.location.href='q/q19.php';</script>";
if($level==20)  echo "<script type='text/javascript'>window.location.href='q/q20.php';</script>";
else echo "Rest for sometime. "."<br>"."Other Puzzles coming soon!";
}
else
	echo "<h3> Access Denied </h3>";

?>

</body>

</html>