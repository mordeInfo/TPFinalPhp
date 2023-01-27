<?php


try {
    $dsn = "pssql:host=localhost;dbname=restaurant";
    $pdo= new PDO($dsn, 'postgres','010484!');

}catch(PDOException $e){
    $message = 'ERREUR PDO dans '. $e->getFile().' : '.$e->getLine().' : '.$e->getMessage();
}

