<?php
$dsn= "mysql:dbname=sort_project;host=127.0.0.1"; 
$dbuser = "root";
$dbpass = "roger";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (\Throwable $th) {
    echo "Fail to tried connect to BD";
}
?>
