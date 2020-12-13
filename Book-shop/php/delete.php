<?php  
		include('connect.php');
		$id=$_GET["id"];
		$query="DELETE FROM book_list where Id='$id'";
		$data=mysqli_query($connect,$query);
		header('location: edit_booklist');
?>