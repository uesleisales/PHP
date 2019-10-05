<?php
require 'config.php';

if(isset($_POST['valor']) && empty($_POST['valor']) == false)
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $valor = addslashes($_POST['valor']);
    $data = addslashes($_POST['data']);
    $sql ="INSERT INTO teste SET nome ='$nome', email ='$email', senha ='$senha', valor ='$valor', data2 ='$data'";
    //$sql ="INSERT INTO usuarios ('nome','email','senha') VALUES ('$nome','$email','$senha')";
    $sql=$pdo->query($sql);

    header("Location: indexbd01.php");
}
?>
<form method="POST">
    Name:<br/>
    <input type="text" name="nome" /> <br/><br/>
    E-mail:<br/>
    <input type="text" name="email" /> <br/><br/>
    Senha:<br/>
    <input type="text" name = "senha" /> <br/><br/>
    Valor:<br/>
    <input type="number" name = "valor" /> <br/><br/>
    Data:<br/>
    <input type="date" name = "data" /> <br/><br/>

    <input type="submit" value = "Cadastrar" /> 
</form>
