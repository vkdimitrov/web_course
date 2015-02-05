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
						<select name="Month">
							<option value="1">Jan</option>
							<option value="2">Feb</option>
							<option value="3">March</option>
							<option value="4">Apr</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">Sept</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>

							
						</select> 
					</td>
					<td><input type="submit" value="Изпрати"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
