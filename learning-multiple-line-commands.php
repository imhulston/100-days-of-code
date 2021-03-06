	<!DOCTYPE html>
<html>
<head>
	<title>Multiple Line Comands - Beginning< (day 23-24-25)</title>
</head>
<body>
	<h1>Multiple Line Commands</h1>

		<p>When we need to output quite alot of text from PHP, using several echo and print statments would be time consuming and messy.</p>
		<p><strong>PHP</strong> offers two conveniences to overcome the numerous echo and print statements.</p>

		<p>The first is to put multiple lines between quotes, for example:</p>

		<?php
			$author = "Ian Hulston";

			echo "<p><i>Developer, developer, developer, developer, developer,  developer, developer, developer!</i></p>

			- $author"; // Leaving the closing double quote untill the end.

						// Using HTML <p> tags in the echo still puts adds the line of PHP code on the nect Line. So the echoed variables - $author (Ian Hulston) is being dsplayed on the next line on the web page. Cool eh!!
		?>

		<h4>Varaibles can also be assigned - for example:</h4>

		<?php
			$author = "Ian hulston";

			$text = "Measure programming progress by lines of code is like measuring aircraft buildings progree by the weight. 

			- $author"; // Assigning text to the varaible named text. Starting the string value with a double quote as normal.
		?>

	<hr>

		<p>PHP also offers a <strong>multiline sequence</strong> using the</p>

		<p><<< operator - commonly referred to as a <h4><i>here document</i></h4> or <h4><i>heredoc</i></h4> as a way of specifying a <strong>string literal</strong>, preserving the line breaks and other whitespace</p>
		<p>(including indetation) in a text.</p>

		<p>Example of it's use;</p>

		<?php
			$author = "Ian Hulston";

echo <<<_END
			Debugging is twice as hard as writing it in the first place.
			Therefore, if you write code as cleverly as possible, you are by definition not smart enough to debug it.

			- $author.
_END;
		?>

		<hr>
		<p>The paragraph directly above is written with the following PHP code:</p>
		<h4>echo <<<_END</h4>
			<h4>Debugging is twice as hard as writing it in the first place.
			Therefore, if you write code as cleverly as possible, you are by definition not smart enough to debug it.</h4>

			<h4>- $author.</h4>
<h4>_END;</h4>

		<p>Because the <<<_END and _END cannot have any white space, tab space or comments on the same line, I prefer to place them at the beginning of the line.</p><p>The <<<_END aftet the stating the echo command irritates me slightly in my code. So I tried to see if the <strong>echo statemetn</strong> will still run even when placeing the <<<_END command at the beginning of the next line after the <strong>echo</strong>. <br>

		<p>As far as I am aware, the code still runs, as I have tried it. The next paragraph should be the same paragraph again but placing the <<<_END after the <strong>echo</strong>:
		<br>
		<h2></h2> <!-- Just using the tag to quickly create spacing before displaying the paragraph below. -->

		<?php
		echo 
<<<_END
			Debugging is twice as hard as writing it in the first place.
			Therefore, if you write code as cleverly as possible, you are by definition not smart enough to debug it.
			<br>
			- $author.
_END;
		?>


		<?php
			echo "<p>And you can still use the HTML elements such as, the break tag place the echoed string on seperate lines.</p>"
		?>

		<br><br><br><br>
		<p><strong>For example, the php code displayed blow is what is used to display the paragraph above:</strong></p>
		<p><?php</p>
		<p>echo</p> 
<p><<<_END</p>
			<p>Debugging is twice as hard as writing it in the first place.
			Therefore, if you write code as cleverly as possible, you are by definition not smart enough to debug it.</p>
			<p>< br ></p>
			<p>- $author.</p>
<p>_END;</p>
		<p>?></p>

		<br><br><br><br>

		<h4>The code php code above tells PHP to output everything between the two _END tags as if it were a double stringed quote.</h4>
		<h4>Quotes in <strong>HEREDOC</strong> do nit need to be escaped.</h4>
		<h4>This means it is possible for a developer to write entire sections of HTML directly into PHP code and then just replace specific dynamic parts with PHP variables.</h4>

		<h4>Once I hace closed the multiple line block, I am free to use the same name tag again.</h4>

		<h4><strong><i>**NOTE**</i></strong> I don't need to use (\n) backslash n to add a new line in the outputted text. Just using the return key to place the text on a new line.</h4>
		<h4>Also, free to use single and double quotes withing the <strong>Heredoc</strong> without escaping them with a backslash.</h4>
</body>
</html>