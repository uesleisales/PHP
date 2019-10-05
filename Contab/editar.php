<?php
require 'config.php';

$id = 0;
if(isset($_GET['id'])&& empty($_GET['id'])== false){
    $id = addslashes($_GET['id']);
}else{
    header("Location: indexbd01.php");
}

if(isset($_POST['valor'])&& empty($_POST['valor']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $valor = addslashes($_POST['valor']);
    $data = addslashes($_POST['data']);

    $sql = "UPDATE teste SET nome='$nome', email='$email', valor='$valor', data2='$data' WHERE id = '$id'";
    $sql = $pdo->query($sql); 
    
    header("Location: indexbd01.php");
}


$sql = "SELECT * FROM teste WHERE id = '$id'"; //catching user by id
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
    E-mail:<br/>
    <input type="text" name="email" value ="<?php echo $dado['email'];?>" /> <br/><br/>
    Valor:<br/>
    <input type="number" name="valor" value ="<?php echo $dado['valor'];?>"/> <br/><br/>
    Data:<br/>
    <input type="date" name="data" value ="<?php echo $dado['data2'];?>"/> <br/><br/>
    

    <input type="submit" value = "Atualizar" /> 
</form>



