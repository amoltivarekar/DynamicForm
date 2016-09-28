<html>
	<head>
		<title>
			FatchForm
		</title>
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="style3.css" type="text/css">
	</head>
</html>

<?php
	include'DBConnection.php';
	$num=$_POST['idnumber'];

	$select="select FORM_NAME,FORM_DETAILS from FORMS where ID=$num";
	$values=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($values, MYSQLI_ASSOC);
	echo "<center><form>";
	echo "<h1>".$row['FORM_NAME']."</h1><table width='60%' border='1'>";

	$frDetails=unserialize($row['FORM_DETAILS']);

	$frDetails=unserialize($row['FORM_DETAILS']);

	$length=sizeof($frDetails);
	$row=0;
	$cols=0;
	$val[]="";

	foreach ($frDetails as $key => $val) 
	{
		echo "<table width='60%'>";
		if($val[1]=="text")
		{
			echo "<tr ><td width='30%' ><span>".$val[0]." : </span></td>";
			echo "<td width='70%'><input type='text'></td></tr>";
		}
		else if($val[1]=="checkbox")
		{
			echo "<tr><td width='30%'><span>".$val[0]." : </span></td><td width='70%'>";
			$data=explode(",",$val[2]);
			$length2=sizeof($data);
			$row2=0;
			while($row2<$length2)
			{
				echo "<input type='checkbox' >".$data[$row2];
				$row2++;
			}
			echo "</td></tr>";
		}
		else if($val[1]=="radio")
		{
			echo "<tr><td width='30%'><span>".$val[0]." : </span></td><td width='70%'>";
			$data=explode(",",$val[2]);
			$length2=sizeof($data);
			$row2=0;
			while($row2<$length2)
			{
				echo "<input type='radio' name='radio' >".$data[$row2];
				$row2++;
			}
			echo "</td></tr>";
		}
		else if($val[1]=="select")
		{
			echo "<tr><td width='30%'><span>".$val[0]." : </span></td><td width='70%'>";
			$data=explode(",",$val[2]);
			$length2=sizeof($data);
			$row2=0;
			echo "<select>";
			while($row2<$length2)
			{
				echo "<option>".$data[$row2]."</option>";
				$row2++;
			}
			echo "</select>";
			echo "</td></tr>";
		}
		else if($val[1]=="file")
		{
			echo "<tr><td width='30%'><span>".$val[0]." : </span></td>";
			echo "<td width='70%'><input type='file' ></td></tr>";
		}
		else if($val[1]=="password")
		{
			echo "<tr><td width='30%'><span>".$val[0]." : </span></td>";
			echo "<td width='70%'><input type='password' ></td></tr>";
		}
		else if($val[1]=="textarea")
		{
			echo "<tr><td width='30%'><span>".$val[0]." : </span></td>";
			echo "<td width='70%'><textarea></textarea></td></tr>";
		}
		echo "</table><hr width='60%''>";
	}
	echo "</center></form>";

?>
