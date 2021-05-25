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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bungee&display=swap">
</head>

<body>
    <?php    
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
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid iconnavbar">
            <div class="float-right">
                <a class="navbar-brand" href="/PROYECTO WEB I/index.php"><img class="iconlogo" src="/PROYECTO WEB I/images/iconlogo.png" alt=""></a>
            </div>
            <div class="float-right">
                <a class="navbar-brand bungeecss" href="/PROYECTO WEB I/index.php">WEROOMMATES</a>
            </div>            
            <?php
                echo ($loginlogoutbutton);
            ?>
        </div>
    </nav>
    <div class="container">