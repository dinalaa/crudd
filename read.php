<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr> 
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php 
           //retreive data
           $read = 'SELECT * FROM `items`';
           $result = $pdo -> query($read);
           foreach($result as $row){ 
            extract($row);  
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php  echo $name;?></td>
            <td><?php echo $password; ?></td>
            <td><a href="delete.php?did=<?php echo $id;?>">delete</a></td> <!-- if we want to delete -->
            <td><a href="update.php?uid=<?php echo $id;?>">Update</a></td> <!-- if we want to update -->
        </tr>
           <?php }?>
    </table>
</body>
</html>