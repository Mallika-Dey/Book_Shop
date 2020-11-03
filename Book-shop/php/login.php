<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
	<div id="login_page">
	<form action="login.php" method="POST">
		<div class="field" id="field">
			<h1>LogIn</h1>
			<p id="boxname">Email:</p>
		<input type="email" name="mail" placeholder="Enter Email Id" class="txtbox" required><br><br>
			<p id="boxname">Password:</p>
		<input type="password" name="pass" placeholder="Enter Password" class="txtbox" required><br><br>
		<p id="boxname"><input type="checkbox" name="remember">Remember me</p>
		<input type="submit" name="login" value="Login" class="submit"><br><br>
		<input type="submit" name="back" value="Back" class="back">
		</div>
	</form>
	</div>
	<?php  
		include 'connect.php';
		if($_POST["login"]){
			$mail=$_POST["mail"];
			$pass=$_POST["pass"];
			$remember=$_POST["remember"];
			$query="select * from signup where Email='$mail' and Password='$pass'";
			$data=mysqli_query($connect,$query);
			if($data){
				echo "<script>alert('logged in successfully');</script>";
			}
		}
	?>
</body>
</html>