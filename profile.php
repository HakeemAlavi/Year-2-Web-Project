<?php

	include_once 'header.php';
?>

<h1 style="color:seagreen;">USER PROFILE</h1>



<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_SESSION["useruid"])) {
				echo '<img src="defaultpp.jpg" alt="icon" style="width:65px;height:65px;"/>';
				echo '<br><br>';
				echo "<p> Name: " . $_SESSION["name"] . "</p>";
				echo "<p> E-mail: " . $_SESSION["email"] . "</p>";
				echo "<p> UID: " . $_SESSION["useruid"] . "</p>";
				echo "<p> ID: " .$_SESSION["userid"] . " </p>";
				
			}


	include_once 'footer.php';
?>