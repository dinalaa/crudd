<?php

include 'connection.php';
$uid = $_GET['uid']; //get the id which we want to update it

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="UpdateProcess.php" method="post"> <!-- to update -->
        <?php 
            //retreive data
            $upd = "SELECT * FROM `items` WHERE id = $uid";
            $result = $pdo -> prepare($upd);
            $result -> execute();
            foreach($result as $row){
                extract($row);
        ?>
        <input type="text" value="<?php echo $id;?>" name="id">
        <input type="text" value="<?php echo $name;?>" name="name" placeholder="Type your name">
        <input type="text" value="<?php echo $password;?>" name="password" placeholder="Type your password">
            <?php }?>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
