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
        <h1 class="all-tittles">Sistema de Clientes <small>Ingreso de Cliente</small></h1>        
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
                                    <input type="text" name="gen_cliente" id="gen_cliente" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" name="fechnac_cliente" id="fechnac_cliente" class="form-control" >
                                </div>
                            </div>
                                <a href="#" class="btn btn-primary" id="btn_crear_cliente1"><i class="zmdi zmdi-face"></i>  Crear Cliente</a>
                        </div>
                    </form>
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


<script type="text/javascript" src="scripts/Clientes.js"></script>

<?php 
}
ob_end_flush();
?>
