<?php
include("conn.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    $sql = "SELECT * FROM tbl_user WHERE uname='$uname' AND pword='$pword'";

    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);

        if ($rowcount == 1) {
            $rows = mysqli_fetch_array($result);
            if ($rows['utype'] == 'admin') {
                echo '<script>window.location.href = "admin/admin-page.php";</script>';
                exit;
            } else {
                echo '<script>window.location.href = "guest/guest-page.php";</script>';
                exit;
            }
        } else {
            echo "<script>alert('Invalid User!'); window.location='index.php';</script>";
        }
    } else {
        die("Error in SQL query: " . mysqli_error($conn));
    }
}
?>
