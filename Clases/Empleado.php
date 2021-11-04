<?php 
//Incluimos inicialmente la conexión a la base de datos
require "../Conexion/Conexion.php";

Class Empleado
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

   //Función que va a verificar si existe 
        //la cuenta de usuario


        public function listar()
        {
            $sql="SELECT idEmpleado as id,dni,concat(nombreEmpleado,' ',apellidoEmpleado) 'nombre' ,
            genero ,TIMESTAMPDIFF(YEAR,fechaNacimiento,CURDATE()) 'Edad', idEstado 'estado'
            FROM bd_techno_factory.Empleados;";
            
            return ejecutarConsulta($sql);
        }


 
        public function eliminar($idEmpleado)
        {
            $sql ="UPDATE Empleados SET idEstado = 2 WHERE idEmpleado='$idEmpleado'";
            return ejecutarConsulta($sql);
        }


        public function mostrar($id)
        {
            $sql="SELECT * FROM Empleados WHERE idEmpleado='$id'";
            return ejecutarConsultaSimpleFila($sql);
        }




        public function registrarEmpleado($id,$dni,$nombre,$apellido,$genero,$fecha,$estado)
        {
            $sql="call bd_techno_factory.AccionesEmpleados('$id', 'G', '$dni', '$nombre', '$apellido', '$genero', '$fecha', '$estado');";
            
            return ejecutarConsulta($sql);
        }

        public function EditarEmpleado($id,$dni,$nombre,$apellido,$genero,$fecha,$estado)
        {
            $sql="call bd_techno_factory.AccionesEmpleados('$id', 'M', '$dni', '$nombre', '$apellido', '$genero', '$fecha', '$estado');";
            
            return ejecutarConsulta($sql);
        }

}
?>    