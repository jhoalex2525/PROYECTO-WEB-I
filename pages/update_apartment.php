<?php
    $sessiontype = 'anfitrion';
    include_once '../static/session/session_validations.php';
    $emailedit = $_SESSION['email'];
    include_once '../database/models/ApartmentModel.php';
    $id = $_GET['id'];
    $townedit = $_POST['townedit'];
    $countryedit = $_POST['countryedit'];
    $addressedit = $_POST['addressedit'];
    $gpsedit = $_POST['gpsedit'];
    $numberedit = $_POST['numberedit'];
    $valueedit = $_POST['valueedit'];
    $roomreviewedit = $_POST['roomreviewedit'];
    $photoedit = $_POST['photoedit'];
    if(!empty($emailedit)||!empty($townedit)||!empty($countryedit)||!empty($addressedit)||!empty($gpsedit)||!empty($numberedit)||!empty($valueedit)||!empty($roomreviewedit)||!empty($photoedit))
    {
        $apartmentModel = new ApartmentModel();
        $apartmentModel->updateApartment($id, $emailedit, $townedit, $countryedit, $addressedit, $gpsedit, $numberedit, $valueedit, $roomreviewedit,$photoedit);
        echo "<script>alert('Los datos de su apartamento han sido actualizados');
                window.location='list_apartments.php'</script>";
    }
    else
    {
        echo "<script>alert('Falló la actualización de sus datos');
        window.location='profile.php'</script>";
    }
?>