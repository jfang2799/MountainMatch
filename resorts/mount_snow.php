<h3>Add New Trail</h3>
<form method="post" action="">
    <label for="trail_name">Trail Name: </label> <input type="text" name="trail_name"> <br>
    <label for="trail_difficulty">Trail Difficulty: </label> <input type="text" name="trail_difficulty"> <br>
    <label for="trail_accuracy">Trail Accuracy: </label> <input type="text" name="trail_accuracy"> <br>
    <input type="submit">
</form>

<br>
<h3>Add New Feature</h3>
<form method="post" action="">
    <label for="feature_type">Feature Type: </label> <input type="text" name="feature_type"> <br>
    <label for="feature_length">Feature Length: </label> <input type="text" name="feature_length"> <br>
    <label for="feature_latitude">Feature Latitude: </label> <input type="text" name="feature_latitude"> <br>
    <label for="feature_longitude">Feature Longitude: </label> <input type="text" name="feature_longitude"> <br>
    <label for="feature_trail">Feature Trail: </label> <input type="text" name="feature_trail"> <br>
    <label for="feature_ID">Feature ID: </label> <input type="text" name="feature_ID"> <br>
    <input type="submit">
</form>

<?php
$servername = "localhost";
$username = "mountain-match";
$password = "ITWS2018";
$dbname = "testing-data";
$trails_query = "SELECT * FROM trails";
$features_query = "SELECT * FROM features";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$trails = $conn->query($trails_query);
$features = $conn->query($features_query);

insertFeature($conn);
insertTrail($conn);

if ($trails->num_rows > 0 && $features->num_rows > 0) {
    echo "<h3>FEATURES</h3>";
    echo "<table>";
    echo "<tr> <th> ID </th> <th> Trail </th> <th> Latitude </th> <th> Longitutde </th> </tr>";
    while($row = $features->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"]. "</td> <td>" . $row["Trail"]. "</td> <td>" . $row["Latitude"]. "</td> <td>"
            . $row["Longitude"] . "</td>";
        echo "</tr>";
    }

    echo "<h3>FEATURES</h3>";
    echo "<table>";
    echo "<tr> <th> Name </th> <th> Difficulty </th> <th> Accuracy </th> </tr>";
    while($row = $trails->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" .$row["Name"]. "</td> <td>" . $row["Difficulty"]. "</td> <td>" . $row["Accuracy"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

// plz no hack me
function insertTrail($conn)
{
    $trail_name = filter_var ( $_POST['trail_name'], FILTER_SANITIZE_STRING);
    $trail_difficulty = filter_var ( $_POST['trail_difficulty'], FILTER_SANITIZE_STRING);
    $trail_accuracy = filter_var ( $_POST['trail_accuracy'], FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO trails (Name, Difficulty, Accuracy) VALUES ('$trail_name', '$trail_difficulty', '$trail_accuracy')";

    if (!$conn->query($sql) === TRUE) {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
    return true;
}

// plz no hack me
function insertFeature($conn)
{
    $feature_type = filter_var ( $_POST['feature_type'], FILTER_SANITIZE_STRING);
    $feature_length = filter_var ( $_POST['feature_length'], FILTER_SANITIZE_STRING);
    $feature_latitude = filter_var ( $_POST['feature_latitude'], FILTER_SANITIZE_STRING);
    $feature_longitude = filter_var ( $_POST['feature_longitude'], FILTER_SANITIZE_STRING);
    $feature_trail = filter_var ( $_POST['feature_trail'], FILTER_SANITIZE_STRING);
    $feature_ID = filter_var ( $_POST['feature_ID'], FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO features (Type, Length, Latitude, Longitude, Trail, ID) VALUES ('$feature_type', '$feature_length',
           '$feature_latitude', '$feature_longitude', '$feature_trail', '$feature_ID')";

    if (!$conn->query($sql) === TRUE) {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
    return true;
}
?>