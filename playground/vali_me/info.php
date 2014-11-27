<?php
session_start();
echo $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vali me</title>
	</head>
	<body>
		<h1>Info</h1>
		<?=time()?>
	</body>
</html>
