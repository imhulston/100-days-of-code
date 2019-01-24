<!DOCTYPE html>
<html>
<head>
	<title>Day 3 of 100 days of coding - PHP variables.</title>
</head>

<body>
	<h1>PHP vriables</h1>
	<h2>Strings, numbers and arrays</h2>

	<?php
		$username = "Ian Hulston"; // Variable containing a string value.
	
		echo $username . " - This is a string value."; // Displaying the value of the $username variable on the web page.
		echo "<br>"; // Line break on the page.

		$current_user = $username; // Copying the string value from the $username variable into another variable named $current_user.

		echo $current_user . " - This is the same string value."; // Displaying the value of the variable nameed $current_user on the the web page, which should be the same as $username "Ian Hulston."
	?>

	<h3>Numeric variables</h3>

	<?php
		$count = 20; // No quotation marks when giving a number to a variable.

		echo $count;
		echo "<br>";

		$hours = 24; // Using floating point numbers (containing a decimal point) is the same syntax. 

		echo $hours . " hours in a day.";
		echo "<br>";

		$secondsToSneeze = $count;

		echo "It takes roughly " . $secondsToSneeze . " to sneeze.";
	?>

	<h3>Arrays</h3>
	
	<?php
	# An example for storing an array in a variable is to think of a 5-man football team. 
	# Placing a single value inside apostrophes separated by commas. 
	
		$team = array('Ian', 'Mark', 'Adam', 'Martin', 'Pete');

	# To find out the name of player 3 is...
	
		echo $team[2] . " is team member number 3 in my array of a 5 man football team."; // 0 being the number of the first value of the array. This should echo/display the value Adam on the web page.
		echo "<br>";
	?>

	<h3>Two and more Dimentional Arrays</h3>

	<?php

	?>

</body>
</html>