<?php
session_start();
//Para que se inicie la sesión 
require_once "../Clases/Modelo.php";

$modelo = new Modelo();

$idModelo=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombreModelo=isset($_POST["model"])? limpiarCadena($_POST["model"]):"";
$marca=isset($_POST["marca"])? limpiarCadena($_POST["marca"]):"";
$estado=isset($_POST["idEstado"])? limpiarCadena($_POST["idEstado"]):"";

switch ($_GET["op"]){


	case 'mostrar':
		$rspta = $modelo->mostrar($idModelo);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
//la opcion que mandemos en el archivo scripts
	case 'guardar':
		try {
	
			//Asgnacion de variables
            $idModelo=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
            $nombreModelo=isset($_POST["model"])? limpiarCadena($_POST["model"]):"";
            $marca=isset($_POST["marca"])? limpiarCadena($_POST["marca"]):"";
            $estado=isset($_POST["idEstado"])? limpiarCadena($_POST["idEstado"]):"";
			if(empty($idModelo))
			{
				$rspta=$modelo->registrarModelo($nombreModelo,$marca,$estado);
				$fetch=$rspta->fetch_object();
		    	echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}
			else
			{
				$rspta=$modelo->EditarModelo($idModelo,$nombreModelo,$marca,$estado);
				$fetch=$rspta->fetch_object();
				echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
				///Lo mismo de arriba pero cambia la funcion de Registrar Empleado 
			}

			
			
		
		} catch (Exception $ex) {
			echo json_encode ($ex->getMessage());
		 }
		break;

	case 'eliminar':
    $rspta=$modelo->eliminar($idModelo);
    echo $rspta ? "Modelo Eliminado con éxito" : "Lo sentimos,el modelo no se pudo eliminar";

    break;

	
	case 'listar':
		$rspta=$modelo->listar();
 		//Vamos a declarar un array
 		$data= Array();
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->id,
        		"1"=>$reg->nombre,
                "2"=>$reg->marca,
				"3"=>($reg->estado=='habilitado')?'<button type="button" class="btn btn-success">Activo</button>':
 				'<button type="button" class="btn btn-danger">Inactivo</button>',
 				"4"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id.')"><i class="zmdi zmdi-edit"></i></button> <button class="btn btn-danger" onclick="eliminarFila('.$reg->id.')"><i class="zmdi zmdi-delete"></button>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
	break;

 


}

?>