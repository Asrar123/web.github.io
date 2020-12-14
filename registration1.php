<?php 

session_start();


 include("config.php");

$user = $_POST['user'];
$email=$_POST['email'];
 $pass=$_POST['password'];
 $mobile = $_POST['mobile'];
  $comment = $_POST['comment'];
       
	   
      



  $q="select * from weblogin where email='$email' && password='$pass' ";
 
    echo "$q";
 
 $result= mysql_query($q);

 
 $num=mysql_num_rows($result);
 if($num)
 {
 	echo  "duplicat data";
 }
 else
 {
  	$qy="insert into  weblogin (user,email,password,mobile,comment) values('$user','$email','$pass','$mobile','$comment')";
 	echo "$qy";
 	mysql_query($qy);
 	header('location:index.php');
 
}
?>