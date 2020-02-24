<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection + Check connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it does not exist
$sql = "
    CREATE DATABASE IF NOT EXISTS gameofapps;
";

// Success message
if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully <br>";
} else {
    //echo "Error creating database: " . $conn->error;
}

// ====================================================================
// ====================================================================

// Create connection + Check connection
$conn = new mysqli($servername, $username, $password, "gameofapps");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$sql = "
    CREATE TABLE IF NOT EXISTS users (
        username VARCHAR(100) NOT NULL UNIQUE,
        password CHAR(40) NOT NULL
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
                // echo "Error creating account. " . $conn->error;
            }
        } else {
            // echo "Please make sure all form fields are filled.";
        }
    }
}


$conn->close();

?>