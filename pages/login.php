<?php include_once("../static/layouts/header.php");?>
<h1 class="espaciotitulos">Inicio de Sesión</h1>
<form onsubmit="return loginValidation()" method="POST" action="login_validation.php">
    <div class="row justify-content-center">
        <div class="mb-3 col-md-6">
            <label class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="emaillogin" name="emaillogin" required>
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="passwordlogin" name="passwordlogin" required>
            <div class="form-group">
                <button type="submit" class="btn btn-dark mt-3">Iniciar</button>
            </div>
        </div>                
    </div>
</form>
<?php include_once("../static/layouts/footer.php") ?>