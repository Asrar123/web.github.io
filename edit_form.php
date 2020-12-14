w<?php
// including the database connection file
include_once("config.php");
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql="SELECT * FROM booking WHERE id=$id";
$result = mysql_query($sql);
 
$res=mysql_fetch_row($result);
    $id = $res[0];
    $brand = $res[1];
    $modal = $res[2];
    $variant = $res[3];
    $email = $res[4];
    $mobile = $res[5];
?>
<html>
<head>    
    <title>Edit Data</title>
         <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
           

</head>
 
<body>
    <a href="view.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_qry.php">
    <input type="hidden" name="id" value="<?php echo $id;?>">
        <table border="0">
            <tr>
                <td>Select Brand</td>
                <td><input type="text" name="brand" value="<?php echo $brand;?>"></td>
            </tr>
            <tr>
                <td>select Modal</td>
                <td><input type="text" name="modal" value="<?php echo $modal;?>"></td>
            </tr>
           <tr>
                <td>Select Variant</td>
                <td><input type="text" name="variant" value="<?php echo $variant;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
                        <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile" value="<?php echo $mobile;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" > value=<?php echo $_GET['id'];?></td>
                <td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
            </tr>
        </table>
    </form>
</body>
</html>