<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>homework2</title>
	</head>
<body>
	<h1>тест номер 1</h1>
	<form name="test_form" action="results.php" method="POST">
		<label>Име:</label>
		<input type="text" name="name" ><br>
		<h2>колко е 2+2</h2>
		<input type="radio" name="q1" value="5">2 + 2 = 5<br>
		<input type="radio" name="q1" value="3">2 + 2 = 3<br>
		<input type="radio" name="q1" value="4">2 + 2 = 4<br>
		
		<h2>кога е паднала Берлинската стена</h2>
		<input type="radio" name="q2" value="1986">1986<br>
		<input type="radio" name="q2" value="1987">1987<br>
		<input type="radio" name="q2" value="1989">1989<br>
		
		<h2>коя е столицата на България</h2>
		<input type="radio" name="q3" value="sofia">София<br>
		<input type="radio" name="q3" value="varna">Варна<br>
		<input type="radio" name="q3" value="burgas">Бургас<br>
		<br>
		<input type="submit" value="изпрати">
	</form>
</body>
</html> 