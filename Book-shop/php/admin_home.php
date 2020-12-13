<?php 
	error_reporting(0);
	include('functions.php');
	if(!isAdmin()){
		header('location: login_register/login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="../css/design.css" />
</head>
<body>
	<div class="main">
		<div class="First_part">
			<div class="title">
				<h1>BookShop</h1>
			</div>
			<?php
				echo '<div class="grid_1">
					<a href="profile.php" class="account_part">'.$_SESSION["user"]["Username"].'</a>
					<form action="index.php" method="POST">
						<input type="submit" name="logout" value="logout" class="logout">
					</form>
				</div>';
			?>
		</div>
		<div class="nav">
			<ul>
				<li><a href="#Home">Home</a></li>
				<li><a href="edit_booklist.php">Edit Booklist</a></li>
			</ul>
		</div>
		<div class="Second_part">
			<p>BUY BEST BOOK FROM ONLINE</p>
		</div>
		<div class="footer">
			<!-- <p>&copy;</p> -->
		</div>
	</div>
</body>
</html>