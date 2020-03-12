<?php

include 'connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$upda = "UPDATE `items` SET `id` = '$id', `name` = '$name', `password` = '$password' WHERE `items`.`id` = $id";
$result = $pdo -> query($upda);
header('Location:read.php');