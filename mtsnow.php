<?php
// mysql credentials on VM
$servername = "localhost";
$username = "root";
$password = "[database password]";
$dbname = "mountain-match";
$connection = mysqli_connect($servername,$username,$password, $dbname);

function displaytrail($trail){
    $text = "<button class='accordion'> <strong>" . $trail['name'] . " </strong>";

    // trails are rated 1 -5 on difficulty. Indicate rating with skulls
    $text .= " &nbsp;&nbsp;&nbsp;&nbsp;";
    for ($i = 0; $i < 5; $i++) {
        // red skulls to indicate difficulty
        if ($i < (int)$trail['difficulty']) {
            $text .= "<span class='fa fa-skull hard'></span> ";
        }
        // black skulls to fill out spacing
        else {
            $text .= "<span class='fa fa-skull'></span> ";
        }
    }

    // indicate rating accuracy with crosshairs
    $text .= " &nbsp;&nbsp;&nbsp;&nbsp;";
    for ($i = 0; $i < 5; $i++) {
        // green crosshairs to indicate difficulty accurate
        if ($i < (int)$trail['accuracy']) {
            $text .= "<span class='fa fa-crosshairs accurate'></span> ";
        }
        // black to fill out spacing
        else {
            $text .= "<span class='fa fa-crosshairs'></span> ";
        }
    }
    $text .= "</button>";

    $text .= "<div class='panel'>";
    $text .= "<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
            <h5><span class='fa fa-skull hard'></span> = Difficulty (1 - 5)</h5>
            <h5><span class='fa fa-crosshairs accurate'></span> = Accuracy (1 - 5)</h5>
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
</html>