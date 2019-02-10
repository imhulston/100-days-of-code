<!DOCTYPE html>
<html>
<head>
	<title>Day 20 - PHP Exercise - Variable Content and Destruction</title>
</head>
<body>
	<h1>Variable Content and Destruction</h1>

	<p>When writing scripts, you will often need to see what is inside your variables. For this PHP exercise, thinks of ways you can do that, then a write a script that will out put the following (only using the echo statement to provide line breaks).

	<p>string(5) "Harry"</p>
	<p>Harry</p> 
	<p>int(28)</p> 
	<p>NULL</p> 

	<?php
		$name = "Harry";
		$age = 28;
		$x = NULL;

		echo "<br>";
		var_dump($name);
		echo "<br>";
		print $name;
		echo "<br>";
		var_dump($age);
		echo "<br>";
		var_dump($x);
	?>


	<h2>Next Exercise - Concatenation of String</h2>

		<p>For this PHP exercise, write a script using the following variable:
		$around="around";</p>

		<p>Single quotes and double quotes don't work the same way in PHP. Using single quotes (' ') and the concatenation operator, echo the following to the browser, using the variable you created:</p>

		<p>What goes around comes around.</p>

	<?php
		$around = "around";

		echo 'What goes ' . $around . ' comes ' . $around . '.';
		echo "<br>";
		echo "<br>";
		echo "What goes $around comes $around."; // using 'variable substitution' with this echo and double quotes. This method can not be used with single quotes.
	?>

</body>
</html>