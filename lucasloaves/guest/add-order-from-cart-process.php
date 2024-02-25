<?php
// Include database connection file
include '../conn.php';

// Retrieve form data
$product_id = $_POST['product_id'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$pickDate = $_POST['pickDate'];
$pickTime = $_POST['pickTime'];
$quantity = $_POST['quantity']; // Added quantity

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO tbl_orders (product_id, name, contact, pick_date, pick_time, quantity) VALUES (?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    // Handle prepare error
    die('Error preparing statement: ' . $conn->error);
}

// Bind parameters
$stmt->bind_param("sssssi", $product_id, $name, $contact, $pickDate, $pickTime, $quantity); // Added "i" for integer parameter

// Execute statement
$result = $stmt->execute();

if ($result === false) {
    // Handle execute error
    die('Error executing statement: ' . $stmt->error);
} else {
    // Return success response
    echo "<script> alert ('Product ordered successfully'); window.location='my-cart.php';</script>";
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
