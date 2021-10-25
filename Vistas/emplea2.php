<?php include('../template/header.php'); ?>


<?php  
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtapellido=(isset($_POST['txtapellido']))?$_POST['txtapellido']:"";
$txtdireccion=(isset($_POST['txtdireccion']))?$_POST['txtdireccion']:"";
$txtgenero=(isset($_POST['txtIgenero']))?$_POST['txtgenero']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";



switch($accion){

     case "Agregar";
      echo "Presionado boton agregar";
       break;

       case "Modificar";
       echo "Presionado boton Modificar";
        break;
        
        case "Cancelar";
      echo "Presionado boton Cancelar";
       break;
}
 





?>



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


<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>txtnombre</td>
                <td>txtapellido</td>
                <td>barrio</td>
                <td>seleccionar / borrar </td>
            </tr>
        </tbody>
    </table>


</div>


<br>
<br>


<?php include('../template/footer.php'); ?>