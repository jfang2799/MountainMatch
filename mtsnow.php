<?php

//Connect to the Database

$servername = "";
$username = "";
$password = "";

$connection = mysqli_connect($servername,$username,$password);

function displayeasy($feature){
	$text = "<tr>";
	$text += "<td>" + $feature['type'] + "</td>";
	$text += "<td>" + $feature['latitude']+"</td>";
	$text += "<td>" + $feature['longitude']+"</td>";     
	$text +="</tr>";
	return $text;
}

function displayurban($feature){
	$text = "<tr>";
	$text += "<td>" + $feature['type'] + "</td>";
	if ($$feature['lip']){
		$text +="<td>Lip</td>";
	}
	else{
		$text +="<td>No Lip</td>";
	}
	$text += "<td>" + $feature['latitude']+"</td>";
	$text += "<td>" + $feature['longitude']+"</td>";     
	$text +="</tr>";
	return $text;
}

function displayjump($jump){
	$text = "<tr>";
	$text += "<td>" + $jump['type'] + "</td>";
	$text += "<td>" + $jump['size']+"</td>";
	$text += "<td>" + $jump['latitude']+"</td>";
	$text += "<td>" + $jump['longitude']+"</td>";     
	$text +="</tr>";
	return $text;
}

function displaytrail($trail){
	$text = "<tr>";
	$text += "<td>" + $trail['name'] + "</td>";
	$text += "<td>" + $trail['length']+"</td>";
	$text += "<td>" + $trail['difficulty']+"</td>";
	$text += "<td>" + $trail['accuracy']+"</td>";
	$text += "<td>" + $trail['latitude']+"</td>";
	$text += "<td>" + $trail['longitude']+"</td>";     
	$text +="</tr>";
	return $text;
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mount Snow</title>
	</head>
	<h1>Mount Snow</h1>	
	<form action="loadinfo.php" method="POST">
		<h2>Ride-On Features</h2>
		<table id = "beginner">
			<tr>
				<th>Type</th>
				<th>Latitude</th>
				<th>Longitude</th>
			</tr>
			<?php
				$beginner = "SELECT * FROM features WHERE urban='false'";
				while($row = mysql_fetch_array($beginner)){
					echo displayeasy($row);
				}
			?>
		</table>
		<h2>Urban Features</h2>
		<table id = "advanced">
			<tr>
				<th>Type</th>
				<th>Lip</th>
				<th>Latitude</th>
				<th>Longitude</th>
			</tr>
			<?php
				$advanced = "SELECT * FROM features where urban='true'";
				while($row = mysql_fetch_array($advanced)){
					echo displayurban($row);
				}
			?>
		</table>
		<h2>Jumps</h2>
		<table id = "jumps">
			<th>Type</th>
			<th>Size</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<?php
				$jumps = "SELECT * FROM jumps";
				while($row = mysql_fetch_array($jumps)){
					echo displayjump($row);
				}
			?>
		</table>
		<h2>Trails</h2>
		<table id = "trails">
			<th>Name</th>
			<th>Length</th>
			<th>Difficulty</th>
			<th>Rating Accuracy</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<?php
				$trails = "SELECT * FROM trails";
				while($row = mysql_ftech_array($trails)){
					echo displaytrail($row);
				}
			?>
		</table>
	</form>
</html>