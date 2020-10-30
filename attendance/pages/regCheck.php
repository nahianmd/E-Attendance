<?php

	if(isset($_REQUEST['submit']))
	{

		$name = trim($_REQUEST['name']);
		$pass = trim($_REQUEST['pass']);
		$repass = trim($_REQUEST['repass']);
		$email = trim($_REQUEST['email']);
		$phone = trim($_REQUEST['phone']);
		$type = "user";

		$con = mysqli_connect('localhost', 'root', '', 'project');
		
		$sql_insert = "insert into user(username, email, phone, password, type) values ('$name', '$email', '$phone', '$pass', '$type')";

		$sql_checkUser = "select * from user where username='$name'";
		$sql_checkMail = "select * from user where email='$email'";
		$sql_checkPhone = "select * from user where phone='$phone'";

		/*$result_insert = mysqli_query($con,$sql_insert);*/
		
		/*$result_user = mysqli_query($con,$sql_checkUser);
		$result_mail = mysqli_query($con,$sql_checkMail);
		$result_phone = mysqli_query($con,$sql_checkPhone);*/

		if(empty($name)|| empty($pass)|| empty($email)|| empty($phone))
		{
			header("location: reg.php?error=Must Fill up all Section!");
		}
		else
		{
			if($pass == $repass)
			{
				$result_user = mysqli_query($con,$sql_checkUser);
				$result_mail = mysqli_query($con,$sql_checkMail);
				$result_phone = mysqli_query($con,$sql_checkPhone);
				
				if (mysqli_num_rows($result_user)==1) {
					header("location: reg.php?userError=Username is taken!");
				}

				elseif(mysqli_num_rows($result_mail)==1) {
					header("location: reg.php?mailError=This email is already used!");
				}

				elseif(mysqli_num_rows($result_phone)==1) {
					header("location: reg.php?phoneError=This phone number is already used!");
				}
				else{

					$result_insert = mysqli_query($con,$sql_insert);
					setcookie('name', $name, time()+3600, '/');
					/*header("location: user.php");*/
					header("location: regSuccess.php");
				}
			}
			else
			{
				//echo "pass and repass error";
				header("location: reg.php?repassError=Password didn't match!");
			}
		}

	}
	else
	{
		header('location: reg.php');
	}
?>