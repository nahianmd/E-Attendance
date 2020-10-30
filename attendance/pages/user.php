<?php
session_start();

if(!isset($_COOKIE['name'])){
	header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="home.css">

	<script type="text/javascript" src="home.js"></script>
</head>
<body>
	<!-- Navigation bar -->
	<div class="header" id="header">
		<header>
			<div class="logo">
				<a href="user.php"><img src="background/logo.png"></a>
				<!-- <a href="index.php">PROPERTY</a> -->
			</div>
				<ul>
					<li class="link1"><a href="upload.php">Post ad</a></li>
					<li class="link1" id="user"><a href="login.php"><?= $_COOKIE['name']?></a></li>
					<li id="logout"><a href="logout.php">Logout</a></li>
				</ul>
		</header>
	</div>

	<!-- Search Box -->
	<div class="div1">
		<div class="search">
			<form>
				<p id="head-line">Make yourself at home</p>
				<p id="tag-line">Search properties for sale and for rent in Bangladesh</p><p></p>
				<input type="text" id="location" name="location" placeholder="Where"><p></p>
				<input type="submit" name="submit" value="Search">
				<div class="category">
					<select name="type" id="home-select">
						<option value="null" selected="selected" >Select a type</option>
						<option value="residence">Residence</option>
						<option value="office">Office</option>
						<option value="shop">Shop</option>
						<option value="convention">Convention</option>
						<option value="plot">Plot</option>
						<option value="transport">Transport</option>
					</select>
				</div>
			</form>
		</div>
	</div>


	<!-- About us -->
	<div class="div2">
		<p class="title">About us</p>
		<p id="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<p class="title">Our Services</p><br>

	<div class="grid-wrapper">
		<div class="grid-text" id="grid-text1">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="grid-image" id="grid-image1">

		</div>
		<div class="grid-image" id="grid-image2">
			
		</div>
		<div class="grid-text" id="grid-text2">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="grid-text" id="grid-text3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="grid-image" id="grid-image3">
			
		</div>
		<div class="grid-image" id="grid-image4">
			
		</div>
		<div class="grid-text" id="grid-text4">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="grid-text" id="grid-text5">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="grid-image" id="grid-image5">
			
		</div>
		<div class="grid-image" id="grid-image6">
			
		</div>
		<div class="grid-text" id="grid-text6">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<p class="title">Thank you</p>

	<div class="footer">
		<div class="logo">
				<a href="index.php"><img src="background/logo.png"></a>
		</div>

		<ul id="first">
			<li><p>X-men</p><br></li>
			<li>Wolverine</li>
			<li>Professor X</li>
			<li>Magneto</li>
			<li>Storm</li>
			<li>Jean</li>
			<li>Quick Silver</li>
		</ul>
		<ul>
			<li><p>Guardians</p><br></li>
			<li>Star Lord</li>
			<li>Rocket</li>
			<li>Groot</li>
			<li>Gamora</li>
			<li>Drax</li>
		</ul>
		<ul>
			<li><p>Avengers</p><br></li>
			<li>Nick Fury</li>
			<li>Captain America</li>
			<li>Iron-man</li>
			<li>Hulk</li>
			<li>Thor</li>
			<li>Hawkeye</li>
			<li>Black Widow</li>
		</ul>
		<ul>
			<li><p>Game of thrones</p><br></li>
			<li>John Snow</li>
			<li>Tyrion</li>
			<li>Arya</li>
			<li>Jaime</li>
			<li>Brienne</li>
		</ul>

		<div class="icons">
			<ul>
				<li><a><i class="fab fa-facebook-f"></i></a></li>
				<li><a><i class="fab fa-twitter"></i></a></li>
				<li><a><i class="fab fa-google-play"></i></a></li>
				<li><a><i class="fab fa-google-plus-g"></i></a></li>
				<li><a><i class="fab fa-linkedin-in"></i></a></li>
			</ul>
		</div>
	</div>
</body>
</html>
