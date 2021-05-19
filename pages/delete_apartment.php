<?php
    include_once '../static/session/anfitrion_session.php';
    include_once '../database/models/ApartmentModel.php';
    $id = $_GET['id'];
    $apartmentModel = new ApartmentModel();
    $apartmentModel->deleteApartment($id);
    echo "<script>alert('El apartamento han sido eliminado');
                window.location='list_apartments.php'</script>";
?>