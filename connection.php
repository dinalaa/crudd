<?php

$dsn = 'mysql:host=localhost;dbname=crudd';

$user = 'root';

$password = '';

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try{
    
    $pdo = new PDO($dsn, $user, $password, $options);

} catch(PDOException $e){

    echo "Failed " . $e -> getMessage();

}






