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
    public function insert($emailadd,$townadd, $countryadd, $addressadd, $gpsadd, $numberadd, $valueadd, $roomreviewadd, $photoadd)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de apartamentos";
            exit();
        }
        //agregar registro a bd
        else {
            $sql = "INSERT INTO apartmentdata (email,town,country,address,gps,rooms,value,roomreview,photo) VALUES
            ('{$emailadd}','{$townadd}','{$countryadd}','{$addressadd}','{$gpsadd}','{$numberadd}','{$valueadd}','{$roomreviewadd}','{$photoadd}')";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "Registro de apartamento exitoso";
            } else {
                echo "Se presentó error al registrar el usuario";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
    public function getApartments($email){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de apartamentos";
            exit();
        }
        //consultar todos los registros de la bd
        else {            
            $sql = "SELECT * FROM apartmentdata WHERE email = '{$email}'";            
            $apartments = $this->db->query($sql);  
            return $apartments;
        }
    }    
    public function getApartment($id){ //Clave en la URL
        $sql = "SELECT * FROM apartmentdata WHERE id = {$id}";
        $apartment = $this->db->query($sql)->fetch_assoc();
        return $apartment;
    }    
    public function updateApartment($id, $emailedit, $townedit, $countryedit, $addressedit, $gpsedit, $numberedit, $valueedit, $roomreviewedit,$photoedit)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL de apartamentos";
            exit();
        }
        //Actualizar registro a bd
        else {			            
            $sql = "UPDATE apartmentdata SET email = '{$emailedit}', town = '{$townedit}', country = '{$countryedit}', address = '{$addressedit}', 
                                             gps = '{$gpsedit}', rooms = '{$numberedit}', value = '{$valueedit}', roomreview = '{$roomreviewedit}',
                                             photo = '{$photoedit}'
                                             WHERE id = '{$id}'";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "Actualización de habitación exitosa";
            } else {
                echo "Se presentó error al actualizar la habitación";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
    public function deleteApartment($id)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MySQL  de apartamentos";
            exit();
        }
        //Actualizar registro a bd
        else {			            
            $sql = "DELETE FROM apartmentdata WHERE id = '{$id}'";
            //Verifica query
            if ($this->db->query($sql) === TRUE) {
                echo "Eliminación de habitación exitosa";
            } else {
                echo "Se presentó error al Eliminar la habitación";
            }
            //termina ejecución    
            $this->db->close();
        }
    }
}
