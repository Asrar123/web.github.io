<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{   
   $id = $_POST['id'];
   $brand = $_POST['brand'];
   $modal = $_POST['modal'];
    $variant = $_POST['variant'];
   $email = $_POST['email'];
    $mobile = $_POST['mobile'];
  
   $sql="UPDATE booking SET brand='$brand',modal='$modal',variant='$variant',email='$email',mobile='$mobile' WHERE id=$id";
  //updating the table
   $result = mysql_query($sql);
        
        //redirectig to the display page.
    header('Location:view.php');
} 
else
 {  
		  //In our case, it is view.php
        header("Location: view.php");
 }
?>