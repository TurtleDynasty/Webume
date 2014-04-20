<!DOCTYPE HTML>
<html>
<body>
<?php
echo"<div style='width: 100%; text-align: center; margin-top: calc(50% - 150px);'>";
	echo"<div style = 'line-height: 0; display: inline-block; '>";
	$select=rand(1,5);
	echo"<img src='Q1/Q1_".$select.".png' />";
	$select=rand(1,5);
	echo"<img src='Q2/Q2_".$select.".png' /><br>";
	$select=rand(1,5);
	echo"<img src='Q3/Q3_".$select.".png' />";
	$select=rand(1,5);
	echo"<img src='Q4/Q4_".$select.".png' /><br>";
	?>
	<form action='turtle.php' >
		<input type='submit' value='Randomize the Turtle'>
	</form>
</div>
</div>
</body>
</html>
