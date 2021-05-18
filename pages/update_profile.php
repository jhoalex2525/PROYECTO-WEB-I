<?php

include_once '../database/models/UsersModel.php';
$usersModel = new UsersModel();
$id = $_GET['id'];
$nameedit = $_POST['nameedit'];
$emailedit = $_POST['emailedit'];
$countryedit = $_POST['countryedit'];
$townedit = $_POST['townedit'];
$passwordedit = $_POST['passwordedit'];
$roleedit = $_POST['roleedit'];
$photoedit = $_POST['photoedit'];
$reviewedit = $_POST['reviewedit'];
$usersModel-> updateUser($id, $nameedit, $emailedit, $countryedit, $townedit, $passwordedit, $roleedit, $photoedit, $reviewedit);
header("Location: profile.php?id=$id");
?>        
</tbody>