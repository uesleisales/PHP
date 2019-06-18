<?php
require 'config1.php';
session_start();

if(isset($_POST['nome']) && empty($_POST['nome']) == false)
{
    $nome = addslashes($_POST['nome']);
    $data1 = addslashes($_POST['data1']);
    $valor = addslashes($_POST['valor']);
    $msg = addslashes($_POST['msg']);

    $sql = $pdo->prepare("INSERT INTO bujao_saci SET nome = :nome, data1 = :data1, valor = :valor, msg = :msg");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":data1", $data1);
    $sql->bindValue(":valor", $valor);
    $sql->bindValue(":msg", $msg);
    $sql->execute();

    header("Location: index.php");
}
?>
<form method="POST">
    Name:<br/>
    <input type="text" name="nome" /> <br/><br/>
    Valor:<br/>
    <input type="number" name="valor" /> <br/><br/>
    Data:<br/>
    <input type="text" name = "data1" /> <br/><br/>
    Anotação:<br/>
    <input name="msg"/></textarea><br/><br/>

    <input type="submit" value = "Cadastrar" /> 
</form>