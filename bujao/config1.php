<?php

$temp = filter_input(INPUT_GET, 'temp', FILTER_SANITIZE_NUMBER_FLOAT);
$humid = filter_input(INPUT_GET, 'humid', FILTER_SANITIZE_NUMBER_FLOAT);
if (is_null($temp) || is_null($humid) ) {
  //Gravar log de erros
  die("Dados inválidos");
} 

$dsn= "mysql:dbname=project;host=localhost"; 
$dbuser = "root";
$dbpass = "roger";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOexception $e) {
    echo"ERRO!".$e->getMessage();
    exit;
}

$sql = "INSERT INTO weather (wea_temp, wea_humid) VALUES ($temp,$humid)";
 
?>
