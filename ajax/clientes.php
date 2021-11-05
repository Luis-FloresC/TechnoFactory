<?php
session_start();
// registrar cliente = ventas
include("../Clases/Clientes.php");
$clientes = new Clientes();
$id = $_POST['id'];
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$estado = $_POST['estado'];
$fechaNacimiento = $_POST['fechaNacimiento'];
if ($_POST['action'] == 'addCliente') {
 

  $rspta=$clientes->RegistrarCliente($dni,$nombre,$apellido,$genero,$fechaNacimiento,$estado);
	    
  $fetch=$rspta->fetch_object();
  
  echo json_encode($fetch);
  
  exit;
}

if ($_POST['action'] == 'editar') {
 

  $rspta=$clientes->EditarCliente($id,$dni,$nombre,$apellido,$genero,$fechaNacimiento,$estado);
	    
  $fetch=$rspta->fetch_object();
  
  echo json_encode($fetch);
  
  exit;
}


//print_r($_POST);
if (!empty($_POST)) {
  // Extraer datos del cliente
  if ($_POST['action'] == 'infoCliente') {
      $data = "";
    $producto_id = $_POST['cliente'];
    $query = mysqli_query($conexion, "select idCliente 'codcliente',nombreCliente 'descripcion',apellidoCliente 'apellido',genero 'descripcion',fechaNacimiento 'descripcion',fechaRegistro 'descripcion' from Clientes where idCliente = '$cliente_id';");

    $result = mysqli_num_rows($query);
    if ($result > 0) {
      $data = mysqli_fetch_assoc($query);
      echo json_encode($data,JSON_UNESCAPED_UNICODE);
      exit;
    }else {
      $data = 0;
    }
  }
}

//Buscar un cliente 
if ($_POST['action'] == 'searchCliente') {
    if (!empty($_POST['cliente'])) {
      $dni = $_POST['cliente'];
  
      $query = mysqli_query($conexion, "SELECT idCliente as id,dni,nombreCliente 'nombre',apellidoCliente 'apellido',genero 'genero',fechaNacimiento 'fecha_nac','fecha_reg' FROM Clientes WHERE dni LIKE '$dni'");
      mysqli_close($conexion);
      $result = mysqli_num_rows($query);
      $data = '';
      if ($result > 0) {
        $data = mysqli_fetch_assoc($query);
      }else {
        $data = 0;
      }
      echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
    exit;
  }

  switch ($_GET["op"]){

    case 'listar':
      $rspta = $clientes->listar();
       //Vamos a declarar un array
       $data= Array();
  
       while ($reg=$rspta->fetch_object()){
         $data[]=array(
           "0"=>$reg->num,
           "1"=>$reg->dni,
           "2"=>$reg->nombre,
           "3"=>$reg->edad,
           "4"=>$reg->genero,
           "5"=>($reg->estado=='habilitado')?'<button type="button" class="btn btn-success">Activo</button>':
           '<button type="button" class="btn btn-danger">Inactivo</button>',
           "6"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->num.')"><i class="zmdi zmdi-edit"></i></button> <button class="btn btn-danger" onclick="eliminarFila('.$reg->num.')"><i class="zmdi zmdi-delete"></button>'
           );
       }
       $results = array(
         "sEcho"=>1, //Información para el datatables
         "iTotalRecords"=>count($data), //enviamos el total registros al datatable
         "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
         "aaData"=>$data);
       echo json_encode($results);
  
    break;

    case 'eliminar':
      $rspta=$clientes->eliminar($id);
      echo $rspta ? "Cliente Eliminado" : "El cliente no se puede eliminar";
  
    break;

    case 'mostrar':
      $rspta=$clientes->mostrar($id);
       //Codificar el resultado utilizando json
       echo json_encode($rspta);
    break;

  }


?>    
