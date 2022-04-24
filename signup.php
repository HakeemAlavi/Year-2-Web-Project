<?php
	include_once 'header.php';
?>
	<h2 style="color:limegreen">Sign up</h2>
	<form action="signup.inc.php" method="post">
	
	<input type="text" name="name" placeholder="John Doe"><br/><br/>
	<input type="text" name="email" placeholder="john.doe@gmail.com"><br/><br/>
	<input type="text" name="uid" placeholder="Username"><br/><br/>
	<input type="password" name="pwd" placeholder="Password"><br/><br/>
	<input type="password" name="pwdrepeat" placeholder="Repeat Password"><br/><br/>
	<button type="submit" name="submit" class="btn btn-success">Sign up</button>
<br/><br/>
	<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			else if ($_GET["error"] == "invaliduid"){
				echo "<p>Choose a proper username!</p>";
			}
			else if ($_GET["error"] == "invalidemail"){
				echo "<p>Choose a proper email!</p>";
			}else if ($_GET["error"] == "passwordsdontmatch"){
				echo "<p>Passwords do not match!</p>";
			}else if ($_GET["error"] == "stmtfailed"){
				echo "<p>Something went wrong, Try again!</p>";
			}
			else if ($_GET["error"] == "usernametaken"){
				echo "<p>Username already taken!</p>";
			}
			else if ($_GET["error"] == "none"){
				echo "<p>You have signed up!</p>";
			}
		}

	?>

<?php
	include_once 'footer.php';
?>