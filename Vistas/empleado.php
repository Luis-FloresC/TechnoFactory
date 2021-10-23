<?php 
include('../template/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <center>
                <h1 class="display-4">Empleado</h1>
            </center>
            <form action="" class="form">
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
                    <label for="direccion" class="col-form-label col-md-2">Direccion</label>
                    <div class="col-md-8">
                        <input type="text" name="direccion" value="" id="direccion" class="form-control"
                            placeholder="Escriba su direccion">
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



        </div>
    </div>
</div>



<br>
<label for="" class="col-form-lable col-md-4">fecha de nacimiento</label>
<label for="correo" class="form-label">fecha de registro:</label>










<?php include('../template/footer.php'); ?>