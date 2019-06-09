<?php  
    session_start();

    if(isset($_SESSION['id']) && empty($_SESSION['id']) == false)
    {
        echo "Restrict area...";
    }else{
        header("Location: login.php");
    }

?>