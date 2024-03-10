<?php
require("../../../connection.php");

$response = []; // Initialize response array

if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM tbl_user WHERE userid = :userid";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['userid' => $userid]);
    $response = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($response);
} else {
    $response['status'] = 200; // 200 means ok
    $response['message'] = "Invalid or data not found";
    echo json_encode($response);
}

if(isset($_POST["uid"])){
    $data = [
        'id' => $_POST["uid"],
        'username' => $_POST["u_username"],
        'password' => $_POST["u_password"],
        'userlevel' => $_POST["u_userlevel"]
    ];

    $sql = "UPDATE tbl_user SET username=:username, password=:password, userlevel=:userlevel WHERE userid=:id";

    $stmt = $conn->prepare($sql);
    if($stmt->execute($data)){
        echo "success";
    } else {
        echo "failed";
    }
}
?>
