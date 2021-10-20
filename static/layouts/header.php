<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeRoommates</title>
    
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- Custom CSS-->
    <link rel="stylesheet" href="/PROYECTO WEB I/static/css/styles.css">
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bungee&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Js -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/PROYECTO WEB I/static/js/up_arrow.js"></script>    
</head>

<body>
    <?php   
    // Validaciones para el tipo de sesión y botones a mostrar
    if($_SERVER['PHP_SELF']=='/PROYECTO WEB I/index.php'){
        $sessiontype='index';
        include_once '../PROYECTO WEB I/static/session/session_validations.php';        
    }
    else{
        if($_SERVER['PHP_SELF']=='/PROYECTO WEB I/pages/login.php'){
            $sessiontype='index';            
            include_once '../static/session/session_validations.php';
            }
        else{
            include_once '../static/session/session_validations.php';
        }
    }    
    ?> 
    
    <!-- Barra de navegación fija-->
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="">
                <a class="navbar-brand bungeecss" href="/PROYECTO WEB I/index.php"><img class="iconlogo" src="/PROYECTO WEB I/images/iconlogo.png" alt="">WEROOMMATES</a>
            </div>            
            <div class="d-md-flex">
                <a type='button' href='/PROYECTO WEB I/index.php' class='btn btn-outline-primary home'>Inicio</a>
                <?php
                    echo ($loginlogoutbutton);
                ?>
            </div>
        </div>
    </nav>
    
    <!-- Boton hacia arriba -->
    <span class="ir-arriba material-icons md-48">arrow_circle_up</span>
    
    <!-- Inicio de página -->
    <div class="container">
