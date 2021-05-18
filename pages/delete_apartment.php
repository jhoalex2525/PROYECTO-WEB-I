<?php
include_once '../database/models/ApartmentModel.php';
$id = $_GET['id'];
// $emailedit = $_POST['emailedit'];
// $townedit = $_POST['townedit'];
// $countryedit = $_POST['countryedit'];
// $addressedit = $_POST['addressedit'];
// $gpsedit = $_POST['gpsedit'];
// $numberedit = $_POST['numberedit'];
// $valueedit = $_POST['valueedit'];
// $roomreviewedit = $_POST['roomreviewedit'];


    $apartmentModel = new ApartmentModel();
    $apartmentModel->deleteApartment($id);

header("Location: list_apartments.php");
?>