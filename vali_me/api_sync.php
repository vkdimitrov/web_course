<?php
include('simple_html_dom.php');
$link = mysqli_connect("127.0.0.1", "web_course", "asdasd123", "vali_me") or die("Error db"); 
$query = mysqli_query($link, "SELECT name FROM cities WHERE api_id=0") or die("Error db3"); 
$cities = array();

while ($row = $query->fetch_object())
{
	array_push($cities, $row->name);
}
foreach ($cities as $city) 
{
	#echo $city.' - ';
	$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&mode=xml&units=metric";
	#echo $url."<br>";
	$context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
	$xml = file_get_contents($url, false, $context);
	$xml = rtrim($xml, "\n");
	$xml = rtrim($xml, "\t");
	$xml = rtrim($xml, " ");
	$xml = rtrim($xml, "\r");
	if ($xml == '{"message":"Error: Not found city","cod":"404"}')
	{
		mysqli_query($link, "DELETE FROM cities WHERE name=\"$city\"");		
	}
	else
	{
		$xml = simplexml_load_string($xml);

		if (is_object($xml->city))
		{
			$arr=$xml->city->attributes();
			$city_api_id = $arr[0];
			mysqli_query($link, "UPDATE cities SET api_id=$city_api_id WHERE name=\"$city\"");
		}
		sleep(2);
	}
}
?>