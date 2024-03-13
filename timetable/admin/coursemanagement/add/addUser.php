<?php
require_once("../../../connection.php");

if(isset($_POST["course_name"])) {
    $course_name = $_POST["course_name"];
    $course_room = $_POST["course_room"];
    $course_sched = $_POST["course_sched"];

    $data = [
        'course_name' => $course_name,
        'course_room' => $course_room,
        'course_sched' => $course_sched
    ];

    // SQL (insert / add)
    $sql = "INSERT INTO tbl_course (course_name, course_room, course_sched) VALUES (:course_name, :course_room, :course_sched)";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    if($stmt) {
        // Execute the statement
        if($stmt->execute($data)) {
            echo "success"; 
        } else {
            // If execution failed
            echo "failed to execute SQL statement"; 
        }
    } else {
        // If preparation failed
        echo "failed to prepare SQL statement"; 
    }
} else {
    echo "No data received";
}

error_reporting(E_ALL);
ini_set('display_errors', 1);


?>