<!DOCTYPE html>
<html>
<head>
	<title>Book Information</title>
</head>
<body>
	<?php
	  $sino = $_POST['sino'];
	  $bname = $_POST['name'];
	  $pubname = $_POST['publisher'];
	  $price = $_POST['price'];
	  $qty = $_POST['qty'];
	?>

	<center>
		<h3> Book Data </h3>
		<table border="1">
			<tr>
				<th>Si.no</th>
				<th>Book name</th>
				<th>Publisher</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>

			<tr>
				<td><?php print($sino); ?></td>
				<td><?php print($bname); ?></td>
				<td><?php print($pubname);?></td>
				<td><?php print($price);?></td>
				<td><?php print($qty);?></td>
			</tr>
		</table>
	</center>

</body>
</html>