<?php

class Empleado {
    
    private $Empleado;
    private $db;

    public function __construct() {
        $this->Empleado = array();
        $this->db = new PDO('mysql:host=192.168.0.20;dbname=bd_techno_factory', "gemart", "Jamart1590@");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getEmpleados() {

        self::setNames();
        $sql = "SELECT * FROM Empleados";
        foreach ($this->db->query($sql) as $res) {
            $this->tipo[] = $res;
        }
        return $this->Empleado;
        $this->db = null;
    }

    public function setGuardar($nombre, $apellido, $genero, $fecha, $estado) {

        self::setNames();
        $sql =  "INSERT INTO 'bd_techno_factory'.'Empleados' (nombreEmpleado,apellidoEmpleado,genero,fechaNacimiento,idEstado) VALUES ('$nombre','$apellido','$genero','$fecha','1')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    public function setActualizar($id, $nombre, $imagen) {

        self::setNames();
        $sql = "UPDATE tipos set nombre='". $nombre ."', imagen='". $imagen ."' WHERE id=". $id ."";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function setEliminar($id) {

        self::setNames();
        $sql = "DELETE FROM tipos WHERE id=" . $id . "";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getBuscarTipos($filtro) {

        self::setNames();
        $sql = "SELECT * FROM Empleados WHERE nombreEmpleado like '%". $filtro ."%'";
        foreach ($this->db->query($sql) as $res) {
            $this->Empleado[] = $res;
        }
        return $this->Empleado;
        $this->db = null;
    }
    public function getBuscarNombre($filtro) {

        self::setNames();
        $sql = "SELECT * FROM Empleados WHERE nombreEmpleado  = '". $filtro ."'";
        foreach ($this->db->query($sql) as $res) {
            $this->Empleado[] = $res;
        }
        //echo $res;
        return $this->Empleado;
        $this->db = null;
    }
    public function getBuscarIdEmpleado($id) {

        self::setNames();
        $sql = "SELECT * FROM Empleados WHERE  idEmpleado =". $id ."";
        foreach ($this->db->query($sql) as $res) {
            $this->Empleado[] = $res;
        }
        return $this->Empleado;
        $this->db = null;
    }
}
?>