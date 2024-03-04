<?php
    require("../connection.php");
    if($_POST["product_name"]){

        $data = [
            'product_name' => $_POST["product_name"],
            'product_price' => $_POST["product_price"],
            'product_description' => $_POST["product_description"],
            'product_image' => $_POST["product_image"]
            // 'ulvl' => $_POST["ulvl"]
        ];
        
        //sql (insert / add)
        $sql = "INSERT tbl_products (product_name, product_price, product_description, product_image) VALUES (:product_name, :product_price, :product_description, :product_image)";
        //prepare
        //execute and validate if execution success
        if($conn->prepare($sql)->execute($data)){
            echo "success"; 
        }else{
            echo "failed"; 
        }
    }

    error_reporting(E_ALL);
ini_set('display_errors', 1);

?>