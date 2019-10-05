<?php
$dsn= "mysql:dbname=teste;host=127.0.0.1"; 
$dbuser = "roger";
$dbpass = "naotemsenha";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (\Throwable $th) {
    echo "Fail to tried connect to BD";
}
?>