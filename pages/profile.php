<?php 
$sessiontype = 'all';
include_once("../static/layouts/header.php");
?>
<h1>Perfil Anfitrión</h1>
<?php     
    $id = $_SESSION['id'];     
    $role = $_SESSION['role'];
    include_once '../database/models/UsersModel.php';
    $usersModel = new UsersModel();
    $getUser = $usersModel -> getUser($id);        
?>
<div class="row">
    <div class="col-md-6 picturetype1align">
        <img class="picturetype1" src="<?php echo $getUser['photo']?>" alt="">
    </div>
    <div class="col-md-6">
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Nombre completo:</label>
                <input type="text" class="form-control" id="nameprofile" name="nameprofile" disabled value="<?php echo $getUser['name']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad:</label>
                <input type="text" class="form-control" id="townprofile" name="townprofile" disabled value="<?php echo $getUser['town']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Reseña personal:</label>
                <textarea type="text" class="form-control" style="height:125px" id="reviewprofile" name="reviewprofile" disabled><?php echo $getUser['personalreview']?></textarea>
            </div>
            <?php
            if($role == 'Anfitrión'){
                $template="
                <a type='button' href='edit_profile.php' class='btn btn-primary'>Actualizar información</a>
                <a type='button' href='list_apartments.php' class='btn btn-primary'>Mis Apartamentos</a>";
                echo ($template);
            }
            else{
                $template="
                <a type='button' href='edit_profile.php' class='btn btn-primary'>Actualizar información</a>";                
                echo ($template);
            }            
            ?>
        </form>
    </div>
</div>
<?php include_once("../static/layouts/footer.php")  ?>