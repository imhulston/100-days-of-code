<!DOCTYPE html>
<html>
	<head>
		<title>DAY 18 - PHP ARYTHMETIC ASSIGNMENT OPERATORS EXERCISE</title>
	</head>
	<body>
		<h1>Arithmetic Assignment Operators Exercise</h1>

			<p>Arithmetic-assignmant operators perform an arithmetic operation on the variable at the same time as assigning a new value.</p>
			<p>For this PHP exercise, write a script to reproduce the output below.</p>
			<p>Manipulate only one variable using simple arithmetic operations to produce the values given in the statements.</p>

			<?php
				echo "Value is now 8. <br>
				Add 2. Value is now 10. <br>
				Subract 4. Value is now 6. <br>
				Multiply by 5. Value is now 30. <br>
				Divide by 3. Value is now 10. <br>
				Increment value by one. Value is now 11. <br>
				Decrement by one. Value is now 10. <br>"
			?>

			<p>I write the PHP code below. Making it print the same as above;</p>

			<?php
				$value = 8;

				echo "Value is now $value. <br>
				Add 2. Value is now " . $value + 2; "<br>
				Subract 4. Value is now " . $value - 4; "<br>
				Multiply by 5. Value is now " . $value * 5; "<br>
				Divide by 3. Value is now " . $value / 3; "<br>
				Increment value by one. Value is now " . ++$value; "<br>
				Decrement by one. Value is now " . --$value; "<br>"
			?>

<!-- My PHP code in the latest echo statement is not working properly. The sentance with variables is not being printed on to the screen like the previous echo statement. 
I spent as much time possible before having to get in bed about 12 o clock last night.
Will have to sort it out tomorrow night. -->

	</body>
</html>