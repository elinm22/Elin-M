<?php
$conn = new mysqli("localhost","root","","crudphp");
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
$sql="SELECT * FROM biodata WHERE nim='".$_GET['nim']."'";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>elinmrl</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css1.css">
		<link rel="stylesheet" type="text/css" href="align text.css">
		<link rel="stylesheet" type="text/css" href="sosmed.css">
		 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		 <style type="text/css">
		 	td{
		 		margin: 10px;
		 	}
		 </style>
	</head>
	<body>
		<div class="wrapper">
				<nav>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="galery.html">Gallery</a></li>
						<li><a href="formulir.html" class="current">Form</a></li>
						<li><a href="Tabel.html">Hobby</a></li>
						<li><a href="contact-list.html">Contact List</a></li>
					</ul>
				</nav>
			<section class="courses">
					<hgroup>
						<h2>Ubah Data</h2>
						<h3>Formulir</h3>
					</hgroup>
				<article>
					<?php
						 if($biodata= mysqli_query($conn, $sql)){
						 	if (mysqli_num_rows($biodata)) {
						 		while ($bio=mysqli_fetch_array($biodata)){
									?>
					<form method="POST" action="proses_edit.php">
					<table width="100%" style="padding: 10px">
					<br>
					<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="number" class="form-control" name="nim" size="39" value="<?php echo $bio['nim'];?>" required></td>
					</tr>

					<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="nama" size="39" value="<?php echo $bio['nama'];?>" required></td>
					</tr>

					<tr>
					<td>E-mail</td>
					<td>:</td>
					<td><input type="email" class="form-control" name="email" size="39" value="<?php echo $bio['email'];?>" required></td>
					</tr>

					<tr>
					<td>Tgl Lahir</td>
					<td>:</td>
					<td><input type="date" class="form-control" name="tgl_lahir" size="39" value="<?php echo $bio['tgl_lahir'];?>" required></td>
					</tr>

					<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td ><select name="jk" required>
						<option disabled >Jenis Kelamin</option>
						<option value="Pria" <?php if ($bio['jk']!='Pria') { }else{echo "selected";}?>>Pria</option>
						<option value="Wanita" <?php if ($bio['jk']!='Wanita') { }else{echo "selected";}?>>Wanita</option>
						<option value="null" <?php if ($bio['jk']!='null') { }else{echo "selected";}?>>Rather not to say</option>
					</select></td>
					</tr>

					<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat" class="form-control" rows="3" cols="25" required><?php echo $bio['alamat'];?></textarea></td>
					</tr>

					<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><select size="1" name="jurusan" required="">
					    <option value="TIF" <?php if ($bio['jurusan']!='TIF') { }else{echo "selected";}?>>Teknik Informatika</option>
					    <option value="TM" <?php if ($bio['jurusan']!='TM') { }else{echo "selected";}?>>Teknik Mesin</option>
					    <option value="Sasjep" <?php if ($bio['jurusan']!='Sasjep') { }else{echo "selected";}?>>Sastra Jepang</option>
					    <option value="AK" <?php if ($bio['jurusan']!='AK') { }else{echo "selected";}?>>Akuntansi</option>
					    <option value="Mnj" <?php if ($bio['jurusan']!='Mnj') { }else{echo "selected";}?>>Manajemen</option>
					</select>
				</td>
					</tr>

					<tr>
						<td><br><br></td>
					</tr>
					</table>
					<p><input type="Submit" value="Submit" class="btn btn-primary" style="color: white; padding: 10px">
					</p>
					</form>
				<?php }}} ?>
					</p>
				</article>       
			</section>
            <aside>
				<section class="contact-details" id="social">
					<h2>Contact Person</h2>
						<div class="kt-social-buttons-widget">
						<a href="https://twitter.com/elinm22" class="social-btn-twitter btn" style="width: 200px;">Follow on Twitter <i class="fa fa-twitter"></i> </a>
						<a href="https://www.facebook.com/Elinmrl" class="social-btn-facebook btn" style="width: 200px;">Add on Facebook <i class="fa fa-facebook"></i> </a>
						<a href="https://www.instagram.com/elin.mrl/" class="social-btn-instagram btn" style="width: 200px;">Follow on Instagram <i class="fa fa-instagram"></i> </a>
					</div>
				</section>
			</aside>
			<footer>
				&copy; 2019 Elin Marliana
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
