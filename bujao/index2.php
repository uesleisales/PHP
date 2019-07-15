<?php
 require 'config1.php';
 session_start();

 if(isset($_SESSION['id']) && empty($_SESSION['id']) == false)
 {
     echo "-";
 }else{
     header("Location: index.php");
 }
 ?>
 
<style>
    .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
</style>
  <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
           
  </head>  
<a href="adicionar.php" class="button">Adicionar 2</a>
<div class="container"> 
    <div class="table-responsive">  
            <table  id="employee_data" class="table table-striped table-bordered">
            <thead> 
                <tr>
                    <th>Nome</th>
                    <th>Data Compra</th>
                    <th>Data de Validade</th>
                    <th>Valor</th>
                    <th>Anotações</th>
                    <th>Ações</th>
                </tr>
            </thead> 
            <?php
                $sql= "SELECT * FROM bujao_saci";
                $sql = $pdo->query($sql);
                if($sql->rowCount()>0){
                    foreach($sql->fetchAll() as  $usuario){
                        echo'<tr>';
                        echo'<td>&nbsp &nbsp '.$usuario['nome'].'</td>';
                        echo'<td>'.$usuario['data1'].'</td>';
                        echo'<td>'.$usuario['data2'].'</td>';
                        echo'<td>'.$usuario['valor'].'</td>';
                        echo'<td>'.$usuario['msg'].'</td>';
                        echo'<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                        echo'</tr>';
                    }
                    
                }
                ?>
            </table>      
    </div>
</div>
<script>  
$(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>

