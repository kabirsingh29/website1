<?php

if(isset($_GET['submit'] ))
{
	$uname=$_GET['uname'];
	$ps=$_GET['ps'];
	

}	
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'website');

$q="select * from login where fname='$uname' and password='$ps'";
$result=mysqli_query($con,$q);
$no=mysqli_num_rows($result);

echo "$no";
if($no>0){header("location:homedesk.html");}

else{header("location:fail.php");}

?>


