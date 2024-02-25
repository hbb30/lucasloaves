<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luca's Loaves - Product Management</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="upload-products.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" required><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br>
        
        <label for="image_url">Image URL:</label><br>
        <input type="text" id="image_url" name="image_url" required><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
