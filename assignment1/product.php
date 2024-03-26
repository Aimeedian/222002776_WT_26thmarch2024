<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
<h1>The product of two Numbers</h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$pro=$num1*$num2;
	$s=" ";
	$full=$fname.$s.$lname;
	echo"hello $full ";
	echo "<p>The product is $pro</p>";
}
echo "welcome";
?>
</body>
</html>