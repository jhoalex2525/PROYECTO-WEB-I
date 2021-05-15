<?php
include_once '../database/DBConnection.php';
class ApartmentModel
{ //Crea los campos del registro de apartamento
    private $db = NULL;
    public function __construct()
    {
        //Creo objeto de conexión
        $dbConnection = new DBConnection();
        //Obtengo la conexión
        $this->db = $dbConnection->connect();
    }
    public function insert($emailadd,$townadd, $countryadd, $addressadd, $gpsadd, $numberadd, $valueadd, $roomreviewadd)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL";
            exit();
        }
        //agregar registro a bd
        else {			
            echo "Conexión a BD correcta, ";
            $sql = "INSERT INTO apartmentdata (email,town,country,address,gps,rooms,value,roomreview) VALUES
            ('{$emailadd}','{$townadd}','{$countryadd}','{$addressadd}','{$gpsadd}','{$numberadd}','{$valueadd}','{$roomreviewadd}')";
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
    public function getApartments(){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL";
            exit();
        }
        //consultar todos los registros de la bd
        else {
            echo "Conexión correcta";
            $sql = "SELECT * FROM apartmentdata";
            $apartments = $this->db->query($sql);            
            $this->db->close();
            return $apartments;
        }
    }
    public function getApartment($email){ //Clave en la URL
        $sql = "SELECT * FROM apartmentdata WHERE email = {$email}";
        $apartment = $this->db->query($sql)->fetch_assoc(); //revisar
        return $apartment;
    }
    //Acá insertar otra funcion con el envio de info la otra tabla pero mejor crear otro UsersModel
}
