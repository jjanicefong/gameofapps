<?php

    include 'database.php';

    // Create connection + Check connection
    $conn = new mysqli($servername, $username, $password, "gameofapps");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create events table
    $sql = "
        CREATE TABLE IF NOT EXISTS events (
            city TEXT NOT NULL,
            district INT NOT NULL,
            eventType TEXT NOT NULL,
            details TEXT NOT NULL
        );
    ";

    // Success message
    if ($conn->query($sql) === TRUE) {
        // echo "Table created successfully <br>";
    } else {
        // echo "Error creating table: " . $conn->error;
    }

// ====================================================================
// ====================================================================

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_POST['post-button'])){

            $city = $_POST['city'];
            $district = $_POST['district'];
            $eventType = $_POST['event-type'];
            $details = $_POST['details'];

            if(isset($city) && isset($district) && isset($eventType) && isset($details)){
                // Insert new event into table
                $sql = "
                    INSERT INTO events (city, district, eventType, details)
                    VALUES ('$city', '$district', '$eventType', '$details');
                ";

                // Success message
                if ($conn->query($sql) === TRUE) {
                    // echo "Event created successfully <br>";
                } else {
                    // echo "Error creating event. " . $conn->error;
                }

            } else {
                // echo "Please make sure all form fields are filled.";
            }
        }
    }

?>