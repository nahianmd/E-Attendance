<!-- <form>
	<table align="center">
		<tr>
			<td>
				<?php
	
					if(isset($_GET['error']))
					{
						echo $_GET['error'];
					}
					elseif(isset($_GET['success']))
					{
						echo $_GET['success'];
					}
				?>

			</td>
		</tr>
		
	</table>
</form> -->





<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../styles/sign.css">
</head>
<body>
	<div class="sign">
		<form method="post" action="logCheck.php">
			<div id="error-php">
				<p class="error-text"><?php
					if(isset($_GET['error']))
					{
						echo $_GET['error'];
					}
				?></p>
			</div>
			<p id="title">Attendance</p><br>
			<input type="text" name="username" placeholder="Username">
			<div id="user-error"></div>
			<input type="password" name="password" placeholder="Password">
			<div id="pass-error"></div>
			
			<table class="remember">
				<tr>
					<td><input type="checkbox" name="remember" value="1" align="left" class="remember" id="remember"></td>
					<td>Remember me</td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="Sign in">
			<p id="forgot" align="center"><a href="forgot.php">Forgot Password?</a></p>
			
			<p id="signUp" align="center">Don't have an account? <a href="">Create an account</a></p>
	</form>
	</div>

	
</body>
</html>