<?php include('../template/header.php');
date_default_timezone_get('America/Honduras_city');
$fecha_actual=date("Y-m-d");

?>

<?php
            if(!isset($_COOKIE["mensajes"])){
                //setcookie("mensajes", "informacion", time() + 60*60*24*30, '/');
            }
            else{
                $mensaje=$_COOKIE["mensajes"];
                if($mensaje=="correcto"){ ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        Registro almacenado
                    </div>
                    </div>
                <?php }
                elseif($mensaje=="incorrecto"){ ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Error al momento de registrar los datos
                    </div>
                    </div>                
                <?php    }
                elseif($mensaje=="informacion"){ ?>
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                        Complete los datos que a continuación se le piede
                    </div>
                    </div>
                <?php }
                else{ ?>
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        <?php echo $mensaje;?>
                    </div>
                    </div>
                <?php }
                setcookie("mensajes", NULL, time() - 60*60*24*30, '/');
            }
        ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <center>
                <h1 class="display-4">Empleado</h1>
            </center>
            <form action="rutas/empleados.php" method="POST">
                <br>
                <div class="row form-group">
                    <label for="nombre" class="col-form-label col-md-2">Nombre</label>
                    <div class="col-md-8">
                        <input type="text" name="nombre" value="" id="nombre" class="form-control"
                            placeholder="Escriba su nombre">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="apellido" class="col-form-label col-md-2">Apellido</label>
                    <div class="col-md-8">
                        <input type="text" name="apellido" value="" id="apellido" class="form-control"
                            placeholder="Escriba su apellido">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Estado</label>
                    <div class="col-md-8">
                        <input type="text" name="estado" value="" id="estado" class="form-control"
                            placeholder="Escriba el estado del empleado">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Fecha de Nacimiento</label>
                    <div class="col-md-8">
                        <input type="date" name="fecha" getdate="" id="fecha" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-lable col-md-4">Genero</label>
                    <div class="col-md-8 form-check form-check-inline">
                        <label class="form-check-label">

                            <input type="radio" class="form-check-input" name="genero" value="masculino" id="masculino">
                            Hombre
                        </label>
                        <label class="form-check-label">

                            <input type="radio" class="form-check-input" name="genero" value="femenino" id="femenino">
                            Mujer
                        </label>
                    </div>
                </div>


                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="op" value="agregar" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-warning">Modificar</button>
                    <button type="button" class="btn btn-info">Cancelar</button>
                </div>
        </div>
    </div>
</div>

<?php include('../template/footer.php'); ?>