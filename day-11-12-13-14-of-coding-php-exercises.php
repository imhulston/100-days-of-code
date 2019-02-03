<!DOCTYPE html>
<html>
<head>
	<title>Day 11 / 12 / 13 / 14 of coding - PHP exercises.</title>
</head>
<body>
	<h1>PHP Exercises</h1>
	<strong><i>I wanted to do the following exercises with what I have gone through from the last ten days of coding.</i></strong>

	<h4>Using Variables:</h4>
		<p>* Display the word 'Hello Wolrd in the browser.</p>

	<?php
		echo "Hello World"; 
		# Echoing = Displaying the string value "Hello World" to the web page.
	?>

		<p>* Create two variables, one for the word 'Twinkle' and one for the word 'Star'. Echo the statement to the browser, this time substituting the variables for the relevant words. Change the value of each variable to whatever I you like and <strong>echo</strong> the statement a third time. Rememeber to include code to show different statements on different lines.</p> 

	<?php
		echo "Twinkle, Twinkle little Star. <br>";
		# Again, echoing out a string value sentence of "Twinkle, Twinkle little Star" and using the html br tag so the next line of code will be on the next line on the web page.
		
		
		$twinkle = "Twinkle"; // string value.
		$star = "Star"; // string value.

		echo "$twinkle, " . "$twinkle " . "little " . "$star. <br>";
		# Using the variable values and echoing the variables with additional string values to achiev the same echo output above.
	
		
		$twinkle = "Winter"; //string value.
		$star = "Cold"; // string value.

		echo "$twinkle " . "days and nights are " . "$star. <br>";
		# Using the same $variables but changing the string values to echo out a differnt sentence. 
		
		echo $twinkle . " days and nights are " . $star . ". <br>"; 
		# Here I have tried a simplier way of outputting the variable output still with the concatenation of string in the echo statement.
	?>

	<p><i>Above, I have used the PHP echo statement to echo/display a string sentance ("Twinkle, Twinkle little Star") then craeted two variables ($twinkle & $star) which have been given string values. I have echoed the two variables in one string concatenation.
	Then changed the values of of the variables to echo out and create a different sentence.
	I have also simplyfied the echo statemnt without putting the variables into a string sentence and concatenated the string sentence with the variables.</i></p>
</body>
</html>