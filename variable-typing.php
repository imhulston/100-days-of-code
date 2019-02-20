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
// The output on the webpage will display one.
// 
// 
echo "<br><br>";
echo '$number has been declared as a number variable with the number value coming from multiplying 12345 by 67890.<br>';
echo 'Then using the substr [substring] function to extract character from the $number value and display it as a string even though it\'s a number';
	?>
<br><br><br>

<?php
echo '<h2>Practice of the substr() function</h2><br>';
echo '<br>';
$text = 'I want to break free';
echo substr($text, 0, 6); //extracting and displaying the 6 characters from the beginning of the string.
echo '<br>';
echo substr($text, 10, 10); // Starting from the 10th chararcter and then extracting the next 10 characters.
echo '<br>';
echo substr($text, -5, 5); // Starting from the end of the string and going 5 characters back and then extracting the next 5 characters which will display 'free'.
?>


<?php
	echo '<h2>Looking back at the oroginal variable and php code (substr)</h2>';
	echo "<br>";
	echo '<H3>Automatic Conversion from a String to a Number!!';
	echo '<p>$number = 12345 * 67890;</p>'; // Total 838102050
	echo '<p>echo substr($number, 3, 1)</p></h3>'; // Displaying the character, 1.
	echo '<p>The substr function asks for one character to be returned from the variable $number</p>';
	echo '<p>PHP is now turning the number variable $number into a nine-character string so that the substr function can acces the variable value and return the specified character.</p>';
	echo '<p><br><br></p>';
	echo '<p><h4>The same goes for turning a string into a number, and so on.</h4></p>';
	echo '<p>$pi = "3.1415927";</p>';
	echo '<p>$radius = 5;</p>';
	echo '<p>echo $pi * ($radius * $radius);</p>';
	echo '<p>The variable $pi is set to a string which is then automatically converted into a floating point number on the third line by the equasion for calculating a ciercles area which outputs the value of 78.5398175.</p>';
	echo '<br><br><br>';
	
	$pi = "3.1415927";
	$radius = 5;
	echo $pi * ($radius * $radius);
?>
</body>
</html>