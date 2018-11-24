<?php
require 'function.php';

// $id_temp = query ("SELECT id FROM customer_table ORDER BY id DESC LIMIT 1 ;");

if(isset($_POST["submit"]) ) {

	if (tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
				<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'index.php';
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
	<title>Create Customer</title>
</head>
<body>
	<div class ="container">
	<h3>Create Customer</h3>
	<form action="" method="post">
				<label for="no_customer">Customer No.</label><br>
				<input type="text" name="no_customer" placeholder="CRM0001" required><br>
				<label for="nama">Name*</label><br>
				<input type="text" name="nama" required><br>
				<label for="alamat">Address*</label><br>
				<input type="text" name="alamat" required><br>
				<label for="no_telepon">Phone*</label><br>
				<input type="text" name="no_telepon" required><br>
				<button type="submit" name="submit" required>Submit</button>
				<a href="index.php">Kembali</a>
	</form>
	</div>
</body>
</html>
