<?php
    require_once ("../../../connection.php");
    if($_POST["course_name"]){

        $data = [
            'course_name' => $_POST["course_name"],
            'course_room' => $_POST["course_room"],
            'course_sched' => $_POST["course_sched"]
        ];
        
        //sql (insert / add)
        $sql = "INSERT tbl_course (course_name, course_room, course_sched) VALUES (:course_name, :course_room, :course_sched)";
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