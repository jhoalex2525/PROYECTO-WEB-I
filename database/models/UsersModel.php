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
    public function insert($namesignup, $emailsignup, $countrysignup, $townsignup, $passwordsignup, $rolesignup, $photosignup, $reviewsignup)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL";
            exit();
        }
        //agregar registro a bd
        else {
            echo "Conexión a BD correcta, ";
            $sql = "INSERT INTO userdata (name,email,country,town,password,role,photo,personalreview) VALUES
            ('{$namesignup}','{$emailsignup}','{$countrysignup}','{$townsignup}','{$passwordsignup}','{$rolesignup}','{$photosignup}','{$reviewsignup}')";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "registro de usuario exitoso";
            } else {
                echo "pero hubo error al registrar el usuario";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
    public function userValidation($emaillogin,$passwordlogin){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL";
            exit();
        }
        else {
            $sql = "SELECT * FROM userdata WHERE email = '{$emaillogin}' AND  password = '{$passwordlogin}'";
            $user = $this->db->query($sql);
            $this->db->close();
            return $user;
        }
    }
    // public function getUserToEdit(){
    //     if ($this->db->connect_errno) {
    //         echo "Falló la conexión a MySQL";
    //         exit();
    //     }
    //     //consultar todos los registros de la bd
    //     else {
    //         echo "Conexión correcta";
    //         $sql = "SELECT * FROM userdata";
    //         $user = $this->db->query($sql);            
    //         $this->db->close();
    //         return $user;
    //     }
    // }
    public function getUser($id){ //Clave en la URL
        $sql = "SELECT * FROM userdata WHERE id = {$id}";
        $user = $this->db->query($sql)->fetch_assoc();
        return $user;
    }
    public function updateUser($id, $nameedit, $emailedit, $countryedit, $townedit, 
                               $passwordedit, $roleedit, $photoedit, $reviewedit){
        $sql ="UPDATE userdata SET name = '{$nameedit}', email  = '{$emailedit}', country = '{$countryedit}', town = '{$townedit}',
                                   password = '{$passwordedit}', role = '{$roleedit}', photo = '{$photoedit}', personalreview = '{$reviewedit}'
                                WHERE id = '{$id}'";
        $this->db->query($sql);
        $this->db->close();
    }
    //Acá insertar otra funcion con el envio de info la otra tabla pero mejor crear otro UsersModel
}
