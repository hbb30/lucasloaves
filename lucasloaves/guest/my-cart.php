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
    <title>Luca's Loaves - My Cart</title>
</head>
<body>
    <?php
    include 'guest-nav-bar.php';
    ?>

    <div class="cart-con">
        <div class="table-wrapper">
            <?php
            // Include database connection file
            include '../conn.php';

            // Function to remove a product from the cart
            if(isset($_GET['remove_id'])) {
                $remove_id = $_GET['remove_id'];
                $remove_query = "DELETE FROM cart WHERE id = $remove_id";
                if($conn->query($remove_query) === TRUE) {
                    echo "<script>alert('Product removed from cart');</script>";
                } else {
                    echo "Error: " . $conn->error;
                }
            }

            // Fetch cart data from the database, joining with product table
            $sql = "SELECT c.id, c.name, c.price, c.description, c.image_url, c.quantity
                    FROM cart c
                    JOIN products p ON c.product_id = p.id";
            $result = $conn->query($sql);

            // Check if the query was successful
            if ($result === false) {
                // Display error message and terminate script
                die("Error executing query: " . $conn->error);
            }

            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                echo "<div class='table-responsive'>
                            <table class='my-cart-table-con' border='1'>
                                <tr>
                                    <th class='hidden'>ID</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th></th>
                                    <th></th>
                                </tr>";
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='hidden'>" . $row["id"] . "</td>";
                    echo "<td><img src='" . $row["image_url"] . "' width='100' height='100'></td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>$" . $row["price"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";

                    // Order now button to trigger modal
                    echo "<td>
                            <button class='order-adc' data-bs-toggle='modal' data-bs-target='#orderModal{$row['id']}'>Order Now</button>
                        </td>";

                    // Remove button
                    echo "<td>
                            <form action='' method='get'>
                                <input type='hidden' name='remove_id' value='{$row['id']}'>
                                <button type='submit' class='remove-from-cart btn btn-danger'>Remove</button>
                            </form>
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
                                 <form id='orderForm{$row['id']}' action='add-order-from-cart-process.php' method='post'>
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
                echo "</table></div>";
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .cart-con{
            background-color: white;
            width: auto;
            /* height: 100%; */
            display: flex;
            justify-content: center;
            max-height: 95%;
            overflow-y: auto;
            overflow-x:auto;
            margin-top: 50px;
        }

        .cart-con::webkit-scrollbar{
            width: 8px;
            display: none;
        }

        .cart-con::-webkit-scrollbar-thumb{
            background-color: #888;
            border-radius: 4px;
        }

        .table-wrapper {
            max-height: 80vh;
            overflow-y: auto;
        }

        table th{
            background-color: burlywood;
        }
        table, th, td {    
            /* border: 1px solid black;   */
            margin-left: auto;  
            margin-right: auto;  
            border-collapse: collapse;    
            width: 1000px;  
            text-align: center;
        }

        .remove-from-cart {
            background-color: #dc3545;
            color: white;
        }
    </style>
</body>
</html>
