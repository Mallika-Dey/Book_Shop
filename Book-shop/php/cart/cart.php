<?php
	error_reporting(0);
	session_start();
	include('../functions.php');
	if(!isloggedin())
	{
		header('location: ../login_register/login.php');
	}
 ?>

 <?php  
 	$id = $_GET['id'];
 	$userid = $_GET['userid'];
 	$category = $_GET['category'];
 
 	$query = "SELECT Id from cart where Id='$id' and userid='$userid' and category='$category' Limit 1";
 	$data = mysqli_query($connect,$query);
 	if(mysqli_num_rows($data) == 1) {
 		echo "<script>
 		alert('Book is already added in the cart');";
 		if($_SESSION['user']['User_type']=='admin') {
 			echo "window.location='../admin_home.php';
 			</script>";
 		}
 		else {
 			echo "window.location='../user_home.php';
 			</script>";
 		}
 	}
 	else {
 		$query="INSERT into cart values('$id','$userid','1','$category')";
 		$data=mysqli_query($connect,$query);
 		echo "<script>
 		alert('Book has been added to the cart');";
 		if($_SESSION['user']['User_type']=='admin') {
 			echo "window.location='../admin_home.php';
 			</script>";
 		}
 		else {
 			echo "window.location='../user_home.php';
 			</script>";
 		}
 	}
 ?>