<?php 
//Incluimos inicialmente la conexión a la base de datos
require "../Conexion/Conexion.php";

Class Categoria
{
            //Implementamos nuestro constructor
            public function __construct()
            {

            }

   //Función que va a verificar si existe 
        //la cuenta de usuario


        public function listar()
        {
            $sql="SELECT c.idCategoria AS id,c.descripcionCategoria AS nombre , e.estado FROM Categorias c
            JOIN Estados e ON c.idEstado = e.idEstado;";
            
            return ejecutarConsulta($sql);
        }


 
        public function eliminar($id)
        {
            $sql ="UPDATE Categorias SET idEstado = 2 WHERE idCategoria='$id'";
            return ejecutarConsulta($sql);
        }


        public function mostrar($id)
        {
            $sql="SELECT * FROM Categorias WHERE idCategoria='$id'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function registrarCategoria($categoria)
        {
            $sql="call bd_techno_factory.CategoriasYMas('G', 'C', 0, 'nd', 0, 'nd', 0, '$categoria');";
            
            return ejecutarConsulta($sql);
        }

        public function EditarCategoria($id,$nombre)
        {
            $sql="call bd_techno_factory.CategoriasYMas('M', 'C', 0, 'nd', 0, 'nd', '$id', '$nombre');";
            
            return ejecutarConsulta($sql);
        }

}
?>    