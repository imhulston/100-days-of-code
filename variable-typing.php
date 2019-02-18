<!DOCTYPE html>
<html>
<head>
	<title>Vriable Typing</title>
</head>
<body>
<?php
echo "<h1>Variable Typing</h1>";
echo "<br><br>";
echo "<p>As PHP is a loosely types language, this means that variables do not have to be declared before they are used.<br> 
			 PHP always converts variables to the types required by their context when they are accessed.</p>";

echo 
<<<_END
	<h2>For Example:</h2><br>
	You can create a multiple-digit number and extract the <i>nth</i> digit frmo it simply by assuming it be a string.<br>
	EXAMPLE - Multiply 12345 * 67890 which returns 838102050, which is then placed in varaible $number.<br><br>
_END;

$number = 12345 * 67890;
echo substr($number, 3, 1); // Automatic conversion from a number to a string.
	?>
</body>
</html>