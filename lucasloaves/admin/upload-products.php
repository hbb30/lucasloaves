<?php
// Database connection
include '../conn.php';

// Retrieve form data
$name = $_POST['name'] ?? '';
$price = $_POST['price'] ?? '';
$description = $_POST['description'] ?? '';
$image_url = $_POST['image_url'] ?? '';

// Check if required fields are empty
if (empty($name) || empty($price) || empty($description) || empty($image_url)) {
    echo "<script>alert('All fields are required');window.location='manage-products.php';</script>";
    exit();
}

// Prepare and execute SQL statement
$stmt = $conn->prepare("INSERT INTO products (name, price, description, image_url) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sdsb", $name, $price, $description, $image_url);

if ($stmt->execute() === TRUE) {
    echo "<script>alert('Product added successfully');window.location='manage-products.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
