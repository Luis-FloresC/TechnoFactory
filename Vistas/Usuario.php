<?php
ob_start();
session_start();
//Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
//nombre indica que el usuario ha iniciado sesión
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../index.php");
}

else
{
require '../template/header.php';
$AllCargos = $con->prepare("SELECT idCargo as id,descripcionCargo as cargo FROM bd_techno_factory.Cargos;");
$AllCargos->execute();
$listaCargos = $AllCargos->fetchAll(PDO::FETCH_ASSOC);

$AllEmpleados = $con->prepare("select idEmpleado as id, concat(nombreEmpleado,' ',apellidoEmpleado) as nombre from Empleados;");
$AllEmpleados->execute();
$listaEmpleados = $AllEmpleados->fetchAll(PDO::FETCH_ASSOC);

//print_r($_POST);
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
     
      <div class="container-fluid" style="margin: 50px 0;">        
        <!-- Main content -->
  
            <div class="page-header">
                <h1 class="all-tittles">Sistema de Ventas <small>Usuarios</small></h1>        
            </div>
        </div>

       
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../Public/assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevo personal administrativo. Para registrar el personal administrativo debes de llenar todos los campos del siguiente formulario.
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <div class="form">
                <h1 class="title-flat-form title-flat-blue">Registrar nuevo personal administrativo</h1>
                <form autocomplete="off" id="frmRegistrar" name="frmRegistrar" method="post">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" name="txtUser" id="txtUser" class="material-control tooltips-general" placeholder="Escribe aquí el nombre de usuario del empleado" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Solamente se permiten letras">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de Usuario</label>
                            </div>
                            <div class="group-material">
                                <input type="password" name="txtContra" id="txtContra" class="material-control tooltips-general" placeholder="Escribe aquí la contraseña"  required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la contraseña del empleado, la contraseña debe tener al menos 8 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                            <div class="group-material">
                                <input type="text" name="txtEmail" id="txtEmail"  class="material-control tooltips-general" placeholder="Escribe aquí su correo electronico" required="" maxlength="50" data-toggle="tooltip" data-placement="top" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo Electronico</label>
                            </div>
                            <div class="group-material"> 
                            <span>Empleado</span>
                                <select  name="txtEmpleado" id="txtEmpleado" class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="selecciona un empleado"> 
                                
                                <?php
                                    
                                    foreach($listaEmpleados as $var) {
                                        echo '<option value="'.$var['id'].'">'.$var['nombre'].'</option>';
                                    }
                                ?>
 
                                </select>
                               
                            </div>
                            <div class="group-material"> 
                            <span>Cargo</span>
                                <select  name="txtCargo" id="txtCargo" class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el cargo del empleado"> 
                                
                                <?php
                                    
                                    foreach($listaCargos as $var) {
                                        echo '<option value="'.$var['id'].'">'.$var['cargo'].'</option>';
                                    }
                                ?>
 
                                </select>
                               
                            </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                        </div>
                    </div>
                </form>
        </div>
      </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php
require '../template/footer.php';
?>
<script type="text/javascript" src="scripts/user.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siPrestamos').addClass("active");
</script>