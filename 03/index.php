<?php
    try {
        $pdo = new PDO("mysql:dbname=sort_project;host=localhost", "root", "roger");
    } catch (PDOexception $e) {
        echo"ERRO!".$e->getMessage();
        exit;
    }

if(isset($_POST['nome']) && !empty($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $msg = addslashes($_POST['msg']);

    $sql = $pdo->prepare("INSERT INTO commit_project SET nome = :nome, msg = :msg, data_msg = NOW()");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":msg", $msg);
    $sql->execute();
}
?>
<fieldset>
    <form method="POST">
        Name:<br/>
        <input type="text" name="nome"/><br/><br/>

        Mensagem:<br/>
        <input name="msg"/></textarea><br/><br/>

        <input  type="submit" value="Send Msg"/>
    </form>
</fieldset>
<br/><br/>
<?php
$sql = "SELECT * FROM commit_project ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0)
{
    foreach($sql->fetchAll() as $msgs):
        ?>
        <fieldset>
        <strong><?php echo $msgs['nome']; ?>:</strong><br/>
        <strong><?php echo $msgs['msg']; ?></strong><br/>
        </fieldset>
        <?php
    endforeach;
}
?>