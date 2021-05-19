<?php
include_once '../static/session/anfitrion_session.php';

include_once '../database/models/ApartmentModel.php';
//Recibir los datos
$emailadd = $_SESSION['email'];
$townadd = $_POST['townadd'];
$countryadd = $_POST['countryadd'];
$addressadd = $_POST['addressadd'];
$gpsadd = $_POST['gpsadd'];
$numberadd = $_POST['numberadd'];
$valueadd = $_POST['valueadd'];
$roomreviewadd = $_POST['roomreviewadd'];

if(!empty($emailadd)||!empty($townadd)||!empty($countryadd)||!empty($addressadd)||!empty($gpsadd)||!empty($numberadd)||!empty($valueadd)||!empty($roomreviewadd))
{
    $apartmentModel = new ApartmentModel();
    $apartmentModel->insert($emailadd,$townadd,$countryadd,$addressadd,$gpsadd,$numberadd,$valueadd,$roomreviewadd);
    echo "<script>alert('El apartamento han sido creado');
              window.location='list_apartments.php'</script>";
}
else
{
    echo "<script>alert('Falló la creación del apartamento');
              window.location='addapartment.php'</script>";
}

?>