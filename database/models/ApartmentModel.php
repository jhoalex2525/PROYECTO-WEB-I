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
    public function getApartments($email){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL";
            exit();
        }
        //consultar todos los registros de la bd
        else {
            echo "Conexión correcta";
            $sql = "SELECT * FROM apartmentdata WHERE email = '{$email}'";            
            $apartments = $this->db->query($sql);  
            return $apartments;
        }
    }
    public function getApartment($id){ //Clave en la URL
        $sql = "SELECT * FROM apartmentdata WHERE id = {$id}";
        $apartment = $this->db->query($sql)->fetch_assoc(); //revisar
        return $apartment;
    }    
    public function updateApartment($id, $emailedit, $townedit, $countryedit, $addressedit, $gpsedit, $numberedit, $valueedit, $roomreviewedit)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL";
            exit();
        }
        //Actualizar registro a bd
        else {			
            echo "Conexión a BD correcta, ";
            $sql = "UPDATE apartmentdata SET email = '{$emailedit}', town = '{$townedit}', country = '{$countryedit}', address = '{$addressedit}', 
                                             gps = '{$gpsedit}', rooms = '{$numberedit}', value = '{$valueedit}', roomreview = '{$roomreviewedit}'
                                             WHERE id = '{$id}'";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "Actualización de habitación exitosa";
            } else {
                echo "pero hubo error al actualizar la habitación";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
    public function deleteApartment($id)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL";
            exit();
        }
        //Actualizar registro a bd
        else {			
            echo "Conexión a BD correcta, ";
            $sql = "DELETE FROM apartmentdata WHERE id = '{$id}'";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "Eliminación de habitación exitosa";
            } else {
                echo "pero hubo error al Eliminar la habitación";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
}
