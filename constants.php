<!DOCTYPE html>
<html>
<head>
	<title>PHP Constants</title>
</head>
<body>
<?php
echo '<h1>Learning PHP Constants</h1>';

echo '<h4>PHP Constants are similar to VARIABLES - holding information that can be accessed later in the script.</h4>';
echo '<h4>Except, that they are what they sound like, CONSTANT!</h4>';

echo 
<<<_END
<h4>In other words, once you have defined a CONSTANT, it's value is set for teh remainder of the program and it can not be altered.</h4>

<h4>One example of a use for a CONSTANT is to hold the location of your server (the folder with all the files of my website).
You would defince such a CONSTANT like this:</h4>

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

echo 'Now, ';
?>





</body>
</html>