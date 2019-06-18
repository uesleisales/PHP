<?php
$dsn= "mysql:dbname=blog;host=127.0.0.1"; 
$dbuser = "root";
$dbpass = "roger";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOexception $e) {
    echo"ERRO!".$e->getMessage();
    exit;
}
?>