<?php

if(isset($_POST['submit']))
{
	$admin=$_POST['name'];
	$pass=$_POST['pass'];
}
if($admin=='kabir' && $pass=='kabirsingh')
{
	header("location:upload2.html");
}
else
{
	echo"wrong name or password";
}

?>