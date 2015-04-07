<?php
include('simple_html_dom.php');
include('mysql.php');

$query = mysqli_query($link, "SELECT id, api_id FROM cities WHERE api_id<>0") or die("Error db3"); 

while ($row = $query->fetch_object())
{
	$url = "http://api.openweathermap.org/data/2.5/weather?id=$row->id&mode=xml&units=metric";
	#echo $url."<br>";
	$context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
	$xml = file_get_contents($url, false, $context);
	$xml = rtrim($xml, "\n");
	$xml = rtrim($xml, "\t");
	$xml = rtrim($xml, " ");
	$xml = rtrim($xml, "\r");
	if ($xml == '{"message":"Error: Not found city","cod":"404"}')
	{
		continue;
	}
	else
	{
		$xml = simplexml_load_string($xml);

		if (is_object($xml->temperature) && is_object($xml->weather) && is_object($xml->wind) && is_object($xml->humidity))
		{
			$temp_arr = $xml->temperature->attributes();
			$temp = round($temp_arr[0]);

			$description_arr = $xml->weather->attributes();
			$description = $description_arr[1];

			$wind_spd_arr = $xml->wind->speed->attributes();
			$wind_speed = round($wind_spd_arr[0]);

			$wind_direction_arr = $xml->wind->direction->attributes();
			$wind_direction = $wind_direction_arr[1];

			$humidity_arr = $xml->humidity->attributes();
			$humidity = $humidity_arr[0];
			mysqli_query($link, "INSERT INTO current_weather (`id`, `city_id`, `temp`, `description`, `wind_direction`, `wind_speed`, `humidity`) 
								VALUES (NULL, $row->id, $temp, \"$description\", \"$wind_direction\", $wind_speed, $humidity)");
		}
		sleep(3);
	}

}

?>