<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet"  href="style.css">

	<meta charset="utf-8">
	<title class="fw-bolder">PERSONAL RESUME (1)</title>
	<style type="text/css">
		#main-body{
			
			background-color: floralwhite;
			
			font-family:'Trebuchet MS', sans-serif;
			text-align: left;
			margin: 7px;
		}
		#image1{
			position: absolute;
			right: 0;
			top: 0;
		}
		*{
		margin: 0;
		padding: 0;
		}

		body{
		background-color: #eee;

		}
		nav{
		width: 100%;
		height: 90px;
		background-color: #fff;
		margin: 0px;
		}

		ul{
		margin-left: 60px;

		}

		ul li{
		list-style: none;
		display: inline-block;
		float: left;
		line-height: 100px;
		
		}

		ul li a{
		display: block;
		text-decoration: none;
		font-size: 14px;
		font-family: arial;
		color: #1e1e1e;
		padding: 0 20px;
		font-weight: bold;
		}

		ul li a:hover{
		
		color: limegreen;
		
		}

	</style>


</head>
<body id="main-body">
<body>	

<nav>
<div class="wrapper">
<ul>
	<li><a href="mainpage.php">Main page</a></li>
	<li><a href="portfoliopage.php">Portfolio page</a></li>
	<li><a href="Contact.php">Contact page</a></li>
	<li><a href="hobbies.php">Hobbies page</a></li>

		<?php
			if (isset($_SESSION["useruid"])) {
				echo "<li><a href='profile.php'>Profile page</a></li>";
				echo "<li><a href='logout.inc.php'>Log out</a></li>";
			}
			else{
				echo "<li><a href='signup.php'>Sign up page</a></li>";
				echo "<li><a href='login.php'>Login Page</a></li>";
			}
		?>

	
</ul>
</div>
</nav>

<div id="image1">
	<image src="Strathmore logo.png" alt="first image" style="width:300px;height:115px;"/>
</div>
<br/>