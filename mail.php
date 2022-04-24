<?php

if (isset($_POST["submit"])) {
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$mailFrom = $_POST["email"];
	$message = $_POST["biodata"];


$mailTo = "hakeem.alavi@strathmore.edu";
$headers = "From:".$mailFrom;
$txt = "You have received an email from".$lname.".\n\n".$message;

mail($mailTo, $message, $txt, $headers);
header("Location: ../webproject/contact.php?mailsend");

}