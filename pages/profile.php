<?php include_once("../static/layouts/header.php") ?>
<h1>Perfil Anfitrión</h1>
<div class="row">
    <div class="co-mdl-6 picturetype1align">
        <img class="picturetype1" src="../images/defaultprofile.png" alt="">
    </div>
    <div class="col-md-6">
        <form>
            <div class="mb-3">
                <label class="form-label">Nombre completo:</label>
                <input type="text" class="form-control" id="name" name="name" selected disabled>
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad:</label>
                <input type="text" class="form-control" id="town" name="town" selected disabled>
            </div>
            <div class="mb-3">
                <label class="form-label">Reseña personal:</label>
                <textarea type="text" class="form-control" style="height:125px" id="reviewsignup" name="reviewsignup" selected disabled></textarea>
            </div>
        </form>
    </div>
</div>
<?php include_once("../static/layouts/footer.php") ?>