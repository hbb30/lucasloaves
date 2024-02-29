<?php
    require("../connection.php");
    if($_POST["name"]){

        $data = [
            'name' => $_POST["name"],
            'address' => $_POST["address"],
            'email' => $_POST["email"],
            'phonenumber' => $_POST["phonenumber"],
            'ulvl' => $_POST["ulvl"]
        ];
        
        //sql (insert / add)
        $sql = "INSERT INTO tbl_user (name, address, email, phonenumber, ulvl) VALUES (:name, :address, :email, :phonenumber, :ulvl)";
        //prepare
        //execute and validate if execution success
        if($conn->prepare($sql)->execute($data)){
            echo "success"; 
        }else{
            echo "failed"; 
        }
    }
?>