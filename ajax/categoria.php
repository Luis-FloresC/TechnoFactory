<?php
session_start();
//Para que se inicie la sesión 
require_once "../Clases/Categoria.php";

$categoria = new Categoria();

$idCategoria=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombreCategoria=isset($_POST["cat"])? limpiarCadena($_POST["cat"]):"";

switch ($_GET["op"]){


	case 'mostrar':
		$rspta = $categoria->mostrar($idCategoria);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
//la opcion que mandemos en el archivo scripts
	case 'guardar':
		try {
	
			//Asgnacion de variables
            $idCategoria=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
            $nombreCategoria=isset($_POST["cat"])? limpiarCadena($_POST["cat"]):"";

			if(empty($idCategoria))
			{
				$rspta=$categoria->registrarCategoria($nombreCategoria);
				$fetch=$rspta->fetch_object();
		    	echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}
			else
			{
				$rspta=$categoria->EditarCategoria($idCategoria,$nombreCategoria);
				$fetch=$rspta->fetch_object();
				echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
				///Lo mismo de arriba pero cambia la funcion de Registrar Empleado 
			}

			
			
		
		} catch (Exception $ex) {
			echo json_encode ($ex->getMessage());
		 }
		break;

	case 'eliminar':
    $rspta=$categoria->eliminar($idEmpleado);
    echo $rspta ? "Categoria Eliminada con éxito" : "Lo sentimos,La categoria no se pudo eliminar";

    break;

	
	case 'listar':
		$rspta=$categoria->listar();
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