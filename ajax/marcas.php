<?php
session_start();
//Para que se inicie la sesión 
require_once "../Clases/Marcas.php";

$marcas = new Marcas();

$idMarca=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombreMarca=isset($_POST["marc"])? limpiarCadena($_POST["marc"]):"";
$estado=isset($_POST["idEstado"])? limpiarCadena($_POST["idEstado"]):"";

switch ($_GET["op"]){


	case 'mostrar':
		$rspta = $marcas->mostrar($idMarca);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
//la opcion que mandemos en el archivo scripts
	case 'guardar':
		try {
	
			//Asgnacion de variables
            $idMarca=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
            $nombreMarca=isset($_POST["marc"])? limpiarCadena($_POST["marc"]):"";
            $estado=isset($_POST["idEstado"])? limpiarCadena($_POST["idEstado"]):"";

			if(empty($idMarca))
			{
				$rspta=$marcas->registrarMarca($nombreMarca,$estado);
				$fetch=$rspta->fetch_object();
		    	echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}
			else
			{
				$rspta=$marcas->editarMarca($idMarca,$nombreMarca,$estado);
				$fetch=$rspta->fetch_object();
		    	echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
				///Lo mismo de arriba pero cambia la funcion de Registrar Empleado 
			}

			
			
		
		} catch (Exception $ex) {
			echo json_encode ($ex->getMessage());
		 }
		break;

	case 'eliminar':
    $rspta=$marcas->eliminar($idMarca);
    echo $rspta ? "Categoria Eliminada con éxito" : "Lo sentimos,La categoria no se pudo eliminar";

    break;

	
	case 'listar':
		$rspta=$marcas->listar();
 		//Vamos a declarar un array
 		$data= Array();
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->id,
        		"1"=>$reg->nombre,
				"2"=>($reg->estado=='habilitado')?'<button type="button" class="btn btn-success">Activo</button>':
 				'<button type="button" class="btn btn-danger">Inactivo</button>',
 				"3"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id.')"><i class="zmdi zmdi-edit"></i></button> <button class="btn btn-danger" onclick="eliminarFila('.$reg->id.')"><i class="zmdi zmdi-delete"></button>'
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