<?php
	include "mysql.php";

	if (isset($_GET['delete']))
	{
		if (is_numeric($_GET['delete']))
			mysqli_query($link, "DELETE FROM results WHERE id = ".$_GET['delete']."");
		else 
			die ("error");
	}
	if (isset($_GET['update']))
	{
		if (is_numeric($_GET['update']))
		{
			$query = mysqli_query($link, "SELECT score FROM results WHERE id = ".$_GET['update']."") or die("Error db3"); 
			$row_to_update = $query->fetch_object();
			$new_score = $row_to_update->score + 1;
			mysqli_query($link, "UPDATE results SET score=".$new_score." WHERE id = ".$_GET['update']."");

		}
		else 
			die ("error");
	}
	$all_rows = mysqli_query($link, "SELECT * FROM results") or die("Error db3"); 
	?>
	<table border="1">
	<tr>
		<th>name</th>
		<th>score</th>
		<th>delete</th>
	</tr>
	<?
	while ($row = $all_rows->fetch_object())
	{
		$total+= $row->score;
		echo "<tr><td>".$row->name.'</td><td>'.$row->score.' <a href="summary.php?update='.$row->id.'">+</a></td><td><a href="summary.php?delete='.$row->id.'">delete</а></td></tr>';
	}
?>
	</table>