<?php
$conn = new mysqli("localhost","root","","crudphp");
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

$nim=$_POST['NIM'];
$nama=$_POST['Nama'];
$email=$_POST['email'];
$tgl=$_POST['tgl'];
$jk=$_POST['jk'];
$alamat=$_POST['Alamat'];
$jurusan=$_POST['jurusan'];

echo "$nama <br> $email <br> $nim <br> $tgl <br> $jk <br> $jurusan <br> $alamat <br>";
$sql="INSERT INTO biodata (nim,nama,email,tgl_lahir,jk,alamat,jurusan) values ('$nim','$nama','$email','$tgl','$jk','$alamat','$jurusan')";
if ($conn->query($sql) === TRUE){
    echo "alert('INPUT SUKSES')";
    header('location: bio.php');
}else{
	echo "<script>alert('INPUT GAGAL')</script>";
}
?>