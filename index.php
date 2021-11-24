<?php include_once("static/layouts/header.php");?>
<h1 class="espaciotitulos">Bienvenido</h1>
<?php
    include_once '../PROYECTO WEB I/database/models/IndexApartmentModel.php';    
    $apartmentModel = new ApartmentModel();            
    $apartments = $apartmentModel -> getApartmentsForIndex();
    while($row = mysqli_fetch_assoc($apartments)){
    $template = "
    <div class='row index'>
        <div class='col-md-6 mb-3 picturetype1align'>
            <div>    
                <span class='bungeecss text-dark' id='numberadd'>{$row['town']}</span>
            </div>
            <div>    
                <img class='picturetype3' src='{$row['photo']}' alt=''>            
            </div>            
        </div>
        <div class='col-md-6'>
            <form>
                <div class='mb-3'>
                    <label class='form-label'>Número de habitaciones</label>
                    <span class='form-control' id='numberadd' name='numberadd'>{$row['rooms']}</span>
                </div>
                <div class='mb-3'>
                    <label class='form-label'>Valor noche</label>
                    <span class='form-control' id='valueadd' name='valueadd'>{$row['value']}</span>
                </div>
                <div class='mb-3'>
                    <label class='form-label'>Reseña habitación</label>
                    <textarea class='form-control index' style='height:125px' id='roomreviewadd' name='roomreviewadd' selected disabled>{$row['roomreview']}</textarea>
                </div>                
            </form>
        </div>
    </div>";
    echo $template;
    }
?>
<?php include_once("static/layouts/footer.php") ?>