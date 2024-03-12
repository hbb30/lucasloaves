<?php
    session_start();
    if(isset($_SESSION['userid'])){
        if($_SESSION['userlevel']=='admin'){
            header("location: admin/dashboard.php");
        }else if($_SESSION['userlevel']=='teacher'){
            header("location: teachers/dashboard.php");
        }else{
            header("location: students/dashboard.php");
        }
    }
    require("connection.php");
    if(isset($_POST['uname'])){
        $uname = $_POST['uname'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbl_user WHERE username = '$uname' AND password = '$password'";
        $query = $conn->query($sql);
        if($query->rowCount() > 0){
            foreach($query as $row){
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['userlevel'] = $row['userlevel'];
            }
            if($_SESSION['userlevel']=='admin'){
                echo "admin";
            }else if($_SESSION['userlevel']=='teacher'){
                echo "teacher";
            }else{
                echo "student";
            }

        }else{
            echo "error";
        }
    }
?>