	<?php	
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<style>
img {
  
  height: 90vh;

 width: 100%;
}

.t {
  position: absolute;
  top: 50%;
  left: 50%;
 transform: translate(-50%, -50%);
color: white;
}


</style>

</head>
<body>

<div class="container">
	<img src="1.jfif">
	<div class="color">
	<h1 class="t">welcom to <?php echo $_SESSION['email']; ?></h1>
 	
	</div>
</div>
</body>
</html>

 
