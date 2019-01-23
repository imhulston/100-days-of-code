<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Day two of the 100 days coding with PHP</h1>
		<h2>Variables</h2>
		
		<p>Varaiables are case sensitive!!</p>


	<?php
		$dog = "red"; // Creating a variable named dog and the value of dog is red, which is text string inside double quotes.

	echo "My dog is " . $dog . "<br>"; 
	# Using echo to display a simple sentence which includes and displays the value of the variable I created named $dog.
	
	echo "My cat is " . $Dog . "<br>";
	# Typing out the same echo but talking about my cat. This will not display on the web page because I have used teh name of the variable in correctly. 

	?>

	<?php
		# There are three diferent types of variable assignment:
		
		$mycounter = 1; // A variable containing a number
		$mystring = "Hello"; // A variable containing a string (text)
		$myarray = array("one", "two", "three"); // A varaible containing an array.
	?>

	</body>
</html>