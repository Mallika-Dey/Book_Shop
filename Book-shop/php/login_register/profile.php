<?php 
	session_start();
	include("../connect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/profile.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
	<div class="profile">
		<form method="post">
			Name:<input class="form-control" type="text" placeholder=<?php echo $_SESSION['user']['Name'];?> readonly>
			Address:<input class="form-control" type="text">
			City:<input class="form-control" type="text">
			Postal Code:<input class="form-control" type="text">
			Phone Number:<input class="form-control" type="text">
			<input type="submit" name="submit-details" class="btn btn-light" style="float: right;">
		</form>
	</div>
</body>
</html>

