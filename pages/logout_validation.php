<?php
    session_start();
    session_unset();
    session_destroy();    
    echo "<script>alert('Ha cerrado sesión correctamente');
              window.location='login.php'</script>";    
?>