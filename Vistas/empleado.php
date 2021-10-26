<?php include('../template/header.php');
date_default_timezone_get('America/Honduras_city');
$fecha_actual=date("Y-m-d");

?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <center>
                <h1 class="display-4">Empleado</h1>
            </center>
            <form method="POST" enctype="multipart/form-data">
                <br>
                <div class="row form-group">
                    <label for="txtID" class="col-form-label col-md-2">ID</label>
                    <div class="col-md-8">
                        <input type="text" name="txtID" value="" id="txtID" class="form-control"
                            placeholder="Id del empleado">
                    </div>
                </div>
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
                        <input type="text" name="estado" value="" class="form-control"
                            placeholder="Escriba el estado del empleado">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Fecha de Nacimiento</label>
                    <div class="col-md-8">
                        <input type="date" name="fecha" getdate="" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-lable col-md-4">Genero</label>
                    <div class="col-md-8 form-check form-check-inline">
                        <label class="form-check-label">

                            <input type="radio" class="form-check-input" name="genero">
                            Mujer
                        </label>
                        <label class="form-check-label">

                            <input type="radio" class="form-check-input" name="genero">
                            Hombre
                        </label>
                    </div>
                </div>


                <div class="btn-group" role="group" aria-label="">
                    <button type="button" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-warning">Modificar</button>
                    <button type="button" class="btn btn-info">Cancelar</button>
                </div>
        </div>
    </div>
</div>



<table>
    <thead>
        <tr>
            <td scope="col">Nombre</td>
            <td scope="col">Apellido</td>
        </tr>
    </thead>

    <body>
        <td></td>
    </body>
</table>

<?php include('../template/footer.php'); ?>
<?php
                    include("../controladores/tipos.php");
                    $ctipo= new ControladorTipo;
                    $datos=$ctipo->Listar();
                    for ($i = 0; $i < count($datos); $i++) {
                ?>
<tr>
    <th scope="row"><?php echo $datos[$i]["id"];?></th>
    <td><?php echo $datos[$i]["nombre"];?></td>
    <td><?php echo $datos[$i]["imagen"];?></td>
</tr>
<?php } ?>