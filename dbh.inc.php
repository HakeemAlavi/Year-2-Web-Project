<?php
	$servername = 'localhost';

	$dbUsername = 'root';

	$serverpass = '';

	$databasename = 'webproject';

	$conn = mysqli_connect($servername,$dbUsername,$serverpass,$databasename);

	if(!$conn){
		die("Connection Error" . mysqli_connect_error());
	}
	