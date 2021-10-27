<?php
$op = $_POST['op'];
switch($op){
    case'agregar':
        if(isset($_POST['agregar'])){
            $nombre=$_POST['nombre'];
            $apellido = $_POST["apellido"];
              $genero = $_POST["genero"];
              $fecha = $_POST["fecha"];
              $estado = $_POST["estado"];
            if(!$nombre){
                setcookie("mensajes", "incorrecto", time() + 60*60*24*30, '/');
                header("Location: ../Vistas/empleados.php");
            }
            else{
                include_once("../ajax/empledoclase.php");
                $ctipo= new claseEmpleado;
                 if(count($ctipo->BuscarNombre($nombre))>0){
                     setcookie("mensajes", "Existe un tipo con ese nombre", time() + 60*60*24*30, '/');
                     header("Location: /Vistas/empleados.php");
                 }
                 else{
                    if($ctipo->Guardar($nombre, $apellido, $genero, $fecha, $estado)){
                        setcookie("mensajes", "correcto", time() + 60*60*24*30, '/');
                    }
                    else{
                        setcookie("mensajes", "incorrecto", time() + 60*60*24*30, '/');
                    }
                     header("Location: /Vistas/empleados.php");
                 }
            }
         }
         else{
            setcookie("mensajes", "incorrecto");
            header("Location: /Vistas/empleados.php");
            die();
         }
        break;

}


    
    //$ctipo= new ControladorTipo;
    //$datos=$ctipo->Guardar($_POST['InputNombre'], $_POST['InputImagen']);
    //header("Location: /vistas/guardarTipos.php");
    //die();*/
?>
