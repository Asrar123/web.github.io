<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit'])) 
{    
    	$brand = $_POST['brand'];
        $modal = $_POST['modal'];
        $variant = $_POST['variant'];
	    $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        //insert data to database
		$sql="INSERT INTO booking(brand,modal,variant,email,mobile) VALUES('$brand','$modal','$variant','$email','$mobile')";
        echo $sql;
        $result = mysql_query($sql);
        echo "Last Insert id is: ".mysql_insert_id();
        //display success message
        echo "<font color='blue'>Data added successfully.";
        echo "<br/><a href='view.php'>View Result</a>";
    
} 
else
{   
		 
		header('Location:index.php');
}
?>
