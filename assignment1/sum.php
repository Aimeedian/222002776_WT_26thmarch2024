<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
<h1>The Sum of two Numbers</h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum=$num1+$num2;
	$s=" ";
	$full=$lname.$s.$fname;
	echo"hello $full";
	echo "<p>The sum is $sum</p>";
}
echo "welcome";
?>
</body>
</html>