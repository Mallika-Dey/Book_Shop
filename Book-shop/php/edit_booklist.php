<?php 
	error_reporting(0);
	include('functions.php');
	if(!isAdmin()){
		header("location: login_register/login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit_Booklist</title>
	<link rel="stylesheet" type="text/css" href="../css/edit_booklist.css">
</head>
<body>
	<div class="booklist">
		<div id="right-side">
			<form action="index.php" method="POST">
				<?php 
					echo '<input type="submit" name="logout" value="logout" class="logout">';
				?>
			</form>
		</div>
		<div class="header">
			<h2>Add book:</h2>
		</div>
		<form action="edit_booklist.php" method="post" enctype="multipart/form-data">
			<table>
				<thead>
						<th>Book Name</th>
						<th>Author</th>
						<th>Price</th>
						<th>Cover</th>
				</thead>
				<tbody>
					<tr>
					<td><input type="text" name="book_name" required></td>
					<td><input type="text" name="author" required></td>
					<td><input type="text" name="price" required></td>
					<td><input type="file" name="pic" required></td>
					</tr>
				</tbody>
			</table>
			<input type="submit" name="+add" class="submit" value="+add">
		</form>
	</div>
	<div class="booklist">
		<div class="header">
			<h2>Book List</h2>
		</div>
		<?php
			$query="select * from book_list";
			$data=mysqli_query($connect,$query);
			if($data){
		?>
				<table>
				<thead>
					<th>Delete</th>
					<th>Book_name</th>
					<th>Author</th>
					<th>Price</th>
				</thead>
				<tbody>
			<?php
				while ($val=mysqli_fetch_assoc($data)) {
			?>
					<tr><td><a href="delete.php?id=<?php echo $val['Id'];?> "><img src="../image/delete.png"></a></td>
					<td><?php echo $val['Book_name']; ?></td>
					<td><?php echo $val['Author']; ?></td>
					<td><?php echo $val['Price']; ?></td></tr>

			<?php } ?>
				</tbody>
				</table>
			<?php } ?>
	</div>
</body>
</html>