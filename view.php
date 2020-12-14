<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
$sql="SELECT * FROM booking ORDER BY id DESC";
$result = mysql_query($sql); 
?>
 
<html>
<head>    
    <title>Homepage</title>
         <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
</head>
 
<body>
    <a href="index.php">Add New Data</a><br/><br/>
 
    <table width='70%' border=2> 
        <tr>
            <th>Brand</th>
            <th>Modal</th>
            <th>Variant</th>
            <th>Email Id</th>
            <th>Mobile</th>
            <th>Update</th>
        </tr>
        <?php
        while($res = mysql_fetch_assoc($result)) {  
        ?>
            <tr>
            <td><?php echo $res['brand'];?></td>
            <td><?php echo $res['modal'];?></td>
            <td><?php echo $res['variant'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['mobile'];?></td>    
            <td>
<button class="btn btn-success"><a  href="edit_form.php?id=<?php echo $res['id'];  ?>" >Edit</a> </button> 
<button class="btn btn-success"><a href="delete.php?id=<?php echo $res['id'];?>">Delete</a></td></button>
        
<?php
        }
        ?>
    </table>
</body>
</html>