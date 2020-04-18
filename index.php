<!DOCTYPE html>
<html>
<head>
    <title>Tech Academy</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>

<div class="container">
	<br>
	<a href="form.php" class="btn btn-warning" >Add</a>
	<br>
	<br>
	<table class="table tab-striped" >
		<thead>
		<tr class="btn-warning">
			<th>No</th>
			<th>Cashier</th>
			<th>Product</th>
			<th>Category</th>
            <th>Prince</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from product");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td><?php echo $d['no']; ?></td>
				<td><?php echo $d['cashier']; ?></td>
				<td><?php echo $d['product']; ?></td>
				<td><?php echo $d['category']; ?></td>
				<td><?php echo $d['prince']; ?></td>
				<td><img  src="image/edit.png" href="form.php"  height="25" width="25"/> <img src="image/delete.png" href="form.php"  height="25" width="25"/> </td>
				
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>

   
</div>
</body>
</html>
