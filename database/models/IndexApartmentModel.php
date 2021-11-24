<?php
include_once '../PROYECTO WEB I/database/DBConnection.php';
class ApartmentModel
{ //Crea los campos de los apartamentos registrados
    private $db = NULL;
    public function __construct()
    {
        //Creo objeto de conexión
        $dbConnection = new DBConnection();
        //Obtengo la conexión
        $this->db = $dbConnection->connect();
    }    
    public function getApartmentsForIndex(){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de apartamentos";
            exit();
        }
        //consultar todos los registros de la bd
        
        else {            
            $sql = "SELECT * FROM apartmentdata";            
            $apartments = $this->db->query($sql);  
            return $apartments;
        }
    }    
}
