<?php include_once("../static/layouts/header.php") ?>
<h1>Editar Perfil</h1>
<?php 
echo $_SERVER['DOCUMENT_ROOT'];
?>
<?php 
    include_once '../database/models/UsersModel.php';
    $usersModel = new UsersModel();
    $id = $_GET['id'];
    $user = $usersModel -> getUser($id);
    print_r($user);
    
?>
<form onsubmit="return registerValidation()" method="POST" action="update_profile.php?id=<?php echo $id;?>">
    <div class="mb-3">
        <label class="form-label">Nombre completo:</label>
        <input type="text" class="form-control" id="nameedit" name="nameedit" required value="<?php echo $user['name']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Correo electrónico:</label>
        <input type="email" class="form-control" id="emailedit" name="emailedit" required value="<?php echo $user['email']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">País:</label>
        <input type="text" class="form-control" id="countryedit" name="countryedit" required value="<?php echo $user['country']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Ciudad:</label>
        <input type="text" class="form-control" id="townedit" name="townedit" required value="<?php echo $user['town']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="passwordedit" name="passwordedit" required value="<?php echo $user['password']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Rol:</label>
        <select name="roleedit" class="form-control" id="roleedit">
            <option value="null" selected disabled><?php echo $user['role']?></option>
            <option value="anfitrion">Anfitrión</option>
            <option value="invitado">Invitado</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto:</label>
        <input type="text" class="form-control" id="photoedit" name="photoedit" required value="<?php echo $user['photo']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Reseña personal:</label>
        <textarea type="text" class="form-control" style="height:125px" id="reviewedit" name="reviewedit" required><?php echo $user['personalreview']?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
<?php include_once("../static/layouts/footer.php") ?>