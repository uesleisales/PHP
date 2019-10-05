<?php
 require 'config.php';
        
?>
<a href="adicionar.php">adicionar novo usuarios</a>
<table  width="100%">
        <tr>
            <th>nome</th>
            <th>e-mail</th>
            <th>valor</th>
            <th>data</th>
            <th>Condição</th>
            <th>açoes</th>  
             
        </tr>
       <?php
       $sql= "SELECT * FROM teste WHERE (data2 < '2014/10/07' and valor > 5000) or (valor > 15000 and data2 > '2014/10/06')";
       $sql = $pdo->query($sql);
       if($sql->rowCount()>0){
           foreach($sql->fetchAll() as  $teste){
               echo'<tr>';
               echo'<td>'.$teste['nome'].'</td>';
               echo'<td>'.$teste['email'].'</td>';
               echo'<td>'.$teste['valor'].'</td>';
               echo'<td>'.$teste['data2'].'</td>';
               echo'<td>'. Sim .'</td>';
               echo'<td><a href="editar.php?id='.$teste['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
               echo'</tr>';
           }
           
       }
       
       
       ?>
</table>       

