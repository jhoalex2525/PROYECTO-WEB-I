<?php include_once("../static/layouts/header.php") ?>
<h1>Perfil Anfitrión</h1>
<?php 
    include_once '../database/models/UsersModel.php';
    $usersModel = new UsersModel();
    $id = $_GET['id'];    
    $getUser = $usersModel -> getUser($id);    
    print_r($getUser);    
    print_r($id);    
    print_r($getUser['email'])
?>
<div class="row">
    <div class="col-md-6 picturetype1align">
        <img class="picturetype1" src="../images/defaultprofile.png" alt="">
    </div>
    <div class="col-md-6">
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Nombre completo:</label>
                <input type="text" class="form-control" id="nameprofile" name="nameprofile" selected disabled value="<?php echo $getUser['name']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad:</label>
                <input type="text" class="form-control" id="townprofile" name="townprofile" selected disabled value="<?php echo $getUser['town']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Reseña personal:</label>
                <textarea type="text" class="form-control" style="height:125px" id="reviewprofile" name="reviewprofile" selected disabled><?php echo $getUser['personalreview']?></textarea>
            </div>
            <input type="button" value="Actualizar Información" onclick="window.location.href='edit_profile.php?id=<?php echo ($id);?>'" class="btn btn-primary">
            <input type="button" value="Mis Apartamentos" onclick="window.location.href='apartmentowner.php?email=<?php echo ($getUser['email']);?>'" class="btn btn-primary">
        </form>
    </div>
</div>
<?php include_once("../static/layouts/footer.php") ?>