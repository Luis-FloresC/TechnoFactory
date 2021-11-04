<?php

//Direccion del host
$host = $_SERVER['SERVER_NAME'];
///Base de Datos mysql
$bd = "bd_techno_factory";
//User
$user = "luis";
//Contraseña
$contra = "luis1234";

//descomentado del try
try {
    $conexion = new mysqli_connect("mysql:host=$host;bd_techno_factory=$bd",$user,$contra);
   if($conexion)
    {
        $var = "Conexion exitosa con la base de Datos $bd";
        echo "<script> alert('".$var."'); </script>";
    }
   
} catch (Exception $ex) {
   echo $ex->getMessage();
   //en comparacion al otro modulo faltaban estas partes
   exit;//agregado
    }

return $conexion;//agragado
}


?>