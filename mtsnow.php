<?php
// mysql credentials on VM
$servername = "localhost";
$username = "root";
$password = "[database password]";
$dbname = "mountain-match";
$connection = mysqli_connect($servername,$username,$password, $dbname);

// generate accordion menu for each trail. Menu displays ratings and feature table
function displaytrail($trail){
    global $connection;
    $text = "<button class='accordion'> <strong>" . $trail['name'] . " </strong>";

    // trails are rated 1 -5 on difficulty. Indicate rating with skulls
    $text .= " &nbsp;&nbsp;&nbsp;&nbsp;";
    for ($i = 0; $i < 5; $i++) {
        if ($i < (int)$trail['difficulty']) {
            $text .= "<span class='fa fa-skull hard'></span> ";
        }
        else {
            $text .= "<span class='fa fa-skull'></span> ";
        }
    }
    // indicate rating accuracy with crosshairs
    $text .= " &nbsp;&nbsp;&nbsp;&nbsp;";
    for ($i = 0; $i < 5; $i++) {
        if ($i < (int)$trail['accuracy']) {
            $text .= "<span class='fa fa-crosshairs accurate'></span> ";
        }
        else {
            $text .= "<span class='fa fa-crosshairs'></span> ";
        }
    }
    $text .= "</button>";

    $text .= "<div class='panel'>";
    $text .= "<table class='feature-table'>";
    $text .= "<th>Type</th> <th>Size (ft.)</th> <th>Urban</th> <th>Lip</th>";

    $trail_name = $trail['name'];
    $related_features_query = "SELECT type, null as size, urban, lip  
                               FROM features 
                               WHERE trail = '$trail_name' 
                               UNION 
                               SELECT type, size, null as urban, null as lip 
                               FROM jumps 
                               WHERE trail = '$trail_name'";
    $related_features = $connection->query($related_features_query);
    if ($related_features) {
        while ($row = $related_features->fetch_assoc()) {
            $text .= generatetable($row);
        }
    }

    $text .= "</table>";
    $text .= "</div>";
	return $text;
}

// generate table for each trail to display its features/jumps
function generatetable($feature){
    $text = "<tr>";
    $text .= "<td>" . $feature['type'] . "</td>";
    if ($feature['size'] != null) {
        $text .= "<td>" . $feature['size'] . "</td>";
    }
    else {
        $text .= "<td> NA </td>";
    }

    if ($feature['urban'] != null) {
        $text .= "<td>" . ($feature['urban'] == '1' ? 'Yes' : 'No')  . "</td>";
    }
    else {
        $text .= "<td> NA </td>";
    }

    if ($feature['lip'] != null) {
        $text .= "<td>" . ($feature['lip'] == '1' ? 'Yes' : 'No') . "</td>";
    }
    else {
        $text .= "<td> NA </td>";
    }
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
            <div class="left">
                <h2>Trails</h2>
            </div>
            <div class="right">
                <h5><span class='fa fa-skull hard'></span> = Difficulty (1 - 5)</h5>
                <h5><span class='fa fa-crosshairs accurate'></span> = Accuracy (1 - 5)</h5>
            </div>
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