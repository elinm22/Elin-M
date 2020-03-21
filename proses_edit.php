<?php 
$conn = new mysqli("localhost","root","","crudphp");
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$sql="UPDATE biodata SET nim='$nim', nama='$nama', email='$email', tgl_lahir='$tgl_lahir', jk='$jk', alamat='$alamat', jurusan='$jurusan'  WHERE nim='$nim'";

if ($conn->query($sql) === TRUE){
	echo "$sql";
    echo "alert('INPUT SUKSES')";
    header('location: bio.php');
}else{
	echo "<script>alert('INPUT GAGAL')</script>";
}
?>