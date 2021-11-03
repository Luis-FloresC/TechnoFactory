<?php
// registrar cliente = ventas
include("../Clases/Clientes.php");
$clientes = new Clientes();
if ($_POST['action'] == 'addCliente') {
 
  $dni = $_POST['dni'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $genero = $_POST['genero'];
  $estado = $_POST['estado'];
  $fechaNacimiento = $_POST['fechaNacimiento'];
  $rspta=$clientes->RegistrarCliente($dni,$nombre,$apellido,$genero,$fechaNacimiento,$estado);
	    
  $fetch=$rspta->fetch_object();
  
  echo json_encode($fetch);
  
  exit;
}

include("../Conexion/Conexion.php");
session_start();
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

?>    
