<?php
die;
$link = mysqli_connect("127.0.0.1", "web_course", "asdasd123", "vali_me") or die("Error db"); 
$query = mysqli_query($link, "SELECT id, name FROM cities ORDER BY id") or die("Error db3"); 
$cities = array();

while ($row = $query->fetch_object())
{
	
	$name = $row->name;
	$name = trim($name, '"');
	$name = rtrim($name, '"');
	#echo $row->id.'-'.$name." UPDATE cities SET name="'".$name."'" WHERE id=$row->id<br>";

	mysqli_query($link, 'UPDATE cities SET name="'.$name.'" WHERE id='.$row->id.'');
}
?>