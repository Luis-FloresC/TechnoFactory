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

?>

<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema de Ventas <small>Categorias</small></h1>
    </div>
</div>
<div class="container-fluid">
    <!-- Main content -->

    <form id="frmRegistrar" name="frmRegistrar" method="post">
        <input type="hidden" value="0" name="id" id="id">
        <br><br>
        <div class="row form-group">
            <label for="dni" class="col-form-label col-md-2">Categoria</label>
            <div class="col-md-8">
                <input type="text" name="cat" value="" id="cat" class="form-control"
                    placeholder="Escriba la descripcion de la categoria">
            </div>
        </div>
        <br>
        <p class="text-center">
            <button type="reset" class="btn btn-success" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                &nbsp;&nbsp; Limpiar</button>
            <button type="submit" name="btnAccion" id="btnAccion" value="guardar" class="btn btn-primary"><i
                    class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button> &nbsp;&nbsp; &nbsp;&nbsp;
            <button type="submit" name="btnAccion" id="btnAccion" value="Modificar" class="btn btn-warning"><i
                    class="zmdi zmdi-edit"></i> &nbsp;&nbsp; Modificar</button>
        </p>


    </form>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">

                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>#&nbsp;&nbsp;&nbsp;</th>
                                <th>Categoria&nbsp;</th>
                                <th>Estado</th>
                                <th>Acciones</th>


                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->

<?php
require '../template/footer.php';
?>
<script type="text/javascript" src="scripts/categoria.js"></script>
<?php 
}
ob_end_flush();
?>