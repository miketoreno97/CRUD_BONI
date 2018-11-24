<?php
require 'function.php';
$ableh = query("SELECT * FROM customer_table");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman utama</title>
</head>
<body>

<h1>Daftar customer</h1>

<a href="tambah.php">Tambah data customer</a>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>Id.</th>
		<th>Aksi</th>
		<th>Nomor pelanggan</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Nomor Telepon</th>
	</tr>

	<?php foreach( $ableh as $row) : ?>
	
	<tr>
		<td><?= $row["id"]?></td>
		<td><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?= $row["no_customer"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
		<td><?= $row["no_telepon"]; ?></td>
	</tr>
<?php endforeach; ?>

</body>
</html>
