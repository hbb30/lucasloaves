<?php
// Database connection
require("../admin/connection.php");

// Fetch products from the database
$stmt = $conn->query("SELECT * FROM tbl_products");

if ($stmt->rowCount() > 0) {
    // Output data of each row
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row['product_name']."</td>";
        echo "<td>".$row["product_price"]."</td>";
        echo "<td>".$row["product_description"]."</td>";
        echo "<td><img src='" .$row['product_image']."' width='100' height='100'></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No products found</td></tr>";
}
?>
