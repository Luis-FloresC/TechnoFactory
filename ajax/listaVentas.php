<?php
session_start();

require_once "../Clases/Usuario.php";

$listaVentas =new Usuario();


switch ($_GET["op"])
{ 
    case 'listar':
		$rspta = $listaVentas->listarVentas();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->no,
 				"1"=>$reg->fecha,
 				"2"=>$reg->Cliente,
 				"3"=>$reg->nombre,
 				"4"=>$reg->cantidad,
 				"5"=>$reg->precio,
                "6"=>$reg->SubTotal
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