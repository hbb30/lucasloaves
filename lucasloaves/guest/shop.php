<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="shop-style.css">
    <title>Luca's Loaves - Shop</title>
</head>
<body>
    <!-- navbar -->
    <?php include("guest-nav-bar.php"); ?>
    
    <div class="shop-main-container">
        <div class="items-container">
            <div class="shop-items-con">
            <?php
            // Include database connection file
            include '../conn.php';

            // Fetch product data from the database
            $sql = "SELECT id, name, price, description, image_url FROM products";
            $result = $conn->query($sql);

            // Check if there are any products
            if ($result->num_rows > 0) {
                // Output table header
                echo "<table>
                        <tr>
                            <th class='hidden'>ID</th>
                            <th></th>
                            <th class='col-name'>Name</th>
                            <th class='col-price'>Price</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                        </tr>";

                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='hidden'>" . $row["id"] . "</td>";
                    
                    // Display image
                    echo "<td><img src='" . $row['image_url'] . "' width='100' height='100'></td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>$" . $row["price"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";

                    // Add to cart button
                    echo "<td class='wide-col'>
                    <form action='add-to-cart-process.php' method='post' style='display: flex; justify-content: space-around; align-items: center;'>
                                <input type='hidden' name='product_id' value='" . $row['id'] . "'>
                                <input type='hidden' name='product_name' value='" . $row['name'] . "'>
                                <input type='hidden' name='product_price' value='" . $row['price'] . "'>
                                <input type='hidden' name='product_description' value='" . $row['description'] . "'>
                                <label for='quantity'>Quantity:</label>
                                <input type='number' name='quantity' id='quantity' value='1' min='1' style='width: 70px;'>
                                <input type='submit' value='Add to Cart' class='input-adc'>
                            </form>
                        </td>";
                    
                    // Order now button to trigger modal
                    echo "<td>
                            <button class='order-adc' data-bs-toggle='modal' data-bs-target='#orderModal{$row['id']}'>Order Now</button>
                        </td>";

                    echo "</tr>";

                    // Modal for each product
                    echo "<div class='modal fade' id='orderModal{$row['id']}' tabindex='-1' aria-labelledby='orderModalLabel{$row['id']}' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='orderModalLabel{$row['id']}'>Order Details</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <p><strong>Name:</strong> {$row['name']}</p>
                                        <p><strong>Price:</strong> {$row['price']}</p>
                                        <p><strong>Description:</strong> {$row['description']}</p>
                                        <form id='orderForm{$row['id']}' action='add-order-process.php' method='post'>
                                            <label for='name{$row['id']}'>Name:</label>
                                            <input type='text' id='name{$row['id']}' name='name' required><br>
                                            <label for='contact{$row['id']}'>Contact Number:</label>
                                            <input type='text' id='contact{$row['id']}' name='contact' required><br>
                                            <label for='pickDate{$row['id']}'>Pick Date:</label>
                                            <input type='date' id='pickDate{$row['id']}' name='pickDate' required><br>
                                            <label for='pickTime{$row['id']}'>Pick Time:</label>
                                            <input type='time' id='pickTime{$row['id']}' name='pickTime' required><br>
                                            <input type='hidden' name='product_id' value='{$row['id']}'>
                                            <input type='hidden' name='product_name' value='{$row['name']}'>
                                            <input type='hidden' name='product_price' value='{$row['price']}'>
                                            <input type='hidden' name='quantity' value='1' min='1'>
                                            <label for='quantity{$row['id']}'>Quantity:</label>
                                            <input type='number' id='quantity{$row['id']}' name='quantity' value='1' min='1'>
                                            <button type='submit' class='btn btn-primary'>Place Order</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
