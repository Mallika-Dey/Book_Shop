<?php 
	include('functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="../../css/login_register.css" />
</head>
<body>
	<form action="register.php" method="POST">
		<div class="field2">

			<h1>SignUp</h1>
			<?php 
			echo '
			<div class="ept" id="ept"></div>
			<p id="boxname2">Name:</p>
		<input type="text" name="name" placeholder="Enter Your Name" class="txtbox2" id="name"><br><br>

			<p id="boxname2">UserName:</p>
			<input type="text" name="username" placeholder="Enter Your UserName" class="txtbox2" id="username"><br><br>

			<p id="boxname2">Email:</p>
		<input type="email" name="mail" placeholder="Enter Email Id" class="txtbox2" id="email"><br><br>

			<p id="boxname2">Password:</p>
		<input type="password" name="pass" placeholder="Enter Password" class="txtbox2" id="pass"><br><br>

			<p id="boxname2">Confirm Password:</p>
		<input type="password" name="con_pass" placeholder="Confirm Password" class="txtbox2" id="pass"><br><br>

		<input type="submit" name="register" value="Signup" class="submit2"><br><br>
		<input type="submit" name="back2" class="back2" value="Back"><br>';
		 echo show_error();
		?>
		</div>
	</form>
</body>
</html>