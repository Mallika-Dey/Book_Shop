<?php
	function displayBook($category,$data)	{
		echo '<table>
			<thead>
				<th>Delete</th>
				<th>Book_name</th>
				<th>Author</th>
				<th>Price</th>
			</thead>
			<tbody>';

		while ($val=mysqli_fetch_assoc($data)) {
			echo '<tr><td><a href="delete.php?id='.$val['Id']. '&category='.$category.'">';
			echo '<img src="../image/delete.png" style="border-radius: 50px;"></a></td>
			<td>'.$val["Book_name"].'</td>
			<td>'.$val["Author"].'</td>
			<td>'.$val["Price"].'</td></tr>';
		}
		echo '</tbody>
		</table>';
	}
?>