<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.erro {color: red};
	</style>
</head>
<body>
<div class="container">
	<br>
	<h2>Tambah Data</h2>
	<br>
	
	<?php
		include ("add.php");
	?>

	<div class="col-md-6">
		<form method="post" action="form.php" autocomplete="off">
        <div class="form-group">
				<label for="cashier">Cashier</label>
				<input class="form-control" type="text" name="cashier" id="cashier">
			</div>
			<div class="form-group">
				<label for="product">Product</label>
				<input class="form-control" type="text" name="product" id="product">
			</div>
            <div class="form-group">
				<label for="category">Category</label>
				<input class="form-control" type="text" name="category" id="category">
			</div>
			<div class="form-group">
				<label for="prince">Prince</label>
				<input class="form-control" type="text" name="prince" id="prince">
			</div>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
			<a href="index.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>   