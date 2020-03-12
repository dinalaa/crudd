<?php
//mainPage
include 'connection.php';

//create or insert
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $password = sha1($_POST['password']);
    $sql = "INSERT INTO `items` (`name`, `password`) VALUES ('$name', '$password')";
    $stmt = $pdo -> query($sql);

}

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
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" placeholder="Type your name">
        <input type="text" name="password" placeholder="Type your password">
        <input type="submit" name="submit" value="send">
    </form>
</body>
</html>