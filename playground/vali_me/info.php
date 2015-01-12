<?php


$column1 = array(1,2,3,4,5,6,7,8);
$column2 = array(9,10,11,12,13,14,15,16);
$column3 = array(17,18,19,20,21,22,23,24);
$column4 = array(25,26,27,28,29,30,31,32);
$board = array($column1, $column2, $column3, $column4);
/*foreach ($board as $column) {
	foreach ($column as $num) {
		echo $num;
	}
	echo "<br>";
}
*/session_start();

//echo $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vali me</title>
	</head>
	<body>
		<h1>Info</h1>
		<form name="info" action="form.php" method="GET">
			<table border="1">
				<tr>
					<td>Firstname:</td>
					<td><input type="text" name="firstname"></td>
				</tr>
				<tr>
					<td>Lastname:</td>
					<td><input type="text" name="lastname"></td>
				</tr>
				<tr>
					<td>
						<select name="car">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select> 
					</td>
					<td><input type="submit" value="Изпрати"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
