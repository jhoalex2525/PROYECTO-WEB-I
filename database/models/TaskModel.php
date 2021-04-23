<?php
include_once '../database/DBConnection.php';
class TaskModel
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
            echo "Conexión correcta, ";
            $sql = "INSERT INTO userdata (name,email,country,town,password,role,photo,personalreview) VALUES
            ('{$namesignup}','{$emailsignup}','{$countrysignup}','{$townsignup}','{$passwordsignup}','{$rolesignup}','{$photosignup}','{$reviewsignup}')";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "tarea creada con éxito";
            } else {
                echo "pero hubo error al crear la tarea";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
}
