<?php
    $sessiontype = 'anfitrion';
    include_once '../static/session/session_validations.php';
    include_once '../database/models/ApartmentModel.php';
    $id = $_GET['id'];
    $apartmentModel = new ApartmentModel();
    $apartmentModel->deleteApartment($id);
    echo "<script>alert('El apartamento han sido eliminado');
                window.location='list_apartments.php'</script>";
?>