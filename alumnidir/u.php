<!DOCTYPE html>
<html>
<head>
	<title>Alumni Directory</title>
	<style type="text/css">
		body {
			background-color: white;
			font-family: Arial, sans-serif;
		}
		table {
			border-collapse: collapse;
			margin: 20px auto;
			background-color: white;
			box-shadow: 0 0 20px rgba(0,0,0,0.15);
		}
		th, td {
			padding: 10px;
			border: 1px solid black;
			text-align: center;
		}
		th {
			background-color: gold;
			color: white;
		}
		a {
			color: white;
			text-decoration: none;
			margin: 20px auto;
			display: block;
			width: 100px;
			padding: 10px;
			background-color: gold;
			text-align: center;
			border-radius: 5px;
		}
		a:hover {
			background-color: #4169e1;
		}
	</style>
</head>
<body>
	<?php
		$con = mysqli_connect('localhost','id19075547_localhost', 'Jh/NuIPn+Ds}4\o4','id19075547_mp');

		$se="select * from alumnidir where rno='" . $_POST['rno'] ."' ";

		$res=mysqli_query($con,$se);
		echo"<table>";
		echo "<tr><th>NAME</th><th>R.NO</th><th>GENDER</th><th>DEPT</th><th>BLOOD TYPE</th><th>YEAR OF JOINING</th><th>YEAR OF GRADUATION</th><th>PHONENO</th><th>MAIL ID</th><th>CGPA</th><th>NO.OF OFFERS</th><th>CURRENT CITY OF RESIDENCE</th><th>CURRENT COUNTRY OF RESIDENCE</th><th>CURRENT DESIGNATION</th><th>CURRENT PLACE OF WORK</th></tr>";

		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>
				<td>" . $row["name"] ."</td><td>" . $row["rno"] . "</td><td>" . $row["gender"] ."</td><td>". $row["dept"] . 
				"</td><td>" . $row["bt"] ."</td><td>" . $row["yoj"] . "</td><td>" . $row["yog"] ."</td><td>"
				. $row["phoneno"]."</td><td>"
				. $row["email"] ."</td><td>" . $row["cgpa"] ."</td><td>" . $row["noo"] .
				"</td><td>" . $row["cior"] ."</td><td>" . $row["cor"] ."</td><td>" . $row["cd"] ."</td><td>" . $row["cpow"] .
				"</td></tr>";
		}
		echo"</table>";
	?>
	<a href="index.html">Back to Home</a>
</body>
</html>