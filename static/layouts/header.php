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
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="iconnavbar">
                    <img class="iconlogo" src="/PROYECTO WEB I/images/iconlogo.png" alt="" onclick="window.location.href='/PROYECTO WEB I/index.php'">                    
                    <h class="bungeecss">WEROOMMATES</h1>
                    <input type="button" value="Login" onclick="window.location.href='/PROYECTO WEB I/pages/login.php'" class="btn btn-primary">
                </div>                
            </div>
        </nav>
        <input type="button" value="Cerrar sesión" onclick="window.location.href='/PROYECTO WEB I/pages/logout_validation.php'" class="btn btn-primary">