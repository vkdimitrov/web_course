<?php
include('simple_html_dom.php');
include('mysql.php');

$query = mysqli_query($link, "SELECT id, api_id FROM cities WHERE api_id<>0 order by id ASC") or die("Error db3"); 

while ($row = $query->fetch_object())
{
	$url = "http://api.openweathermap.org/data/2.5/forecast?id=$row->api_id&mode=xml&units=metric";
	echo $url."<br>";
	$context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
	$xml = file_get_contents($url, false, $context);
	$xml = rtrim($xml, "\n");
	$xml = rtrim($xml, "\t");
	$xml = rtrim($xml, " ");
	$xml = rtrim($xml, "\r");
	if ($xml == '{"message":"Error: Not found city","cod":"404"}' || $xml == '{"cod":"404","message":"Error: Not found city"}')
	{
		continue;
	}
	else
	{
		$xml = simplexml_load_string($xml);
		if (is_object($xml))
		{
			$tomorrow = date('Y-m-d', time() + 86400)."T12:00:00";
			$day_after_tomorrow = date('Y-m-d', time() + 86400 * 2)."T12:00:00";
			$two_days_after_tomorrow = date('Y-m-d', time() + 86400 * 3)."T12:00:00";

			$forecasts = $xml->forecast;
			foreach ($forecasts->time as $time) {
				if ($time->attributes()[0] == $tomorrow)
				{
					$day1_temp = round(( (float)$time->temperature->attributes()[2] + (float)$time->temperature->attributes()[3] )/2);
					$day1_desc = $time->symbol->attributes()[1];
				}
				elseif ($time->attributes()[0] == $day_after_tomorrow) 
				{
					$day2_temp = round(((float)$time->temperature->attributes()[2] + (float)$time->temperature->attributes()[3])/2);
					$day2_desc = $time->symbol->attributes()[1];
				}
				elseif ($time->attributes()[0] == $two_days_after_tomorrow) 
				{
					$day3_temp = round(((float)$time->temperature->attributes()[2] + (float)$time->temperature->attributes()[3])/2);
					$day3_desc = $time->symbol->attributes()[1];
				}
			}
			mysqli_query($link, "INSERT INTO forecast (`id`, `city_id`, `day1_description`, `day1_temp`, `day2_description`, `day2_temp`, `day3_description`, `day3_temp`) 
								VALUES (NULL, $row->id, \"$day1_desc\", $day1_temp, \"$day2_desc\", $day2_temp, \"$day3_desc\", $day3_temp)");
		}
		sleep(6);
	}

}

?>
