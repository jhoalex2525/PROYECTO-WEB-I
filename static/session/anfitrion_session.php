<?php
//scrip php para redirigir si no ha iniciado sesión
session_start();
if($_SESSION['role']!=='Anfitrión'){
    $pageToRedirect = "login.php";
    header ("Location: {$pageToRedirect}");
    exit;
}
?>