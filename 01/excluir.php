<?php
require 'config.php';

if(isset($_GET['id'])&& empty($_GET['id'])== false){
    $id = addslashes($_GET['id']);
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: indexbd01.php");
}else {
    header("Location: indexbd01  .php");
}
?>
