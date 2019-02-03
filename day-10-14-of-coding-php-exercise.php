<!DOCTYPE html>
<html>
<head>
	<title>Day 10 - 13 of coding - PHP exercises.</title>
</head>
<body>
	<h1>PHP Exercises</h1> <!-- Main heading -->
	<strong><i>I wanted to do the following exercises with what I have gone through from the last ten days of coding.</i></strong>

	<h2>The beginning</h2>

	<h4>Using Variables:</h4>
		<p>* Display the word 'Hello Wolrd in the browser.</p>

	<?php
		echo "Hello World"; 
		# Echoing = Displaying the string value "Hello World" to the web page.
	?>

		<p>* Create two variables, one for the word 'Twinkle' and one for the word 'Star'. Echo the statement to the browser, this time substituting the variables for the relevant words. Change the value of each variable to whatever I you like and <strong>echo</strong> the statement a third time. Rememeber to include code to show different statements on different lines.</p> 

	<?php
		echo "Twinkle, Twinkle little Star. <br>";
		# Again, echoing out a string value sentence of "Twinkle, Twinkle little Star" and using the html br tag so the next line of code will be on the next line on the web page.
		
		
		$twinkle = "Twinkle"; // string value.
		$star = "Star"; // string value.

		echo "$twinkle, " . "$twinkle " . "little " . "$star. <br>";
		# Using the variable values and echoing the variables with additional string values to achiev the same echo output above.
	
		
		$twinkle = "Winter"; //string value.
		$star = "Cold"; // string value.

		echo "$twinkle " . "days and nights are " . "$star. <br>";
		# Using the same $variables but changing the string values to echo out a differnt sentence. 
		
		echo $twinkle . " days and nights are " . $star . ". <br>"; 
		# Here I have tried a simplier way of outputting the variable output still with the concatenation of string in the echo statement.
	?>

	<p><i>Above, I have used the PHP echo statement to echo/display a string sentance ("Twinkle, Twinkle little Star") then craeted two variables ($twinkle & $star) which have been given string values. I have echoed the two variables in one string concatenation.
	Then changed the values of of the variables to echo out and create a different sentence.
	I have also simplyfied the echo statemnt without putting the variables into a string sentence and concatenated the string sentence with the variables.</i></p>

	<hr>
	<hr>

	<h2>Arrays</h2>

	<h4>Simple Array</h4>

	<p>With arrays allowing me to assign multiple values to one variable. Write an array variable of weather conditions with the following values, rain, sunshine, clouds, hail, sleet, snow and wind. Using the the echo statement, write the following statement the web page;</p>
	<p><i>We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least there was no hail or sleet.</i></p>

	<?php

		$weatherCondition = array("rain", "sunshine", "hail", "sleet", "snow", "clouds", "wind"); 
		# 0=rain, 1=sunshiine, 2=hail, 3=sleet, 4=snow, 5=clouds 6=wind.

		echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weatherCondition[4] . " and " . $weatherCondition[6] . ". Then came " . $weatherCondition[1] . " with a few " . $weatherCondition[5] . " and some " . $weatherCondition[0] . ". At least there was no " . $weatherCondition[2] . " or " . $weatherCondition[3] . ". <br><br>";
		# Using an array in sentence.

		

		echo "<p>We've seen all kinds of weather this month. ";
		echo "At the beginning of the month, we had $weatherCondition[4] and $weatherCondition[6]. Then came $weatherCondition[1] with a few $weatherCondition[5] and some $weatherCondition[0]. ";
		echo "At least there was no $weatherCondition[2] or $weatherCondition[3].</p>";
		# A simplier way of adding indexed array into a sentence with a echo statement. 
		# Using the HTML <p> tags at the beginning and end of the string gives margin height to the echoed statement on the web page.
		
	?>


	<h4>A simple array loop</h4>
	<p>Using a list of the cities in the world.</p>
	<p>Create an array with following values (cities) <i>Tokyo, Mexico City, New York, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo and London</i>.</p>
	<p>Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values to the browser in a unordere list, again using a loop.</p>
	<p>Add the folloewing cities to the array: <i>Los Angeles, Calcutta, Osaka and Beijing</i>. Sort the array and print it once more to the web page in an unordered list.</p>

	<?php
		$cities = array("Tokyo", "Mexico City", "New York", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

		// Print values of the array to the web page separated by a comma.
		foreach ($cities as $c) {
			echo "$c, ";
		}

		// Sort array.
		sort($cities);


		// Print array as bulleted list.
		echo "\n<ul>\n" ;
		foreach($cities as $c) {
			echo "<li>$c</li>\n";
		}

		echo "</ul>";

		// Add four cities to the array.
		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

		// Sort array again with new cities added.
		sort($cities);

		// Print the updated array again as a bulleted list.
		echo "\n<ul>\n";
		foreach($cities as $c) {
			echo "<li>$c</li>\n";
		}

		echo "</ul>";
	?>

</body>
</html>