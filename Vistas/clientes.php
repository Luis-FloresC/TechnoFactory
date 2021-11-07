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
require_once '../template/header.php';
?>

<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema de Ventas <small>Clientes</small></h1>        
    </div>
</div>



<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h4 class="text-center">Datos del Cliente</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <form method="post" name="form_new_cliente_Cliente" id="form_new_cliente_Cliente">
                        <div class="row">
                        <div class="col-lg-4">
                            <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label>Dni</label>
                                    <input type="text" name="dni_cliente" id="dni_cliente" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nom_cliente" id="nom_cliente" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" name="ape_cliente" id="ape_cliente" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Genero</label>
                                    <select name="gen_cliente" id="gen_cliente" class="form-control">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
       
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" name="fechnac_cliente" id="fechnac_cliente" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select name="estado" id="estado" class="form-control">
                                        <option value="1">Habilitado</option>
                                        <option value="2">Inhabilitado</option>
                                    </select>
       
                                </div>
                            </div>
                            <p class="text-center">
                            <button type="reset" class="btn btn-success"><i class="zmdi zmdi-delete"></i> Limpiar</button>
                            <a href="#" class="btn btn-primary" id="btn_crear_cliente1"><i class="zmdi zmdi-face"></i> Guardar Cliente</a>
                            <a href="#" class="btn btn-warning" id="btn_Editar_cliente1"><i class="zmdi zmdi-face"></i> Editar Cliente</a> 
                            </p>
                               
                        </div>
                    </form>
                </div>

                <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                           <th>#&nbsp;&nbsp;&nbsp;</th>
                           <th>DNI &nbsp;&nbsp;&nbsp;</th>
                           <th>Nombre del Cliente</th>
                           <th>Edad&nbsp;&nbsp;&nbsp;</th>
                           <th>Genero&nbsp;&nbsp;&nbsp;</th>
                           <th>Estado&nbsp;&nbsp;&nbsp;</th>
                           <th>Acciones&nbsp;&nbsp;&nbsp;</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php
require '../template/footer.php';
?>   
</div>

 <!-- Begin Page Content -->


<script type="text/javascript" src="scripts/clientes.js"></script>

<?php 
}
ob_end_flush();
?>
