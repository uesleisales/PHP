<?php
require 'config1.php';
session_start();

if(isset($_GET['id'])&& empty($_GET['id'])== false){
    $id = addslashes($_GET['id']);
    $sql = "DELETE FROM bujao_saci WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: index.php");
}else {
    header("Location: index.php");
}
?>
