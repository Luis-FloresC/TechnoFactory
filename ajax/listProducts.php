<?php
session_start();

require_once "../Clases/Usuario.php";

$listaProductos =new Usuario();


switch ($_GET["op"])
{ 
    case 'listar':
		$rspta = $listaProductos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->num,
 				"1"=>$reg->nombre,
 				"2"=>$reg->descripcion,
 				"3"=>$reg->modelo,
 				"4"=>$reg->marca,
 				"5"=>$reg->categoria,
 				"6"=>$reg->cantidad,
                "7"=>$reg->precio,
 				"8"=>($reg->estado=='habilitado')?'<button type="button" class="btn btn-success">Activo</button>':
 				'<button type="button" class="btn btn-danger">Inactivo</button>'
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