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
        public function verificar($login,$clave)
        {
            $sql="call Login('$login','$clave')";
            
            return ejecutarConsulta($sql);
        }

        public function listar()
        {
            $sql="SELECT idEmpleado as id,dni,concat(nombreEmpleado,' ',apellidoEmpleado) 'nombre' ,
            genero ,TIMESTAMPDIFF(YEAR,fechaNacimiento,CURDATE()) 'Edad', idEstado 'estado'
            FROM bd_techno_factory.Empleados;";
            
            return ejecutarConsulta($sql);
        }

     


        public function listarUser()
        {
            $sql="call bd_techno_factory.ListarUsuarios();";
            
            return ejecutarConsulta($sql);
        }

        public function listarVentas()
        {
            $sql="call ListarVentas();";
            
            return ejecutarConsulta($sql);
        }

 
        public function eliminar($idusuario)
        {
            $sql ="DELETE FROM Usuarios
            WHERE idUsuario='$idusuario'";
            return ejecutarConsulta($sql);
        }


        public function mostrar($id)
        {
            $sql="SELECT * FROM Empleados WHERE idEmpleado='$id'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function registrarUsuario($user,$contra,$cargo,$email,$idEmpleado)
        {
            $sql="call RegistrarUsuarios('$user', '$contra', $cargo, '$email', '$idEmpleado');";
            
            return ejecutarConsulta($sql);
        }

        public function editarUsuario($id,$user,$contra,$cargo,$email,$idEmpleado)
        {
            $sql="call EditarUsuario('$id','$user', '$contra', $cargo, '$email', '$idEmpleado');";
            
            return ejecutarConsulta($sql);
        }

        public function registrarEmpleado($id,$dni,$nombre,$apellido,$genero,$fecha,$estado)
        {
            $sql="call bd_techno_factory.AccionesEmpleados('$id', 'G', '$dni', '$nombre', '$apellido', '$genero', '$fecha', '$estado');";
            
            return ejecutarConsulta($sql);
        }

}
?>    