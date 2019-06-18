<?php
require 'config.php';

if(isset($_GET['sort']) && empty($_GET['sort']) == false) {
    $ordem = addslashes($_GET['sort']);
    $sql = "SELECT * FROM users ORDER BY ".$ordem;
  } else {
    $ordem = '';
    $sql = "SELECT * FROM users";
  }
  ?>
<link rel="stylesheet" type="text/css" href="style.css">
<form method="GET">
  <select name="sort" onchange="this.form.submit()">
    <option></option>
    <option value="name" <?php echo ($sort == "name")?'selected = "selected"':'';?>> by Name</option>
    <option value="data1" <?php echo ($sort == "data1")?'selected = "selected"':'';?>> by Date</option>
    <option value="valor" <?php echo ($sort == "valor")?'selected = "selected"':'';?>> by Value</option>
  </select>
</form>

<table id="customers">
  <tr>
    <th>Nome</th>
    <th>Data</th>
    <th>Valor</th>
  </tr>
  <?php
  
 
  $sql = $pdo->query($sql);
  if($sql->rowCount() > 0)
  {
      foreach($sql->fetchAll() as $user):
      ?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['data1']; ?></td>
            <td><?php echo $user['valor']; ?></td>
        </tr>
    <?php
      endforeach;
  }
  ?>
 
  
</table>