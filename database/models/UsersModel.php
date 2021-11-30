<?php
include_once '../database/DBConnection.php';
class UsersModel
{ //Crea los campos del registro
    private $db = NULL;
    public function __construct()
    {
        //Creo objeto de conexión
        $dbConnection = new DBConnection();
        //Obtengo la conexión
        $this->db = $dbConnection->connect();
    }
    public function insert($namesignup, $emailsignup, $countrysignup, $townsignup, $passwordsignup, $rolesignup, $photosignup, $reviewsignup, $estadosignup)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de usuarios";
            exit();
        }
        //agregar registro a bd
        else {            
            $sql = "INSERT INTO userdata (name,email,country,town,password,role,photo,personalreview,estado) VALUES
            ('{$namesignup}','{$emailsignup}','{$countrysignup}','{$townsignup}','{$passwordsignup}','{$rolesignup}','{$photosignup}','{$reviewsignup}','{$estadosignup}')";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "Registro de usuario exitoso";
            } else {
                echo "Se presentó error al registrar el usuario";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
    public function userValidation($emaillogin,$passwordlogin){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de usuarios";
            exit();
        }
        else {
            $sql = "SELECT * FROM userdata WHERE email = '{$emaillogin}' AND  password = '{$passwordlogin}'";
            $user = $this->db->query($sql);
            $this->db->close();
            return $user;
        }
    }
    public function getUsers($email){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de Usuarios";
            exit();
        }
        //consultar todos los registros de la bd
        else {            
            $sql = "SELECT * FROM userdata WHERE email = '{$email}'";            
            $users = $this->db->query($sql);  
            return $users;
        }
    } 
    public function getUser($id){
        $sql = "SELECT * FROM userdata WHERE id = {$id}";
        $user = $this->db->query($sql)->fetch_assoc();
        return $user;
    }
    public function updateUser($id, $nameedit, $emailedit, $countryedit, $townedit, $passwordedit, $roleedit, $photoedit, $reviewedit, $estadoedit){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de usuarios";
            exit();
        }
        //Actualizar registro a bd
        else {
        $sql ="UPDATE userdata SET name = '{$nameedit}', email  = '{$emailedit}', country = '{$countryedit}', town = '{$townedit}',
                                   password = '{$passwordedit}', role = '{$roleedit}', photo = '{$photoedit}', personalreview = '{$reviewedit}',
                                   estado = '{$estadoedit}'
                                WHERE id = '{$id}'";
        //Verifica query
        if ($this->db->query($sql) === TRUE) {
            echo "Actualización de usuario exitosa";
        } else {
            echo "Se presentó error al actualizar el usuario";
        }
        //termina ejecución    
        $this->db->close();        
        }
    }    
}
