<?php include_once("../static/layouts/header.php") ?>
<h1>Registro</h1>
<form onsubmit="return registerValidation()" method="POST" action="">
    <div class="mb-3">
        <label class="form-label">Nombre completo:</label>
        <input type="text" class="form-control" id="namesignup" name="namesignup" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Correo electrónico:</label>
        <input type="email" class="form-control" id="emailsignup" name="emailsignup" required>
    </div>
    <div class="mb-3">
        <label class="form-label">País:</label>
        <input type="text" class="form-control" id="countrysignup" name="countrysignup" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Ciudad:</label>
        <input type="text" class="form-control" id="townsignup" name="townsignup" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="passwordsignup" name="passwordsignup" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Rol:</label>
        <select name="rolesignup" class="form-control" id="rolesignup">
            <option value="null" selected disabled>Seleccione un rol</option>
            <option value="anfitrion">Anfitrión</option>
            <option value="invitado">Invitado</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto:</label>
        <input type="text" class="form-control" id="photosignup" name="photosignup" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Reseña personal:</label>
        <textarea type="text" class="form-control" style="height:125px" id="reviewsignup" name="reviewsignup" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php include_once("../static/layouts/footer.php") ?>