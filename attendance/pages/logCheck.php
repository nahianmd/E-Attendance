<?php

	if(isset($_POST['submit']))
	{		
		$uname 		= trim($_POST['username']);
		$password 	= trim($_POST['password']);
		$admin		= "admin";
		$user 		= "user";

		$con = mysqli_connect('localhost', 'root', '', 'project');
		
		$sql_admin = "select * from user where username='$uname' And password='$password' And type='$admin'";
		
		$res_admin = mysqli_query($con,$sql_admin);

		$sql_user = "select * from user where username='$uname' And password='$password' And type='$user'";
		
		$res_user = mysqli_query($con,$sql_user);


		if(empty($uname) == true || $password == ""){
			
			header('location: login.php?error=Must Fill up all section!');

		}
		else
		{
			if(mysqli_num_rows($res_user)==1)
			{
				setcookie('name', $uname, time()+3600, '/');
				header('location: user.php');
			}
			elseif (mysqli_num_rows($res_admin)==1) {
				setcookie('name', $uname, time()+3600, '/');
				header('location: admin.php');
			}
			else
			{
				header('location: ../login.php?error=Invalid User!');
			}
		}
	}

	else
	{
		// /echo "invalid request!";

		header('location: ../login.php');
	}
?>






