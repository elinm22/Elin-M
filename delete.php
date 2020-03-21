<?php
$conn = new mysqli("localhost","root","","crudphp");
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
// menyimpan data id kedalam variabel
$nim   = $_GET['nim'];
// query SQL untuk insert data
$query="DELETE from biodata where nim='$nim'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:bio.php");
?>