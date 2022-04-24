<?php
	include_once 'header.php';
?>
	<h2 style="color:limegreen">Login</h2>
	<form action="login.inc.php" method="post">
	
	<input type="text" name="uid" placeholder="Username/Email"><br/><br/>
	
	<input type="password" name="pwd" placeholder="Password"><br/><br/>
	
	<button type="submit" name="submit" class="btn btn-success">Login</button>

<br/><br/>
	<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			else if ($_GET["error"] == "wronglogin"){
				echo "<p>Incorrect login information!</p>";
			}
		}

	?>
	

<?php
	include_once 'footer.php';
?>