<?php
$conn = new mysqli('localhost', 'username', 'password', 'your_database');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['add_category'])) {
    $name = $conn->real_escape_string($_POST['name']);

    $sql = "INSERT INTO categories (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "New category added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['update_category'])) {
    $catid = $conn->real_escape_string($_POST['catid']);
    $name = $conn->real_escape_string($_POST['name']);

    $sql = "UPDATE categories SET name='$name' WHERE catid='$catid'";
    if ($conn->query($sql) === TRUE) {
        echo "Category updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['update_category'])) {
    $catid = $conn->real_escape_string($_POST['catid']);
    $name = $conn->real_escape_string($_POST['name']);

    $sql = "UPDATE categories SET name='$name' WHERE catid='$catid'";
    if ($conn->query($sql) === TRUE) {
        echo "Category updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['delete_category'])) {
    $catid = $conn->real_escape_string($_POST['catid']);

    $sql = "DELETE FROM categories WHERE catid='$catid'";
    if ($conn->query($sql) === TRUE) {
        echo "Category deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>