<?php
    session_start();
    session_unset();
    session_destroy();
    $_SESSION['id']=0;
    echo "<script>alert('Ha cerrado sesión correctamente');
              window.location='/PROYECTO WEB I/index.php'</script>";    
?>