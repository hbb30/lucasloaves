<?php
require("../../../connection.php");
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
		'username' => $_POST["u_username"],
        'password' => $_POST["u_password"],
		'userlevel' => $_POST["u_userlevel"]
	];

	$sql = "UPDATE tbl_user SET username=:username, password=:password, userlvl=:userlevel WHERE userid=:id";
	
	if($conn->prepare($sql)->execute($data)){
		echo "success"; 
	}else{
		echo "failed"; 
	}
}
?>