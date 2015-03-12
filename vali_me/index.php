<?php
require 'vendor/autoload.php';
$gi = geoip_open("vendor/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
$city =  $record->city;

if ($city === NULL)
{
	$city = "Sofia";
}

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
					<div class="temp">9 &deg;</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-3" >
					<div class="info">
						<p class="short_description">Partly Cloudy</p>
						<p>Wind: NE at 2 mph</p>
						<p>Humidity: 65%</p>
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
