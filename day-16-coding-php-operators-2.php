<!DOCTYPE html>
<html>
<head>
	<title>Day 16 - Coding with PHP Operators</title>
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

	<?php
	# Continuing on from day 15.
	# 
	?>

	<h2>Assignment Operators</h2>

	<table>
		<tr>
			<th>Operator</th>
			<th>Example</th>
			<th>Equivalent To</th>
		</tr>
		<tr>
			<td>=</td>
			<td>$j = 15</td>
			<td>$j = 15</td>
		</tr>
		<tr>
			<td>+=</td>
			<td>$j += 5</td>
			<td>$j = $j + 5</td>
		</tr>
		<tr>
			<td>-=</td>
			<td>$j -= 3</td>
			<td>$j = $j - 3</td>
		</tr>
		<tr>
			<td>*=</td>
			<td>$j *= 8</td>
			<td>$j = $j * 8</td>
		</tr>
		<tr>
			<td>/=</td>
			<td>$j /= 16</td>
			<td>$j = $j / 16</td>
		</tr>
		<tr>
			<td>.=</td>
			<td>$j .= $k</td>
			<td>$j = $j . $k</td>
		</tr>
		<tr>
			<td>%=</td>
			<td>$j %= 4</td>
			<td>$j = $j % 4</td>
		</tr>
	</table>

	<h2>Comparison Operators</h2>

		<table>
			<tr>
				<th>Operator</th>
				<th>Description</th>
				<th>Example</th>
			</tr>
			<tr>
				<td>==</td>
				<td>Is equal to</td>
				<td>$j == 4</td>
			</tr>
			<tr>
				<td>! = </td>
				<td>Is not equal to</td>
				<td>$j ! = 21</td>
			</tr>
			<tr>
				<td>></td>
				<td>Is greater than</td>
				<td>$j > 3</td>
			</tr>
			<tr>
				<td><</td>
				<td>Is less than</td>
				<td>$j < 100</td>
			</tr>
			<tr>
				<td>> =</td>
				<td>Is greater than or equal to</td>
				<td>$j > = 15</td>
			</tr>
			<tr>
				<td>< =</td>
				<td>Is less than or equal to</td>
				<td>$j < = 8</td>
			</tr>
			<tr>
				<td><></td>
				<td>Is not equal to</td>
				<td>$j <> 23</td>
			</tr>
			<tr>
				<td>= = =</td>
				<td>Is identical to to</td>
				<td>$j = = = 987</td>
			</tr>
			<tr>
				<td>! = = =</td>
				<td>Is not identical to</td>
				<td>$j = = = 1.203</td>
			</tr>
		</table>

		<h4><strong>Note</strong></h4>
			<p>Comparison operators are generally used inside a construct such as an <strong><i>if statement</i></strong> in which you need to compare items.

		<br><br>

		<h2>Logical Operators</h2>
			<p>Logical operators can seem quite daunting, but they are used as you would use logic in Englis.</p>
			<p>For an example;</p>
			<p>If I say to myself, if the time is later than 12pm and earlier than 2pm then have lunch.</p>
			<p>To write this in PHP, the code will look something like this:</p>
			<br>
			
			<p>if ($hour > 12 && < 14) havelunch();</p> 

			<?php
				echo "<p>if ($hour > 12 && < 14) havelunch();</p>"; // echoed out the same code as teh HTML for practice.

				echo "<p>Above has altered a set of instructons of going to lunch into a function, that I will create later called havelunch.</p>"
			?>

			<br><br><br>
			<p>As seen above, <strong>logical operators</strong> are generally used to combine the results of two comparison operators that have been show further up the page.</p>
			<br>	
			<p>A logical operator can also be input to another logical operator: "if the time is later than 12pm adn earlier than 2pm., or if the smell of a roast is permitting the hallway and there are plates on the table." As a rule, if something has a TRUE or FALSE value, it can be input to a logical operator. A logical operator takes two true or false inputs and produces a true or false result.</p>
			<br>


			<table>
				<tr>
					<th>Operator</th>
					<th>Description</th>
					<th>Example</th>
				</tr>
				<tr>
					<td>&&</td>
					<td>And</td>
					<td>$j == 3 && $k == 2</td>
				</tr><tr>
					<td>and</td>
					<td>Low-precedence and</td>
					<td>$j ==3 and $k ==2</td>
				</tr>
				<tr>
					<td>||</td>
					<td>Or</td>
					<td>$j < 5 || $j > 10</td>
				</tr>
				<tr>
					<td>or</td>
					<td>Low-precedence or</td>
					<td>$j < 5 or $j > 10</td>
				</tr>
				<tr>
					<td>!</td>
					<td>Not</td>
					<td>! ($j == $k)</td>
				</tr>
				<tr>
					<td>xor</td>
					<td>Exclusive or</td>
					<td>$j xor $k</td>
				</tr>
			</table>


			<p><strong>Note</strong> that && is usually interchangable with and; the same is true for || and <strong><i>or</i></strong></p>
			<p>However, <strong>and</strong> and <strong>or</strong> have a lower precedence I should avoid using them except when they are the only option, as in the following example statement:</p>

			<br>

			<p>$html = file_get_contents($site) or die("cannot download from $site");</p>

			<p><i>The statement above must use the <strong>or</strong> (|| cannot be used to force a second statement to execute if the first fails).</i></p>

			<?php
				echo "<p>The most unsual operator from example above is xor. It stands for <i>exclusive or</i> and returns a TRUE value if either value is true, but a FALSE value if both inputs are TRUE or both inputs are FALSE.</p>";

				echo "<p>To understand this, imagine I want to concoct my own cleaner for household items. Ammonia makes a good cleaner and so does bleach so you want your cleaner to contain one of these ingredients. But the cleaner must not have both because the combination is hazardous. To write this in PHP it may look something like:</p>";
			?>

			<p>$ingredient = $ammonia xor $bleach;</p>
			<br>
			<p>In this example, if either $ammonia or $bleach is TRUE, $ingredient will also be set to TRUE. But if both are TRUE or both are FALSE, $ingredient will be set to FALSE.</p>

</body>
</html>