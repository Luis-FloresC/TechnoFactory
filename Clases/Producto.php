<?php 
//Incluimos inicialmente la conexión a la base de datos
require "../Conexion/Conexion.php";

Class Productos
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

    public function eliminar($idProducto)
    {
        $sql ="UPDATE Productos SET idEstado = 2 WHERE idProducto='$idProducto'";
        return ejecutarConsulta($sql);
    }


    public function listar()
    {
        $sql="call bd_techno_factory.ListarProductos();";
        
        return ejecutarConsulta($sql);
    }


    public function mostrar($id)
    {
        $sql="SELECT * FROM bd_techno_factory.Productos where idProducto = '$id';";
        
        return ejecutarConsultaSimpleFila($sql);
    }

   //Función que va a verificar si existe 
        //la cuenta de usuario
        public function RegistrarProducto($nombre,$descripcion,$cantidad,$categoria,$estado,$estandar,$venta,$modelo)
        {
            $sql="call bd_techno_factory.AccionesProductos('G', 0, '$nombre', '$descripcion', '$cantidad', '$categoria', '$estado', '$estandar', '$venta', '$modelo');";
            
            return ejecutarConsulta($sql);
        }

        public function EditarProducto($id,$nombre,$descripcion,$cantidad,$categoria,$estado,$estandar,$venta,$modelo)
        {
            $sql="call bd_techno_factory.AccionesProductos('M', '$id', '$nombre', '$descripcion', '$cantidad', '$categoria', '$estado', '$estandar', '$venta', '$modelo');";
            
            return ejecutarConsulta($sql);
        }


}
?>    