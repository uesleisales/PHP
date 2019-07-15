<?php
$dsn= "mysql:dbname=blog;host=localhost"; 
$dbuser = "root";
$dbpass = "roger";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOexception $e) {
        echo"ERRO!".$e->getMessage();
        exit;
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
//require 'config.php';

session_start();
if(isset($_POST['email'])&& empty($_POST['email']) == false){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
}

$sql = $pdo->query("SELECT * FROM userlog WHERE email = '$email' AND senha = '$senha'");
if($sql->rowCount() > 0)
{
  $data = $sql->fetch();
  $_SESSION['id'] = $data['id'];
  header("Location: index2.php");
}

?>

</head>
<body>
<h2>Login Form</h2>

<form method="POST">
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="senha" required>
        
    <button type="submit">Login</button>
 
  </div>
</form>

</body>
</html>
