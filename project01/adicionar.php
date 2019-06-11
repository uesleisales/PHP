<?php
require 'config.php';
session_start();

if(isset($_POST['nome']) && empty($_POST['nome']) == false)
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['valor']);
    $senha = addslashes($_POST['data']);

    $sql ="INSERT INTO teste SET nome ='$nome', data1 ='$data', valor ='$valor'";
    //$sql ="INSERT INTO usuarios ('nome','email','senha') VALUES ('$nome','$email','$senha')";
    //$sql ="INSERT INTO 'botijao' ('nome', 'valor', 'data1') VALUES ('$nome', '$valor', '$data')";
    $sql=$pdo->query($sql);

    header("Location: indexbd01.php");
}
?>
<form method="POST">
    Name:<br/>
    <input type="text" name="nome" /> <br/><br/>
    Valor:<br/>
    <input type="number" name="valor" /> <br/><br/>
    Data:<br/>
    <input type="text" name = "data" /> <br/><br/>

    <input type="submit" value = "Cadastrar" /> 
</form>