<?php
require 'function.php';

// $id_temp = query ("SELECT id FROM customer_table ORDER BY id DESC LIMIT 1 ;");
//ambil data di URL
$id = $_GET["id"];
//query data customer berdasarkan id
$cust = query("SELECT * FROM customer_table WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

	if ( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
				<script>
					alert('data gagal diubah!');
					document.location.href = 'index.php'
				</script>
		";
		echo mysqli_error($conn);
	}
}
?>

<link href="style.css" rel="stylesheet" type="text/css" />

<!DOCTYPE html>
<html>
<head>
	<title>Edit Customer</title>
</head>
<body>
	<div class ="container">
	<h3>Edit Customer</h3>
	<form action="" method="post">
				<input type="hidden" name="id" value="<?= $cust["id"]; ?>"><br>
				<label for="no_customer">Customer No.</label><br>
				<input type="text" name="no_customer" required value="<?= $cust["no_customer"]; ?>"><br>
				<label for="nama">Name*</label><br>
				<input type="text" name="nama" required value="<?= $cust["nama"]; ?>"><br>
				<label for="no_telepon">Phone*</label><br>
				<input type="text" name="no_telepon" required value="<?= $cust["no_telepon"]; ?>"><br>
				<label for="alamat">Address*</label><br>
				<input type="text" name="alamat" required value="<?= $cust["alamat"]; ?>"><br>
				<button type="submit" name="submit" required value="">Edit</button>
				<a href="index.php">Kembali</a>
	</form>
	</div>
</body>
</html>
