<!DOCTYPE html>
<html>
<head>
	<title>DAY 17 - PHP ARYTHMETIC OPERATORS EXERCISE</title>
</head>
<body>

	<h1>Arithmetic Operators Exercise</h1>

	<p>As PHP includes all the standard arithmetic operators. Fot this exercise, I will use them along with variables to print equations the web page.</p>
	<p>Create teh following vaiables:</p>
	<p>$x = 10;</p>
	<p>$y = 7;</p>

	<?php
		echo "Write code to print out the following: <br>";
		echo "10 + 7 = 17 <br>";
		echo "10 - 7 = 3 <br>";
		echo "10 * 7 = 70 <br>";
		echo "10 / 7 = 1.4285714285714 <br>";
		echo "10 % 7 = 3 <br>";
	?>

	<br><br><br>

	<p>PHP code has been written and echoed below:</p>

	<?php
		$x = 10; //Setting the variable value.
		$y = 7; //Setting the variable value.

		$result = $x + $y; // A third value has been created that will have the value from adding $x with $y.

		echo "$x + $y = $result <br>"; // Now I can echo the php code that will print the same equasion above.


		
		$result = $x - $y; // Resetting the value of the third variable so I can echo out the second line equasion above.

		echo "$x - $y = $result <br>"; // Echoing out the result of the php code created for it to look like the second line of equasion.



		$result = $x * $y; // Again, this is resetting the value of the third variable. (this is not resetting the value but I cannot think of the correct term at the moment). It's giving the $result variable the correct value before I put it into a string and echo to the web page. Otherwise the value of $result would be different and it would not echo the same value. 

		echo "$x * $y = $result <br>"; // Echoing out the third string line form exercise task.



		$result = $x / $y;

		echo "$x / $y = $result <br>";


		$result = $x % $y;

		echo "$x % $y = $result <br>";
	?>

	<p>I will now try and simplfy the code but achieve the same echo output!!</p>

	<?php
		$x = 10; // Setting the value of the variable.
		$y = 7; // Setting the value of the variable.

		echo $x + $y;
		echo "<br>";
		echo $x - $y;
		echo "<br>";
		echo $x * $y;
		echo "<br>";
		echo $x / $y;
		echo "<br>";
		echo $x % $y;
		echo "<br>";
	?>

	<?php
		$x = 10;
		$y = 7;

		echo "$x + $y = "; echo $x + $y; // Using multiple statements on one line without a line break to achieve the same output at the php code above. 
	?>

</body>
</html>