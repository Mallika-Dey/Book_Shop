<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/design.css">
</head>
<body>

<?php
	error_reporting(0);
	include('connect.php');
	$name='';

	function search() {

		global $connect,$name;
		$name=$_POST["book"];
		$book_type=array('adventure','comic','detective','fiction','others','poetry','short_stories');
?>
	<div class="book_container">
<?php
		for ($i=0; $i < sizeof($book_type); $i++) { 

			if(strpos($book_type[$i], strtolower($name))!==false) {
				$query="select * from $book_type[$i]";
			}

			else {
				$query = "select * from $book_type[$i] where Book_name like '%$name%' or Author like '%$name%' ";
			}
			
			$data=mysqli_query($connect,$query);

			while ($val = mysqli_fetch_assoc($data)) {
				echo '<div class="book-set">
                <img src=../image/'.$val['Cover'].' style="height: 170px; width: 160px;">
                <div class="book-info">
                	<p>'.$val['Author'].'</p>
                </div>
                <div class="add_to_cart">
                    <img src="../image/cart.png" style= "height: 70px; width: 160px">
                </div>
                </div>';
			}
		}

	}

	if(isset($_POST['search'])) {
		search();
	}
?>
	</div>
</body>
</html>