<?php
    session_start();
    if(isset($_SESSION['userid'])){
        if($_SESSION['userlvl']=='admin'){
            header("location: Admin/usermanagement.php");
        }else{
            header("location: NonAdmin/dashboard.php");
        }
    }
    require("connection.php");
    if(isset($_POST['uname'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM tbl_user WHERE username = '$uname' AND password = '$pass'";
        $query = $conn->query($sql);
        if($query->rowCount() > 0){
            foreach($query as $row){
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['userlvl'] = $row['userlevel'];
            }
            if($_SESSION['userlvl']=='admin'){
                echo "admin";
            }else{
                echo "non-admin";
            }

        }else{
            echo "error";
        }
    }
?>