<?php

    define('HOST','localhost');
    define('DB_NAME','numeric_history');
    define('USER','root');
    define('PASS','');
    $pdo;
    try {
        $pdo=new PDO("mysql:host=" .HOST. ";dbname=" .DB_NAME,USER,PASS);

    } catch (PDOException $errror) {
       echo $errror;
    }
    
?>

