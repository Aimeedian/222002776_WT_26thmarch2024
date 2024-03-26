<!DOCTYPE html>
<html>
<head>
	<title>minus of numbers</title>
</head>
<body>
<h3>The substraction of two Numbers</h3>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sub=$num1-$num2;
	$s=" ";
	$full=$fname.$s.$lname;
	if ($num1<$num2) {
	$sub=$num2-$num1;
	echo "<p>the difference is:$sub</p><br>";	
	}
	else if ($num1==$num2) {
		$sub=0;
	echo "<p>the difference is:$sub</p><br>";	
	}
	else{
	echo"<h3>hello $full</h3>";
	echo "<p>The difference is $sub</p>";
}
}
echo "thank you for using this app";
?>
</body>
</html>