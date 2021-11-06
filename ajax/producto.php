<?php
session_start();
include("../Clases/Producto.php");
$producto = new Productos();


$codproducto = $_POST['codproducto'];
$nombre = $_POST['nombreproducto'];
$descripcion = $_POST['descripcionproducto'];
$cantidad = $_POST['cantidadexistencia'];
$codCategoria = $_POST['idcategoria'];
$codEstado = $_POST['idestado'];
$precioEst = $_POST['precioest'];
$precioVent = $_POST['preciovent'];
$codModelo = $_POST['codmodelo'];
if ($_POST['action'] == 'addProducto') {
 // print_r('dfssdfasfdgasdf');

if(isset($codproducto))
{
  $rspta=$producto->RegistrarProducto($nombre,$descripcion,$cantidad,$codCategoria,$codEstado,$precioEst,$precioVent,$codModelo);
	    
  $fetch=$rspta->fetch_object();
  
  echo json_encode($fetch);
}
else
{
  $rspta=$producto->EditarProducto($codproducto,$nombre,$descripcion,$cantidad,$codCategoria,$codEstado,$precioVent,$precioEst,$codModelo);
	    
  $fetch=$rspta->fetch_object();
  
  echo json_encode($fetch);
}
 


  
}
else if ($_POST['action'] == 'editarProducto')
{
  $rspta=$producto->EditarProducto($codproducto,$nombre,$descripcion,$cantidad,$codCategoria,$codEstado,$precioEst,$precioVent,$codModelo);
	    
  $fetch=$rspta->fetch_object();
  
  echo json_encode($fetch);
}
else 
{

  switch ($_GET["op"]){
    case 'mostrar':
      $cod = $_POST['codproducto'];
       $rspta=$producto->mostrar($codproducto);
       //Codificar el resultado utilizando json
       echo json_encode($rspta);
    break;

    case 'eliminar':
      $cod = $_POST['codproducto'];
      $rspta=$producto->eliminar($cod);
      echo $rspta ? "Producto Eliminado con éxito" : "Lo sentimos,El Producto no se pudo eliminar";
  
      break;

    case 'listar':
      $rspta = $producto->listar();
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
           '<button type="button" class="btn btn-danger">Inactivo</button>',
           "9"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->num.')"><i class="zmdi zmdi-edit"></i></button> <button class="btn btn-danger" onclick="eliminarFila('.$reg->num.')"><i class="zmdi zmdi-delete"></button>'
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
}







?>    
