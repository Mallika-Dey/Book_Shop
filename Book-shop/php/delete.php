<?php  
		include('connect.php');
		$id=$_GET["id"];
		$category=$_GET['category'];
		$query="DELETE FROM $category where Id='$id'";
		$data=mysqli_query($connect,$query);
		header('location: edit_booklist');
?>