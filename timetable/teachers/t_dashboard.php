<?php
// Include database connection file
require_once "../connection.php";

// Check if user is logged in
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Get the name of the logged-in teacher
$course_teacher = $_SESSION["course_teacher"];

// Fetch schedules for the logged-in teacher
$sql = "SELECT * FROM tbl_course WHERE course_teacher = :course_teacher";
$stmt = $pdo->prepare($sql);
$stmt->execute(['course_teacher' => $course_teacher]);
$schedules = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable Dashboard</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <?php include 'teacher_sidebar.php';?>
    <h1>Welcome, <?php echo $course_teacher; ?>!</h1>
    <h2>Your Timetable</h2>
    <table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Room</th>
                <th>Schedule</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($schedules as $schedule): ?>
                <tr>
                    <td><?php echo $schedule['course_name']; ?></td>
                    <td><?php echo $schedule['course_room']; ?></td>
                    <td><?php echo $schedule['course_sched']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>
