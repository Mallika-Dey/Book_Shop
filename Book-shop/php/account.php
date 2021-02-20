<?php  
	error_reporting(0);
	include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	  <div id="form">
	  	<h2><?php echo $_SESSION["user"]["Username"]; ?></h2>
	  	<form action="account.php" method="POST">
	  		<input type="text" name="address">
	  	</form>
	  </div>
      <?php  

	  ?>
</body>
</html>