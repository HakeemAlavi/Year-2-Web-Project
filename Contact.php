<?php
	include_once 'header.php';
?>

	<h1 style="color:seagreen">CONTACT DETAILS</h1>
	<h2 style="color:limegreen">My contact details</h2>
	<a>Phone number:</a><br/>
		<a style="color:royalblue">+254 717978899</a>
		<br/><br/>
	<a>E-mail:</a><br/>
		<a style="color:royalblue;">hakeem.alavi@strathmore.edu</a>
		<br/><br/>

	<h2 style="color:limegreen">Referees' Contact Details</h2>
	<a>Mentor- Ismail Ateya:</a><br/>
		<a style="color:royalblue">ismail.ateya@strathmore.edu</a>
		<br/><br/>
	<a>Web Applications' Lecturer- Titus Tunduny:</a><br/>
		<a style="color:royalblue">titus.tunduny@strathmore.edu</a><br/><br/>

		<h2 style="color:limegreen">Query station</h2>
				<form action="register.php" method="post">

			
				
				<label for="firstname">Enter first name</label><br/>
				<input type="text" name="firstname" required placeholder="John"/><br/><br/>

				<label for="lastname">Enter last name</label><br/>
				<input type="text" name="lastname"required placeholder="Doe"/><br/><br/>

				<label for="email">Enter Email</label><br/>
				<input type="email" name="email"required placeholder="john.doe@gmail.com"/><br/><br/>

				<label for="password">Enter Password</label><br/>
				<input type="password" name="password" minlength="5" maxlength="15" /><br/><br/>


				<!--Text Area-->
				<label for="biodata">State your query</label><br/><br/>
				<textarea placeholder="Type here" cols="23" rows="10" name="biodata" ></textarea><br/><br/>

				
				<!--<label>Select the Recepient's E-mail</label><br/><br/>-->
			
					<input type="hidden" name="remail" value="hakeem.alavi@strathmore.edu"/>
			
				<br/><br/>




				<!-- This is where the user submits data-->
				<input type="submit" value="Send query" class="btn btn-success"/>

				<!--Reset form-->
				<input type="reset" value="Clear query" class="btn btn-outline-danger"/>

				</form>
				<br/><br/>

				<button><a href="query.php" alt="Broken Link" class="btn btn-success">Queries sent page</a></button>
		<br/>


		<br/>
		
<?php
	include_once 'footer.php';
?>