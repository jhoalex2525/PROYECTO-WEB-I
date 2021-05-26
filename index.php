<?php include_once("static/layouts/header.php");?>
<h1 class="espaciotitulos">Bienvenido</h1>
<?php    
    include_once '../PROYECTO WEB I/database/models/IndexApartmentModel.php';    
    $apartmentModel = new ApartmentModel();            
    $apartments = $apartmentModel -> getApartmentsForIndex();    
    while($row = mysqli_fetch_assoc($apartments)){    
    $template = "
    <div class='row'>
        <div class='col-md-6 mb-3 picturetype1align'>
            <img class='picturetype3' src='{$row['photo']}' alt=''>
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
            </form>
        </div>
    </div>";
    echo $template;
    }
?>
<?php include_once("static/layouts/footer.php") ?>