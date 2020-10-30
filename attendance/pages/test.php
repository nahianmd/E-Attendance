<?php 

	if(isset($_POST['fid']))
	{		
		$fid = $_POST['fid'];
		$day ="";

		$con = mysqli_connect('localhost', 'root', '', 'attendance');

		$sql_day = "select * from day";		
		
		$sql_update1 = "update status set day1 = 1 where fid = '$fid'";
		$sql_update2 = "update status set day2 = 1 where fid = '$fid'";
		$sql_update3 = "update status set day3 = 1 where fid = '$fid'";
		$sql_update4 = "update status set day4 = 1 where fid = '$fid'";
		$sql_update5 = "update status set day5 = 1 where fid = '$fid'";
		$sql_update6 = "update status set day6 = 1 where fid = '$fid'";
		$sql_update7 = "update status set day7 = 1 where fid = '$fid'";
		$sql_update8 = "update status set day8 = 1 where fid = '$fid'";
		$sql_update9 = "update status set day9 = 1 where fid = '$fid'";
		$sql_update10 = "update status set day10 = 1 where fid = '$fid'";
		$sql_update11 = "update status set day11 = 1 where fid = '$fid'";
		$sql_update12 = "update status set day12 = 1 where fid = '$fid'";
		
		$res_day = mysqli_query($con, $sql_day);
		
		while($row = mysqli_fetch_assoc($res_day)){
			
			$day = $row["day"];
		}

		switch ($day) {
	    
	    case "1":
	        $res_update = mysqli_query($con, $sql_update1);
	        break;
	    case "2":
	        $res_update = mysqli_query($con, $sql_update2);
	        break;
	    case "3":
	        $res_update = mysqli_query($con, $sql_update3);
	        break;
	    case "4":
	        $res_update = mysqli_query($con, $sql_update4);
	        break;
	    case "5":
	        $res_update = mysqli_query($con, $sql_update5);
	        break;
	    case "6":
	        $res_update = mysqli_query($con, $sql_update6);
	        break;
	    case "7":
	        $res_update = mysqli_query($con, $sql_update7);
	        break;
	    case "8":
	        $res_update = mysqli_query($con, $sql_update8);
	        break;
	    case "9":
	        $res_update = mysqli_query($con, $sql_update9);
	        break;
	    case "10":
	        $res_update = mysqli_query($con, $sql_update10);
	        break;
	    case "11":
	        $res_update = mysqli_query($con, $sql_update11);
	        break;
	    case "12":
	        $res_update = mysqli_query($con, $sql_update12);
	        break;
	    default:
	        echo "Your favorite color is neither red, blue, nor green!";
		}


		
	}

	else
	{
		echo "Man you are close... Try a little bit!";

	}