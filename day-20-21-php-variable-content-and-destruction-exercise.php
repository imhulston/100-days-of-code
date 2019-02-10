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

</body>
</html>