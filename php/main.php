<?php

// Require files
require "events.php";

// ====================================================================
// ====================================================================

// Add New User
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST['signup-button'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($username) && isset($password)){
            // Insert new user into table
            $sql = "
                INSERT INTO users (username, password)
                VALUES ('$username', '".password_hash($password, PASSWORD_DEFAULT)."');
            ";

            // Success message
            if ($conn->query($sql) === TRUE) {
                // echo "Account created successfully <br>";
                // echo "Username: $username";
            } else {
                echo "Error creating account. " . $conn->error;
            }
        } else {
            alert("Please make sure all form fields are filled.");
        }
    }
}

// ====================================================================
// ====================================================================

// Add New Event
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST['post-button'])){

        $city = $_POST['city'];
        $district = $_POST['district'];
        $eventType = $_POST['event-type'];
        $details = $_POST['details'];

        if(isset($city) && isset($district) && isset($eventType) && isset($details)){

            // New Event object
            $event = new Event($city, $district, $eventType, $details);
            $event -> SetEvent();

        } else {
            alert("Please make sure all form fields are filled.");
        }
    }
}

// ====================================================================
// ====================================================================

