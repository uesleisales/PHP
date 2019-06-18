<?php
require 'config1.php';

$id = 0;
if(isset($_GET['id'])&& empty($_GET['id'])== false){
    $id = addslashes($_GET['id']);
}else{
    header("Location: index.php");
}

if(isset($_POST['nome'])&& empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['valor']);
    $data1 = addslashes($_POST['data1']);
    $msg = addslashes($_POST['msg']);

    $sql = "UPDATE teste SET nome='$nome', valor='$valor', data1='$data1', msg='$msg' WHERE id = '$id'";
    $sql = $pdo->query($sql); 
    
    header("Location: index.php");
}


$sql = "SELECT * FROM bujao_saci WHERE id = '$id'"; //catching user by id
$sql = $pdo->query($sql);  
if($sql->rowCount()>0){
    $dado = $sql->fetch();
}else{
    header("Location: index.php");
}

?>

<form method="POST">
    Name:<br/>
    <input type="text" name="nome" value ="<?php echo $dado['nome'];?>"/> <br/><br/>
    Valor:<br/>
    <input type="number" name="valor" value ="<?php echo $dado['valor'];?>" /> <br/><br/>
    Data:<br/>
    <input type="text" name="data1" value ="<?php echo $dado['data1'];?>" /> <br/><br/>
    Anotação:<br/>
    <input type="text" name="msg" value ="<?php echo $dado['msg'];?>" /> <br/><br/>


    <input type="submit" value = "Atualizar" /> 
</form>



