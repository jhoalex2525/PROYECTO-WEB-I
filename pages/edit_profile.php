<?php 
$sessiontype = 'all';
include_once("../static/layouts/header.php");
?>
    <h1 class="espaciotitulos">Editar Perfil</h1>
<?php 
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $role = $_SESSION['role'];
    include_once '../database/models/UsersModel.php';    
    $usersModel = new UsersModel();    
    $user = $usersModel -> getUser($id);    
?>
    <form onsubmit="return editProfileValidation()" method="POST" action="update_profile.php">
        <div class="mb-3">
            <label class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="nameedit" name="nameedit" required value="<?php echo $user['name'];?>">
        </div>    
        <div class="mb-3">
            <label class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="emailedit" name="emailedit" readonly required value="<?php echo $email;?>">
        </div>
        <div class="mb-3">
            <label class="form-label">País</label>
            <input type="text" class="form-control" id="countryedit" name="countryedit" required value="<?php echo $user['country'];?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="townedit" name="townedit" required value="<?php echo $user['town'];?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="passwordedit" name="passwordedit" required value="<?php echo $user['password'];?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select name="roleedit" class="form-control" id="roleedit">
                <?php
                if($role == 'Anfitrión'){
                    $template="
                    <option value='Anfitrión'>$role</option>                
                    <option value='Invitado'>Invitado</option>
                    <option value='Administrador'>Administrador</option>";
                    echo ($template);
                }
                else{
                    if ($role == 'Invitado') {
                        $template = "
                                    <option value='Invitado'>$role</option>                
                                    <option value='Anfitrión'>Anfitrión</option>
                                    <option value='Administrador'>Administrador</option>";
                        echo ($template);
                    }
                    else{
                        $template = "
                                    <option value='Administrador'>$role</option>                
                                    <option value='Anfitrión'>Anfitrión</option>
                                    <option value='Invitado'>Invitado</option>";
                        echo ($template);
                    }
                }                
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="text" class="form-control" id="photoedit" name="photoedit" required value="<?php echo $user['photo']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Reseña personal</label>
            <textarea type="text" class="form-control" style="height:125px" id="reviewedit" name="reviewedit" required><?php echo $user['personalreview']?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <input type="button" value="Cancelar" onclick="window.location.href='profile.php'" class="btn btn-primary">
    </form>
<?php include_once("../static/layouts/footer.php") ?>