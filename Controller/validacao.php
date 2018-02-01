<?php
    if(($_POST["login"] == 'admin') && ($_POST["password"] == 'admin')){
        header("location: ../Views/menu/menu.php");
    }
    else{
        header("location: ../Views/login/login.php");
    }
?>