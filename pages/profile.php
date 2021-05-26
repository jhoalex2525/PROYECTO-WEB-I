<?php 
$sessiontype = 'all';
include_once("../static/layouts/header.php");
?>
<?php     
    $id = $_SESSION['id'];     
    $role = $_SESSION['role'];
    include_once '../database/models/UsersModel.php';
    $usersModel = new UsersModel();
    $getUser = $usersModel -> getUser($id);        
?>
<h1 class="espaciotitulos">Perfil <?php echo $role;?></h1>
<div class="row">
    <div class="col-md-6">
        <div class="picturetype1 picturetype1align gradient">
            <img src="<?php echo $getUser['photo']?>" alt="">
            <div class="mb-3 d-flex flex-column">
                <span class="bungeecss text-dark" id="nameprofile"><?php echo $getUser['name']?></span>
                <span id="townprofile"><?php echo $getUser['town']?></span>
            </div>            
        </div>        
    </div>
    <div class="col-md-6">
        <form method="POST" action="">            
            <div class="mb-3">
                <h4>Reseña personal</h4>    
                <p id="reviewprofile"><?php echo $getUser['personalreview']?></p>
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
    <?php     
    if($role == 'Anfitrión'){
        echo "<h3 class='espaciotitulos'>Vista rápida a mis apartamentos</h3>";
        $email = $_SESSION['email'];
        include_once '../database/models/ApartmentModel.php';    
        $apartmentModel = new ApartmentModel();            
        $apartments = $apartmentModel -> getApartments($email);    
        echo "<div class='d-flex flex-wrap justify-content-center'>";
        while($row = mysqli_fetch_assoc($apartments)){        
        $template = "
                    <div class='d-flex'>
                        <div class='imagenesperfil'>
                            <div class='containerslide'>
                                <img class='image' src='{$row['photo']}' alt=''>
                                <div class='overlay'>
                                    <div class='text'>{$row['town']}</div>                                    
                                </div>
                            </div>
                        </div>
                    </div>";
            echo $template;            
        }
        echo "</div>";
    }
    ?>
</div>
<?php include_once("../static/layouts/footer.php")  ?>
