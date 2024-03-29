<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/design.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<?php
	error_reporting(0);
	session_start();
	include('connect.php');
	$name='';

	function search() {

		global $connect,$name;
		$name = $_POST["book"];
		$book_type = array('adventure','comic','detective','fiction','others','poetry','short_stories');
?>
	<div class="book_container">
<?php
		for ($i = 0; $i < sizeof($book_type); $i++) { 

			if(strpos($book_type[$i], strtolower($name))!==false) {
				$query="select * from $book_type[$i]";
			}

			else {
				$query = "select * from $book_type[$i] where Book_name like '%$name%' or Author like '%$name%' ";
			}
			
			$data = mysqli_query($connect,$query);

			while ($val = mysqli_fetch_assoc($data)) {
				echo '<div class="book-background">
                	<img src=../image/'.$val['Cover'].' style="height: 170px; width: 160px;">
                <div class="book-info">
					<span style="visibility: hidden;" id="hidden3">'.$val['Id'].'</span>
                    <span style="visibility: hidden;" id="hidden4">'.$book_type[$i].'</span>
                	<p>'.$val['Author'].'</p>
                </div>
                <div>
                    <a href="cart/cart.php?id='.$val['Id'].' &category='.$book_type[$i].' &userid='.$_SESSION['user']['userid'].'" class="btn btn-success" id="add_to_cart">Add To cart</a>
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
	<script type="text/javascript">
		const fun2 = (i) => {
    		return (e) => {
        		let add2="../php/book-content.php?id=" + book_id2[i].textContent + " &category=" + book_type2[i].textContent;
        		window.location = add2;
    		}
		}
		let book2 = document.querySelectorAll('.book-background img');
		let book_id2 = document.querySelectorAll('#hidden3');
		let book_type2 = document.querySelectorAll('#hidden4');

		for (var i = book2.length - 1; i >= 0; i--) {
    		book2[i].addEventListener('click', fun2(i), false);
		}
	</script>
</body>
</html>