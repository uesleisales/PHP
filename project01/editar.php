<?php
require 'config.php';
session_start();

$id = 0;
if(isset($_GET['id'])&& empty($_GET['id'])== false){
    $id = addslashes($_GET['id']);
}else{
    header("Location: indexbd01.php");
}

if(isset($_POST['nome'])&& empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['valor']);
    $data = addslashes($_POST['data1']);

    $sql = "UPDATE teste SET nome='$nome', data1='$data', valor='$valor' WHERE id = '$id'";
    $sql = $pdo->query($sql); 
    
    header("Location: indexbd01.php");
}


$sql = "SELECT * FROM botijao WHERE id = '$id'"; //catching user by id
$sql = $pdo->query($sql);  
if($sql->rowCount()>0){
    $dado = $sql->fetch();
}else{
    header("Location: indexbd01.php");
}

?>

<form method="POST">
    Name:<br/>
    <input type="text" name="nome" value ="<?php echo $dado['nome'];?>"/> <br/><br/>
    Valor:<br/>
    <input type="number" name="valor" value ="<?php echo $dado['valor'];?>" /> <br/><br/>
    Data:<br/>
    <input type="text" name="data" value ="<?php echo $dado['data1'];?>" /> <br/><br/>

    <input type="submit" value = "Atualizar" /> 
</form>



