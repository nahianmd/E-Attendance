<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../styles/sign.css">
</head>
	<body>
		<p id="home"><a href="../index.php">Home</a></p>
		<div class="sign">
			<form method="post" action="regCheck.php" >
				<div id="error-php">
					<p class="error-text"><?php
						if(isset($_GET['error']))
						{
							echo $_GET['error'];
						}
					?></p>
				</div>

				<p id="title">Property</p>
				<input type="text" name="name" placeholder="Username" id="name">
				
				<div class="error-js" id="error-user">
					<p class="error-text"><?php
						if(isset($_GET['userError']))
						{
							echo $_GET['userError'];
						}
					?></p>
				</div>

				<input type="text" name="email" placeholder="Email" id="email">
				
				<div class="error-js" id="error-mail">
					<p class="error-text"><?php
						if(isset($_GET['mailError']))
						{
							echo $_GET['mailError'];
						}
					?></p>
				</div>

				<input type="text" name="phone" placeholder="Phone" id="phone">
				
				<div class="error-js" id="error-phone">
					<p class="error-text"><?php
						if(isset($_GET['phoneError']))
						{
							echo $_GET['phoneError'];
						}
					?></p>
				</div>

				<input type="password" name="pass" placeholder="Password" id="pass">
				
				<div class="error-js" id="error-pass">
					<!-- <p class="error-text"><?php
						//if(isset($_GET['error']))
						{
						//	echo $_GET['error'];
						}
					?></p> -->
				</div>

				<input type="password" name="repass" placeholder="Re-enter Password" id="repass">
				
				<div class="error-js" id="error-repass">
					<p class="error-text"><?php
						if(isset($_GET['repassError']))
						{
							echo $_GET['repassError'];
						}
					?></p>
				</div>

				<br><p></p>

				<input type="submit" name="submit" value="Sign Up">
				<p id="signIn" align="center">Already have an account? <a href="login.php">Sign in</a></p>
			</form>
		</div>
	</body>
</html>
