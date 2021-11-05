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
        public function eliminar($idCliente)
        {
            $sql ="UPDATE Clientes SET idEstado = 2 WHERE idCliente='$idCliente'";
            return ejecutarConsulta($sql);
        }

        public function RegistrarCliente($dni,$nombre,$apellido,$gen,$fecha,$estado)
        {
            $sql="call bd_techno_factory.AccionesClientes(0, 'G', '$dni', '$nombre', '$apellido', '$gen', '$fecha', '$estado');";
            
            return ejecutarConsulta($sql);
        }

        public function EditarCliente($id,$dni,$nombre,$apellido,$gen,$fecha,$estado)
        {
            $sql="call bd_techno_factory.AccionesClientes('$id', 'M', '$dni', '$nombre', '$apellido', '$gen', '$fecha', '$estado');";
            
            return ejecutarConsulta($sql);
        }

        public function listarClientes()
        {
            $sql="call ListarClientes();";
            
            return ejecutarConsulta($sql);
        }


        public function listar()
        {
            $sql="SELECT c.idCliente as num,c.dni,concat(c.nombreCliente,' ',c.apellidoCliente) 'nombre',
            TIMESTAMPDIFF(YEAR,c.fechaNacimiento,CURDATE()) AS edad, 
            c.genero, e.estado
            FROM bd_techno_factory.Clientes c 
            join Estados e on e.idEstado = c.idEstado;";
            
            return ejecutarConsulta($sql);
        }

        public function mostrar($id)
        {
            $sql = "SELECT c.idCliente AS 'id',c.dni,c.nombreCliente AS nombre ,c.apellidoCliente AS apellido,c.genero,c.fechaNacimiento AS fecha,c.idEstado AS estado FROM Clientes c where c.idCliente = '$id';";
            return ejecutarConsultaSimpleFila($sql);
        }

}
?>    