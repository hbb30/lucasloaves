<?php
require("../connection.php");
if(isset($_POST['product_id'])){
	$product_id=$_POST['product_id'];
	$sql="SELECT * FROM tbl_products WHERE product_id = '$product_id'";
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
		'product_name' => $_POST["u_product_name"],
        'product_price' => $_POST["u_product_price"],
		'product_description' => $_POST["u_product_description"],
		'product_image' => $_POST["u_product_image"]
	];

	$sql = "UPDATE tbl_products SET product_name=:product_name, product_price=:product_price, product_description=:product_description, product_image=:product_image WHERE product_id=:id";
	
	if($conn->prepare($sql)->execute($data)){
		echo "success"; 
	}else{
		echo "failed"; 
	}
}
?>