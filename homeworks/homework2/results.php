<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>homework2 | results</title>
	</head>
<body>

<?php
$a1 = 4;
$a2 = 1989;
$a3 = "sofia";
$result = 0;
$average_result = 0;
if (isset($_POST['name']))
{
	$name = $_POST['name'];
	if (isset($_POST['q1']))
	{
		$q1 = $_POST['q1'];
		if ($q1 == $a1)
		{
			$result++;
		}
	}
	if (isset($_POST['q2']))
	{
		$q2 = $_POST['q2'];
		if ($q2 == $a2)
		{
			$result++;
		}
	}
	if (isset($_POST['q3']))
	{
		$q3 = $_POST['q3'];
		if ($q3 == $a3)
		{
			$result++;
		}
	}
	#database connection
	include "mysql.php";
	mysqli_query($link, "INSERT INTO `results` (`id`, `name`, `question1`, `question2`, `question3`, `score`) VALUES (NULL, '".$name."', '".$q1."', '".$q2."', '".$q3."', '".$result."');") or die("Error db2"); ;
	$avr_results = mysqli_query($link, "SELECT score FROM results") or die("Error db3"); 

	$total = 0;
	while ($row = $avr_results->fetch_object())
	{
		$total+= $row->score;
	}
	$average_result = $total / $avr_results->num_rows;
	mysqli_close($link);

}
else
{
	die('невалиден тест');
}
?>

<?php echo "Резултат: ".$result. " точки"; ?>
<br>
<?php echo "Средно: ".$average_result. " точки"; ?>
</body>
</html>