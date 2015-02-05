<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vali me</title>
	</head>
	<body>
		<h1>Info</h1>
		<form name="info" action="info.php" method="GET">
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
						Birth Date
					</td>
					<td>
						<select name="year">
							<?php
							for ($i=1900; $i < 2015; $i++)
							{
							 #echo '<option value="'.$i.'">'.$i.'</option>';
							 echo "<option value=\"$i\">$i</option>";
							}
							?>
							</select>

							<select name="days">
							<?php
							for ($i=1; $i < 31; $i++)
							{
							 #echo '<option value="'.$i.'">'.$i.'</option>';
							 echo "<option value=\"$i\">$i</option>";
							}
							?>
							</select>

							<select name="months">
							<?php
							for ($i=1; $i <= 12; $i++)
							{
							 $month_name = date( 'F', mktime( 0, 0, 0, $i + 1, 0, 0, 0 ) );
							 echo "<option value=\"$i\">$month_name</option>";
							}
							?>
						</select> 
					</td>
				</tr>
				<tr>
					<td>
					
					</td> 

					<td>
						<input type="submit" value="Изпрати">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
