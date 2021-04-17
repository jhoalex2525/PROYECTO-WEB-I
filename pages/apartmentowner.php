<?php include_once("../static/layouts/header.php") ?>
<h1>Apartamentos por propietario</h1>
<div class="row">
    <div class="col-6 picturetype1align">
        <img class="picturetype1" src="../images/room1.jpeg" alt="">
    </div>
    <div class="col-6">
        <form>
            <div class="mb-6">
                <label class="form-label">Número de habitaciones:</label>
                <input type="text" class="form-control" id="numberadd" name="numberadd" selected disabled>
            </div>
            <div class="mb-6">
                <label class="form-label">Valor noche:</label>
                <input type="text" class="form-control" id="valueadd" name="valueadd" selected disabled>
            </div>
            <div class="mb-6">
                <label class="form-label">Reseña habitación:</label>
                <textarea type="text" class="form-control" style="height:125px" id="roomreviewsignup" name="roomreviewsignup" selected disabled></textarea>
            </div>
        </form>
    </div>
</div>
<?php include_once("../static/layouts/footer.php") ?>