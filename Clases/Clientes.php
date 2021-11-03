<?php
require "../Conexion/Conexion.php";

Class Clientes
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

   //Función que va a verificar si existe 
        //la cuenta de usuario
      

        public function RegistrarCliente($dni,$nombre,$apellido,$gen,$fecha,$estado)
        {
            $sql="call bd_techno_factory.AccionesClientes(0, 'G', '$dni', '$nombre', '$apellido', '$gen', '$fecha', '$estado');";
            
            return ejecutarConsulta($sql);
        }

        public function listarClientes()
        {
            $sql="call ListarClientes();";
            
            return ejecutarConsulta($sql);
        }


}
?>    