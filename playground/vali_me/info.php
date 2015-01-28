<?php
$asd = array(1,2,3);

$lenght = count($asd);
$sum = 0;
for ($i=0; $i < $lenght; $i++) {
	if ($asd[$i] == 2)
	{

	}
	echo $asd[$i];
}
echo $sum."<br>";

foreach ($asd as $index) {
	echo $index."<br>";
}
$i = 0;
while ($i < $lenght)
{
	echo $asd[$i]."<br>";
	$i++;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vali me</title>
	</head>
	<body>
		<h1>Info</h1>
		<form name="info" action="form.php" method="GET" >
			<table border="1">
				<tr>
					<td>Firstname:</td>
					<td><input type="text" name="firstname"></td>
				</tr>
				<tr>
					<td>Lastname:</td>
					<td><input type="file" name="lastname"></td>
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
