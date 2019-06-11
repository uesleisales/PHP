<?php
require 'config.php';
session_start();

if(isset($_GET['id'])&& empty($_GET['id'])== false){
    $id = addslashes($_GET['id']);
    $sql = "DELETE FROM teste WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: indexbd01.php");
}else {
    header("Location: indexbd01  .php");
}
?>
