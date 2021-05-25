<?php include_once("../static/layouts/header.php");?>
<h1>Inicio de Sesión</h1>
<form onsubmit="return loginValidation()" method="POST" action="login_validation.php">
    <div class="mb-3">
        <label class="form-label">Correo electrónico:</label>
        <input type="email" class="form-control" id="emaillogin" name="emaillogin" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="passwordlogin" name="passwordlogin" required>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar</button>
</form>
<?php include_once("../static/layouts/footer.php") ?>