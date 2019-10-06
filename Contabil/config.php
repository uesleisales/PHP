<?php
$dsn= "mysql:dbname=teste;host=127.0.0.1"; 
$dbuser = "root";
$dbpass = "senha";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (\Throwable $th) {
    echo "Fail to tried connect to BD";
}
?>