<?php 
	include('functions.php');
	if(!isAdmin()){
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminPage</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<?php  if(isset($_SESSION['user'])): ?>
		<h1><?php $_SESSION['user']['username'] ?></h1>
	<?php endif?>
</body>
</html>