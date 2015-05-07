<?php
require 'vendor/autoload.php';
include('mysql.php');

$gi = geoip_open("vendor/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
$city =  $record->city;

if ($city === NULL)
{
	$city = "Sofia";
}

$query = mysqli_query($link, 'SELECT id FROM cities where name="'.$city.'"') or die("Error db3"); 
$city_id = $query->fetch_object()->id;
$info_query = mysqli_query($link, "SELECT temp, description, wind_direction, wind_speed, humidity FROM current_weather where id=$city_id") or die("Error db3"); 
$info = $info_query->fetch_object();

geoip_close($gi);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/layout.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.js"></script> 
<title>vali me | bootstrap</title>
</head>
<body>
<div class="row">
	<div class="com-md-10 col-md-offset-1 col-xs-12">
		<div class="row">
		  <div class="col-md-3 col-xs-6 top-box">
			<h2><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?=$city?></h2>
		  </div>
		  <div class="col-md-3 col-md-offset-4 col-xs-6 top-box" >
			<h2>
				<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
				<?=date("H:i", time());?>
			</h2>
		  </div>
		</div>

		<div class="row" style="padding-top: 10px">
			<div class="row">
				<div class="col-md-4 col-md-offset-3" >
					<div class="temp"><?= $info->temp ?> &deg;</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-3" >
					<div class="info">
						<p class="short_description"><?= $info->description ?></p>
						<p>Wind: <?= $info->wind_direction ?> at <?= $info->wind_speed ?> mph</p>
						<p>Humidity: <?= $info->humidity ?>%</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-3" >
					<div class="cloudy"></div>
					<!-- <div class="thumbnail">
					</div> -->
				</div>
			</div>
		</div>


		<div class="row" style="padding-top: 15px;">
			<div class="col-md-2 col-md-offset-1" >
				<p>fri</p>
				<p class="short_description">Cloudy</p>
				<div class="cloudy"></div>
			</div>
			<div class="col-md-2 col-md-offset-1" >
				<p>fri</p>
				<p class="short_description">Cloudy</p>
				<div class="cloudy"></div>
			</div>
			<div class="col-md-2 col-md-offset-1" >
				<p>fri</p>
				<p class="short_description">Cloudy</p>
				<div class="cloudy"></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>