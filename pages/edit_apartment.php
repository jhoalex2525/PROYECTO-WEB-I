<?php
$sessiontype = 'anfitrion';
include_once("../static/layouts/header.php");
?>
    <h1 class="espaciotitulos">Editar Apartamento</h1>
<?php
    include_once '../database/models/ApartmentModel.php';
    $apartmentModel = new ApartmentModel();
    $id = $_GET['id'];
    $apartment = $apartmentModel -> getApartment($id);
?>
    <form onsubmit="return editApartmentValidation()" method="POST" action="update_apartment.php?id=<?php echo $id;?>">    
        <div class="mb-3">
            <label class="form-label">Ciudad:</label>
            <input type="text" class="form-control" id="townedit" name="townedit" required value="<?php echo $apartment['town']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">País:</label>
            <input type="text" class="form-control" id="countryedit" name="countryedit" required value="<?php echo $apartment['country']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección:</label>
            <input type="text" class="form-control" id="addressedit" name="addressedit" required value="<?php echo $apartment['address']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ubicación Google Maps</label>
            <input type="text" class="form-control" id="gpsedit" name="gpsedit" required value="<?php echo $apartment['gps']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de habitaciones</label>
            <input type="number" class="form-control" id="numberedit" name="numberedit" required value="<?php echo $apartment['rooms']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Valor noche</label>
            <input type="number" step="any"class="form-control" id="valueedit" name="valueedit" required value="<?php echo $apartment['value']?>">
        </div>    
        <div class="mb-3">
            <label class="form-label">Reseña habitación</label>
            <textarea type="text" class="form-control" style="height:200px" id="roomreviewedit" name="roomreviewedit" required><?php echo $apartment['roomreview']?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Foto principal de vivienda</label>
            <input type="text" class="form-control" id="photoedit" name="photoedit" required value="<?php echo $apartment['photo']?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <input type="button" value="Cancelar" onclick="window.location.href='list_apartments.php'" class="btn btn-primary">
    </form>
<?php include_once("../static/layouts/footer.php") ?>