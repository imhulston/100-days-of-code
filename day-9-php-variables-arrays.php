<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Day 9 of 100 days coding - PHP arrays</title>
</head>
<body>
	<h3>Associative arrays</h3>
	<p></p>


			<h3><strong>Two and more Dimentional Arrays</strong></h3>

		<p>An example of a two dimensional array</p>

	<?php
		$myArray = array(
					array("milk", "flour", "eggs"),
					array("ham", "cheese", "pickle"),
					array("cakes", "biscuits", "crackers"),
				)
	?>

	<p>Associative arrays can also go into multi-dimensional arrays!</p>

	<?php
		$myAssocArray = array(
						array(
						 "Adam"=>"10",
						 "Roxanne"=>"7",
						 "Francesca"=>"3"
						),
						array(
						 "Saoirse"=>"5",
						 "Emma"=>"2"
						),)
	?>

</body>
</html>