<?php
    require("../../../connection.php");
    if($_POST["username"]){

        $data = [
            'username' => $_POST["username"],
            'password' => $_POST["password"],
            'userlevel' => $_POST["userlevel"]
        ];
        
        //sql (insert / add)
        $sql = "INSERT tbl_user (username, password, userlevel) VALUES (:username, :password, :userlevel)";
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