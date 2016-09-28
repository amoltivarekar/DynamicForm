<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="MYDB";

	$conn=new mysqli($servername,$username,$password,$dbname);

	if(!$conn)
	{
		echo "<h3>No connection between Database and User </h3>";
	}
	else
	{
		echo "<h3>Connection Successfully :)</h3>";
	}
?>
