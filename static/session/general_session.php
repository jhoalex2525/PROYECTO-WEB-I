<?php
//scrip php para redirigir si no ha iniciado sesión
session_start();
    if($_SESSION['id']<=0){
        $pageToRedirect = "login.php";
        header ("Location: {$pageToRedirect}");
        exit;
    }
?>


