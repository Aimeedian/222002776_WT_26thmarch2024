<!DOCTYPE html>
<html>
<head>
	<title>division of numbers</title>
</head>
<body>
<h3>The division of two Numbers</h3>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$div=$num1/$num2;
	$s=" ";
	$full=$fname.$s.$lname;
	if ($num2==0) {
		echo "impossible";
	}
	else{
	echo"<h3>hello $lname $s $fname</h3>";
	echo "<p>The division is $div</p>";
}
}
echo "thank you for using this app";
?>
</body>
</html>