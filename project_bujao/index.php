<?php
 require 'config1.php';
 session_start();

 if(isset($_SESSION['id']) && empty($_SESSION['id']) == false)
 {
     echo "-";
 }else{
     header("Location: login.php");
 }

?>
<link rel="stylesheet" type="text/css" href="style2.css">
<a href="adicionar.php">adicionar novo usuarios</a>
<table id="customers">
  <tr>
    <th>Nome</th>
    <th>Data</th>
    <th>Valor</th>
    <th>Anotações</th>
    <th>Ações</th>
  </tr>
  <?php
       $sql= "SELECT * FROM bujao_saci";
       $sql = $pdo->query($sql);
       if($sql->rowCount()>0){
           foreach($sql->fetchAll() as  $usuario){
               echo'<tr>';
               echo'<td>&nbsp &nbsp '.$usuario['nome'].'</td>';
               echo'<td>'.$usuario['data1'].'</td>';
               echo'<td>'.$usuario['valor'].'</td>';
               echo'<td>'.$usuario['msg'].'</td>';
               echo'<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
               echo'</tr>';
           }
           
       }
       
       
    ?>
</table>      

