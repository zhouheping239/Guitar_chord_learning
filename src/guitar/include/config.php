<?php
    $host = 'localhost';
    $db = 'bgldatabase';
    $user = 'root';
    $pass ='';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host; dbname=$db; charset=$charset";
     try{
        $pdo = new PDO($dsn, $user, $pass);
     }
     catch(PDOException $e){
        throw new PDOException($e->getMessage());
     }

     require_once 'pass.php';
     $pass = new pass($pdo);
?>