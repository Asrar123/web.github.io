<?php
	 //including the database connection file
	include("config.php");

	//getting id of the data from url
	$id = $_GET['id'];

	//deleting the row from table
	$sql="DELETE FROM  booking WHERE id=$id";
	$result = mysql_query($sql);
	//echo "Rows deleted are: ".mysql_affected_rows();
	//redirecting to the display page (index.php in our case)
	header("Location:view.php");
?>