<?php
	
	
	$con = mysqli_connect('localhost', 'root', '', 'attendance');
	$sql = "select * from status";
	$res = mysqli_query($con, $sql);

	$data = "<table border='1' width='100%' style='text-align: center;'>
			<tr>
				<td>Name</td>
				<td>ID</td>
				<td>Day 1</td>
				<td>Day 2</td>
				<td>Day 3</td>
				<td>Day 4</td>
				<td>Day 5</td>
				<td>Day 6</td>
				<td>Day 7</td>
				<td>Day 8</td>
				<td>Day 9</td>
				<td>Day 10</td>
				<td>Day 11</td>
				<td>Day 12</td>
			</tr>";

	while($row = mysqli_fetch_assoc($res)){
		$data .= "<tr>
					<td>".$row['name']."</td>
					<td>".$row['id']."</td>
					<td>".$row['day1']."</td>
					<td>".$row['day2']."</td>
					<td>".$row['day3']."</td>
					<td>".$row['day4']."</td>
					<td>".$row['day5']."</td>
					<td>".$row['day6']."</td>
					<td>".$row['day7']."</td>
					<td>".$row['day8']."</td>
					<td>".$row['day9']."</td>
					<td>".$row['day10']."</td>
					<td>".$row['day11']."</td>
					<td>".$row['day12']."</td>

				</tr>";
	}
	$data .= "</table>"; 

	echo $data;

?>