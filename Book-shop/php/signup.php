<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/signup.css" />
</head>
<body>
	<div id="signup">
	<form action="signup.php" method="POST">
		<div class="field2">
			<h1>SignUp</h1>
			<p id="boxname2">Name:</p>
		<input type="text" name="name" placeholder="Enter Your Name" class="txtbox2" required><br><br>
			<p id="boxname2">Email:</p>
		<input type="email" name="mail" placeholder="Enter Email Id" class="txtbox2" required><br><br>
			<p id="boxname2">Password:</p>
		<input type="password" name="pass" placeholder="Enter Password" class="txtbox2" required><br><br>
			<p id="boxname2">Confirm Password:</p>
		<input type="password" name="con_pass" placeholder="Confirm Password" class="txtbox2" required><br><br>
		<input type="submit" name="submit2" value="Signup" class="submit2"><br><br>
		<input type="submit" name="back2" class="back2" value="Back"><br>
		</div>
	</form>
	</div>
	<?php 
		include 'connect.php';
		if($_POST["submit2"]){
			$nam=$_POST["name"];
			$mail=$_POST["mail"];
			$pass=$_POST["pass"];
			$con_pass=$_POST["con_pass"];
			if($pass==$con_pass){
				$query="insert into signup values('$nam','$mail','$pass')";
				$data=mysqli_query($connect,$query);
			}
			else{
				// echo "<script>alert('password don\'t match');</script>";
			}
		}
	 ?>
</body>
</html>