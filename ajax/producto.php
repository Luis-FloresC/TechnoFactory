<?php
// registrar cliente = ventas
include("../Conexion/Conexion.php");
if ($_POST['action'] == 'addProducto') {
  print_r('dfssdfasfdgasdf');
  $codproducto = $_POST['codproducto'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $cantidad = $_POST['cantidad'];
  $codCategoria = $_POST['codCategoria'];
  $codEstado = $_POST['codEstado'];
  $precioEst = $_POST['precioEst'];
  $precioVent = $_POST['precioVent'];
  $codModelo = $_POST['codModelo'];

  $query_insert = mysqli_query($conexion, "INSERT INTO Productos(idProducto,nombreProducto,descripcionProducto,cantidadExistencia,idCategoria,idEstado,precioEstandar,precioVenta,idModelo) VALUES ('$codproducto','$nombre','$descripcion','$cantidad','$codCategoria','$codEstado','$precioEst','$precioVent','$codModelo',1)");
  
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





?>    
