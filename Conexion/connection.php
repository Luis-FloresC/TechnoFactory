<?php

function conectar()
{
    $conexion = null;
        //Direccion del host
    $host = $_SERVER['SERVER_NAME'];
    ///Base de Datos mysql
    $bd = "bd_techno_factory";
    //User
    $user = "luis";
    //Contraseña
    $contra = "luis1234";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$bd",$user,$contra);
        if(!$conexion)
        {
            $var = "No se pudo conectar con la base de Datos $bd";
            echo "<script> alert('".$var."'); </script>";
        }
    
    } catch (PDOException $ex) {
    echo $ex->getMessage();
    exit;
    }

return $conexion;
}



?>