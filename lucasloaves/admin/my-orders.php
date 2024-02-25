<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Checked Out Products</title>
</head>
<body>
    <h1>Checked Out Products</h1>
    <?php
    // Include database connection file
    include '../conn.php';

    // Retrieve orders from tbl_orders table
    $sql = "SELECT * FROM tbl_orders";
    $result = $conn->query($sql);

    // Display orders
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Order ID: " . $row['id'] . "<br>";
            echo "Product ID: " . $row['product_id'] . "<br>";
            echo "Name: " . $row['name'] . "<br>";
            echo "Contact: " . $row['contact'] . "<br>";
            echo "Pick Date: " . $row['pick_date'] . "<br>";
            echo "Pick Time: " . $row['pick_time'] . "<br>";
            echo "Quantity: " . $row['quantity'] . "<br>"; // Display quantity
            echo "<hr>";
        }
    } else {
        echo "No orders found";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
