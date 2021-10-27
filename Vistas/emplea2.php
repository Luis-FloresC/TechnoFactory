<?php
require '../template/header.php';
?>

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <form action="ListarEmpleados.php"  method="POST">
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
                        <button type="submit" class="btn btn-success">Agregar</button>
                        <button type="button" class="btn btn-warning">Modificar</button>
                        <button type="button" class="btn btn-info">Cancelar</button>
                    </div>
            </div>
                <div class="box">
                    <div class="panel-body table-responsive">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apelllido</th>
                                <th>Genero</th>
                                <th>FechaNacimiento</th>
                                <th>FechaRegistro</th>
                                <th>Estado</th>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
require '../template/footer.php';
?>