<?php
include_once '../database/models/ApartmentModel.php';
$id = $_GET['id'];
$emailedit = $_POST['emailedit'];
$townedit = $_POST['townedit'];
$countryedit = $_POST['countryedit'];
$addressedit = $_POST['addressedit'];
$gpsedit = $_POST['gpsedit'];
$numberedit = $_POST['numberedit'];
$valueedit = $_POST['valueedit'];
$roomreviewedit = $_POST['roomreviewedit'];

if(!empty($emailedit)||!empty($townedit)||!empty($countryedit)||!empty($addressedit)||!empty($gpsedit)||!empty($numberedit)||!empty($valueedit)||!empty($roomreviewedit))
{
    $apartmentModel = new ApartmentModel();
    $apartmentModel->updateApartment($id, $emailedit, $townedit, $countryedit, $addressedit, $gpsedit, $numberedit, $valueedit, $roomreviewedit);
}
else
{
    echo "Falló la conexión con la BD";
}
header("Location: list_apartments.php");
?>