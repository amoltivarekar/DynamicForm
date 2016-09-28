
<?php

	include'DBConnection.php';
	$select = "select ID from FORMS";
	$values=mysqli_query($conn,$select);
?>

<html>
	<head>
		<title>
			GetForm
		</title>

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style3.css" type="text/css">
	</head>
	<body>
		<center>
			<form action="FatchForm.php" method="POST" name="GetForm">
				<table >
					<tr>
						<td>
							<h3>
								Select Your Form ID Number : 
							</h3>
						</td>
					</tr>
					<tr>
						<td>
							<select name="idnumber">
							<?php
								while($row=mysqli_fetch_array($values))
								{
									echo "<option>".$row['ID']."</option>";
								}
							?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<input type="submit" value="GO">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
