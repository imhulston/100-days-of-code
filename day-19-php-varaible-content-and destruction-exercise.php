<!DOCTYPE html>
<html>
	<head>
		<title>DAY 19 - PHP ARYTHMETIC ASSIGNMENT OPERATORS EXERCISE</title>
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

			<p><strong>I will create the above echo statement below but creating, assigning, reassigning and printing out the varaible value to look the same as above.</strong></p>

<!-- Tonight, I am hoping to correct the echo statement below so it will read the same as the echo statement above but echoing variable values instead of just string. -->

			<?php
				$value = 8;

				echo "Value is now $value. <br>
				Add 2. Value is now " . $value += 2; // This echo statement is working. Set the value to 8 and adding 2 to the value and outputtting the value again which is 10.

				echo "<br>"; // Line break.

				echo "Subract 4. Value is now " . $value -= 4; // This echo statement is now working. After the value had been set and outputted as 10, this line has subtracted the variable value by 4 and outputted the string and variable value of 6.
				echo "<br>"; // Line break.

				echo  "Multiply by 5. Value is now " . $value *= 5; // This echo statement is now working. After the value had been set to 6 with echo stsatemet on line 36, this echo statement is now multipling the variable's (updated value) by 5 and is now outputting the value of 30. 

				echo "<br>"; // Line break.

				echo  "Divide by 3. Value is now " . $value /= 3; // This echo statement is now working. After the value had been set to 30 with the echo statement on line 38, this echo statement is now dividing the variable's updated value of 30 by 3 and is now outputting the newly updated value of 10.

				echo "<br>"; // Line break.

				echo  "Increment value by one. Value is now " . ++$value;

				echo "<br>"; // Line break.

				echo  "Decrement by one. Value is now " . --$value;
			?>

			<p><strong>The PHP code I have written does echo and read exactly as the first echo statement.</strong></p>
			<p><strong><i>A simplier or easier way of creating the same output as above.</i></strong></p>

			<?php
			# Trying the to simolify the code or a way of simplify the reading of the code.
			/* "Value is now 8.
				Add 2. Value is now 10.
				Subract 4. Value is now 6.
				Multiply by 5. Value is now 30.
				Divide by 3. Value is now 10.
				Increment value by one. Value is now 11.
				Decrement by one. Value is now 10.
			*/
		
			$value = 8; //Assigned the value 8 to the varaible.
			echo "The value is now $value. <br>"; //Include the variable to print the value in string statement.
			$value += 2; //Reassigned the value.
			echo "Add 2. The value is now $value. <br>";
			$value -= 4; //Reassigned the value.
			echo "Subtract 4. The value is now $value. <br>";
			$value *= 5; //Reassigned the value.
			echo "Multiply by 5. The value is now $value. <br>";
			$value /= 3; //Reassigned the value.
			echo "Divide by 3. The value is now $value. <br>";
			++$value; //Reassigned the value. Incrementing by one.
			echo "Increment value by one. The value is now $value. <br>";
			--$value; //Reassigned the value. Decrementing by one.
			echo "Decrement by one. The value is now $value";
			?>
	</body>
</html>