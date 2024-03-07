<?php
// Database connection
require("../admin/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve selected products data
    $selectedProducts = $_POST["products"];
    
    // Initialize total price
    $totalPrice = 0;
    
    // Insert selected products into tbl_checkout
    foreach ($selectedProducts as $product) {
        $name = $product["name"];
        $price = $product["price"];
        $quantity = $product["quantity"];
        
        // Calculate subtotal for the current product
        $subtotal = $price * $quantity;
        
        // Add subtotal to total price
        $totalPrice += $subtotal;
        
        // Perform the insertion into tbl_checkout
         $conn->query("INSERT INTO tbl_checkout (checkout_name, checkout_price, checkout_quantity, checkout_subtotal) VALUES ('$name', $price, $quantity, $subtotal)");
    }
    
    // Perform the insertion of total price
   $conn->query("INSERT INTO tbl_checkout (checkout_subtotal) VALUES ($totalPrice)");

    // Provide a success message
    echo "Checkout successful. Products saved to database. Total Price: $" . number_format($totalPrice, 2);
} else {
    // Provide an error message if accessed directly
    echo "Error: Access denied";
}
?>
