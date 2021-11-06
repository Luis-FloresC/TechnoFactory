<?php
session_start();
//Para que se inicie la sesión 
require_once "../Clases/Empleado.php";

$empleado=new Empleado();

$idEmpleado=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";
$dni=isset($_POST["dni"])? limpiarCadena($_POST["dni"]):"";
$genero=isset($_POST["gen"])? limpiarCadena($_POST["gen"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";

switch ($_GET["op"]){


	case 'mostrar':
		$rspta=$empleado->mostrar($idEmpleado);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
//la opcion que mandemos en el archivo scripts
	case 'guardar':
		try {
	
			//Asgnacion de variables
			$idEmpleado=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
			$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
			$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";
			$dni=isset($_POST["dni"])? limpiarCadena($_POST["dni"]):"";
			$genero=isset($_POST["gen"])? limpiarCadena($_POST["gen"]):"";
			$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
			$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";

			if(empty($idEmpleado))
			{
				$rspta=$empleado->registrarEmpleado($idEmpleado,$dni,$nombre,$apellido,$genero,$fecha,$estado);
				$fetch=$rspta->fetch_object();
		    	echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}
			else
			{
				$rspta=$empleado->EditarEmpleado($idEmpleado,$dni,$nombre,$apellido,$genero,$fecha,$estado);
				$fetch=$rspta->fetch_object();
				echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
				///Lo mismo de arriba pero cambia la funcion de Registrar Empleado 
			}

			
			
		
		} catch (Exception $ex) {
			echo json_encode ($ex->getMessage());
		 }
		break;

	case 'eliminar':
    $rspta=$empleado->eliminar($idEmpleado);
    echo $rspta ? "Empleado Eliminado con éxito" : "Lo sentimos,El Empleado no se pudo eliminar";

    break;

	
	case 'listar':
		$rspta=$empleado->listar();
 		//Vamos a declarar un array
 		$data= Array();
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->id,
        		"1"=>$reg->dni,
 				"2"=>$reg->nombre,
 				"3"=>$reg->genero,
 				"4"=>$reg->Edad,
				"5"=>($reg->estado=='1')?'<button type="button" class="btn btn-success">Activo</button>':
 				'<button type="button" class="btn btn-danger">Inactivo</button>',
 				"6"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id.')"><i class="zmdi zmdi-edit"></i></button> <button class="btn btn-danger" onclick="eliminarFila('.$reg->id.')"><i class="zmdi zmdi-delete"></button>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
	break;

 case 'verificar':
	try {
	
		$loginf=$_POST['loginf'];
		$clavef=$_POST['clavef'];
		$rspta=$usuario->verificar($loginf, $clavef);
	    
		$fetch=$rspta->fetch_object();
		
		echo json_encode($fetch);
		if (isset($fetch))
		{
			
			//Declaramos las variables de sesión
			$_SESSION['nombre']=$fetch->nombre;
	        $_SESSION['apellido']=$fetch->apellido;
			$_SESSION['user']=$fetch->user;
			$_SESSION['idUser']=$fetch->id;
			
		}
	
	} catch (Exception $ex) {
		echo $ex->getMessage();
	 }
  

    break;

    case "salir": 
         //Limpiamos las variables de sesión   
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../index.php");
        break;
}

?>