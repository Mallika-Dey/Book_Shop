<?php 
	error_reporting(0);
	include('../functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="../../css/login_register.css" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form action="register.php" method="POST">
		<div class="field2">

			<h1>SignUp</h1>
			<?php 
			echo '
			<p id="boxname2">Name:</p>
		<input type="text" name="name" placeholder="Enter Your Name" class="txtbox2" id="name" required><br><br>

			<p id="boxname2">UserName:</p>
			<div class="ept" id="ept"></div>
			<input type="text" name="username" placeholder="Enter Your UserName" class="txtbox2" id="username" required><br><br>

			<p id="boxname2">Email:</p>
		<input type="email" name="mail" placeholder="Enter Email Id" class="txtbox2" id="email" required><br><br>

			<p id="boxname2">Password:</p>
			<div id="msg"></div>
		<input type="password" name="pass" placeholder="Enter Password" class="txtbox2" id="pass" required><br><br>

			<p id="boxname2">Confirm Password:</p>
		<input type="password" name="con_pass" placeholder="Confirm Password" class="txtbox2" id="con_pass" required><br><br>

		<button type="submit" name="register" class="btn btn-primary" id="signup">Signup</button>
		<input type="submit" name="back2" class="btn btn-danger" value="Back"><br>';
		 echo show_error();
		?>
		<script type="text/javascript" src="../../javascript/functions.js"></script>
		</div>
	</form>
</body>
</html>