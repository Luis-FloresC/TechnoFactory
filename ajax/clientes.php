<?php
// registrar cliente = ventas
include("../Conexion/Conexion.php");
if ($_POST['action'] == 'addCliente') {
  print_r('dfssdfasfdgasdf');
  $dni = $_POST['dni'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $genero = $_POST['genero'];
  $fechaNacimiento = $_POST['fechaNacimiento'];

  $query_insert = mysqli_query($conexion, "INSERT INTO clientes(dni, nombreCliente, apellidoCliente, genero, fechaNacimiento,fechaRegistro,idEstado) VALUES ('$dni','$nombre','$apellido','$genero','$fechaNacimiento','2021-02-02 12:00:00',1)");
  
    if ($query_insert) {
      //$codCliente = mysqli_insert_id($conexion);
      $msg = 'funco';
    }else {
      $msg = 'error';
    }
  mysqli_close($conexion);
  echo $msg;
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
