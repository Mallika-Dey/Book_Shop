<?php 
	error_reporting(0);
	include('functions.php');
	include('booklist.php');
	if(!isAdmin()){
		header("location: login_register/login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit_Booklist</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/edit_booklist.css">
</head>
<body>
		<div id="right-side">
			<form action="index.php" method="POST">
				<?php 
					echo '<input type="submit" name="logout" value="logout" class="btn btn-primary" id="logout">';
				?> 
			</form>
		</div>

	<div class="booklist">
		<div class="header">
			<h2>Add book:</h2>
		</div>

		<form action="edit_booklist.php" method="post" enctype="multipart/form-data">
			<table>
				<thead>
						<th>Book Name</th>
						<th>Author</th>
						<th>Category</th>
						<th>Price</th>
						<th>Cover</th>
				</thead>
				<tbody>
					<tr>
					<td><input type="text" name="book_name" required></td>
					<td><input type="text" name="author" required></td>
					<td>
						<select name="category">
							<option>Adventure</option>
							<option>Comic</option>
							<option>Detective</option>
							<option>Fiction</option>
							<option>Poetry</option>
							<option>Short_Stories</option>
							<option>Others</option>
						</select>
					</td>
					<td><input type="text" name="price" required></td>
					<td><input type="file" name="pic" required></td>
					</tr>
				</tbody>
			</table>
			<input type="submit" name="+add" class="submit" value="+add">
		</form>

		<?php
			$query="select * from adventure";
			$data=mysqli_query($connect,$query);
			if(mysqli_num_rows($data)>0)	{
				echo '<div class="header">
				<h2>Adventure</h2>
				</div>';
				displayBook('adventure',$data);
			}

			$query1="select * from Comic";
			$data1=mysqli_query($connect,$query1);
			if(mysqli_num_rows($data1)>0)	{
				echo '<div class="header">
				<h2>Comic Book</h2>
				</div>';
				displayBook('Comic',$data1);
			}

			$query2="select * from Detective";
			$data2=mysqli_query($connect,$query2);
			if(mysqli_num_rows($data2)>0)	{
				echo '<div class="header">
				<h2>Detective and mystery</h2>
				</div>';
				displayBook('Detective',$data2);
			}

			$query3="select * from Fiction";
			$data3=mysqli_query($connect,$query3);
			if(mysqli_num_rows($data3)>0)	{
				echo '<div class="header">
				<h2>Fiction</h2>
				</div>';
				displayBook('Fiction',$data3);
			}

			$query4="select * from Poetry";
			$data4=mysqli_query($connect,$query4);
			if(mysqli_num_rows($data4)>0)	{
				echo '<div class="header">
				<h2>Poetry</h2>
				</div>';
				displayBook('Poetry',$data4);
			}

			$query5="select * from Short_Stories";
			$data5=mysqli_query($connect,$query5);
			if(mysqli_num_rows($data5)>0)	{
				echo '<div class="header">
				<h2>Short Stories</h2>
				</div>';
				displayBook('Short_Stories',$data5);
			}

			$query6="select * from others";
			$data6=mysqli_query($connect,$query6);
			if(mysqli_num_rows($data6)>0)	{
				echo '<div class="header">
				<h2>Others</h2>
				</div>';
				displayBook('others',$data6);
			}
		?>
	</div>

</body>
</html>