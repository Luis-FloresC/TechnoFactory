<?php
    class claseEmpleado{
        public function __construct() {
        }
      
        function Guardar($nombre, $apellido, $genero, $fecha, $estado){
            require_once("../Clases/Empleado.php");
            $tipos = new Tipo();
            return $tipos->setGuardar($nombre,$apellido, $genero, $fecha, $estado);
        }
       
        function BuscarNombre($nombre){
            require_once("../Clases/Empleado.php");
            $tipos = new Tipo();
            return $tipos->getBuscarNombre($nombre);
        }
    }
    

?>