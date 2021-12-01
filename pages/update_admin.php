<?php
    $sessiontype = 'all';
    include_once '../static/session/session_validations.php';
    $id = $_SESSION['id'];
    include_once '../database/models/UsersModel.php';
    $usersModel = new UsersModel();        
    
    $estadoedit = 1;
    $UsersModel = new UsersModel();    
    $usersModel-> updateUser($id, $nameedit, $emailedit, $countryedit, $townedit, $passwordedit, $roleedit, $photoedit, $reviewedit, $estadoedit);
    echo "<script>alert('Administrador aceptado');
            window.location='adminlist.php'</script>";
?>        
