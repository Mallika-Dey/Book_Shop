<?php 
	error_reporting(0);
	include('../functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../../css/login_register.css" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<form action="login.php" method="POST">
		<div class="field" id="field">

			<h1>SignIn</h1>
			<?php 
			echo '
			<p id="boxname">UserName:</p>
			<input type="text" name="username" placeholder="Enter Your UserName" class="txtbox" id="username"><br><br>

			<p id="boxname">Password:</p>
			<input type="password" name="pass" placeholder="Enter Password" class="txtbox" id="pass"><br><br>

		<p id="boxname"><input type="checkbox" name="remember"> Remember me</p>

		<input type="submit" name="login" value="Login" class="btn btn-primary">
		<input type="submit" name="back" value="Back" class="btn btn-danger">
		<br>';
		echo show_error(); 
			?>
			<a href="register.php" class="">Don't have an account? Register</a>
		</div>
	</form>

</body>
</html>