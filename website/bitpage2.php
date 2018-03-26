<?php
if(isset($_GET['submit'] ))
{
	$n=$_GET['username'];
	$b=$_GET['bit'];
	

}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'website');

$q="insert into bit(bit,name) values('$b','$n')";
	mysqli_query($con,$q);
	
	header("location:bitpage.php");
	echo "$n $b";
?>