w<?php
// including the database connection file
include_once("config.php");
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql="SELECT * FROM userinfodata WHERE id=$id";
$result = mysql_query($sql);
 
$res=mysql_fetch_row($result);
    $id = $res[0];
    $user = $res[1];
    $email = $res[2];
    $mobile = $res[3];
    $comment = $res[4];
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="view.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_qry.php">
	<input type="hidden" name="id" value="<?php echo $id;?>">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>