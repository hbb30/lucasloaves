<?php
require("../../../connection.php");
if(isset($_POST['courseid'])){
	$courseid=$_POST['courseid'];
	$sql="SELECT * FROM tbl_course WHERE courseid = '$courseid'";
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
		'u_course_name' => $_POST["u_course_name"],
		'u_course_room' => $_POST["u_course_room"],
		'u_course_sched' => $_POST["u_course_sched"],
		'u_course_teacher' => $_POST["u_course_teacher"]
	];

	$sql = "UPDATE tbl_course SET course_name=:u_course_name, course_room=:u_course_room, course_sched=:u_course_sched, course_teacher=:u_course_teacher WHERE courseid=:id";
	
	if($conn->prepare($sql)->execute($data)){
		echo "success"; 
	}else{
		echo "failed"; 
	}
}
?>