<?php include('../template/header.php');
date_default_timezone_set('America/Tegucigalpa');
$fecha_actual=date("Y-m-d");

?>
<div class="container">
    <div class="row">
    <input type="hidden" name="id" id="id">
        <div class="col-md-8">
            <center>
                <h1 class="display-4">Empleado</h1>
            </center>
            <form id="frmRegistrar" name="frmRegistrar" method="POST">
                <br>
                <div class="row form-group">
                    <label for="nombre" class="col-form-label col-md-2">Nombre</label>
                    <div class="col-md-8">
                        <input type="text" name="nombreEmpleado" value="" id="nombreEmpleado" class="form-control"
                            placeholder="Escriba su nombre">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="dni" class="col-form-label col-md-2">DNI</label>
                    <div class="col-md-8">
                        <input type="text" name="dni" value="" id="dni" class="form-control"
                            placeholder="Escriba su numero de Identidad">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="apellido" class="col-form-label col-md-2">Apellido</label>
                    <div class="col-md-8">
                        <input type="text" name="apellidoEmpleado" value="" id="apellidoEmpleado" class="form-control"
                            placeholder="Escriba su apellido">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Fecha de Nacimiento</label>
                    <div class="col-md-8">
                        <input type="date" name="fechaNacimiento" getdate="" id="fechaNacimiento" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Estado</label>
                    <select name="txtGenero" id="txtGenero">
                        <option value="1">Habilitado</option>
                        <option value="2">Inabilitado</option>
                    </select>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Genero</label>
                    <div class="col-md-8 form-check form-check-inline">


                        <select name="txtGenero" id="txtGenero">

                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>


                    </div>
                </div>


                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" class="btn btn-primary" id="btn_crear_cliente1"><i class="zmdi zmdi-face"></i>
                        Guardar</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-warning">Modificar</button>


                </div>
        </div>
    </div>
</div>

<?php include('../template/footer.php'); ?>