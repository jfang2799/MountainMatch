<?php
$servername = "localhost";
$username = "mountain-match";
$password = "ITWS2018";
$dbname = "testing-data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$trails_query = "SELECT * FROM trails";
$features_query = "SELECT * FROM features";

$trails = $conn->query($trails_query);
$features = $conn->query($features_query);

if ($trails->num_rows > 0 && $features->num_rows > 0) {
    echo "<h1>FEATURES</h1>";
    while($row = $features->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Trail: " . $row["Trail"]. " (" . $row["Latitude"]. ", " . $row["Longitude"] . ") <br>";
    }

    echo "</br>";
    echo "<h1>TRAILS</h1>";
    while($row = $trails->fetch_assoc()) {
        echo $row["Name"]. "    Difficulty: " . $row["Difficulty"]. "    Accuracy:  " . $row["Accuracy"] . ") <br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>