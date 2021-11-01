<?php/*
if(!$_POST) {
echo "Tuviste un error";
}

else
{
$op = $_POST['op'];
switch($op){
    case'agregar':
        if(isset($_POST['agregar'])){
            $nombre=$_POST['nombreEmpleado'];
            $apellido = $_POST["apellidoEmpleado"];
              $genero = $_POST["genero"];
              $fecha = $_POST["fechaNacimiento"];
              $estado = $_POST["estado"];
            if(!$nombre){
                setcookie("mensajes", "incorrecto", time() + 60*60*24*30, '/');
                header("Location: ../Vistas/empleado.php");
            }
            else{
                include_once("../ajax/empleadoclase.php");
                $ctipo= new claseEmpleado;
                 if(count($ctipo->BuscarNombre($nombre))>0){
                     setcookie("mensajes", "Existe un tipo con ese nombre", time() + 60*60*24*30, '/');
                     header("Location: /Vistas/empleado.php");
                 }
                 else{
                    if($ctipo->Guardar($nombre, $apellido, $genero, $fecha, $estado)){
                        setcookie("mensajes", "correcto", time() + 60*60*24*30, '/');
                    }
                    else{
                        setcookie("mensajes", "incorrecto", time() + 60*60*24*30, '/');
                    }
                     header("Location: /Vistas/empleado.php");
                 }
            }
         }
         else{
            setcookie("mensajes", "incorrecto");
            header("Location: /Vistas/empleado.php");
            die();
         }

        break;
    }
 }


    
    /*$ctipo= new ControladorTipo;
    //$datos=$ctipo->Guardar($_POST['InputNombre'], $_POST['InputImagen']);
    //header("Location: /vistas/guardarTipos.php");
    //die();*/
?>