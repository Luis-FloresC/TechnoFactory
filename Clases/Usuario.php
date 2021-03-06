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

        public function listarUser()
        {
            $sql="call bd_techno_factory.ListarUsuarios();";
            
            return ejecutarConsulta($sql);
        }
        
        public function listar()
        {
            $sql="call ListarProductos();";
            
            return ejecutarConsulta($sql);
        }

        public function listarVentas()
        {
            $sql="call ListarVentas();";
            
            return ejecutarConsulta($sql);
        }

        public function listarClientes()
        {
            $sql="call ListarClientes();";
            
            return ejecutarConsulta($sql);
        }

        public function listarEmpleados()
        {
            $sql="call ListarEmpleados();";
            
            return ejecutarConsulta($sql);
        }

        
        public function eliminar($idusuario)
        {
            $sql ="DELETE FROM Usuarios
            WHERE idUsuario='$idusuario'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($idusuario)
        {
            $sql="SELECT * FROM Usuarios WHERE idUsuario='$idusuario'";
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
}
?>    