<?php 
//Incluimos inicialmente la conexión a la base de datos
require "../Conexion/Conexion.php";

Class Usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

   //Función que va a verificar si existe 
        //la cuenta de usuario
        public function verificar($login,$clave)
        {
            $sql="call Login('$login','$clave')";
            
            return ejecutarConsulta($sql);
        }

        public function listarEmpleados()
        {
            $sql="call ListarEmpleados();";
            
            return ejecutarConsulta($sql);
        }

}
?>    