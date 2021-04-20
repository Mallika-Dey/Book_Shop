<?php 
	include('../connect.php');

	$quantity = $_GET['quantity'];
	$id = $_GET['id'];
	$userid = $_GET['userid'];

	if($quantity>0) {
		$query = "UPDATE cart SET Quantity='$quantity' where Id='$id' and userid='$userid'";
	}
	else {
		$query = "DELETE from cart where Id='$id' and userid='$userid'";
	}
		$data = mysqli_query($connect,$query);
	unset($_POST);
	header("Location: item.php?userid=$userid");	//unset post method
			
?>