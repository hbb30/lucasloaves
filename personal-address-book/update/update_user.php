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
		'name' => $_POST["name"],
        'address' => $_POST["address"],
        'email' => $_POST["email"],
		'phonenumber' => $_POST["phonenumber"]
	];

	$sql = "UPDATE tbl_user SET name=:name, address=:address, email=:email, phonenumber=:phonenumber WHERE userid=:id";
	
	if($conn->prepare($sql)->execute($data)){
		echo "success"; 
	}else{
		echo "failed"; 
	}
}
?>