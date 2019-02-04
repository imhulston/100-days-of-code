<!DOCTYPE html>
<html>
<head>
	<title>Day 15 - Coding with PHP Operators</title>
</head>
<body>
	<h1>PHP Operators</h1>
		<p>PHP operators let us specify mathematical operations to perform.</p>
		<p>Such as, <strogn>addition</strogn>, <strong>subtraction</strong>, <strong>multiplication</strong> and <strong>division</strong>.</p>
		<p>Other types of operators exist too, such as, <strong>strings</strong>, <strong>comparisons</strong> and <strong>logical</strong> operators.</p>

	<?php
		echo "<p>The following statement outputs the value 8</p>"; // Using <p> tags in the echo statement will place the next echo statement on new line like it would in a normal HTML output. 

		echo "<p>echo 6+2;</p>";

		echo 6+2;
	?>

	<h2>Learning - Arithmetic Operators</h2>
		<p>Aswell as the main 4 operations (<strong>add, subtract, multiply and division</strong>), we can use php operators to find the <strong>modulus</strong> (<i>the remainder after a division</i>).</p>
		<p>Also we can <strong>increment</strong> and <strong>decrement</strong> a value</p>
		<br><br>

		<p>If $count has the value of 5 the statement;</p>

	<p>$count + 1</p>

	<?php
		echo "<p>Now gives the variable the value of 6</p>";

		echo "<p>Another way of achieving the same result would be writing;</p>";
	?>

	<p>$count = $count + 1</p>

	<?php
		echo "<p>$count = $count + 1</p>"; 

		echo $count = 5;

		echo "<br>";

		echo $count + 1;
	?>
</body>
</html>