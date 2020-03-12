<?php

include 'connection.php';
$did = $_GET['did']; // get the id which we want to delete
$delete = "DELETE  FROM `items` WHERE id = $did";
$result = $pdo -> prepare($delete);
$result -> execute();
header('Location:read.php');









