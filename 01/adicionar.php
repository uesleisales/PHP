<?php
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false)
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $sql ="INSERT INTO usuarios SET nome ='$nome', email ='$email', senha ='$senha'";
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

    <input type="submit" value = "Cadastrar" /> 
</form>