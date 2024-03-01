<?php
include 'db_connection.php'; // Assume this file contains your database connection code

// Retrieve and sanitize input
$catid = $conn->real_escape_string($_POST['category']);
$name = $conn->real_escape_string($_POST['name']);
$price = $conn->real_escape_string($_POST['price']);
$description = $conn->real_escape_string($_POST['description']);

// File upload handling code here

// Insert product into database
$sql = "INSERT INTO products (catid, name, price, description) VALUES ('$catid', '$name', '$price', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New product created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
