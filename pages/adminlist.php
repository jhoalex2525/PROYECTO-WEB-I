<?php

$sessiontype = 'Administrador';
include_once("../static/layouts/header.php");
?>
    <h1 class="espaciotitulos">Solicitud de Administrador</h1>
    <input type="button" value="Volver a perfil" onclick="window.location.href='profile.php'" class="btn btn-primary">
<?php 

// En la línea 43 se agrega Modal, para preguntar al usuario si realmente desea eliminar un registro 
    $email = $_SESSION['role'];
    include_once '../database/models/UsersModel.php';    
    $usersmodel = new UsersModel();            
    $users = $usersmodel -> getUsers($email);    
    while($row = mysqli_fetch_assoc($users)){
    $template = "
    <div class='row listapartment'>
        <div class='col-md-6 mb-3 picturetype1align'>
            <div>    
                <span class='bungeecss text-dark' id='numberadd'>{$row['town']}</span>
            </div>
            <div>
                <img class='picturetype2' src='{$row['photo']}' alt=''>
            </div>
        </div>
        <div class='col-md-6'>
            <form>
                <div class='mb-3'>
                    <label class='form-label'>Número de habitaciones</label>
                    <input type='text' class='form-control' id='numberadd' name='numberadd' selected disabled value='{$row['rooms']}''>
                </div>
                <div class='mb-3'>
                    <label class='form-label'>Valor noche</label>
                    <input type='text' class='form-control' id='valueadd' name='valueadd' selected disabled value='{$row['value']}'>
                </div>
                <div class='mb-3'>
                    <label class='form-label'>Reseña habitación</label>
                    <textarea type='text' class='form-control' style='height:125px' id='roomreviewadd' name='roomreviewadd' selected disabled>{$row['roomreview']}</textarea>
                </div>
                <a type='button' href='edit_apartment.php?id={$row['id']}' class='btn btn-primary'>Actualizar</a>                
                <a type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#deletemodal{$row['id']}'>Eliminar</a>
            </form>
        </div>
    </div>    
    <div class='modal fade' id='deletemodal{$row['id']}' tabindex='-1' aria-labelledby='' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='deletemodalLabel'>Eliminando Apartamento</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <p>Una vez eliminado el apartamento no podrá ser recuperado.</p>
                    <p>¿Realmente desea eliminarlo?</p>                        
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-primary' data-bs-dismiss='modal'>No</button>                    
                    <a type='button' href='delete_apartment.php?id={$row['id']}' class='btn btn-primary'>Si</a>         
                </div>
            </div>
        </div>
    </div>";
    echo $template;
    }    
?>    
<?php include_once("../static/layouts/footer.php") ?>
