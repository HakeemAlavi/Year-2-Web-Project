<?php
	include_once 'header.php';
?>
	<?php
	if (isset($_SESSION["useruid"])) {
				echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
				
			}

	?>
	<br/>
	<h1 style="color:seagreen;">MAIN PAGE</h1>
	<h2 style="color:limegreen;">Personal details</h2>
	<li>Name- Hakeem Alavi</li>
	<li>Age- 19</li>
	<li>Gender- Male</li>
	<li>Place of Birth- Mombasa</li>
	<li>Religion- Islam</li>
	<li>Marital status- Single</li>
	<li>Area of residence- Madaraka, Nairobi</li><br/>

	<h2 style="color:limegreen">Academic Details</h2>
	<a>I am currently studying in Strathmore University. I am in my 2nd year in my course; Bachelor of Business and Information technology, and I am in my first semester.
	<br/> I am currently undertaking seven units composing of six compulsory subjects and one compulsory elective of your choice; my elective is French 1.
	</a><br/>

	<h2 style="color:limegreen">Referees</h2>
	<li>Mentor- Ismail Ateya</li>
	<li>Web Applications' Lecturer- Titus Tunduni</li><br/>

	<h2 style="color:limegreen">Contact Information</h2>
	<li>Phone number- 0717978899</li>
	<li>E-mail- hakeem.alavi@strathmore.edu</li><br/><br/>

<?php
	include_once 'footer.php';
?>