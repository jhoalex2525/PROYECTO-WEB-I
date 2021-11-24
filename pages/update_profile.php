<?php
    $sessiontype = 'all';
    include_once '../static/session/session_validations.php';
    $id = $_SESSION['id'];
    include_once '../database/models/UsersModel.php';
    $usersModel = new UsersModel();    
    $nameedit = $_POST['nameedit'];
    $emailedit = $_POST['emailedit'];
    $countryedit = $_POST['countryedit'];
    $townedit = $_POST['townedit'];
    $passwordedit = $_POST['passwordedit'];
    $roleedit = $_POST['roleedit'];
    $photoedit = $_POST['photoedit'];
    $reviewedit = $_POST['reviewedit'];
    
    switch($roleedit){
        case 'Anfitrión':
            $estadoedit = 1;
        break;
        case 'Invitado':
            $estadoedit = 1;
        break;
        case 'Administrador';
            $estadoedit = 2;
        break;
    }

    if(!empty($nameedit)||!empty($emailedit)||!empty($countryedit)||!empty($townedit)||!empty($passwordedit)||!empty($reviewedit))
    {
        $UsersModel = new UsersModel();    
        $usersModel-> updateUser($id, $nameedit, $emailedit, $countryedit, $townedit, $passwordedit, $roleedit, $photoedit, $reviewedit, $estadoedit);
        $_SESSION['role'] = $roleedit;
        echo "<script>alert('Sus datos han sido actualizados');
                window.location='profile.php'</script>";
    }
    else
    {
        echo "<script>alert('Falló la actualización de sus datos');
                window.location='profile.php'</script>";
    }
?>        
