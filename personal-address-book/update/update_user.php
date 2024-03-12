<?php
require("../connection.php");
if(isset($_POST['userid'])){
	$userid=$_POST['userid'];
	$sql="SELECT * FROM tbl_user WHERE userid = '$userid'";
	$result=$conn->query($sql);
	$response=array();
	foreach ($conn->query($sql) as $row) {
		$response=$row;
	}
	echo json_encode($response);
}else{
	$response['status']=200; //200 means ok
	$response['message']="Invalid or data not found";
}


if(isset($_POST["uid"])){

	$data = [
		'id' => $_POST["uid"],
		'u_name' => $_POST["u_name"],
        'u_address' => $_POST["u_address"],
		'u_email' => $_POST["u_email"],
		'u_phonenumber' => $_POST["u_phonenumber"]
	];

	$sql = "UPDATE tbl_user SET name=:u_name, address=:u_address, email=:u_email, phonenumber=:u_phonenumber WHERE userid=:id";
	
	if($conn->prepare($sql)->execute($data)){
		echo "success"; 
	}else{
		echo "failed"; 
	}
}
?>