<?php 

include('Conexion/connection.php');

$con = conectar();

function TotalFilas($Tabla)
{
 
    return 0;
}

echo TotalFilas("Productos");

?>