<?php
    // mysql credentials
    $servername = "localhost";
    $username = "root";
    $password = "[database password]";
    $dbname = "mountain-match";
    $connection = mysqli_connect($servername,$username,$password, $dbname);

    // check what information the user want to query
    switch ($_GET["request"]) {
        case "beginner":
            $beginner_query = "SELECT * FROM features WHERE urban='false'";
            $beginner = $connection->query($beginner_query);
            echo "[";
            echo json_encode($beginner->fetch_assoc());
            while($row = $beginner->fetch_assoc()){
                echo ", ";
                echo json_encode($row);
            }
            echo "]";
            break;

        case "advanced":
            $advanced_query = "SELECT * FROM features where urban='true'";
            $advanced = $connection->query($advanced_query);
            echo "[";
            echo json_encode($advanced->fetch_assoc());
            while($row = $advanced->fetch_assoc()){
                echo ", ";
                echo json_encode($row);
            }
            echo "]";
            break;

        case "jumps":
            $jumps_query = "SELECT * FROM jumps";
            $jumps = $connection->query($jumps_query);
            echo "[";
            echo json_encode($jumps->fetch_assoc());
            while($row = $jumps->fetch_assoc()){
                echo ",";
                echo json_encode($row);
            }
            echo "]";
            break;

        case "trails":
            $trails_query = "SELECT * FROM trails";
            $trails = $connection->query($trails_query);
            echo "[";
            echo json_encode($trails->fetch_assoc());
            while($row = $trails->fetch_assoc()){
                echo ",";
                echo json_encode($row);
            }
            echo "]";
            break;
    }
?>