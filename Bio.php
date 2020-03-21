<?php
$conn = new mysqli("localhost","root","","crudphp");
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
$sql="SELECT * FROM biodata";
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
		 	td,th{
		 		padding: 5px;
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
						<h2>Biodata</h2>
					
					</hgroup>
				<article>
					<table border="1" style="padding: 5px; margin: 5px;" class="col-lg-11" >
						<th>NIM</th>
						<th>Nama</th>
						<th>E-mail</th>
						<th>Tanggal Lahir</th>
						<th>Jenis kelamin</th>
						<th>Alamat</th>
						<th>Jurusan</th>
						<th>Aksi</th>

						<?php
						if($biodata= mysqli_query($conn, $sql)){
							if (mysqli_num_rows($biodata)) {
								while ($bio=mysqli_fetch_array($biodata)){
									echo "<tr>";
									echo "<td>".$bio['nim']."</td>";
									echo "<td>".$bio['nama']."</td>";
									echo "<td>".$bio['email']."</td>";
									echo "<td>".$bio['tgl_lahir']."</td>";
									echo "<td>".$bio['jk']."</td>";
									echo "<td>".$bio['alamat']."</td>";
									echo "<td>".$bio['jurusan']."</td>";
									echo "<td><a class='btn btn-info' style='color:white; padding:5px;width:50px' href='edit.php?nim=".$bio['nim']."'>Edit</a><a class='btn btn-danger' style='color:white; padding:5px; width:50px' href='delete.php?nim=".$bio['nim']."'>Delete</a></td>";
									echo "</tr>";
								}
							}
						}
						?>
					</table>
				</article>
			</section>
            <aside>
				<section class="contact-details" id="social">
					<h2>Contact Person</h2>
						<div class="kt-social-buttons-widget">
						<a href="https://twitter.com/elinm22" class="social-btn-twitter btn" style="width: 200px;">Follow on Twitter <i class="fa fa-twitter"></i> </a>
						<a href="https://www.facebook.com/Elinmrl" class="
						social-btn-facebook btn" style="width: 200px;">Add on Facebook <i class="fa fa-facebook"></i> </a>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

