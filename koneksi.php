<?php
	$connection = new mysqli("localhost","root","","crudphp");
	if(!$connection){
		echo "connection error!";
		exit();
	}