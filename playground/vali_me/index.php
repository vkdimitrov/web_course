<?php
session_start();


$_SESSION["user"] = "ivan";
var_dump($_SESSION);
function loggedin()
{
	$user = NULL;
	if ($user != NULL)
	{
		return true;
	}
	else
	{		
		return false;
	} 
}


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vali me</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="main.js"></script> 
	</head>
	<body>
		<h1><a href="info.php">Вали ме</a></h1>
		<h2> Баси майката колко съм мокър</h2>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
		<table border="1"> 
			<tr>
				<td>1</td> 
				<td>2</td> 
			</tr>
			<tr>
				<td>3</td> 
				<td>4</td> 
			 </tr>
		</table>
		<a href="http://dir.bg" target="_blank"> Dir bg</a>
		<a href="http://data.bg" target="_blank"> data bg</a>
		<div class="days red">12</div>
		<div class="days blue">123</div>
		<div class="days green">123</div>
		<div id="navigation"><a href="http://data.bg" target="_blank"> data bg</a></div>
		asd
		<div id="div1">a</div>
		<?php
		$var = "asd3"; 
		
		if (loggedin() == true)
		{
		}

		?>




		<div class="black">
			black
			<div class="green">green</div>
		</div>

		<div class="days inner"></div>
		<br>	

	
		<div id="gradusi">23 &deg;</div>
		<div class="picture">
			<img id="koala" src="Koala.jpg">
			<p id="text">Lorem</p>
		</div>
		div 3
	</body>
</html>
