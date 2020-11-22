<?php 
	include('functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../../css/login_register.css" />
</head>
<body>
	<form action="login.php" method="POST">
		<div class="field" id="field">

			<h1>LogIn</h1>
			<?php 
			echo '
			<p id="boxname">UserName:</p>
		<input type="text" name="username" placeholder="Enter Your UserName" class="txtbox" id="username"><br><br>

			<p id="boxname">Password:</p>
		<input type="password" name="pass" placeholder="Enter Password" class="txtbox" id="pass"><br><br>

		<p id="boxname"><input type="checkbox" name="remember"> Remember me</p>

		<input type="submit" name="login" value="Login" class="submit"><br><br>
		<input type="submit" name="back" value="Back" class="back">
		<br>';
		echo show_error(); 
			?>
		</div>
	</form>

</body>
</html>