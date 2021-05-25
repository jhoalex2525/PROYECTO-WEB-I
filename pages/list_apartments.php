<?php 
$sessiontype = 'anfitrion';
include_once("../static/layouts/header.php");
?>
    <h1>Apartamentos por propietario</h1>
    <input type="button" value="Añadir Apartamento" onclick="window.location.href='addapartment.php'" class="btn btn-primary">
    <input type="button" value="Volver a perfil" onclick="window.location.href='profile.php'" class="btn btn-primary">
<?php  
    $email = $_SESSION['email'];
    include_once '../database/models/ApartmentModel.php';    
    $apartmentModel = new ApartmentModel();            
    $apartments = $apartmentModel -> getApartments($email);    
    while($row = mysqli_fetch_assoc($apartments)){
    $template = "
    <div class='row'>
        <div class='col-md-6 mb-3 picturetype1align'>
            <img class='picturetype2' src='{$row['photo']}' alt=''>
        </div>
        <div class='col-md-6'>
            <form>
                <div class='mb-3'>
                    <label class='form-label'>Número de habitaciones:</label>
                    <input type='text' class='form-control' id='numberadd' name='numberadd' selected disabled value='{$row['rooms']}''>
                </div>
                <div class='mb-3'>
                    <label class='form-label'>Valor noche:</label>
                    <input type='text' class='form-control' id='valueadd' name='valueadd' selected disabled value='{$row['value']}'>
                </div>
                <div class='mb-3'>
                    <label class='form-label'>Reseña habitación:</label>
                    <textarea type='text' class='form-control' style='height:125px' id='roomreviewadd' name='roomreviewadd' selected disabled>{$row['roomreview']}</textarea>
                </div>
                <a type='button' href='edit_apartment.php?id={$row['id']}' class='btn btn-primary'>Actualizar</a>
                <a type='button' href='delete_apartment.php?id={$row['id']}' class='btn btn-primary'>Eliminar</a>
            </form>
        </div>
    </div>";
    echo $template;
    }
?>
<?php include_once("../static/layouts/footer.php") ?>