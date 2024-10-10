<?php

$conn=new mysqli("localhost","root","","test1");
// Database configuration
$servername = "localhost"; // Usually 'localhost'
$username = "root";        // Default username for Laragon
$password = "";            // Default password is empty for Laragon
$dbname = "test1"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";