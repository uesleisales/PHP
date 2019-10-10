<?php
$dsn= "mysql:dbname=laravel;host=127.0.0.1"; 
$dbuser = "roger";
$dbpass = "daniroger889";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (\Throwable $th) {
    echo "Fail to tried connect to BD";
}
?>