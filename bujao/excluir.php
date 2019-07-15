<?php
require 'config1.php';
session_start();

if(isset($_GET['id'])&& empty($_GET['id'])== false){
    $id = addslashes($_GET['id']);
    $sql = "DELETE FROM bujao_saci WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: index2.php");
}else {
    header("Location: index2.php");
}
?>

CREATE TABLE userlog (id INT, email VARCHAR(100), senha VARCHAR(32));

INSERT INTO userlog (id, email, senha) VALUES(2, 'admin', 'admin');