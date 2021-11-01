<?php
session_start();
//Para que se inicie la sesión 
require_once "../Clases/Empleado.php";

$empleado=new Empleado();

$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$dni=isset($_POST["dni"])? limpiarCadena($_POST["dni"]):"";
//$numero_trabajador=isset($_POST["numero_trabajador"])? limpiarCadena($_POST["numero_trabajador"]):"";
//$dni=isset($_POST["dni"])? limpiarCadena($_POST["dni"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";
//$profesion=isset($_POST["profesion"])? limpiarCadena($_POST["profesion"]):"";
$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";
//$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
//$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$genero=isset($_POST["genero"])? limpiarCadena($_POST["genero"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";

switch ($_GET["op"]){
	case 'guardar':
		try {
	
			if(empty($id))
			{
				$rspta=$empleado->registrarEmpleado($id,'G',$dni,$nombre,$apellido,$genero,$fecha,$estado);
			
				$fetch=$rspta->fetch_object();
		
				//echo $rspta;
			   echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}
			else
			{
				$rspta=$usuario->editarEmpleado($id,$user,$contra,$cargo,$email,$idusuario);
			
				$fetch=$rspta->fetch_object();
		
				//echo $rspta;
			   echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}

			
			
		
		} catch (Exception $ex) {
			echo $ex->getMessage();
		 }
		break;



}

?>