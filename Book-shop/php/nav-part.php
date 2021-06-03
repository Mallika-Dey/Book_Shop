<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/nav-part.css">
</head>
<body>
	<nav>
        <div class="logo">
            <h4>Book Shop</h4>
        </div>
        <ul class="nav-links">
            <?php 
            	if(!isset($_SESSION['user'])) {
            		echo '<li><a href="../index.php" class="dif-color">Home</a></li>';
            	}
            	else if($_SESSION['user']['User_type']=="admin") {
            		echo '<li><a href="../admin_home.php" class="dif-color">Home</a></li>';
            	}
            	else if($_SESSION['user']['User_type']=="user") {
            		echo '<li><a href="../user_home.php" class="dif-color">Home</a></li>';
            	}

            ?>
            <li><a href="#" class="dif-color">About</a></li>
            <li><a href="#" class="dif-color">Contact</a></li>
        </ul>
 
    </nav>
</body>
</html>