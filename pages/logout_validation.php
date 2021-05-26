<?php
    //Se inicia sesión
    session_start();

    //Se vacían variables
    session_unset();

    //Se destruye sesión
    session_destroy();
    
    //Aunque se cierra la sesión, se agrega una sesión con id=0 para validar los botones a mostrar (login/logout/profile/signup)
    //con ayuda de session_validations.php
    $_SESSION['id']=0;
    echo "<script>alert('Ha cerrado sesión correctamente');
              window.location='/PROYECTO WEB I/index.php'</script>";    
?>