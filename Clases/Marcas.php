<?php 
//Incluimos inicialmente la conexión a la base de datos
require "../Conexion/Conexion.php";

Class Marcas
{
            //Implementamos nuestro constructor
            public function __construct()
            {

            }

   //Función que va a verificar si existe 
        //la cuenta de usuario


        public function listar()
        {
            $sql="SELECT m.idMarca AS id,m.descripcionMarca AS nombre , e.estado FROM Marcas m
            JOIN Estados e ON m.idEstado = e.idEstado;";
            
            return ejecutarConsulta($sql);
        }


 
        public function eliminar($id)
        {
            $sql ="UPDATE Marcas SET idEstado = 2 WHERE idMarca='$id'";
            return ejecutarConsulta($sql);
        }


        public function mostrar($id)
        {
            $sql="SELECT * FROM Marcas WHERE idMarca='$id'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function registrarMarca($marca,$estado)
        {
            $sql="call bd_techno_factory.CategoriasYMas('G', 'M', 0, '$marca', 0, 'nd', 0, '0','$estado');";
            
            return ejecutarConsulta($sql);
        }

        public function editarMarca($id,$marca,$estado)
        {
            $sql="call bd_techno_factory.CategoriasYMas('M', 'M', '$id', '$marca', 0, 'nd', 0, '0','$estado');";
            
            return ejecutarConsulta($sql);
        }

}
?>    