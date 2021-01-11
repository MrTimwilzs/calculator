<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="cal.php" method="post" id="form">
<?php include "cal header.php"; ?>
	First Number<br>
	<input type="number" name="num1" step="0.001" id="num1"><br>
	Operator<br>
	<input type="text" name="op" id="op" autocomplete="off"><br>
	Second Number<br>
	<input type="number" name="num2" step="0.001" id="num2"><br>
	<input type="Submit" name="Submit" value="Submit" id="Submit">
	<p id="footer">&copy Timwilzs</p>
</form>


<?php
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$op = $_POST["op"];

	if ($op == "+") {
		echo $num1 + $num2;
	}elseif ($op =="-") {
		echo $num1 - $num2;
	}elseif ($op =="/") {
		echo $num1 / $num2;
	}elseif ($op =="*") {
		echo $num1 * $num2;
	} else {
		echo "Invalid Operator";
	}


?>
</body>
</html>