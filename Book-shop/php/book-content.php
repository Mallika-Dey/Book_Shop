<?php  
	include("connect.php");
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/book-content.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

</head>
<body>
	<nav>
        <div class="logo">
            <h4>Book Shop</h4>
        </div>
        <ul class="nav-links">
            <?php 
            	if(!isset($_SESSION['user'])) {
            		echo '<li><a href="index.php" class="dif-color">Home</a></li>';
            	}
            	else if($_SESSION['user']['User_type']=="admin") {
            		echo '<li><a href="admin_home.php" class="dif-color">Home</a></li>';
            	}
            	else if($_SESSION['user']['User_type']=="user") {
            		echo '<li><a href="user_home.php" class="dif-color">Home</a></li>';
            	}

            ?>
            <li><a href="#" class="dif-color">About</a></li>
            <li><a href="#" class="dif-color">Contact</a></li>
        </ul>
 
    </nav>
	<?php  
		$id = $_GET["id"];
		$category = $_GET["category"];
		$query = "SELECT * from $category Where id='$id'";
		$data = mysqli_query($connect,$query);

		$val = mysqli_fetch_assoc($data);
		echo '<div id="book-content">';

		echo '<img src=../image/'.$val['Cover'].' style="height: 170px; width: 160px;">';
			
		echo "<div class='book-content-info'>
			<p>".$val['Book_name']."</p>
			<p>".$val['Author']."</p>
			<p>&#2547;".$val['Price']."</p></div>";

		echo '</div>';
		
	?>
	<div class="summary">
		<p>Summary</p>
		<?php

			function editSummary($category,$id)
			{
			  	//update summary
			  	global $connect;
			  	$text = mysqli_real_escape_string($connect,$_POST['summary']);
				$query = "UPDATE $category SET Summary='$text' where Id='$id'";
				$data = mysqli_query($connect,$query);
				$add="../php/book-content.php?id=" + $id + " &category=" + $category;	
				header($add);		

			}  
			if(isset($_SESSION['user']) && $_SESSION['user']['User_type']=='admin') {
				echo '<form method="POST">
					<input type="text" name="summary" placeholder="'.$val['Summary'].'" class="book-summary-admin"><br><br>';
				echo '<input type="submit" name="update" class="btn-design" value="Save">
					</form>';
				if(isset($_POST['update'])) {
					editSummary($category,$id);
				}
			}
			else {

				echo '<p class="book-summary">'.$val['Summary'].'</p>';
			}
		?>
	</div>

</body>
</html>