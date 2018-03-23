<?php


	$n=$_POST['fn'];
    $l=$_POST['ln'];
    $e=$_POST['mail'];
	$ps=$_POST['ps'];



$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'website');

$q="select * from login where email='$e'";
$result=mysqli_query($con,$q);
$no=mysqli_num_rows($result);



if($no>0)
{
  echo "email is already registered!";
}

else{
	$q="insert into login(fname,lname,email,password) values('$n','$l','$e','$ps')";
	mysqli_query($con,$q);
	echo "registered successfull...welcome!, $n $l";
}



mysqli_close($con);


?>

