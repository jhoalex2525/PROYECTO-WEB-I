<?php
    include_once '../database/models/UsersModel.php';
    
    //Recibir los datos
    $namesignup = $_POST['namesignup'];
    $emailsignup = $_POST['emailsignup'];
    $countrysignup = $_POST['countrysignup'];
    $townsignup = $_POST['townsignup'];
    $passwordsignup = $_POST['passwordsignup'];
    $rolesignup = $_POST['rolesignup'];
    $photosignup = $_POST['photosignup'];
    $reviewsignup = $_POST['reviewsignup'];
    switch($rolesignup){
        case 'Anfitrión':
            $estadosingup = 1;
        break;
        case 'Invitado':
            $estadosingup = 1;
        break;
        case 'Administrador';
            $estadosingup = 2;
        break;
    }

    if(!empty($namesignup)||!empty($emailsignup)||!empty($countrysignup)||!empty($townsignup)||!empty($passwordsignup)||!empty($reviewsignup))
    {
        $UsersModel = new UsersModel();
        $UsersModel->insert($namesignup, $emailsignup, $countrysignup, $townsignup, $passwordsignup, $rolesignup, $photosignup, $reviewsignup, $estadosingup);
        echo "<script>alert('El usuario han sido creado');
              window.location='login.php'</script>";
    }
    else
    {
        echo "<script>alert('Falló la creación del usuario');
              window.location='signup.php'</script>";
    }
    header("Location: login.php");
?>