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
                    <img class="iconlogo" src="/PROYECTO WEB I/images/iconlogo.png" alt="">                    
                    <h class="bungeecss">WEROOMMATES</h1>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/PROYECTO WEB I/index.php">Inicio</a>
                        <a class="nav-link" href="/PROYECTO WEB I/pages/login.php">Iniciar sesión</a>
                        <a class="nav-link" href="/PROYECTO WEB I/pages/signup.php">Registrarse</a>
                        <a class="nav-link" href="/PROYECTO WEB I/pages/profile.php">Perfil anfitrion</a>
                        <a class="nav-link" href="/PROYECTO WEB I/pages/addapartment.php">Añadir apartamento</a>
                        <a class="nav-link" href="/PROYECTO WEB I/pages/apartmentowner.php">Apartamentos por anfitrion</a>
                    </div>
                </div>
            </div>
        </nav>
        <input type="button" value="Cerrar sesión" onclick="window.location.href='/PROYECTO WEB I/pages/logout_validation.php'" class="btn btn-primary">