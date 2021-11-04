<?php
session_start();

require_once "../Clases/Usuario.php";

$listaClientes =new Usuario();


switch ($_GET["op"])
{ 
    case 'listar':
		$rspta = $listaClientes->listarClientes();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->no,
 				"1"=>$reg->dni,
 				"2"=>$reg->nombre,
 				"3"=>$reg->apellido,
 				"4"=>$reg->genero,
 				"5"=>$reg->fechaNacimiento,
                "6"=>$reg->fechaRegistro,
                "7"=>$reg->idEstado,
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