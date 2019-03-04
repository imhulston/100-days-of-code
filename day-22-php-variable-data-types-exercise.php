<!DOCTYPE html>
<html>
	<head>
		<title>Day 22 - PHP Exercise - Variable Data Types</title>
	</head>
	<body>
		<h1>Variable Data Types</h1>
			<p>PHP allows several different types of variables. For this PHP exercise, you will create one variable and assign it different values, then test its type for each value.</p>

			<p>Write a script using one variable “$whatsit” to print the following to the browser. Your echo statements may include no words except “Value is”. In other words, use the function that will output the variable type to get the requested text. Use simple HTML to print each statement on its own line and add a relevant title to your page. Include line breaks in your code to produce clean, readable HTML.</p>

			<ul>
				<li>Value is string.</li>
				<li>Value is double.</li>
				<li>Value is boolean.</li>
				<li>Value is integer.</li>
				<li>Value is NULL.</li>
			</ul>

			<?php

			# Using the gettype function to output the value type that has been assigned to the $whatsit variable.

				echo "<h2>PHP code/answer below!</h2>";

				$whatsit = "Hello World";
				echo "The value is " . gettype($whatsit) . ".<br>\n"; 

				$whatsit = 0.123456;
				echo "The value is " . gettype($whatsit) . ".<br>\n"; 

				$whatsit = TRUE;
				echo "The value is " . gettype($whatsit) . ".<br>\n";

				$whatsit = 123456789;
				echo "The value is " . gettype($whatsit) . ".<br>\n";

				$whatsit = null;
				echo "The value is " . gettype($whatsit) . ".<br>\n";

				echo "<br>";

				echo '<p>To acheive the same output above, I have altered the value of $whatsit variable and used the <strong>gettype function</strong> with the echo statement to output the type of value given to the variable.</p>';

			?>
	</body>
</html>