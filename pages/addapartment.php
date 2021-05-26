<?php
$sessiontype = 'anfitrion';
include_once("../static/layouts/header.php");
?>
<h1 class="espaciotitulos">Añadir Apartamento</h1>
<form onsubmit="return addApartmentValidation()" method="POST" action="create_apartment.php">    
    <div class="mb-3">
        <label class="form-label">Ciudad:</label>
        <input type="text" class="form-control" id="townadd" name="townadd" required>
    </div>
    <div class="mb-3">
        <label class="form-label">País:</label>
        <input type="text" class="form-control" id="countryadd" name="countryadd" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Dirección:</label>
        <input type="text" class="form-control" id="addressadd" name="addressadd" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Ubicación Google Maps:</label>
        <input type="text" class="form-control" id="gpsadd" name="gpsadd" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Número de habitaciones</label>
        <input type="number" class="form-control" id="numberadd" name="numberadd" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Valor noche</label>
        <input type="number" step="any"class="form-control" id="valueadd" name="valueadd" required>
    </div>    
    <div class="mb-3">
        <label class="form-label">Reseña habitación</label>
        <textarea type="text" class="form-control" style="height:200px" id="roomreviewadd" name="roomreviewadd" required></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto principal de vivienda</label>
        <input type="text" class="form-control" id="photoadd" name="photoadd" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" value="Cancelar" onclick="window.location.href='list_apartments.php'" class="btn btn-primary">
</form>
<?php include_once("../static/layouts/footer.php") ?>