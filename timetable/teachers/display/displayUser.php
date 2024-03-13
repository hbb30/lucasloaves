<?php
session_start();
require_once("../../connection.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $course_teacher = $_SESSION['course_teacher']; // Get the currently logged-in teacher's name
    $sql = "SELECT * FROM tbl_course WHERE course_name LIKE '%$search%' AND course_teacher = '$course_teacher'";
} else {
    $course_teacher = $_SESSION['course_teacher']; // Get the currently logged-in teacher's name
    $sql = "SELECT course_name, course_room, course_sched FROM tbl_course WHERE course_teacher = '$course_teacher'";
}

$result = $conn->query($sql);
$result_set = $result->fetchAll();
if ($result_set) {
    foreach ($result_set as $row) {
?>
        <tr>
            <th><?= $row["course_name"]; ?></th>
            <td><?= $row["course_room"]; ?></td>
            <td><?= $row["course_sched"]; ?></td>
        </tr>
<?php
    }
} else {
?>
    <td colspan="6"><center><h2 class="text-muted">No Record</h2><center></td>
<?php
}
?>
