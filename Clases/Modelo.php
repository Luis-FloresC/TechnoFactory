<?php 
//Incluimos inicialmente la conexión a la base de datos
require "../Conexion/Conexion.php";

Class Modelo
{
            //Implementamos nuestro constructor
            public function __construct()
            {

            }

   //Función que va a verificar si existe 
        //la cuenta de usuario


        public function listar()
        {
            $sql="SELECT m.idModelo AS id,m.descripcionModelo AS nombre ,ma.descripcionMarca as marca, e.estado FROM Modelos m
            JOIN Estados e ON m.idEstado = e.idEstado
            join Marcas ma on ma.idMarca = m.idMarca;";
            
            return ejecutarConsulta($sql);
        }


 
        public function eliminar($id)
        {
            $sql ="UPDATE Modelos SET idEstado = 2 WHERE idModelo='$id'";
            return ejecutarConsulta($sql);
        }


        public function mostrar($id)
        {
            $sql="SELECT * FROM Modelos WHERE idModelo='$id'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function registrarModelo($modelo,$marca,$estado)
        {
            $sql="call bd_techno_factory.CategoriasYMas('G', 'Mo', '$marca', 'nd', 0, '$modelo', 0, '0','$estado');";
            
            return ejecutarConsulta($sql);
        }

        public function EditarModelo($id,$modelo,$marca,$estado)
        {
            $sql="call bd_techno_factory.CategoriasYMas('M', 'Mo', '$marca', '0','$id', '$modelo', 0, '0', '$estado');";
            
            return ejecutarConsulta($sql);
        }

}
?>    