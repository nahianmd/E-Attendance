<?php
session_start();

if(!isset($_COOKIE['name'])){
	header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<!--Font: Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

	<!-- Font: Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

	<!-- Icons: Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Link: CSS -->
	<link rel="stylesheet" type="text/css" href="../styles/admin.css">

	<!-- Link: Javascript -->
	<script type="text/javascript" src="../scripts/admin.js"></script>
</head>
<body onload="record()">
	<!-- Navigation bar -->
	<div class="header" id="header">
		<header>
			<div class="logo">
				<a href="admin.php"></a>
				<!-- <a href="index.php">PROPERTY</a> -->
			</div>
				<ul>
					<li class="link1" id="user"><a href="login.php"><?= $_COOKIE['name']?></a></li>
					<li id="logout"><a href="logout.php">Logout</a></li>
				</ul>
		</header>
	</div>
	<div class="dashboard">
		<input type="button" name="dashboard" value="Dashboard" id="dashboard">
		<input type="button" name="courses" value="Courses">
		<input type="button" name="students" value="Students">
	</div>

	<div class="operation">
		<form method="get" action="showRecord.php">
			<input type="text" id="searchString" name="search" placeholder="Search" onkeyup="ajaxSearch()">

			<input type="button" name="submit" value="Select">
			<input type="text" id="setDay" name="day" placeholder="Today's CLass #">
		</form>
	</div>

	<div class="div-searchRes" id="adminSearchRes">
		<!-- <p>asnbfb</p> -->
	</div>

</body>
</html>