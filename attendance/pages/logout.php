<?php
	
	setcookie('name', '', time()-30, '/');
	header('location: login.php');

?>