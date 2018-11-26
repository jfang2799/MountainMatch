<?php
$servername = "";
$username = "";
$password = "";

$connection = mysqli_connect($servername,$username,$password);

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
			<?php
				$beginner = "SELECT * FROM features WHERE urban='false'";
			?>
		</table>
		<h2>Urban Features</h2>
		<table id = "advanced">
			<?php
				$advanced = "SELECT * FROM features where urban='true'";
			?>
		</table>
		<h2>Jumps</h2>
		<table id = "jumps">
			<?php
				$jumps = "SELECT * FROM jumps";
			?>
		</table>
		<h2>Trails</h2>
		<table id = "trails">
			<?php
				$trails = "SELECT * FROM trails";
			?>
		</table>
	</form>
</html>