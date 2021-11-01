<?php
session_start();
//Para que se inicie la sesión 
require_once "../Clases/Usuario.php";

$usuario=new Usuario();

$idusuario=isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";
//$numero_trabajador=isset($_POST["numero_trabajador"])? limpiarCadena($_POST["numero_trabajador"]):"";
//$dni=isset($_POST["dni"])? limpiarCadena($_POST["dni"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";
//$profesion=isset($_POST["profesion"])? limpiarCadena($_POST["profesion"]):"";
$cargo=isset($_POST["cargo"])? limpiarCadena($_POST["cargo"]):"";
//$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
//$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";
$login=isset($_POST["contra"])? limpiarCadena($_POST["contra"]):"";
$clave=isset($_POST["user"])? limpiarCadena($_POST["user"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idusuario)){
			$rspta=$usuario->insertar($numero_trabajador,$dni,$nombre,$profesion,$cargo,$direccion,$telefono,$email,$login,$clave);
			echo $rspta ? "Usuario registrado" : "Usuario no se pudo registrar";
		}
		else {
			$rspta=$usuario->editar($idusuario,$numero_trabajador,$dni,$nombre,$profesion,$cargo,$direccion,$telefono,$email,$login,$clave);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'mostrar':
		$rspta=$usuario->mostrar($idusuario);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
//la opcion que mandemos en el archivo scripts
	case 'guardar':
		try {
	
			//Asgnacion de variables
			$email=isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";
			$contra=isset($_POST["contra"])? limpiarCadena($_POST["contra"]):"";
			$user=isset($_POST["user"])? limpiarCadena($_POST["user"]):"";
			$cargo=isset($_POST["cargo"])? limpiarCadena($_POST["cargo"]):"";
            $idusuario=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
			$id = isset($_POST["idUser"])? limpiarCadena($_POST["idUser"]):"";

			if(empty($id))
			{
				$rspta=$usuario->registrarUsuario($user,$contra,$cargo,$email,$idusuario);
			
				$fetch=$rspta->fetch_object();
		
				//echo $rspta;
			   echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}
			else
			{
				$rspta=$usuario->editarUsuario($id,$user,$contra,$cargo,$email,$idusuario);
			
				$fetch=$rspta->fetch_object();
		
				//echo $rspta;
			   echo json_encode($fetch,JSON_UNESCAPED_UNICODE);
			}

			
			
		
		} catch (Exception $ex) {
			echo $ex->getMessage();
		 }
		break;

	case 'eliminar':
    $rspta=$usuario->eliminar($idusuario);
    echo $rspta ? "Usuario Eliminado con éxito" : "Lo sentimos,El usuario no se pudo eliminar";

    break;

	
	case 'listar':
		$rspta=$usuario->listarUser();
 		//Vamos a declarar un array
 		$data= Array();
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->num,
        		"1"=>$reg->nombre,
 				"2"=>$reg->Email,
 				"3"=>$reg->user,
 				"4"=>$reg->cargo,
 				"5"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->idUsuario.')"><i class="fa fa-pencil"></i></button> <button class="btn btn-danger" onclick="eliminarFila('.$reg->idUsuario.')"><i class="fa fa-trash"></button>'
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