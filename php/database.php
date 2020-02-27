<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection + Check connection to MySQL
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
    echo "Error creating database: " . $conn->error;
}

// ====================================================================
// ====================================================================

// Connect to database
$conn = new mysqli($servername, $username, $password, "gameofapps");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ====================================================================
// ====================================================================

// Create users table
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
    echo "Error creating table: " . $conn->error;
}

// ====================================================================
// ====================================================================

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
    echo "Error creating table: " . $conn->error;
}

// ====================================================================
// ====================================================================

// $conn->close();

?>