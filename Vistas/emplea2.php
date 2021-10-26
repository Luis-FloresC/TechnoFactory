<?php include('../template/header.php'); ?>




<div class="col-md-5">


    <form method="POST">

        <div class="form-group">
            <label for="txtID">ID:</label>
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID del Empleado">
        </div>

        <div class="form-group">
            <label for="txtnombre">Nombre:</label>
            <input type="text" class="form-control" name="txtnombre" id="txtnombre" placeholder="Nombre del Empleado">
        </div>

        <div class="form-group">
            <label for="txtapellido">Apellido:</label>
            <input type="text" class="form-control" name="txtapellido" id="txtapellido"
                placeholder="Apellido del Empleado">
        </div>

        <div class="form-group">
            <label for="txtdireccion">Direccion:</label>
            <input type="text" class="form-control" name="txtdireccion" id="txtdireccion"
                placeholder="Direccion del Empleado">
        </div>

        <div class="form-group">
            <label for="txtgenero">Genero</label>
            <div class="form-check form-check-inline">
                <label class="form-check-label">

                    <input type="radio" class="form-check-input" name="genero">
                    Mujer
                </label>
                <label class="form-check-label">

                    <input type="radio" class="form-check-input" name="genero">
                    Hombre
                </label>
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="button" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                <button type="button" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                <button type="button" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
            </div>

    </form>

</div>

<?php/*
<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
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
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" 
                        <?php 
                        if($datos[$i]["activo"]){
                            echo "checked";
                        }
                        ?>
                        >
                        <label class="form-check-label" for="gridCheck">
                            Activo
                        </label>
                    </div>
                </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

<br>
<br>


<?php include('../template/footer.php'); ?>