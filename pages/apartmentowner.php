<?php include_once("../static/layouts/header.php") ?>
<h1>Apartamentos por propietario</h1>
<?php  
    include_once '../database/models/ApartmentModel.php';
    $apartmentModel = new ApartmentModel();
    $email = $_GET['email'];    
    $apartment = $apartmentModel -> getApartment($email);
    print_r($apartment);

    $template = "
<div class='row'>
    <div class='col-md-6 picturetype1align'>
        <img class='picturetype1' src='../images/room1.jpeg' alt=''>
    </div>
    <div class='col-md-6'>
        <form>
            <div class='mb-3'>
                <label class='form-label'>Número de habitaciones:</label>
                <input type='text' class='form-control' id='numberadd' name='numberadd' selected disabled>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Valor noche:</label>
                <input type='text' class='form-control' id='valueadd' name='valueadd' selected disabled>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Reseña habitación:</label>
                <textarea type='text' class='form-control' style='height:125px' id='roomreviewadd' name='roomreviewadd' selected disabled></textarea>
            </div>
        </form>
    </div>
</div>";
echo $template;
echo $template;

?>
<?php include_once("../static/layouts/footer.php") ?>