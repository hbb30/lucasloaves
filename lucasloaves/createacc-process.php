<?php
    include('conn.php');

    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $usertype = "guest";

    $sql = "INSERT INTO tbl_user (uname, pword, utype) VALUES ('$username', '$password', '$usertype')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert ('Account created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
?>