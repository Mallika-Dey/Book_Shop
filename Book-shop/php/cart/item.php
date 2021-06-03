<?php
	include('../connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <meta name="pragma" content="no-cache" /> -->
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/item.css">
</head>
<body>

	<?php include("../nav-part.php");?>
	<div class="item-content">
	<?php 
		$userid = $_GET['userid'];
		$query = "SELECT Id, Quantity, category from cart where userid='$userid'";
		$data = mysqli_query($connect,$query);
		$id="";
		$j=0;
		echo "<div class='cart-item'>";
		
		while ($val = mysqli_fetch_assoc($data)) {
			$category = $val['category'];
			$id = $val['Id'];
			$quantity = $val['Quantity'];
			$item = "SELECT * from $category where Id='$id'";
			$data2 = mysqli_query($connect,$item);
			$container = mysqli_fetch_assoc($data2);
			echo "<div class='book-information'><img src=../../image/".$container["Cover"]." style='height: 100px; width:100px;'>";
			echo '<p>'.$container['Author'].'<br><span id="price">'.$container['Price'];
			echo '</span><br><a class="btn btn-danger" href="update_item.php?quantity='.(0).' &id='.$id.' &userid='.$userid.'">Remove</a></p>';
			echo '
				  	<div id="change-quantity"><a class="btn btn-primary" style="height: 30px;" href="update_item.php?quantity='.($quantity-1).' &id='.$id.' &userid='.$userid.'">-</a>&nbsp&nbsp<span id="text">'.$quantity.'</span>&nbsp&nbsp<a class="btn btn-secondary" style="height: 30px;" href="update_item.php?quantity='.($quantity+1).' &id='.$id.' &userid='.$userid.'">+</a>
				  </div>';
			echo "</div>";
		}

		echo '</div>';
	?>
	<div class="total-cart-item">
		<table class="table table-striped">
 			<tbody>
    			<tr>
      				<td>Price details</td>
    			</tr>
    			<tr>
      				<td>Price(<span id="display-total-items"></span>)items: &#2547;<span class="display-price"></span>
      					<br>Delivery Charges: Free</td>
    			</tr>
    			<tr>
     				<td>Amount Payable: &#2547;<span class="display-price"></span></td>
    			</tr>
  			</tbody>
		</table>
		
	</div>

	</div>
	<script type="text/javascript" src="../../javascript/item.js"></script>
	
</body>
</html>