<?php
// mysql credentials on VM
$servername = "localhost";
$username = "root";
$password = "[database password]";
$dbname = "mountain-match";
$connection = mysqli_connect($servername,$username,$password, $dbname);

function displaytrail($trail){
    $text = "<button class='accordion'> <strong>"
        . $trail['name'] . " </strong> </button>";
    $text .= "<div class='panel'>";
    $text .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
    $text .= "</div>";
	return $text;
}

function displaytrailtable($trail){
    $text = "<tr>";
    $text .= "<td>" . $trail['name'] . "</td>";
    $text .= "<td>" . $trail['length'] . "</td>";
    $text .= "<td>" . $trail['difficulty'] . "</td>";
    $text .= "<td>" . $trail['accuracy'] . "</td>";
    $text .= "<td>" . $trail['latitude'] . "</td>";
    $text .= "<td>" . $trail['longitude'] . "</td>";
    $text .="</tr>";
    return $text;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <?php
            $API_KEY = 'AIzaSyCOfSiqqnUTSjs8aYPEWr7Bs0T2Q16ain0';
            echo "<script src='https://maps.googleapis.com/maps/api/js?key=$API_KEY'></script>"
        ?>
		<title>Mount Snow</title>
	</head>
	<h1 class="title">Mount Snow</h1>
    <div>
        <div id="map"></div>

        <script src="./js/map.js"></script>
        <div id="feature_selector">
            <h3 class="title">
                Feature Selection
            </h3>
            <label class="container">Beginner Features
                <input id="beginner" type="checkbox" checked onclick="update_pins()">
                <span class="checkmark"></span>
            </label>
            <label class="container">Advanced Features
                <input id="advanced" type="checkbox" checked onclick="update_pins()">
                <span class="checkmark"></span>
            </label>
            <label class="container">Jumps
                <input id="jumps" type="checkbox" checked onclick="update_pins()">
                <span class="checkmark"></span>
            </label>
        </div>

        <div id="trails">
            <h2>Trails</h2>

            <?php
            $trails_query = "SELECT * FROM trails";
            $trails = $connection->query($trails_query);
            while($row = $trails->fetch_assoc()){
                echo displaytrail($row);
            }
            ?>

            <script src="./js/accordian.js"></script>
        </div>
    </div>

    <!--
    <div id="trails">
        <h2>Trails</h2>
        <table>
            <th>Name</th>
            <th>Length</th>
            <th>Difficulty</th>
            <th>Rating Accuracy</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <?php
                /*
                $trails_query = "SELECT * FROM trails";
                $trails = $connection->query($trails_query);
                while($row = $trails->fetch_assoc()){
                    echo displaytrailtable($row);
                }
                */
            ?>
        </table>
    </div>
    -->



</html>