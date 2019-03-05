<!DOCTYPE html>
<html>
<head>
	<title>PHP Constants</title>
</head>
<body>
<?php
echo '<h1>Learning PHP Constants</h1>';

echo '<h4>PHP Constants are similar to VARIABLES - holding information that can be accessed later in the script.</h4>';
echo '<h4>Except, that they are what they sound like, <strong>CONSTANT!</strong></h4>';

echo 
<<<_END
<h4>In other words, once I have defined a CONSTANT, it's value is set for the remainder of the program and it <strong>can not</strong> be altered.</h4>

<h4>One example of a use for a CONSTANT is to hold the location of my server (the folder with all the files of my website).
I would define such a CONSTANT like this:</h4>

<h4>define("ROOT_LOCATION", "/usr/local/www/")</h4>
_END;

echo "<br><br>";

echo 
<<<_END
To read the CONSTANTS of a variable you just refer to it like a regular variable (but it isn't preceeded by a dollar $).
<br><br>
_END;

echo '$directory = ROOT_LOCATION';
echo '<br><br><br>';

echo '<p>Now, whenever I need to run my PHP code on a different serverwith a different folder configuration, I only have a single line of code to change.</p>';

echo '<p><i>The main two things I have to remember about CONSTANTS are that they must not be prefaced with a dollar sign $ (unlike regular variables), and that I can define them only using the <strong>define function</strong>.</i></p>';

echo '<p>It is genrally good practice to use only UPPERCASE letterts for CONSTANTS variable names, especially if other developers will also be reading my code.</p>';

echo '<h3>Predefined Constants</h3>';

echo '<p>PHP comes ready-made with dozens of predefined CONSTANTS that I may not use as a beginner. However, </p>';
?>





</body>
</html>