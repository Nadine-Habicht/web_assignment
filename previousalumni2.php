<?php

$connection = mysqli_connect("localhost", "root", "", "web_assignment");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM alumni_registration";
$result = $connection->query($sql);



//display results
if ($result->num_rows > 0) {
		//output data of each row
		while($row = $result->fetch_assoc()) {
					echo "<table border='1px'>
				<tr>
					<th>First name</th><th>Last name</th>
					<th>Year of enrolment</th><th>Year of graduation</th>
					<th>Headmaster(mistress)</th><th>Famous teacher</th>
					<th>Summary of results</th><th>Current occupation</th>
					<th>Address</th><th>Email</th>
					<th>Mobile number</th>
				</tr>
				<tr>
					<td> {$row['fname']} </td><td> {$row['lastname']} </td>
					<td></td><td></td>
					<td></td><td></td>
					<td></td><td></td>
					<td></td><td></td>
				</tr>
		</table>"; 
			}
	} else {
		echo ("0 result");//not sure
	}

?>