<?php

include ('./Conexion/connection.php');
//print_r($_POST);
//recibir datos metodo post
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$fecha = $_POST["fecha"];
$estado = $_POST["estado"];
//consulta para insertar datos
$insertar = "INSERT INTO 'bd_techno_factory'.'Empleados' (nombreEmpleado,apellidoEmpleado,genero,fechaNacimiento,idEstado) VALUES ('$nombre','$apellido','$genero','$fecha','$estado')";
//Ejecutar la consulta
$result = mysqli_query($conexion, $insertar);
if (!$result){
    echo 'error al registrar';
}else{
    echo 'Empleado registrado exitosamente';
}
//cerrar conexion
mysqli_close($conexion);





?>

