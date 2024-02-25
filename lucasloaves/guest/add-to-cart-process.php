<?php
// Include database connection file
include '../conn.php';

// Retrieve form data
$product_id = $_POST['product_id'] ?? '';
$product_name = $_POST['product_name'] ?? '';
$product_price = $_POST['product_price'] ?? '';
$product_description = $_POST['product_description'] ?? '';
$quantity = $_POST['quantity'] ?? '';

// Check if required fields are empty
if (empty($product_id) || empty($product_name) || empty($product_price) || empty($product_description) || empty($quantity)) {
    echo "<script>alert('All fields are required');window.location='shop.php';</script>";
    exit();
}

// Fetch image URL of the product from the products table
$sql_image = "SELECT image_url FROM products WHERE id = ?";
$stmt_image = $conn->prepare($sql_image);
$stmt_image->bind_param("i", $product_id);
$stmt_image->execute();
$result_image = $stmt_image->get_result();

// Check if the query was successful
if ($result_image->num_rows > 0) {
    // Fetch the image URL
    $row_image = $result_image->fetch_assoc();
    $image_url = $row_image['image_url'];

    // Prepare and execute SQL statement to insert data into cart table
    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, price, description, image_url, quantity) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssi", $product_id, $product_name, $product_price, $product_description, $image_url, $quantity);

    if ($stmt->execute()) {
        // Redirect back to the previous page (assuming it's shop.php)
        echo "<script>alert('Product added to cart successfully');window.location='shop.php';</script>";
        exit();
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }

    // Close the statement and result
    $stmt_image->close();
} else {
    // Handle error if no image URL found
    echo "<script>alert('Image URL not found for the product');window.location='shop.php';</script>";
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
