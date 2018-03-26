<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'website');

$q="select * from bit";
$record=mysqli_query($con,$q);


?>
<!DOCTYPE html>
<html>
<head>
	<title>official bit page</title>
	<meta http-equiv="refresh" content="15">
</head>
<body>
<h1>WELCOME TO BIT PAGE!!</h1>
<form method="GET" action="bitpage2.php">
    <input type="text" name="username" placeholder="username"><br><br>
	<input type="number" name="bit" placeholder="bit">
	<input type="submit" name="submit" value="BIT!">
    </form><br><br>

	<table width="300" border="1" cellspacing="1" cellpadding="1" >
		<tr>
			<th>name</th>
			<th>bit</th>
		</tr>
		<?php

         while($employee=mysqli_fetch_assoc($record))
         {
         	echo "<tr>";
         	echo "<td>".$employee['name']."</td>";
         	echo  "<td>".$employee['bit']."</td>";
         	echo "</tr>";
         }

		?>
	</table>

</body>
</html>
