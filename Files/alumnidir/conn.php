<!DOCTYPE html>
<html>
<head>
	<title>Alumni Directory</title>
	<style>
		body {
			background-color: purple;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: white;
			text-align: center;
			margin-top: 50px;
		}
		table {
			background-color: white;
			margin: auto;
			margin-top: 20px;
			border-collapse: collapse;
		}
		th, td {
			padding: 10px;
			border: 1px solid black;
			text-align: center;
		}
		button {
			background-color: white;
			color: black;
			padding: 10px;
			border: none;
			border-radius: 5px;
			font-weight: bold;
			margin-top: 20px;
			margin-bottom: 50px;
		}
		button:hover {
			background-color: #ddd;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<?php
		$yoj = $_POST['yoj'];
		$dept = $_POST['dept'];
		$con = mysqli_connect('localhost', 'id19075547_localhost', 'Jh/NuIPn+Ds}4\o4', 'id19075547_mp');
		$se = "select * from alumnidir where yoj='" . $_POST['yoj'] . "' and dept='" . $_POST['dept'] . "'";
		$res = mysqli_query($con, $se);
		echo "<h1>Alumni Directory</h1>";
		echo "<table>";
		echo "<tr><th>NAME</th><th>R.NO</th><th>GENDER</th><th>DEPT</th><th>BLOOD TYPE</th><th>YEAR OF JOINING</th><th>YEAR OF GRADUATION</th><th>PHONENO</th><th>MAIL ID</th><th>CGPA</th><th>NO.OF OFFERS</th><th>CURRENT CITY OF RESIDENCE</th><th>CURRENT COUNTRY OF RESIDENCE</th><th>CURRENT DESIGNATION</th><th>CURRENT PLACE OF WORK</th></tr>";
		while ($row = mysqli_fetch_assoc($res)) {
			echo "<tr>
			<td>" . $row["name"] . "</td><td>" . $row["rno"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["dept"] . "</td><td>" . $row["bt"] . "</td><td>" . $row["yoj"] . "</td><td>" . $row["yog"] . "</td><td>" . $row["phoneno"] . "</td><td>" . $row["email"] . "</td><td>" . $row["cgpa"] . "</td><td>" . $row["noo"] . "</td><td>" . $row["cior"] . "</td><td>" . $row["cor"] . "</td><td>" . $row["cd"] . "</td><td>" . $row["cpow"] . "</td></tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
	<button onclick="location.href='index.html'">Back to Home</button>
</body>
</html>
