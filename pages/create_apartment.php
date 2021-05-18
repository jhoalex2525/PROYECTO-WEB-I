<?php
include_once '../database/models/ApartmentModel.php';
//Recibir los datos
$emailadd = $_POST['emailadd'];
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
}
else
{
    echo "Falló la conexión con la BD";
}
header("Location: /PROYECTO WEB I/index.php");
?>