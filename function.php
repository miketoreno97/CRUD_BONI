<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "customer");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$nama = htlmspecialchars($data["nama"]);
	$no_customer = htlmspecialchars($data["no_customer"]);
	$no_telepon = htlmspecialchars($data["no_telepon"]);
	$alamat = htlmspecialchars($data["alamat"]); 

	$query = "INSERT INTO customer_table VALUES ('', '$no_customer', '$nama','$no_telepon','$alamat')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM customer_table WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data['id'];
	$no_customer = htlmspecialchars($data["no_customer"]);
	$nama = htlmspecialchars($data["nama"]);
	$no_telepon = htlmspecialchars($data["no_telepon"]);
	$alamat = htlmspecialchars($data["alamat"]); 

	$query = "UPDATE customer_table SET 
		no_customer = '$no_customer', 
		nama = '$nama', 
		no_telepon = '$no_telepon', 
		alamat = '$alamat'

		WHERE id = $id
	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>
