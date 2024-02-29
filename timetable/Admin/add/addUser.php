<?php
    require("../../connection.php");
    if($_POST["uname"]){

        $data = [
            'uname' => $_POST["uname"],
            'pass' => $_POST["pass"],
            'name' => $_POST["name"],
            'ulvl' => $_POST["ulvl"]
        ];
        
        //sql (insert / add)
        $sql = "INSERT INTO tbl_user (username, password, name, userlevel) VALUES (:uname, :pass, :name, :ulvl)";
        //prepare
        //execute and validate if execution success
        if($conn->prepare($sql)->execute($data)){
            echo "success"; 
        }else{
            echo "failed"; 
        }
    }
?>