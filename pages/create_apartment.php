<?php
$sessiontype = 'all';
include_once '../static/session/session_validations.php';
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
$photoadd = $_POST['photoadd'];

if(!empty($emailadd)||!empty($townadd)||!empty($countryadd)||!empty($addressadd)||!empty($gpsadd)||!empty($numberadd)||!empty($valueadd)||!empty($roomreviewadd)||!empty($photoadd))
{
    $apartmentModel = new ApartmentModel();
    $apartmentModel->insert($emailadd,$townadd,$countryadd,$addressadd,$gpsadd,$numberadd,$valueadd,$roomreviewadd,$photoadd);
    echo "<script>alert('El apartamento han sido creado');
              window.location='list_apartments.php'</script>";
}
else
{
    echo "<script>alert('Falló la creación del apartamento');
              window.location='addapartment.php'</script>";
}

?>