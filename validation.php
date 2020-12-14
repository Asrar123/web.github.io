<?php 

session_start();


 include("config.php");

$email=$_POST['email'];
 $pass=$_POST['password'];


  $q="select * from weblogin where email='$email' && password='$pass' ";
 
    echo "$q";
 
 $result= mysql_query($q);

 
 $num=mysql_num_rows($result);
 if($num == 1)
 {
 	$_SESSION['email']=$email;
 	header(	'location:index.php');
 }
 else
 {
 		header(	'location:login.php');	
 }
?>