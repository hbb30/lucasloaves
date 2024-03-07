<?php
// Database connection
require("../admin/connection.php");

// Fetch products from the database
$stmt = $conn->query("SELECT * FROM tbl_products");

$products = ""; // Initialize variable to store generated HTML for products

if ($stmt->rowCount() > 0) {
    // Output data of each row
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $products .= "<tr>";
        $products .= "<td>".$row["product_name"]."</td>";
        $products .= "<td>".$row["product_price"]."</td>";
        $products .= "<td>".$row["product_description"]."</td>";
        $products .= "<td><img src='" .$row['product_image']."' width='100' height='100'></td>";
        $products .= "<td><input type='checkbox' class='product-checkbox'></td>"; // Add checkbox
        $products .= "</tr>";
    }
} else {
    $products = "<tr><td colspan='5'>No products found</td></tr>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        table{
            background-color: white;
            border-radius: 10px;
        }

        h1{
            color: yellow;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <h1 class="text-warning mt-3"><span class="text-light">Manage</span> Products</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Select</th> <!-- Add a column for checkbox -->
                </tr>
            </thead>
            <tbody id="productTable">
                <?php echo $products; ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" onclick="checkout()">Checkout</button>
    </div>

    <!-- Checkout Modal -->
    <div class="modal fade" id="checkoutModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Checkout Summary</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="checkoutSummary">
                    <!-- Summary of selected items will be displayed here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="confirmCheckout()">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Function to handle checkout button click
    function checkout() {
        var selectedRows = [];
        $('.product-checkbox:checked').each(function() {
            var row = $(this).closest('tr');
            var rowData = {
                name: row.find('td:eq(0)').text(),
                price: row.find('td:eq(1)').text(),
                description: row.find('td:eq(2)').text(),
                image: row.find('td:eq(3)').text()
            };
            selectedRows.push(rowData);
        });

        if (selectedRows.length > 0) {
            var summaryHTML = "<ul>";
            $.each(selectedRows, function(index, row) {
                summaryHTML += "<li>" + row.name + " - " + row.price + "</li>";
            });
            summaryHTML += "</ul>";
            $('#checkoutSummary').html(summaryHTML);
            $('#checkoutModal').modal('show');
        } else {
            alert('Please select at least one item.');
        }
    }

    // Function to handle confirm button click in the checkout modal
    function confirmCheckout() {
        // Perform checkout process here
        $('#checkoutModal').modal('hide');
        alert('Your order has been confirmed!');
    }

    // Function to handle row selection
    $(document).on('click', 'tbody tr', function(e) {
        if (!$(e.target).is('button')) {
            $(this).toggleClass('selected');
        }
    });
    </script>

</body>
</html>
