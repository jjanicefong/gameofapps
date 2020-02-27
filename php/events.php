<?php

// Connect to db
include "connect.php";

// Define Class
class Event {
    public $city;
    public $district;
    public $eventType;
    public $details;

    function __construct($city, $district, $eventType, $details){
        $this->city = $city;
        $this->district = $district;
        $this->eventType = $eventType;
        $this->details = $details;
    }

    function SetEvent(){

        global $conn;

        // Insert new event into table
        $sql = "
            INSERT INTO events (city, district, eventType, details)
            VALUES ('$this->city', '$this->district', '$this->eventType', '$this->details');
        ";

        // Success message
        if ($conn->query($sql) === TRUE) {
            // echo "New event created successfully <br>";
        } else {
            echo "Error inserting into table: " . $conn->error;
        }
    }

}

?>